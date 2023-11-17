<?php

namespace App\Repository;

use App\Entity\Hours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<hours>
 *
 * @method hours|null find($id, $lockMode = null, $lockVersion = null)
 * @method hours|null findOneBy(array $criteria, array $orderBy = null)
 * @method hours[]    findAll()
 * @method hours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hours::class);
    }

//    /**
//     * @return hours[] Returns an array of hours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?hours
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
