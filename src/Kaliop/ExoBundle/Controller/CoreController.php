<?php

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CoreController extends Controller
{
    // ------------------------------------------------- ACTIONS -------------------------------------------------------
    public function indexAction($page)
    {
        // La page doit être sumpérieur ou égale à 1
        if ($page < 1)
        {
            // Exception qui déclenche une erreur 404
            // throw new NotFoundHttpException("La page que vous demandez n'existe pas !");
            $page = 1;
        }

        // Je simule une DB
        $listArticles = array(
            array(
                "id" => 0,
                "title" => "Voyage au coeur de la Moria",
                "author" => "Gimli",
                "date" => new \Datetime()
            ),
            array(
                "id" => 1,
                "title" => "Mon ami Gandalf",
                "author" => "Frodon",
                "date" => new \Datetime()
            ),
            array(
                "id" => 2,
                "title" => "Le désespoir du Rohan",
                "author" => "Aragorn",
                "date" => new \Datetime()
            )
        );

        // Je récupère la liste des articles, puis je la passe au template
        return $this->render("KaliopExoBundle:Core:index.html.twig", array("listArticles" => $listArticles));
    }

    public function viewAction($id)
    {
        // Je simule une itération sur une DB
        $article = array(
            "id" => $id,
            "title" => "Voyage au coeur de la Moria",
            "author" => "Gimli",
            "date" => new \Datetime(),
            "content" => "La Moria est une ville souterraine du légendaire de l'écrivain britannique J. R. R. Tolkien, 
                apparaissant notamment dans Le Seigneur des anneaux, et plus particulièrement dans La Fraternité de l'anneau. 
                Les ruines de cette ancienne cité naine de la Terre du Milieu, située sous la chaîne des Montagnes de Brume, 
                sont traversées par les membres de la Fraternité de l'Anneau qui cherchent à franchir les montagnes.
                Fondée dans un lointain passé par Durin, l'un des Sept Pères de la race naine, la Moria est pendant des millénaires 
                une cité florissante grâce à la présence d'une veine de mithril, métal précieux entre tous, dans ses profondeurs. 
                Au Deuxième Âge, elle entretient des relations fructueuses avec les Elfes du royaume voisin d'Eregion. 
                La cupidité des Nains les pousse à creuser toujours plus profondément sous les montagnes, et, au milieu du Troisième Âge, 
                ils réveillent accidentellement un Balrog, puissante créature démoniaque qui les contraint à abandonner la cité. 
                Par la suite, Sauron, le Seigneur Sombre, repeuple les ruines de la Moria avec ses Orques."
        );

        // Je récupère l'annonce correspondante à $id
        return $this->render("KaliopExoBundle:Core:view.html.twig", array("article" => $article));
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
        return $this->render("KaliopExoBundle:Core:add.html.twig", array(
            "article" => array("id" => 0, "title" => "Voyage au coeur de la Moria"))
        );
    }

    public function editAction($id, Request $request)
    {
        // Je récupère l'article correspondant à $id
        if ($request->isMethod("POST"))
        {
            $request->getSession()->getFlashBag()->add("notice", "Annonce bien modifiée.");
            return $this->redirectToRoute("kaliop_exo_view_article", array("id" => 5));
        }

        return $this->render("KaliopExoBundle:Core:edit.html.twig", array(
            "article" => array("id" => 0, "title" => "Voyage au coeur de la Moria"))
        );
    }

    public function menuAction($limit)
    {
        // Je simule une DB
        $listArticles = array(
            array(
                "id" => 0,
                "title" => "Voyage au coeur de la Moria"
            ),
            array(
                "id" => 1,
                "title" => "Mon ami Gandalf"
            ),
            array(
                "id" => 2,
                "title" => "Le désespoir du Rohan"
            )
        );

        // Je récupère les articles et les envoie à la vue menu
        return $this->render("KaliopExoBundle:Core:menu.html.twig", array("listArticles" => $listArticles));
    }

    // -------------------------------------------------- OTHERS -------------------------------------------------------
    public function deleteArticle()
    {

    }
}