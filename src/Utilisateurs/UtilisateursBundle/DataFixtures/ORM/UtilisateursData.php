<?php

namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Utilisateurs\UtilisateursBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    private $container;
    
     public function setContainer(ContainerInterface $container = null) {
        $this->container= $container;
    }
    
    public function load(ObjectManager $manager)
    {
       $utilisateur1 = new Utilisateurs();
       $utilisateur1->setUsername('benjamin');
       $utilisateur1->setEmail('benjamin@gmail.com');
       $utilisateur1->setEnabled(1);
       $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('poupou',$utilisateur1->getSalt()));
       $manager->persist($utilisateur1);
       
       $utilisateur2 = new Utilisateurs();
       $utilisateur2->setUsername('mathilde');
       $utilisateur2->setEmail('mathilde@gmail.com');
       $utilisateur2->setEnabled(1);
       $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('mathilde',$utilisateur1->getSalt()));
       $manager->persist($utilisateur2);
       
       $utilisateur3 = new Utilisateurs();
       $utilisateur3->setUsername('pouline');
       $utilisateur3->setEmail('pouline@gmail.com');
       $utilisateur3->setEnabled(1);
       $utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('pouline',$utilisateur1->getSalt()));
       $manager->persist($utilisateur3);
       
       $utilisateur4 = new Utilisateurs();
       $utilisateur4->setUsername('tiffany');
       $utilisateur4->setEmail('tiffany@gmail.com');
       $utilisateur4->setEnabled(1);
       $utilisateur4->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('tiffany',$utilisateur1->getSalt()));
       $manager->persist($utilisateur4);
       
       
       $utilisateur5 = new Utilisateurs();
       $utilisateur5->setUsername('dominique');
       $utilisateur5->setEmail('dominique@gmail.com');
       $utilisateur5->setEnabled(1);
       $utilisateur5->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('dominique',$utilisateur1->getSalt()));
       $manager->persist($utilisateur5);
       
      
       
       $manager->flush();
       
         $this->addReference('utilisateur1', $utilisateur1) ;
         $this->addReference('utilisateur2', $utilisateur2) ;
         $this->addReference('utilisateur3', $utilisateur3) ;
         $this->addReference('utilisateur4', $utilisateur4) ;
         $this->addReference('utilisateur5', $utilisateur5) ;
       
    }
    
    public function getOrder(){
        return 5;
    }

   

}





















