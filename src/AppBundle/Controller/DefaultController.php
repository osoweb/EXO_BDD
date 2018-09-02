<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\rechercheType;

class DefaultController extends Controller
{
    /**
     *
     * @Route("/boutique", name="boutique")
     */
    public function produitsAction(Request $request,Categorie $categorie = null)
    {

        //var_dump($categorie);die();
        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();

        if($categorie != null)
            $produits = $em->getRepository('AppBundle:produits')->byCategorie($categorie);
        else
        $produits = $em->getRepository('AppBundle:produits')->findBy(array('disponible' => 1));


        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;


        $pagination  = $this->get('knp_paginator')->paginate(
            $produits,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            6/*nbre d'éléments par page*/);

        return $this->render('produits/layout/produits.html.twig', array('produits' =>$pagination,'panier' =>$panier));
    }

    /**
     * @Route("/produit/{id}", name="presentation")
     */
    public function presentationAction($id)
    {
        $session = $this->get('session');
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('AppBundle:produits')->find($id);

        if(!$produit) throw $this->createNotFoundException("!!!!LA PAGE N'EXISTE PAS");

        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        return $this->render('produits/layout/presentation.html.twig', array('produit' =>$produit,'panier' =>$panier));
    }

    /**
     *@Route("/recette", name="recette")
     *  @Route("/", name="homepage")
     */
    public function recetteAction()
    {

        $em = $this->getDoctrine()->getManager();
        $recette = $em->getRepository('AppBundle:Recette')->findAll();


        return $this->render('default/recette.html.twig', array('recette' =>$recette));
    }

    /**
     *
     *  @Route("/themes", name="themes")
     */
    public function themeAction()
    {

        $em = $this->getDoctrine()->getManager();
        $themes = $em->getRepository('AppBundle:Themes')->findAll();


        return $this->render('default/themes.html.twig', array('themes' =>$themes));
    }

    /**
     *
     *  @Route("/ingredient", name="ingredient")
     */
    public function ingredientAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AppBundle:produits')->findAll();

        $pagination  = $this->get('knp_paginator')->paginate(
            $produits,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            8/*nbre d'éléments par page*/);


        return $this->render('produits/layout/ingredient.html.twig', array('produits' =>$pagination));
    }



    /**
     * @Route("/recherche")
     */
    public function rechercheAction()
    {
        $form = $this->createFormBuilder()->add('recherche')->getForm();
        return $this->render('produits/layout/recherche.html.twig', array('form' => $form->createView()));
    }


    public function rechercheTraitementAction(Request $request)
    {
        $form = $this->createFormBuilder()->add('recherche')->getForm();

        if (isset($_POST)) {

            $form->handleRequest($request);
            //var_dump($data);
            //echo
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('AppBundle:produits')->recherche($form['recherche']->getData());
           //
        } else {
            throw $this->createNotFoundException("La page n'existe pas");
        }
        //die();

        return $this->render('produits/layout/produits.html.twig', array('produits' => $produits));


    }
}
