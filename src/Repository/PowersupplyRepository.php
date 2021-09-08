<?php

namespace App\Repository;

use App\Entity\Powersupply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Powersupply|null find($id, $lockMode = null, $lockVersion = null)
 * @method Powersupply|null findOneBy(array $criteria, array $orderBy = null)
 * @method Powersupply[]    findAll()
 * @method Powersupply[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PowersupplyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Powersupply::class);
    }

    // /**
    //  * @return Powersupply[] Returns an array of Powersupply objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Powersupply
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
