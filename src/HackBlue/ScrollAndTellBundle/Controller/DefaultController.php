<?php

namespace HackBlue\ScrollAndTellBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HackBlue\ScrollAndTellBundle\Document\Story;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function startAction()
    {
    	$story = new Story();
        $story->setName('My New Scrollorama');

        $form = $this->createFormBuilder($story)
            ->add('name', 'text')
            ->getForm();

        return $this->render('HackBlueScrollAndTellBundle:Story:start.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
