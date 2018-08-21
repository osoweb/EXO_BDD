<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/author")
 */
class AuthorController extends Controller
{

    /**
     * @param $name
     */
    public function indexAction($name)
    {

    }

    /**
     * @Route("/new")
     * @Route("/update/{id}", name="update")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addEditArticleAction(Request $request, Article $articles = null)
    {
        if($articles == null) {
            $articles = new Article();
            $author = $this->getDoctrine()
                ->getRepository("AppBundle:Author")
                ->findOneByEmail("user1@mail.com");

            $articles->setAuthor($author);
        }
        $form = $this->createForm(ArticleType::class, $articles);
        $form->handleRequest($request);

        if($form->isSubmitted() and $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($articles);
            $em->flush();

            return $this->redirectToRoute("app_article_index");
        }
        return $this->render('Article/new.html.twig', array('form' => $form->createView()));

    }
}
