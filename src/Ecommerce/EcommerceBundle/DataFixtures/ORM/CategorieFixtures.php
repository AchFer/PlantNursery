<?php
/**
 * Created by PhpStorm.
 * User: amineh
 * Date: 11/21/2017
 * Time: 11:58 PM
 */

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categorie;

class CategorieFixtures extends AbstractFixture implements  OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $c1=new Categorie();
        $c1->setImage($this->getReference('media1'));
        $c1->setNom('plante');
        $manager->persist($c1);

        $c2=new Categorie();
        $c2->setImage($this->getReference('media2'));
        $c2->setNom('plus des produits');
        $manager->persist($c2);


        $this->addReference('cat1', $c1);
        $this->addReference('cat2', $c2);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
      return 2;
    }
}