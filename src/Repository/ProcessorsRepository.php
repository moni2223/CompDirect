<?php

namespace App\Repository;

use App\Entity\Processors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Processors|null find($id, $lockMode = null, $lockVersion = null)
 * @method Processors|null findOneBy(array $criteria, array $orderBy = null)
 * @method Processors[]    findAll()
 * @method Processors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProcessorsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Processors::class);
    }

    // /**
    //  * @return Processors[] Returns an array of Processors objects
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
    public function findOneBySomeField($value): ?Processors
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
