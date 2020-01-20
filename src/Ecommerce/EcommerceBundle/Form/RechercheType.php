<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 03/12/2018
 * Time: 16:56
 */
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche',TextType::class,array('attr'=>array('class'=>'input-medium search-query')));

     //   ->add('submit',SubmitType::class,array('attr'=>array('class'=>'input-medium search-query','label'=>false)));
            //  ->add('recherche', TextType::class, array('attr'=>array('class'=>'input-medium search-query')))

        ;
    }



    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ecommerce_ecommercebundle_test';
    }


}
