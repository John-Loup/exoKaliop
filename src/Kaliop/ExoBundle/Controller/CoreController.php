<?php

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CoreController extends Controller
{
    public function indexAction($page)
    {
        // La page doit être sumpérieur ou égale à 1
        if ($page < 1)
        {
            // Exception qui déclenche une erreur 404
            throw new NotFoundHttpException("La page que vous demandez n'existe pas !");
        }

//        / Ici, on récupérera la liste des annonces, puis on la passera au template
        return $this->render("KaliopExoBundle:Core:index.html.twig", array("hello" => "Hell ", "world" => "Yeah "));
    }

    public function viewAction($id)
    {
        // Ici, on récupérera l'annonce correspondante à l'id
        return $this->render("KaliopExoBundle:Core:articles.html.twig", array("id" => $id));
    }

    public function addAction(Request $request)
    {
        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod("POST"))
        {
            // Ici, on s'occupera de la création et de la gestion du formulaire
            $request->getSession()->getFlashBag()->add("notice", "Article bien enregistré.");

            // Puis on redirige vers la page de visualisation de cettte annonce
            return $this->redirectToRoute("kaliop_exo_view_article", array("id" => 5));
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render("KaliopExoBundle:Core:add.html.twig");
    }

    public function editAction($id, Request $request)
    {
        // Ici, on récupérera l'annonce correspondante à $id
        if ($request->isMethod("POST"))
        {
            $request->getSession()->getFlashBag()->add("notice", "Annonce bien modifiée.");
            return $this->redirectToRoute("kaliop_exo_view_article", array("id" => 5));
        }

        return $this->render("KaliopExoBundle:Core:edit.html.twig");
    }

    public function deleteArticle()
    {

    }
}