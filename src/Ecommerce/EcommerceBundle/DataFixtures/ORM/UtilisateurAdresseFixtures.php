<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/22/2017
 * Time: 1:46 AM
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse;

class UtilisateurAdresseFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
       $adresse1=new UtilisateurAdresse();
        $adresse1->setNom('amine');
        $adresse1->setAdresse('cite ibn kaldoun');
        $adresse1->setPrenom('hmadi');
        $adresse1->setTelephone('70125498');
        $adresse1->setVille('Tunis');
        $adresse1->setUser($this->getReference('user1'));
        $manager->persist($adresse1);


        $adresse2=new UtilisateurAdresse();
        $adresse2->setNom('mahdi');
        $adresse2->setAdresse('cite ibn kaldoun');
        $adresse2->setPrenom('hmadi');
        $adresse2->setTelephone('70125498');
        $adresse2->setVille('Tunis');
        $adresse2->setUser($this->getReference('user2'));
        $manager->persist($adresse2);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
      return 6;
    }
}