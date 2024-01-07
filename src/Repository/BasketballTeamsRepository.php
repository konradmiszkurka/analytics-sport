<?php

namespace App\Repository;

use App\Entity\BasketballTeams;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BasketballTeams>
 *
 * @method BasketballTeams|null find($id, $lockMode = null, $lockVersion = null)
 * @method BasketballTeams|null findOneBy(array $criteria, array $orderBy = null)
 * @method BasketballTeams[]    findAll()
 * @method BasketballTeams[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasketballTeamsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BasketballTeams::class);
    }

//    /**
//     * @return BasketballTeams[] Returns an array of BasketballTeams objects
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

//    public function findOneBySomeField($value): ?BasketballTeams
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
