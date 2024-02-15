<?php

namespace App\Controller;

use App\Entity\Freelancer;
use App\Entity\Interview;
use App\Entity\Recruiter;
use App\Entity\User;
use App\Form\InterviewType;
use App\Repository\InterviewRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InterviewController extends AbstractController
{
    #[Route('/interview', name: 'app_interview')]
    public function index(): Response
    {
        return $this->render('interview/index.html.twig', [
            'controller_name' => 'InterviewController',
        ]);
    }
    #[Route('/interview/new/{id_r}/{id_f}', name: 'addInterview')]
public function addInterview(ManagerRegistry $doctrine, Request $request, $id_r, $id_f): Response
{
    $entityManager = $doctrine->getManager();

    $freelancer = $this->getDoctrine()->getRepository(Freelancer::class)->find($id_f);
    $recruiter = $this->getDoctrine()->getRepository(Recruiter::class)->find($id_r);

    if (!$freelancer || !$recruiter) {
        throw $this->createNotFoundException('Freelancer or Recruiter not found');
    }

    $interview = new Interview();
    $interview->setFreelancer($freelancer);
    $interview->setRecruiter($recruiter);
    $interview->setEtat('under consideration');

    $form = $this->createForm(InterviewType::class, $interview);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($interview);
        $entityManager->flush();

        return $this->redirectToRoute('list_interview',['id' => $id_r]);
    }

    return $this->render('interview/addinterview.html.twig', [
        'formInterview' => $form->createView(),
        'freelancer' => $freelancer,
        'recruiter' => $recruiter,
        'idUser'=>$id_r
    ]);
}
#[Route('/interviewlist/{id}', name: 'list_interview')]
public function list($id, InterviewRepository $interviewrep, EntityManagerInterface $entityManager): Response
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
        $interviews = $interviewrep->findBy(['freelancer' => $id]);
        return $this->render('interview/interviewlistf.html.twig', [
            'interviews' => $interviews,
            'idUser' => $id
        ]);
    } elseif ($user instanceof Recruiter) {
        $interviews = $interviewrep->findBy(['recruiter' => $id]);
        return $this->render('interview/interviewlistr.html.twig', [
            'interviews' => $interviews ,
            'idUser' => $id
        ]);
    } else {
        throw $this->createAccessDeniedException('Invalid user type.');
    }
}
#[Route('/interview/details/{id_u}/{id_i}', name: 'showinterview')]
    public function showPost($id_i,$id_u, EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery(
            'SELECT i,r, f
            FROM App\Entity\Interview i
            JOIN i.recruiter r
            JOIN i.freelancer f
            WHERE i.id = :id'
        )->setParameter('id', $id_i);
        
    
        $interview = $query->getOneOrNullResult();
        $user=$entityManager->getRepository(User::class)->find($id_u);
        if($user instanceof Freelancer)
        {
            return $this->render('interview/detailinterviewf.html.twig', [
            'interview' => $interview,
            'idUser' => $id_u
            ]);
        }
        elseif($user instanceof Recruiter)
        {
            return $this->render('interview/detailinterview.html.twig', [
            'interview' => $interview,
            'idUser' => $id_u
            ]);
        }
    }
    #[Route('/deleteinterview/{id_u}/{id_i}', name: 'deleteinterview')]
    public function deleteInterview($id_i,$id_u, ManagerRegistry $doctrine): Response
    {
        $interviewRepository = $doctrine->getRepository(Interview::class); 
        $interview = $interviewRepository->find($id_i);
    
        if (!$interview) {
            throw $this->createNotFoundException('Interview not found');
        }
    
        $em = $doctrine->getManager();
        $em->remove($interview);
        $em->flush();
    
        return $this->redirectToRoute('list_interview',['id' => $id_u]);
    }

#[Route('/updateinterview/{id_u}/{id_i}', name: 'updateinterview')]
public function updateinterview($id_u, $id_i, EntityManagerInterface $entityManager, Request $request)
{
    $user = $entityManager->getRepository(User::class)->find($id_u);
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $query = $entityManager->createQuery(
        'SELECT i, r, f
        FROM App\Entity\Interview i
        JOIN i.recruiter r
        JOIN i.freelancer f
        WHERE i.id = :id'
    )->setParameter('id', $id_i);

    $interview = $query->getOneOrNullResult();
    $form = $this->createForm(InterviewType::class, $interview);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($interview);
        $entityManager->flush();

        return $this->redirectToRoute('list_interview',['id' => $id_u]);
    } else {

        // Render different templates based on user type
        if ($user instanceof Freelancer) {
            return $this->render('interview/addinterview.html.twig', [
                'formInterview' => $form->createView(),
                'idUser' => $id_u
            ]);
        } elseif ($user instanceof Recruiter) {
            return $this->render('interview/addinterview.html.twig', [
                'formInterview' => $form->createView(),
                'idUser' => $id_u
            ]);
        }
    }
}
}
