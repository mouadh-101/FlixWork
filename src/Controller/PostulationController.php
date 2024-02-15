<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Postulation;
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
    #[Route('/postulation/{idFreelancer}/{idJob}', name: 'postulate')]
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

            return $this->redirectToRoute('list_postulation');
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
        ]);
    }

    #[Route('/postulation/{id}', name: 'showpost')]
    public function showPost($id, EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery(
            'SELECT p, j, f
            FROM App\Entity\Postulation p
            JOIN p.job j
            JOIN p.freelancer f
            WHERE p.id = :id'
        )->setParameter('id', $id);
        
    
        $post = $query->getOneOrNullResult();
        dump($post);
        return $this->render('postulation/detailpostulation.html.twig', [
            'post' => $post,
        ]);
    }
    #[Route('/postulationlist/{id}', name: 'list_postulation')]
    public function list($id,postulationRepository $postulationrep): Response
    {
        $postulations= $postulationrep->findBy(['freelancer' => $id]);
        return $this->render('postulation/postulationlist.html.twig', [
            'postulations' => $postulations,
        ]);
    }
    #[Route('/deletepost/{id}', name: 'deletepost')]
    public function deletePostulation($id, ManagerRegistry $doctrine): Response
    {
        $postRepository = $doctrine->getRepository(Postulation::class); 
        $post = $postRepository->find($id);
    
        if (!$post) {
            throw $this->createNotFoundException('Postulation not found');
        }
    
        $em = $doctrine->getManager();
        $em->remove($post);
        $em->flush();
    
        return $this->redirectToRoute('list_postulation');
    }
    #[Route('/updatepost/{id}',name:'updatepost')]
    public function updatepost($id, EntityManagerInterface $entityManager, Request $request)
    {
        $query = $entityManager->createQuery(
            'SELECT p, j, f
            FROM App\Entity\Postulation p
            JOIN p.job j
            JOIN p.freelancer f
            WHERE p.id = :id'
        )->setParameter('id', $id);
    
        $post = $query->getOneOrNullResult();
        $form = $this->createForm(PostulationType::class, $post);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($post);
            $entityManager->flush();
    
            return $this->redirectToRoute('list_postulation');
        } else {
            $jobTitle = $post->getJob()->getTitle();
            $postulationDate = $post->getPostulationDate();
            $state = $post->getEtat();
    
            return $this->render('postulation/postule.html.twig', [
                'formPstulation' => $form->createView(),
                'jobTitle' => $jobTitle,
                'postulationDate' => $postulationDate,
                'state' => $state,
            ]);
        }
    }
    
}
