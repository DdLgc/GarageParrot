<?php

namespace App\Repository;

use App\Entity\OpeningGarage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OpeningGarage>
 *
 * @method OpeningGarage|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpeningGarage|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpeningGarage[]    findAll()
 * @method OpeningGarage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpeningGarageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpeningGarage::class);
    }

//    /**
//     * @return OpeningGarage[] Returns an array of OpeningGarage objects
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

//    public function findOneBySomeField($value): ?OpeningGarage
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
