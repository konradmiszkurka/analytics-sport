<?php

namespace App\Repository;

use App\Entity\FootballSeason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FootballSeason>
 *
 * @method FootballSeason|null find($id, $lockMode = null, $lockVersion = null)
 * @method FootballSeason|null findOneBy(array $criteria, array $orderBy = null)
 * @method FootballSeason[]    findAll()
 * @method FootballSeason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootballSeasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FootballSeason::class);
    }

//    /**
//     * @return FootballSeason[] Returns an array of FootballSeason objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FootballSeason
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
