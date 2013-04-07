<?php

namespace HackBlue\ScrollAndTellBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SceneController extends Controller
{
    public function createAction($storyId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function deleteAction($sceneId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function reorderAction($sceneId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

}
