<?php

namespace App\Repository;

use App\Entity\VideoCards;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VideoCards|null find($id, $lockMode = null, $lockVersion = null)
 * @method VideoCards|null findOneBy(array $criteria, array $orderBy = null)
 * @method VideoCards[]    findAll()
 * @method VideoCards[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoCardsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VideoCards::class);
    }

    // /**
    //  * @return VideoCards[] Returns an array of VideoCards objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VideoCards
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
