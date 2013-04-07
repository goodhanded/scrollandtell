<?php

namespace HackBlue\ScrollAndTellBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }
}
