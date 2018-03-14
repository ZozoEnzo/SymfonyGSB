<?php

namespace GSB\GSB1SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSBGSB1SymfonyBundle:Default:index.html.twig');
    }
}
