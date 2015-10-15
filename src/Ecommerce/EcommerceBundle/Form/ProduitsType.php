<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class ProduitsType
 * @package Ecommerce\EcommerceBundle\Form
 */
class ProduitsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', null, array('required' => false))
            ->add('description')
            ->add('prix')
            ->add('disponible')
            ->add('categorie')
            ->add('tva')
            ->add('image', new MediaType());
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ecommerce_ecommercebundle_produits';
    }
}
