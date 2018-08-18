<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\rechercheType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function produitsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AppBundle:produits')->findAll();

        return $this->render('produits/layout/produits.html.twig', array('produits' =>$produits));
    }

    /**
     * @Route("/produit/{id}", name="presentation")
     */
    public function presentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('AppBundle:produits')->find($id);

        return $this->render('produits/layout/presentation.html.twig', array('produit' =>$produit));
    }

    /**
     *
     */
    public function categorieAction($categorie)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AppBundle:produits')->byCategorie($categorie);

        return $this->render('produits/layout/produits.html.twig', array('produits' =>$produits));
    }


    /**
     * @Route("/recherche")
     */
    public function rechercheAction()
    {
        $form = $this->createFormBuilder()->add('recherche')->getForm();
        return $this->render('produits/layout/recherche.html.twig', array('form' => $form->createView()));
    }


    public function rechercheTraitementAction($recherche)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('AppBundle:produits')->recherche($recherche);

        return $this->render('produits/layout/presentation.html.twig', array('produit' =>$produit));
    }
}
