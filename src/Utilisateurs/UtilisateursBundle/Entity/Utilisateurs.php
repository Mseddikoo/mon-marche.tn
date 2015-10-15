<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// src/AppBundle/Entity/User.php

namespace Utilisateurs\UtilisateursBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="Utilisateurs\UtilisateursBundle\Repository\UtilisateursRepository")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commandes", mappedBy="utilisateur", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses", mappedBy="utilisateur", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add commandes
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande|\Ecommerce\EcommerceBundle\Entity\Commandes $commandes
     * @return Utilisateurs
     */
    public function addCommande(\Ecommerce\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes[] = $commandes;

        return $this;
    }

    /**
     * Remove commandes
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commandes
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commandes $commandes)
    {
        $this->commandes->removeElement($commandes);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     * @return Utilisateurs
     */
    public function addAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses
     */
    public function removeAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
