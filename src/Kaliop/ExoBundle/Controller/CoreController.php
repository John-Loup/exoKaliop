<?php

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Kaliop\ExoBundle\Entity\Article;
use Kaliop\ExoBundle\Form\ArticleType;

class CoreController extends Controller
{
    // ------------------------------------------------- ACTIONS -------------------------------------------------------

    public function indexAction($page) // Action de la Homepage / liste des articles
    {
        if ($page < 1) // A modifier pour la pagination
        {
            // throw new NotFoundHttpException("La page que vous demandez n'existe pas !");
            $page = 1;
        }

        if (!is_numeric($page))
        {
            // throw new NotFoundHttpException("La page que vous demandez n'existe pas !");
            $page = 1;
        }

        $listArticles = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("KaliopExoBundle:Article")
            ->findAll()
        ;

        return $this->render(
            "KaliopExoBundle:Core:index.html.twig",
            array("listArticles" => $listArticles)
        );
    }



    public function viewAction($id) // Action pour voir un article
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("KaliopExoBundle:Article");

        $article = $repository->find($id);

        $em->persist($article);
        $em->flush();

        if ($article === null)
        {
            throw new NotFoundHttpException("L'article {$id} n'éxiste pas.");
        }

        return $this->render(
            "KaliopExoBundle:Core:view.html.twig",
            array("article" => $article)
        );
    }



    public function addAction(Request $request) // Action pour ajouter un article
    {
        $article = new Article();
        $form = $this->createForm(new ArticleType(), $article);

        if ($form->handleRequest($request)->isValid() && $request->isMethod("POST"))
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirect(
                $this->generateUrl(
                    "kaliop_exo_view",
                    array("id" => $article->getId())
                )
            );
        }

        return $this->render(
            "KaliopExoBundle:Core:add.html.twig",
            array("form" => $form->createView(), "article" => $article)
        );
    }



    public function editAction($id, Request $request) // // Action pour modifier un article
    {
        $article = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("KaliopExoBundle:Article")
            ->find($id)
        ;
        $form = $this->createForm(new ArticleType(), $article);

        if ($article === null)
        {
            throw new NotFoundHttpException("L'article {$id} n'éxiste pas.");
        }

        if ($form->handleRequest($request)->isValid() && $request->isMethod("POST"))
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirect(
                $this->generateUrl(
                    "kaliop_exo_view",
                    array("id" => $article->getId())
                )
            );
        }

        return $this->render(
            "KaliopExoBundle:Core:edit.html.twig",
            array("form" => $form->createView(), "article" => $article)
        );
    }



    public function deleteAction($id, Request $request) // Action pour supprimer un article
    {
        $article = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("KaliopExoBundle:Article")
            ->find($id)
        ;

        if ($article === null)
        {
            throw new NotFoundHttpException("L'article {$id} n'éxiste pas.");
        }

        // Fomulaire vide pour le CSRF
        $form = $this->get('form.factory')->create();

        if ($form->handleRequest($request)->isValid() && $request->isMethod("POST"))
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            return $this->redirect(
                $this->generateUrl("kaliop_exo_homepage")
            );
        }

        return $this->render(
            "KaliopExoBundle:Core:delete.html.twig",
            array("article" => $article, "form" => $form->createView())
        );
    }
}