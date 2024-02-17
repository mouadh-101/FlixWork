<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Postulation;
use App\Entity\Recruiter;
use App\Entity\User;
use App\Form\PostulationrType;
use App\Repository\PostulationRepository;
use App\Form\PostulationType;
use App\Repository\JobRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class PostulationController extends AbstractController
{
    #[Route('/postulation', name: 'app_postulation')]
    public function index(): Response
    {
        return $this->render('postulation/index.html.twig', [
            'controller_name' => 'PostulationController',
        ]);
    }
    #[Route('/postulation/new/{idFreelancer}/{idJob}', name: 'postulate')]
    public function addPostulation(ManagerRegistry $doctrine, Request $request ,$idFreelancer, $idJob): Response
    {
        $freelancer = $this->getDoctrine()->getRepository(Freelancer::class)->find($idFreelancer);
        $job = $this->getDoctrine()->getRepository(Job::class)->find($idJob);
        $postulation = new Postulation();
        $postulation->setEtat('under consideration');
        $postulation->setPostulationDate(new \DateTime());
        $postulation->setFreelancer($freelancer);
        $postulation->setJob($job);
        $form = $this->createForm(PostulationType::class, $postulation);
        $form->handleRequest($request);
        $em = $doctrine->getManager();

        if ($form->isSubmitted() ) { 
            
            $em->persist($postulation);
            $em->flush();

            return $this->redirectToRoute('list_postulation',['id' => $idFreelancer]);
        }
        $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }

        // Pass job title, postulation date, and state to the template
        $jobTitle = $job->getTitle();
        $postulationDate = $postulation->getPostulationDate();
        $state = $postulation->getEtat();

        return $this->render('postulation/postule.html.twig', [
            'formPstulation' => $form->createView(),
            'jobTitle' => $jobTitle,
            'postulationDate' => $postulationDate,
            'state' => $state,
            'errors' => $errors,
            
        ]);
    }

    #[Route('/postulation/{id_u}/{id_p}', name: 'showpost')]
    public function showPost($id_p,$id_u, EntityManagerInterface $entityManager,UserRepository $u): Response
    {
        $query = $entityManager->createQuery(
            'SELECT p, j, f
            FROM App\Entity\Postulation p
            JOIN p.job j
            JOIN p.freelancer f
            WHERE p.id = :id'
        )->setParameter('id', $id_p);
        
    
        $post = $query->getOneOrNullResult();
        $job = $post->getJob();
        $user=$u->find($id_u);
        if($user instanceof Freelancer)
        {
            return $this->render('postulation/detailpostulationf.html.twig', [
                'post' => $post,
                'idUser' => $id_u,
                'job'=>$job
            ]);
        }
        elseif($user instanceof Recruiter)
        {
            return $this->render('postulation/detailpostulation.html.twig', [
                'post' => $post,
                'idUser' => $id_u
                
            ]);
        }
        
    }
    #[Route('/postulationlist/{id}', name: 'list_postulation')]
public function list($id, PostulationRepository $postulationrep, EntityManagerInterface $entityManager, JobRepository $jobRepository): Response
{
    // Fetch the user based on the provided id
    $user = $entityManager->getRepository(User::class)->find($id);

    // Check if the user is found
    if (!$user) {
        throw $this->createNotFoundException('User not found.');
    }

    // Determine the user type based on the retrieved entity
    if ($user instanceof Freelancer) {
        // Fetch postulations for the freelancer
        $postulations = $postulationrep->findBy(['freelancer' => $id]);
        return $this->render('postulation/postulationlistf.html.twig', [
            'postulations' => $postulations,
            'idUser' => $id
        ]);
    } elseif ($user instanceof Recruiter) {
        // Fetch jobs associated with the recruiter
        $jobs = $jobRepository->findByRecruiter($id);

        // Extract job IDs
        $jobIds = array_map(function(Job $job) {
            return $job->getId();
        }, $jobs);

        // Fetch postulations for the recruiter's jobs
        $postulations = $postulationrep->findBy(['job' => $jobIds]);
        return $this->render('postulation/postulationlistr.html.twig', [
            'postulations' => $postulations,
            'idUser' => $id
        ]);
    } else {
        throw $this->createAccessDeniedException('Invalid user type.');
    }
}

    #[Route('/deletepost/{id_u}/{id_p}', name: 'deletepost')]
    public function deletePostulation($id_p,$id_u, ManagerRegistry $doctrine): Response
    {
        $postRepository = $doctrine->getRepository(Postulation::class); 
        $post = $postRepository->find($id_p);
    
        if (!$post) {
            throw $this->createNotFoundException('Postulation not found');
        }
    
        $em = $doctrine->getManager();
        $em->remove($post);
        $em->flush();
    
        return $this->redirectToRoute('list_postulation',['id' => $id_u]);
    }


#[Route('/updatepost/{id_u}/{id_p}', name: 'updatepost')]
public function updatepost($id_u, $id_p, EntityManagerInterface $entityManager, Request $request)
{
    $user = $entityManager->getRepository(User::class)->find($id_u);
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $query = $entityManager->createQuery(
        'SELECT p, j, f
        FROM App\Entity\Postulation p
        JOIN p.job j
        JOIN p.freelancer f
        WHERE p.id = :id'
    )->setParameter('id', $id_p);

    $post = $query->getOneOrNullResult();
    $form = $this->createForm(PostulationType::class, $post);
    $formr=$this->createForm(PostulationrType::class, $post);
    $form->handleRequest($request);
    $formr->handleRequest($request);

    if (($form->isSubmitted() && $form->isValid()) ||($formr->isSubmitted() && $formr->isValid())) {
        $entityManager->persist($post);
        $entityManager->flush();

        return $this->redirectToRoute('list_postulation',['id' => $id_u]);
    } else {
        $jobTitle = $post->getJob()->getTitle();
        $postulationDate = $post->getPostulationDate();
        $state = $post->getEtat();
        $cover=$post->getCoverLetter();

        // Render different templates based on user type
        if ($user instanceof Freelancer) {
            $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
            return $this->render('postulation/postule.html.twig', [
                'formPstulation' => $form->createView(),
                'jobTitle' => $jobTitle,
                'postulationDate' => $postulationDate,
                'state' => $state,
                'idUser' => $id_u,
                'errors' => $errors,
            ]);
        } elseif ($user instanceof Recruiter) {
            $errors = [];
        foreach ($form->getErrors(true) as $error) {
            $errors[] = $error->getMessage();
        }
            return $this->render('postulation/postuler.html.twig', [
                'formPstulation' => $formr->createView(),
                'jobTitle' => $jobTitle,
                'postulationDate' => $postulationDate,
                'cover' => $cover,
                'state' => $state,
                'idUser' => $id_u,
                'errors' => $errors,
            ]);
        }
    }
}

    
}
