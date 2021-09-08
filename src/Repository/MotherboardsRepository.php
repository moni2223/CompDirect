<?php

namespace App\Repository;

use App\Entity\Motherboards;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Motherboards|null find($id, $lockMode = null, $lockVersion = null)
 * @method Motherboards|null findOneBy(array $criteria, array $orderBy = null)
 * @method Motherboards[]    findAll()
 * @method Motherboards[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MotherboardsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Motherboards::class);
    }

    // /**
    //  * @return Motherboards[] Returns an array of Motherboards objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Motherboards
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
