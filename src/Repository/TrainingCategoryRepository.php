<?php

namespace App\Repository;

use App\Entity\TrainingCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TrainingCategory>
 *
 * @method TrainingCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrainingCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrainingCategory[]    findAll()
 * @method TrainingCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrainingCategory::class);
    }

//    /**
//     * @return TrainingCategory[] Returns an array of TrainingCategory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TrainingCategory
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
