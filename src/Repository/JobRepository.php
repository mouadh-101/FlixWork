<?php

namespace App\Repository;

use App\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Job>
 *
 * @method Job|null find($id, $lockMode = null, $lockVersion = null)
 * @method Job|null findOneBy(array $criteria, array $orderBy = null)
 * @method Job[]    findAll()
 * @method Job[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Job::class);
    }

    /**
     * Find jobs by recruiter ID
     *
     * @param int $recruiterId
     * @return Job[]
     */
    public function findByRecruiterId($recruiterId): array
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.recruiter = :recruiterId')
            ->setParameter('recruiterId', $recruiterId)
            ->getQuery()
            ->getResult();
    }

    // You can add more custom methods here as needed
}
