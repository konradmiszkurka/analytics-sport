<?php

namespace App\Repository;

use App\Entity\BasketballSeason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BasketballSeason>
 *
 * @method BasketballSeason|null find($id, $lockMode = null, $lockVersion = null)
 * @method BasketballSeason|null findOneBy(array $criteria, array $orderBy = null)
 * @method BasketballSeason[]    findAll()
 * @method BasketballSeason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasketballSeasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BasketballSeason::class);
    }

//    /**
//     * @return BasketballSeason[] Returns an array of BasketballSeason objects
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

//    public function findOneBySomeField($value): ?BasketballSeason
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
