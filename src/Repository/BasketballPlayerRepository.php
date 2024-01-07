<?php

namespace App\Repository;

use App\Entity\BasketballPlayer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BasketballPlayer>
 *
 * @method BasketballPlayer|null find($id, $lockMode = null, $lockVersion = null)
 * @method BasketballPlayer|null findOneBy(array $criteria, array $orderBy = null)
 * @method BasketballPlayer[]    findAll()
 * @method BasketballPlayer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasketballPlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BasketballPlayer::class);
    }

//    /**
//     * @return BasketballPlayer[] Returns an array of BasketballPlayer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BasketballPlayer
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
