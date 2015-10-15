<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

/**
 * Class MediaData
 * @package Ecommerce\EcommerceBundle\DataFixtures\ORM
 */
class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('img/kuwi.jpg');
        $media1->setName('Kiwi');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('img/Banane.png');
        $media2->setName('Banane');
        $manager->persist($media2);
        
        $media3 = new Media();
        $media3->setPath('img/poivrons_rouges.jpg');
        $media3->setName('Poivron rouges');
        $manager->persist($media3);
        
        $media4 = new Media();
        $media4->setPath('img/piment.jpg');
        $media4->setName('Piment');
        $manager->persist($media4);
        
        $media5 = new Media();
        $media5->setPath('img/tomates.jpg');
        $media5->setName('Tomats');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('img/poivron_vert.png');
        $media6->setName('Poivron vert');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('img/raisin.jpg');
        $media7->setName('Raisin');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('img/orange.jpg');
        $media8->setName('Orange');
        $manager->persist($media8);

        $media9 = new Media();
        $media9->setPath('img/fraise.jpg');
        $media9->setName('Fragaria ×ananassa');
        $manager->persist($media9);

        $media10 = new Media();
        $media10->setPath('img/pomme.jpg');
        $media10->setName('Pomme');
        $manager->persist($media10);

        $media11 = new Media();
        $media11->setPath('img/botik.jpg');
        $media11->setName('Melon');
        $manager->persist($media11);

        $media12 = new Media();
        $media12->setPath('img/Ananas1.jpg');
        $media12->setName('Ananas');
        $manager->persist($media12);

        $media13 = new Media();
        $media13->setPath('img/touet.jpg');
        $media13->setName('fuits');
        $manager->persist($media13);
        
        $manager->flush();
        
        $this->addReference('media1',  $media1);
        $this->addReference('media2',  $media2);
        $this->addReference('media3',  $media3);
        $this->addReference('media4',  $media4);
        $this->addReference('media5',  $media5);
        $this->addReference('media6',  $media6);
        $this->addReference('media7',  $media7);
        $this->addReference('media8',  $media8);
        $this->addReference('media9',  $media9);
        $this->addReference('media10', $media10);
        $this->addReference('media11', $media11);
        $this->addReference('media12', $media12);
        $this->addReference('media13', $media13);
        
    }

    /**
     * @return int
     */
    public function getOrder(){
        return 1;
    }
}





















