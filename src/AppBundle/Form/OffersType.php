<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('campId')
            ->add('product')
            ->add('typeId')
            ->add('name')
            ->add('image')
            ->add('finalPrice')
            ->add('dollars')
            ->add('percentage')
            ->add('points')
            ->add('redeemars')
            ->add('cost')
            ->add('grossMargin')
            ->add('markup')
            ->add('scan')
            ->add('date')
            ->add('active')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Offers'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_offers';
    }
}
