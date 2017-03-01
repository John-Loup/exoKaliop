<?php

namespace Kaliop\ExoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KaliopExoBundle:Default:index.html.twig');
    }
}
