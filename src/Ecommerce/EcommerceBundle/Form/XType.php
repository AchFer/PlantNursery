<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/19/2017
 * Time: 2:24 PM
 */

namespace Ecommerce\EcommerceBundle\Form;
use Ecommerce\EcommerceBundle\Categorie;
use Ecommerce\EcommerceBundle\EcommerceEcommerceBundle;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Repository\ProduitsRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Tests\Extension\Core\Type\DateTypeTest;
use Symfony\Component\OptionsResolver\OptionsResolver;


class XType  extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('recherche', TextType::class, array('attr'=>array('class'=>'input-medium search-query')));
       /* $builder->add('email', EmailType::class, array('required' => true))
            ->add('nom', TextType::class)
            ->add('sex', ChoiceType::class, array(
                'choices' => array('Main1'=>array( 'amine'=>'0' ,
                    'mahdi' => '1',
                    'basem' => '2'),'Main2'=>array('Bargou'=>'3')),'expanded'=>false,'multiple'=>false,'preferred_choices'=>array('2','1')))
        ->add('date',DateType::class,array('widget'=>'single_text'))
            ->add('pays',CountryType::class)

            ->add('categories' , EntityType::class ,array(
                'class'=>'EcommerceEcommerceBundle:Produits',
                'choice_label'=>'nom'))
        ->add('submit',SubmitType::class)
        ;*/




    }



}