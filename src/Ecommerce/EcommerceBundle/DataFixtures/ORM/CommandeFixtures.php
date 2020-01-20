<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/22/2017
 * Time: 2:09 AM
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Commande;

class CommandeFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $commande1 = new Commande();
        $commande1->setUsers($this->getReference('user2'));
        $commande1->setValider('1');
        $commande1->setDate(new \DateTime());
        $commande1->setReference('1');
        $commande1->setProduits(array('0' => array('1' => '2'),
            '1' => array('2' => '1'),
            '2' => array('4' => '5')
        ));
        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setUsers($this->getReference('user1'));
        $commande2->setValider('1');
        $commande2->setDate(new \DateTime());
        $commande2->setReference('2');
        $commande2->setProduits(array('0' => array('1' => '2'),
            '1' => array('2' => '1'),
            '2' => array('4' => '5')
        ));
        $manager->persist($commande2);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
       return 7;
    }
}