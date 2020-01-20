<?php

namespace PlantBundle\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PlantType extends AbstractType
{
    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('plantname')
            ->add('binomialname')
            ->add('clade1')
            ->add('clade2')
            ->add('clade3')
            ->add('plantorder')
            ->add('family')
            ->add('subfamily')
            ->add('tribe')
            ->add('genus')
            ->add('species')
            ->add('wateringsandysoil')
            ->add('frequencywateringsandysoil')
            ->add('periodofwateringsandysoil', ChoiceType::class, [
                'choices' => [
                    'day(s)' => 'day(s)',
                    'week(s)' => 'week(s)',
                    'month(s)' => 'month(s)',
                ]
            ])
            ->add('wateringclaysoil')
            ->add('frequencywateringclaysoil')
            ->add('periodofwateringclaysoil', ChoiceType::class, [
                'choices' => [
                    'day(s)' => 'day(s)',
                    'week(s)' => 'week(s)',
                    'month(s)' => 'month(s)',
                ]
            ])
            ->add('photo', FileType::class,array(
                    'label'=>'image',
                    'data_class'=>null,
                )
            )
            ->add('description', CKEditorType::class,[
                    'config' =>[
                        'uiColor'=>"#e2e2e2",
                        'toolbar'=>"full",
                        'required'=>true
                    ]
                ]
            );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlantBundle\Entity\Plant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'plantbundle_plant';
    }


}
