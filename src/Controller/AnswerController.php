<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Claim;
use App\Entity\Freelancer;
use App\Entity\Recruiter;
use App\Entity\User;
use App\Form\AnswerType;
use App\Repository\AnswerRepository;
use App\Repository\ClaimRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AnswerController extends AbstractController
{
    #[Route('/addAnswer/{id_u}/{id_c}', name: 'addanswer')]
    public function new($id_u,$id_c,Request $request): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id_u);
        $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id_c);
        $claim=$claim->setEtat('Answered');
        $claimer=$claim->getClaimer();
        $answer = new Answer();
        $answer->setAnswer($user);
        $answer->setClaim($claim);
        $answer->setAnswerFor($claimer);
        $form = $this->createForm(AnswerType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($answer);
            $entityManager->persist($claim);
            $entityManager->flush();

            return $this->redirectToRoute('showAllanswers',['id_u'=>$id_u]);
        }
        $errors = [];
    foreach ($form->getErrors(true, true) as $error) {
        $fieldName = $error->getOrigin()->getName();
        $errorMessage = $error->getMessage();
        $errors[$fieldName] = $errorMessage;
    }
        if($user instanceof Recruiter)
        {
            return $this->render('answer/new.html.twig', [
            'form' => $form->createView(),
            'claim'=>$claim,
            'idU'=>$id_u,
            'errors' => $errors,
        ]);
        }
        if($user instanceof Freelancer)
        {
            return $this->render('answer/new1.html.twig', [
            'form' => $form->createView(),
            'claim'=>$claim,
            'idU'=>$id_u,
            'errors' => $errors,
        ]);
        }
    }
    #[Route('/answer/{id_u}/{id_a}', name: 'showanswer')]
    public function show(int $id_u,$id_a): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id_u);
        $answer = $this->getDoctrine()->getRepository(Answer::class)->find($id_a);

        // Check if the claim exists
        if (!$answer) {
            throw $this->createNotFoundException('Answer not found');
        }

        if($user instanceof Recruiter)
        {
            return $this->render('answer/show.html.twig', [
            'answer' => $answer,
            'idU'=>$id_u,
        ]);
        }
        if($user instanceof Freelancer)
        {
            return $this->render('answer/show1.html.twig', [
            'answer' => $answer,
            'idU'=>$id_u,
        ]);
        }
    }
    #[Route('/answers/{id_u}', name: 'showAllanswers')]
    public function showAllAnswers($id_u): Response
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find($id_u);
        $answers = $this->getDoctrine()->getRepository(Answer::class)->findBy(['answer'=>$user]);
        $answersForMe = $this->getDoctrine()->getRepository(Answer::class)->findBy(['answerFor'=>$user]);


        if($user instanceof Recruiter)
        {
            return $this->render('answer/showAll.html.twig', [
            'answers' => $answers,
            'idU'=>$id_u,
            'answersFor'=>$answersForMe,
        ]);
        }
        if($user instanceof Freelancer)
        {
            return $this->render('answer/showAll1.html.twig', [
            'answers' => $answers,
            'idU'=>$id_u,
            'answersFor'=>$answersForMe,
        ]);
        }
    }
    #[Route('deleteAnswer/{id_u}/{id_a}', name: 'deleteAnswer')]
public function deleteanswer($id_a,$id_u): RedirectResponse
{
    // Retrieve the claim from the database
    $entityManager = $this->getDoctrine()->getManager();
    $answer = $entityManager->getRepository(Answer::class)->find($id_a);

    // Check if the claim exists
    if (!$answer) {
        throw $this->createNotFoundException('answer not found');
    }

    // Remove the claim
    $entityManager->remove($answer);
    $entityManager->flush();

    // Add a flash message to indicate successful deletion
    $this->addFlash('success', 'answer deleted successfully');

    // Redirect to the page displaying all claims
    return $this->redirectToRoute('showAllanswers',['id_u'=>$id_u]);
}
    #[Route('/answer', name: 'app_answer')]
    public function index(): Response
    {
        return $this->render('answer/index.html.twig', [
            'controller_name' => 'AnswerController',
        ]);
    }
    #[Route('editAnswer/{id_u}/{id_a}', name: 'editAnswer')]
public function editAnswer(Request $request,$id_a,$id_u): Response
{
    // Retrieve the answer from the database
    $entityManager = $this->getDoctrine()->getManager();
    $answer = $entityManager->getRepository(Answer::class)->find($id_a);
    $user = $entityManager->getRepository(User::class)->find($id_u);
    $claim=$answer->getClaim();

    // Check if the answer exists
    if (!$answer) {
        throw $this->createNotFoundException('Answer not found');
    }

    // Create a form for editing an answer
    $form = $this->createForm(AnswerType::class, $answer);
    $form->handleRequest($request);

    // Handle form submission
    if ($form->isSubmitted() && $form->isValid()) {
        // Save the updated answer to the database
        $entityManager->flush();
        return $this->redirectToRoute('showAllanswers',['id_u'=>$id_u]);
    }
    $errors = [];
    foreach ($form->getErrors(true, true) as $error) {
        $fieldName = $error->getOrigin()->getName();
        $errorMessage = $error->getMessage();
        $errors[$fieldName] = $errorMessage;
    }
    if($user instanceof Recruiter)   
    {
        return $this->render('answer/new.html.twig', [
        'form' => $form->createView(),
        'errors' => $errors,
        'answer' => $answer,
        'claim'=>$claim,
        'idU'=>$id_u,
        ]);
    }
    if($user instanceof Freelancer)   
    {
        return $this->render('answer/new1.html.twig', [
        'form' => $form->createView(),
        'errors' => $errors,
        'answer' => $answer,
        'claim'=>$claim,
        'idU'=>$id_u,
        ]);
    }
}
}