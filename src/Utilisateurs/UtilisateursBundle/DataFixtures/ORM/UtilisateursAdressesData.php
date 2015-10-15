<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements  OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    
    public function load(ObjectManager $manager)
    {
       $adresse1 = new UtilisateursAdresses();
       $adresse1->setUtilisateur($this->getReference('utilisateur1'));
       $adresse1->setNom('Catelain');
       $adresse1->setPrenom('Benjamin');
       $adresse1->setTelephone('0600000000');
       $adresse1->setAdresse('3 rue alberta rubosca');
       $adresse1->setCp('76600');
       $adresse1->setPaye('France');
       $adresse1->setVille('Le Havre');
       $adresse1->setComplement('face a l\'eglise');
       $manager->persist($adresse1);
       
       $adresse2 = new UtilisateursAdresses();
       $adresse2->setUtilisateur($this->getReference('utilisateur3'));
       $adresse2->setNom('premier');
       $adresse2->setPrenom('albert');
       $adresse2->setTelephone('0600000000');
       $adresse2->setAdresse('5 rue rubosca');
       $adresse2->setCp('76600');
       $adresse2->setPaye('France');
       $adresse2->setVille('Le Havre');
       $adresse2->setComplement('face a la plage');
       $manager->persist($adresse2);
       
       $adresse3 = new UtilisateursAdresses();
       $adresse3->setUtilisateur($this->getReference('utilisateur3'));
       $adresse3->setNom('Seconder');
       $adresse3->setPrenom('Amier');
       $adresse3->setTelephone('0623456');
       $adresse3->setAdresse('5 rue Mohammed iben abed Allah');
       $adresse3->setCp('7669');
       $adresse3->setPaye('France');
       $adresse3->setVille('Nice');
       $adresse3->setComplement('face a la tour de ivelle');
       $manager->persist($adresse3);
       
       $adresse4 = new UtilisateursAdresses();
       $adresse4->setUtilisateur($this->getReference('utilisateur3'));
       $adresse4->setNom('premier');
       $adresse4->setPrenom('Maickel');
       $adresse4->setTelephone('060034500');
       $adresse4->setAdresse('5 rue AbouJafer');
       $adresse4->setCp('76600');
       $adresse4->setPaye('France');
       $adresse4->setVille('Le Havre');
       $adresse4->setComplement('face a la School');
       $manager->persist($adresse4);
       
       $adresse5 = new UtilisateursAdresses();
       $adresse5->setUtilisateur($this->getReference('utilisateur1'));
       $adresse5->setNom('premier');
       $adresse5->setPrenom('albert');
       $adresse5->setTelephone('0600000000');
       $adresse5->setAdresse('5 rue rubosca');
       $adresse5->setCp('76600');
       $adresse5->setPaye('France');
       $adresse5->setVille('Le Havre');
       $adresse5->setComplement('face a la plage');
       $manager->persist($adresse5);
       
       
       
       $manager->flush();
       
      
    }
    
    public function getOrder(){
        return 6;
    }

   

}





















