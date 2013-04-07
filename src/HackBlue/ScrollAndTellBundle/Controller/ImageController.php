<?php

namespace HackBlue\ScrollAndTellBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImageController extends Controller
{
    public function createAction($sceneId, $width, $height, $url)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function resizeAction($imageId, $scale = 100)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function moveAction($imageId, $x, $y)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function frontAction($imageId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }


    public function backAction($imageId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }


    public function deleteAction($imageId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }


    public function scaleAction($imageId, $sceneStart = 0, $sceneEnd, $scaleStart = 100, $scaleEnd = 100)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }


    public function rotateAction($imageId, $sceneStart = 0, $sceneEnd, $angle = 0)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }


    public function translateAction($imageId, $sceneStart = 0, $sceneEnd, $x1, $y1, $x2, $y2)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function opacitateAction($imageId, $sceneStart = 0, $sceneEnd, $opacityStart = 100, $opacityEnd = 100)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }
}
