<?php

namespace App\Repository;

use App\Entity\InstagramAuthenticate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InstagramAuthenticate|null find($id, $lockMode = null, $lockVersion = null)
 * @method InstagramAuthenticate|null findOneBy(array $criteria, array $orderBy = null)
 * @method InstagramAuthenticate[]    findAll()
 * @method InstagramAuthenticate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstagramAuthenticateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InstagramAuthenticate::class);
    }

    // /**
    //  * @return InstagramAuthenticate[] Returns an array of InstagramAuthenticate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InstagramAuthenticate
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
