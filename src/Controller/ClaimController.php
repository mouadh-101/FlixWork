<?php

namespace App\Controller;

use App\Entity\Claim;
use App\Entity\User;
use App\Form\ClaimType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Corrected import statement
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ClaimController extends AbstractController
{
    #[Route('/claims/{id}/new', name: 'addClaim')]
    public function new($id,Request $request): Response
    {
        $claimer = $this->getDoctrine()->getRepository(User::class)->find($id);
        $claim = new Claim();
        $claim->setClaimer($claimer);
        $form = $this->createForm(ClaimType::class, $claim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($claim);
            $entityManager->flush();

            return $this->redirectToRoute('showAllClaims');
        }

        return $this->render('claim/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/claim/{id}', name: 'showClaim')]
    public function show(int $id): Response
    {
        // Retrieve the claim based on the provided ID
        $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id);

        // Check if the claim exists
        if (!$claim) {
            throw $this->createNotFoundException('Claim not found');
        }

        // Render the claim details using a Twig template
        return $this->render('claim/show.html.twig', [
            'claim' => $claim,
        ]);
    }
    #[Route('/claims', name: 'showAllClaims')]
    public function showAllClaims(): Response
    {
        $claims = $this->getDoctrine()->getRepository(Claim::class)->findAll();

        return $this->render('claim/show_all.html.twig', [
            'claims' => $claims,
        ]);
    }
    #[Route('/claims/{id}/delete', name: 'deleteClaim')]
public function deleteClaim(int $id): RedirectResponse
{
    // Retrieve the claim from the database
    $entityManager = $this->getDoctrine()->getManager();
    $claim = $entityManager->getRepository(Claim::class)->find($id);

    // Check if the claim exists
    if (!$claim) {
        throw $this->createNotFoundException('Claim not found');
    }

    // Remove the claim
    $entityManager->remove($claim);
    $entityManager->flush();

    // Add a flash message to indicate successful deletion
    $this->addFlash('success', 'Claim deleted successfully');

    // Redirect to the page displaying all claims
    return $this->redirectToRoute('showAllClaims');
}
#[Route('/claim/{id}/edit', name: 'editClaim')]
public function editClaim(int $id, Request $request): Response
{
    $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id);

    if (!$claim) {
        throw $this->createNotFoundException('Claim not found');
    }

    $form = $this->createForm(ClaimType::class, $claim);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'Claim updated successfully');

        return $this->redirectToRoute('showAllClaims');
    }

    return $this->render('claim/edit.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/claim', name: 'app_claim')]
    public function index(): Response
    {
        return $this->render('claim/index.html.twig', [
            'controller_name' => 'ClaimController',
        ]);
    }
}
