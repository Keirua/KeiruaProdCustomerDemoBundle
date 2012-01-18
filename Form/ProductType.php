<?php

namespace KeiruaProd\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'text', array ('label' => 'Nom du produit', 'max_length' => 255));
    }

    public function getName()
    {
        return 'keiruaprod_applicationbundle_producttype';
    }
    
    public function getDefaultOptions(array $options){
        return array('data_class' => 'KeiruaProd\ApplicationBundle\Entity\Product');
    }
}