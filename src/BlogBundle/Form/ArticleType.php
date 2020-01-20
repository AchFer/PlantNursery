<?php

namespace BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', null,array('label' => ' Title :  ','label_attr'=>['class'=>'text-uppercase mr-12'],'attr' => array('style' => 'width: 450px')))
                ->add('category', ChoiceType::class, array('label' => ' Category :','label_attr'=>['class'=>'text-uppercase mr-12'],'attr' => array('style' => 'width: 413px'),
        'choices'  => [
            'Garden Care' => 'Garden Care',
            'Garden Tech' => 'Garden Tech',
            'Plants' => 'Plants',
            'Houseplants' => 'Houseplants',
            'Seeds & Bulbs' => 'Seeds & Bulbs',
            'Trees & Shrubs' => 'Trees & Shrubs',
            'DIY' => 'DIY',
            'Uncategorized' => 'Uncategorized',

        ]
                )    )

                ->add('content',null,array('label' => ' ','attr' => array('class' => 'ckeditor')))
                ->add('image', FileType::class,array('label'=>' ','data_class'=>null, 'attr' => ['class' => 'md-round d-block']));


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'blogbundle_article';
    }


}
