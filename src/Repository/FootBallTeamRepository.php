<?php

namespace App\Repository;

use App\Entity\FootBallTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FootBallTeam>
 *
 * @method FootBallTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method FootBallTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method FootBallTeam[]    findAll()
 * @method FootBallTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootBallTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FootBallTeam::class);
    }

//    /**
//     * @return FootBallTeam[] Returns an array of FootBallTeam objects
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

//    public function findOneBySomeField($value): ?FootBallTeam
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
