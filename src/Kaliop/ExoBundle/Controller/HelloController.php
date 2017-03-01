<?php

/*
 *  Hello World !
 */

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        return $this->render("KaliopExoBundle:Hello:index.html.twig", array("hello" => "Hell ", "world" => "Yeah "));
    }
}