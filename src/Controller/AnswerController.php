<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Claim;
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
    #[Route('/answers/{id}/{id_c}/new', name: 'addanswer')]
    public function new($id,$id_c,Request $request): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id_c);
        $answer = new Answer();
        $answer->setAnswer($user);
        $answer->setClaim($claim);
        $form = $this->createForm(AnswerType::class, $answer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($answer);
            $entityManager->flush();

            return $this->redirectToRoute('showAllanswers');
        }

        return $this->render('answer/new.html.twig', [
            'form' => $form->createView(),
            'claim'=>$claim
        ]);
    }
    #[Route('/answer/{id}', name: 'showanswer')]
    public function show(int $id): Response
    {
        // Retrieve the claim based on the provided ID
        $answer = $this->getDoctrine()->getRepository(Answer::class)->find($id);

        // Check if the claim exists
        if (!$answer) {
            throw $this->createNotFoundException('Answer not found');
        }

        // Render the claim details using a Twig template
        return $this->render('answer/show.html.twig', [
            'answer' => $answer,
        ]);
    }
    #[Route('/answers', name: 'showAllanswers')]
    public function showAllAnswers(): Response
    {
        $answers = $this->getDoctrine()->getRepository(Answer::class)->findAll();

        return $this->render('answer/showAll.html.twig', [
            'answers' => $answers,
        ]);
    }
    #[Route('/answers/{id}/delete', name: 'deleteAnswer')]
public function deleteanswer(int $id): RedirectResponse
{
    // Retrieve the claim from the database
    $entityManager = $this->getDoctrine()->getManager();
    $answer = $entityManager->getRepository(Answer::class)->find($id);

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
    return $this->redirectToRoute('showAllanswers');
}
    #[Route('/answer', name: 'app_answer')]
    public function index(): Response
    {
        return $this->render('answer/index.html.twig', [
            'controller_name' => 'AnswerController',
        ]);
    }
    #[Route('/answers/{id}/edit', name: 'editAnswer')]
public function editAnswer(Request $request, int $id): Response
{
    // Retrieve the answer from the database
    $entityManager = $this->getDoctrine()->getManager();
    $answer = $entityManager->getRepository(Answer::class)->find($id);
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

        // Redirect to the page displaying all answers
        return $this->redirectToRoute('showAllanswers');
    }

    // Render the form for editing an answer
    return $this->render('answer/new.html.twig', [
        'form' => $form->createView(),
        'answer' => $answer,
        'claim'=>$claim
    ]);
}

}