<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/22/2017
 * Time: 12:05 AM
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\TVA;


class TvaFixtures extends  AbstractFixture implements  OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {
        $tva1 = new TVA();
        $tva1->setMultiplicate('0.98');
        $tva1->setValeur('1.75');
            $tva1->setNom('TVA1 1.75%');
        $manager->persist($tva1);


        $tva2 = new TVA();
        $tva2->setMultiplicate('0.8');
        $tva2->setValeur('20');
        $tva2->setNom('TVA2 20%');
        $manager->persist($tva2);

        $this->addReference('tva1', $tva1);
        $this->addReference('tva2', $tva2);
        $manager->flush();

    }
    public function getOrder()
    {
        return 3;
    }
}
