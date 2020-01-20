<?php

namespace PlantBundle\Form;
use PlantBundle\Repository\UserplantRepository;
use PlantBundle\Entity\Userplant;
use PlantBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PlantmaintainingType extends AbstractType
{

/*    private $userplantRepository;
    private $user;

    public function __construct(UserplantRepository $userplantRepository, TokenStorageInterface $tokenStorage)
    {
        $this->user = $tokenStorage->getToken()->getUser();
        $this->userplantRepository = $userplantRepository;
    }
*/
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date', DateType::class, [
            'widget' => 'single_text'
        ])
            ->add('soiltype', ChoiceType::class, [
                'choices' => [
                    'sandy soil' => 'sandy soil',
                    'clay soil' => 'clay soil',
                ]
            ])
            ->add('watered')
            ->add('humidity')
            ->add('temperature')
            ->add('luminosity')
            ->add('height')
            ->add('photo', FileType::class,array(
                'label'=>'image',
                'data_class'=>null,
                )
            )
            /*->add('userplant',EntityType::class,[
                'class'=>Userplant::class,
                'placeholder' => 'Choose your plant',
                'query_builder' => function (UserplantRepository $userplantRepository) use ($user){
                return $userplantRepository->findMyPlants($user);
                },
                'choice_label'=>'name',
                'multiple'=>false])
            */
        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlantBundle\Entity\Plantmaintaining'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'plantbundle_plantmaintaining';
    }


}
