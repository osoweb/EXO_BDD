<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 15/08/2018
 * Time: 19:04
 */
namespace AppBundle\Controller;

use AppBundle\Entity\user;
use AppBundle\Entity\userAdress;
use AppBundle\Form\userAdressType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpFoundation\RedirectResponse;
class PanierController extends Controller
{
    /**
     * @Route("/panier", name="panier")
     */
    public function panierAction(Request $request)
    {
        //$session = new Session(new NativeSessionStorage(), new AttributeBag());
        $session = $this->get('session');
        //$session->clear();$session->get('qte')
        if (!$session->has('panier')) $session->set('panier', array());
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AppBundle:produits')->findArray(array_keys($session->get('panier')));
       // var_dump($session->get('panier'));
        //var_dump($request->query->get('qte'));

        //die();
        return $this->render('panier/layout/panier.html.twig', array('produits' => $produits,
                                                                           'panier' => $session->get('panier')));
    }

    public function menuAction()
    {
        $session = $this->get('session');
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('panier/layout/module_inc/panier.html.twig', array('articles' => $articles));
    }

    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:UserAdress')->find($id);

        if (!isset($entity))
            return $this->redirect ($this->generateUrl ('livraison'));

        $em->remove($entity);
        $em->flush();

        return $this->redirect ($this->generateUrl ('livraison'));
    }


    /**
     * @Route("/livraison", name="livraison")
     */
    public function livraisonAction(Request $request)
    {
        $user = $this->getUser();
        //$user = new user();$this->container->get('securityContext')->getToken()->getUser();
        $entity = new userAdress();
        $form = $this->createForm(userAdressType::class, $entity);


       /* */if (isset($_POST))
        {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUser($user);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('livraison'));
            }
        }

        return $this->render('panier/layout/livraison.html.twig', array('user' => $user, 'form' => $form->createView()));
    }

    public function setLivraisonOnSession (Request $request)
    {
        $session = $this->get('session');

        if(!$session->has('adresse'))  $session->set('adresse', array());
        $adresse = $session->get('adresse');

        if ($_POST['livraison'] != null && $_POST['facturation'] != null)
        {
            $adresse['livraison'] = $_POST['livraison'] ;
            $adresse['facturation'] = $_POST['facturation'];
        } else {
            return $this->redirect($this->generateUrl('validation'));
        }

        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('validation'));
    }

    /**
     * @Route("/validation", name="validation")
     */
    public function valideAction(Request $request)
    {
        if (isset($_POST))
            $this->setLivraisonOnSession($request);

        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $adresse = $this->get('session')->get('adresse');

        $produits = $em->getRepository('AppBundle:produits')->findArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository('AppBundle:userAdress')->find($adresse['livraison']);
        $facturation = $em->getRepository('AppBundle:userAdress')->find($adresse['facturation']);

        return $this->render('panier/layout/validation.html.twig',  array('produits' => $produits,
            'livraison' => $livraison,
            'facturation' => $facturation,
            'panier' => $session->get('panier')));
    }

    public function supprimerAction($id)
    {
        $session = $this->get('session');
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->addFlash('success','Article supprimé avec succès');
        }

        return $this->redirect($this->generateUrl('panier'));
    }

    public function ajouterAction(Request $request,$id)
    {
        // $session = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        if (!$session->has('panier'))
            $session->set('panier',array());
            $panier = $session->get('panier');
        $qte = $request->query->get('qte', 1);


        if (array_key_exists($id, $panier)) {
            if ($qte != null) $panier[$id] =  $request->query->get('qte');
            $this->addFlash('success','Quantité modifié avec succès');
        } else {
            if ($qte != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;

            $this->addFlash('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);


        return $this->redirect($this->generateUrl('panier'));
    }
}
