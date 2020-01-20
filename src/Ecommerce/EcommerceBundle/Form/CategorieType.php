<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/19/2017
 * Time: 2:24 PM
 */

namespace Ecommerce\EcommerceBundle\Form;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class CategorieType  extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class);






    }
}