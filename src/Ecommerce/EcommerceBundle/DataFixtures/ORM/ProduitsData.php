<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Produits;

/**
 * Class ProduitsData
 * @package Ecommerce\EcommerceBundle\DataFixtures\ORM
 */
class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setDescription("Le poivron rouge de cultivars de l'espece Capsicum annum.");
        $produit1->setDisponible('1');
        $produit1->setImage($this->getReference('media3'));
        $produit1->setNom('Poivron rouge');
        $produit1->setPrix('1.99');
        $produit1->setTva($this->getReference('tva1'));
        $manager->persist($produit1);
        
       
        $produit2 = new Produits();
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setDescription("Piment est generalement associe a la saveur du piquant (pimente).");
        $produit2->setDisponible('1');
        $produit2->setImage($this->getReference('media4'));
        $produit2->setNom('Piment');
        $produit2->setPrix('3.99');
        $produit2->setTva($this->getReference('tva1'));
        $manager->persist($produit2);
        
        $produit3 = new Produits();
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setDescription("La tomate est une espace de plantes herbacees de la famille des originaire du nord-ouest de l'Amerique du sud.");
        $produit3->setDisponible('1');
        $produit3->setImage($this->getReference('media5'));
        $produit3->setNom('Tomate');
        $produit3->setPrix('0.99');
        $produit3->setTva($this->getReference('tva2'));
        $manager->persist($produit3);
        
        
        $produit4 = new Produits();
        $produit4->setCategorie($this->getReference('categorie1'));
        $produit4->setDescription("Le poivron vert est un groupe de cultivate de l'espece capicum annum.");
        $produit4->setDisponible('1');
        $produit4->setImage($this->getReference('media6'));
        $produit4->setNom('Poivron vert');
        $produit4->setPrix('2.99');
        $produit4->setTva($this->getReference('tva2'));
        $manager->persist($produit4);
        
        
        $produit5 = new Produits();
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setDescription("Le raison est le feruit de la vigne. Le raisin de la vigne cultivee vitis vinifere est un des feruits les plus cultives au mond.");
        $produit5->setDisponible('1');
        $produit5->setImage($this->getReference('media7'));
        $produit5->setNom('Raisin');
        $produit5->setPrix('0.97');
        $produit5->setTva($this->getReference('tva1'));
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setDescription("L'orange est un argume, fruit des orangers, des arbres de differentes especes de la famille des Rutacees ou d'hybrides de ceux-ci.");
        $produit6->setDisponible('1');
        $produit6->setImage($this->getReference('media8'));
        $produit6->setNom('Orange');
        $produit6->setPrix('1.30');
        $produit6->setTva($this->getReference('tva2'));
        $manager->persist($produit6);


        $produit7 = new Produits();
        $produit7->setCategorie($this->getReference('categorie2'));
        $produit7->setDescription("Les kiwis sont des fruits de plusieurs espèces de lianes du genre Actinidia, famille des Actinidiaceae. Ils sont originaires de Chine,notamment de la province de Shaanxi. On en trouve par ailleurs dans des climats dits montagnards tropicaux.");
        $produit7->setDisponible('1');
        $produit7->setImage($this->getReference('media1'));
        $produit7->setNom('Kiwi');
        $produit7->setPrix('1.20');
        $produit7->setTva($this->getReference('tva2'));
        $manager->persist($produit7);

        $produit8 = new Produits();
        $produit8->setCategorie($this->getReference('categorie2'));
        $produit8->setDescription("La banane est le fruit ou la baie dérivant de l’inflorescence du bananier. Les bananes sont des fruits très généralement stériles issus de variétés domestiquées.");
        $produit8->setDisponible('1');
        $produit8->setImage($this->getReference('media2'));
        $produit8->setNom('Banane');
        $produit8->setPrix('4.20');
        $produit8->setTva($this->getReference('tva2'));
        $manager->persist($produit8);

        $produit9 = new Produits();
        $produit9->setCategorie($this->getReference('categorie2'));
        $produit9->setDescription("Le fraisier cultivé, plus rarement appelé fraisier ananas, est une espèce hybride de fraisiers cultivée pour son fruit qui est la fraise de jardin. Ce fruit n'est en fait pas une baie au sens botanique, mais un faux-fruit.");
        $produit9->setDisponible('1');
        $produit9->setImage($this->getReference('media9'));
        $produit9->setNom('Fragaria ×ananassa');
        $produit9->setPrix('3.80');
        $produit9->setTva($this->getReference('tva2'));
        $manager->persist($produit9);

        $produit10 = new Produits();
        $produit10->setCategorie($this->getReference('categorie2'));
        $produit10->setDescription("L'orange est un argume, fruit des orangers, des arbres de differentes especes de la famille des Rutacees ou d'hybrides de ceux-ci.");
        $produit10->setDisponible('1');
        $produit10->setImage($this->getReference('media10'));
        $produit10->setNom('Pomme');
        $produit10->setPrix('2.40');
        $produit10->setTva($this->getReference('tva2'));
        $manager->persist($produit10);

        $produit11 = new Produits();
        $produit11->setCategorie($this->getReference('categorie2'));
        $produit11->setDescription("Le cantaloup est le nom de la variété du melon Cucumis melo var. cantalupensis. Ce nom provient du village de Cantalupo, près de Rome, où ces melons étaient cultivés dans les jardins d'une propriété que le pape possédait.");
        $produit11->setDisponible('1');
        $produit11->setImage($this->getReference('media11'));
        $produit11->setNom('Melon');
        $produit11->setPrix('0.90');
        $produit11->setTva($this->getReference('tva2'));
        $manager->persist($produit11);

        $produit12 = new Produits();
        $produit12->setCategorie($this->getReference('categorie2'));
        $produit12->setDescription("L'ananas est une plante xérophyte, originaire d'Amérique du Sud, d'Amérique centrale, et des Caraïbes. Il est connu principalement pour son fruit comestible, qui est en réalité une infrutescence.");
        $produit12->setDisponible('1');
        $produit12->setImage($this->getReference('media12'));
        $produit12->setNom('Ananas');
        $produit12->setPrix('4.10');
        $produit12->setTva($this->getReference('tva2'));
        $manager->persist($produit12);


        $manager->flush();
       
        
        
    }

    /**
     * @return int
     */
    public function getOrder(){
        return 4;
    }
}





















