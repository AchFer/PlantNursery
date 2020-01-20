<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/22/2017
 * Time: 12:32 AM
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Utilisateur\UtilisateurBundle\Entity\Utilisateur;

class UtilisateurFixtures extends  AbstractFixture implements OrderedFixtureInterface,ContainerAwareInterface,FixtureInterface
{
private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container=$container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {


        $encoder = $this->container->get('security.password_encoder');


        $user1 = new Utilisateur();
        $password = $encoder->encodePassword($user1, '123');

        $user1->setUsername('amine');
        $user1->setEmail('amine.hmadi@gmail.com');
        $user1->setEnabled(1);
        $user1->setPassword($password);
        $manager->persist($user1);

        $user2 = new Utilisateur();
        $password2 = $encoder->encodePassword($user2, '123');
        $user2->setUsername('mahdi');
        $user2->setEmail('mahdi@gmail.com');
        $user2->setEnabled(1);
        $user2->setPassword($password2);
        $user2->setRoles(array('ROLE_ADMIN'));
        $manager->persist($user2);

        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);

$manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
      return 5;
    }



}


