<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Ecommerce\EcommerceBundle\Entity\Categories;

/**
 * Class ProduitsController
 * @package Ecommerce\EcommerceBundle\Controller
 */
class ProduitsController extends Controller
{

    /**
     * @param Categories $categorie
     * @return mixed
     */
    public function produitsAction(Categories $categorie=null)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if($categorie != null)
             $findProduits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        else
            $findProduits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible'=> 1));
        
        if($session->has('panier'))
        {
            $panier =$session->get('panier');
        }
        else{
            $panier = false;
        }

        $produits = $this->get('knp_paginator')->paginate($findProduits,$this->get('request')->query->get('page',1),5);

        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=> $produits,
                                                                                                   'panier'=> $panier));
    }

    /**
     * @param $id
     * @return mixed
     * @throws
     */
    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        
         if(!$produit) throw $this->createNotFoundException ("La page n\'existe pas.");
         
          if($session->has('panier'))
        {
            $panier =$session->get('panier');
        }
        else{
            $panier = false;
        }
        
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig', array('produit'=> $produit,
                                                                                                   'panier'=> $panier));
    }

    /**
     * @return mixed
     */
    public function rechercheAction()
    {
        $form=  $this->createForm( new RechercheType());
        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form'=> $form->createView()));
    }
     public function rechercheTraitementAction()
    {
           $form=  $this->createForm( new RechercheType());
         if($this->get('request')->getMethod()== 'POST'){
         
             $form->bind($this->get('request'));
            
         }
         else{
             throw $this->createNotFoundException('Page n\'existe pas. ');
         }
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig', array('produits'=> $produit));
    }

    /**
     * @return mixed
     */
    public function livraisoninfoAction()
    {

        return $this->render('EcommerceBundle:Default:produits/layout/livraison.html.twig');
    }

    /**
     * @return mixed
     */
    public function paiementinfoAction()
    {

        return $this->render('EcommerceBundle:Default:produits/layout/paiement.html.twig');
    }

    /**
     * @return mixed
     */
    public function serviceClientinfoAction()
    {

        return $this->render('EcommerceBundle:Default:produits/layout/serviceClient.html.twig');
    }
}






