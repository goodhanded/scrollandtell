<?php

namespace HackBlue\ScrollAndTell\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilder;

class StoryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text');
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'HackBlue\ScrollAndTellBundle\Document\Story');
    }

    public function getName()
    {
        return 'story';
    }
}
