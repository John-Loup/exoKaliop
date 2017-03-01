<?php

/*
 *  Hello World !
 */

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render("KaliopExoBundle:Home:index.html.twig", array("hello" => "Hell ", "world" => "Yeah "));
    }
}