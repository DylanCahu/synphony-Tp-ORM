<?php

namespace App\Repository;

use App\Entity\Lastname;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lastname|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lastname|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lastname[]    findAll()
 * @method Lastname[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LastnameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lastname::class);
    }

    // /**
    //  * @return Lastname[] Returns an array of Lastname objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lastname
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
