<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

class ProduitFixtures extends AbstractFixture implements  OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $p1=new Produits();
        $p1->setNom('produit1');
        $p1->setDisponible(true);
        $p1->setPrix('100');
        $p1->setDescription('c est un produit1 ');
        $p1->setImage($this->getReference('media1'));
        $p1->setTva($this->getReference('tva1'));
        $p1->setCategorie($this->getReference('cat1'));
        $manager->persist($p1);

        $p2=new Produits();
        $p2->setNom('produit2');
        $p2->setDisponible(false);
        $p2->setPrix('200');
        $p2->setDescription('c est un produit1 ');
        $p2->setImage($this->getReference('media2'));
        $p2->setTva($this->getReference('tva2'));
        $p2->setCategorie($this->getReference('cat2'));
        $manager->persist($p2);


        $p3=new Produits();
        $p3->setNom('proteine');
        $p3->setDisponible(true);
        $p3->setPrix('200');
        $p3->setDescription('c est un produit3 ');
        $p3->setImage($this->getReference('media4'));
        $p3->setTva($this->getReference('tva2'));
        $p3->setCategorie($this->getReference('cat2'));
        $manager->persist($p3);

        $p4=new Produits();
        $p4->setNom('box');
        $p4->setDisponible(true);
        $p4->setPrix('200');
        $p4->setDescription('c est un produit3 ');
        $p4->setImage($this->getReference('media3'));
        $p4->setTva($this->getReference('tva2'));
        $p4->setCategorie($this->getReference('cat2'));
        $manager->persist($p4);




        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 4;
    }
}