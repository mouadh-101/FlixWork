<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Job;
use App\Repository\JobRepository;
use App\Entity\Recruiter;
use App\Entity\JobsCategory;
use Doctrine\ORM\EntityManagerInterface;

class JobsController extends AbstractController
{
    #[Route('/jobs', name: 'list_jobs')]
    public function list(jobRepository $jobRepository , EntityManagerInterface $entityManager): Response
    {
        $imageList = [
            'img/clients/client-1.png',
            'img/clients/client-2.png',
            'img/clients/client-3.png',
            // ... Ajoutez autant d'images que nécessaire
        ];
        $jobs = $entityManager->createQueryBuilder()
            ->select('j', 'r')
            ->from(Job::class, 'j')
            ->leftJoin('j.recruiter', 'r')
            ->getQuery()
            ->getResult();

        return $this->render('jobs/index.html.twig', [
            'jobs' => $jobs,
            'imageList' => $imageList,

        ]);
    }
}
