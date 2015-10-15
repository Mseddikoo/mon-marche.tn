<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Categories;

/**
 * Class CategoriesData
 * @package Ecommerce\EcommerceBundle\DataFixtures\ORM
 */
class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
       $categorie1 = new Categories();
       $categorie1->setNom('Legumes');
       $categorie1->setImage($this->getReference('media1'));
       $manager->persist($categorie1);
       
       $categorie2 = new Categories();
       $categorie2->setNom('fruits');
       $categorie2->setImage($this->getReference('media2'));
       $manager->persist($categorie2);
       
       $manager->flush();
       
        $this->addReference('categorie1',  $categorie1);
        $this->addReference('categorie2',  $categorie2);
       
    }

    /**
     * @return int
     */
    public function getOrder(){
        return 2;
    }
}





















