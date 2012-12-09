<?php

namespace main\dataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('maindataBundle:Default:index.html.twig', array('name' => $name));
    }
}
