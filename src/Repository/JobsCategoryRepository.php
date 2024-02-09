<?php

namespace App\Repository;

use App\Entity\JobsCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JobsCategory>
 *
 * @method JobsCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method JobsCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method JobsCategory[]    findAll()
 * @method JobsCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobsCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JobsCategory::class);
    }

//    /**
//     * @return JobsCategory[] Returns an array of JobsCategory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('j.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?JobsCategory
//    {
//        return $this->createQueryBuilder('j')
//            ->andWhere('j.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
