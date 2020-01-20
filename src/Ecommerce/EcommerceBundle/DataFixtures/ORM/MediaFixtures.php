<?php


namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaFixtures extends AbstractFixture implements  OrderedFixtureInterface,ORMFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $m1 = new Media();
        $m1->setAlt('iamge11');
        $m1->setPath('http://www.pngall.com/wp-content/uploads/2018/04/Fitness-PNG-File.png');
        $manager->persist($m1);


        $m2 = new Media();
        $m2->setAlt('iamge2');
        $m2->setPath('http://www.pharmacie-expert.com/files/thumbs/catalog/references/full/2053667.png');
        $manager->persist($m2);
        $n = __dir__ . '/../../.././web/uploads/e9542f6646af2dfaab7adc006967f687a9704d7b.jpeg';
        $m3 = new Media();
        $m3->setAlt('iamge3');
        $m3->setPath('http://www.pngall.com/wp-content/uploads/2018/04/Fitness-PNG-File.png');
        $manager->persist($m3);

        $m4 = new Media();
        $m4->setAlt('imageuplodas');
        $m4->setPath($n);
        $manager->persist($m4);

        $manager->flush();

        $this->addReference('media1', $m1);
        $this->addReference('media2', $m2);
        $this->addReference('media3', $m3);
        $this->addReference('media4', $m4);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;

    }
}
