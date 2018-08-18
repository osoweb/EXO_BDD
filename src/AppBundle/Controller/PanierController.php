<?php
/**
 * Created by PhpStorm.
 * User: Sow
 * Date: 15/08/2018
 * Time: 19:04
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class PanierController extends Controller
{
    /**
     * @Route("/panier", name="panier")
     */
    public function panierAction(Request $request)
    {

        return $this->render('panier/layout/panier.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/livraison", name="livraison")
     */
    public function livraisonAction(Request $request)
    {

        return $this->render('panier/layout/livraison.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/validation", name="validation")
     */
    public function valideAction(Request $request)
    {

        return $this->render('panier/layout/validation.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
