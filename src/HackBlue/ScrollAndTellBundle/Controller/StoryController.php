<?php

namespace HackBlue\ScrollAndTellBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use HackBlue\ScrollAndTellBundle\Document\Story;
use HackBlue\ScrollAndTellBundle\Form\Type\StoryType;


class StoryController extends Controller
{
    public function createAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $form = $this->createForm(new StoryType(), new Story());
        $form->bindRequest($this->getRequest());

        $story = $form->getStory();

        $dm->persist($story);
        $dm->flush();

        return $this->redirect($this->generateUrl('start'));
            
    }

    public function editAction($storyId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function previewAction($storyId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    public function publishAction($storyId)
    {
        return $this->render('HackBlueScrollAndTellBundle:Default:index.html.twig', array('name' => $name));
    }

    private function getErrorMessages(\Symfony\Component\Form\Form $form) {      
        $errors = array();

        if ($form->hasChildren()) {
            foreach ($form->getChildren() as $child) {
                if (!$child->isValid()) {
                    $errors[$child->getName()] = $this->getErrorMessages($child);
                }
            }
        } else {
            foreach ($form->getErrors() as $key => $error) {
                $errors[] = $error->getMessage();
            }   
        }

        return $errors;
    }

}
