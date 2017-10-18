<?php

namespace SGPLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SGPLBundle:Default:index.html.twig');
    }
}
