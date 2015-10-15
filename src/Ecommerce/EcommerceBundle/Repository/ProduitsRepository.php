<?php

namespace Ecommerce\EcommerceBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitsRepository
 *
 * repository methods below.
 */
class ProduitsRepository extends EntityRepository
{
    /**
     * @param $array
     * @return mixed
     */
    public function findArray($array)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.id IN (:array)')
            ->setParameter('array', $array);
        return $qb->getQuery()->getResult();

    }

    /**
     * @param $categorie
     * @return mixed
     */
    public function byCategorie($categorie)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.categorie = :categorie')
            ->andWhere('u.disponible = 1')
            ->orderBy('u.id')
            ->setParameter('categorie', $categorie);
        return $qb->getQuery()->getResult();
    }

    /**
     * @param $chaine
     * @return mixed
     */
    public function recherche($chaine)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.nom like :chaine')
            ->andWhere('u.disponible = 1')
            ->orderBy('u.id')
            ->setParameter('chaine', $chaine);
        return $qb->getQuery()->getResult();
    }
}
