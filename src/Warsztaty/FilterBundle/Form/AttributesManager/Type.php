<?php

namespace Warsztaty\FilterBundle\Form\AttributesManager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'attributesmanager_type';
    }
}