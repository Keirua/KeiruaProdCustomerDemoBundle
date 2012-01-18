<?php

namespace KeiruaProd\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name')
                ->add('products', 'collection', array(
					'label' => 'Nom du client',
                    'type' => new ProductType(),
                    'allow_add' => true,
                    'by_reference' => false,
                    ));
    }

    public function getName()
    {
        return 'keiruaprod_applicationbundle_customertype';
    }
    
    public function getDefaultOptions(array $options)
	{
        return array('data_class' => 'KeiruaProd\ApplicationBundle\Entity\Customer');
    }
}