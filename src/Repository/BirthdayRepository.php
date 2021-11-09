<?php

namespace App\Repository;

use App\Entity\Birthday;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Birthday|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birthday|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birthday[]    findAll()
 * @method Birthday[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BirthdayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Birthday::class);
    }

    // /**
    //  * @return Birthday[] Returns an array of Birthday objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Birthday
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
