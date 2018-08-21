<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ArticleController
 * @package Blog\BlogBundle\Controller
 * @Route("/article")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/list")
     */
    public function indexAction()
    {
        $articles = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->findAll();
        return $this->render('Article/index.html.twig', ['articles' => $articles]);
    }





    /**
     * @Route("/show/{id}")
     */
    public function detailsAction(Article $article, Request $request)
    {
        //Instanciation d' une entité commentaire
        $comment = new Comment();
        //Liaison entre le commentaire et l'article
        $comment->setArticle($article);
        //Création du formulaire
        $form = $this->createForm(CommentType::class, $comment);
        //Hydratation du formulaire
        $form->handleRequest($request);

        //Traitement
        if($form->isSubmitted() and $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute("app_article_details", ["id"=>$article->getId()]);
        }

        return $this->render('Article/details.html.twig', [
            'article'=>$article,
            'commentForm'=>$form->createView()
        ]);
    }

}
