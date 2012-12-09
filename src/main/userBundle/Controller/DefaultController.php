<?php

namespace main\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function profileAction( $username )
    {
        return $this->render('mainuserBundle:Main:profile.html.twig', array('username' => $username));
    }
}
