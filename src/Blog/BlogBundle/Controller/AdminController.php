<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 22/08/2018
 * Time: 14:51
 */

namespace Blog\BlogBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AdminController
 * @package Blog\BlogBundlee\Controller
 * @Route("/admin")
 */
class AdminController extends Controller
{

    /**
     * @Route("")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:admin.html.twig', []);

    }



}