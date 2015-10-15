<?php
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class RechercheType
 * @package Ecommerce\EcommerceBundle\Form
 */
class RechercheType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche', 'text', array('label' => false, 'attr' => array('class' => 'input-medium search-query')));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecommerce_ecommercebundle_recherche';

    }
}