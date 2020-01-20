<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('description')
            ->add('prix')
            ->add('disponible')
            ->add('tva',EntityType::class, array(  'class' => 'EcommerceEcommerceBundle:TVA', 'choice_label' => 'valeur'))
            ->add('categorie' ,EntityType::class, array(  'class' => 'EcommerceEcommerceBundle:Categorie', 'choice_label' => 'nom'))
            ->add('image', MediaType::class, array(
                'data_class' => 'Ecommerce\EcommerceBundle\Entity\Media',

            )) ;//->add('create',SubmitType::class)'data_class' => 'Ecommerce\EcommerceBundle\Entity\Media',
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\Produits'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecommerce_ecommercebundle_produits';
    }


}
