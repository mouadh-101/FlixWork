<?php

namespace App\Controller;

use App\Entity\Claim;
use App\Entity\Freelancer;
use App\Entity\Recruiter;
use App\Entity\User;
use App\Form\ClaimType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Corrected import statement
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ClaimController extends AbstractController
{
    #[Route('/claimNew/{id}', name: 'addClaim')]
    public function new($id,Request $request): Response
    {
        $claimer = $this->getDoctrine()->getRepository(User::class)->find($id);
        $claim = new Claim();
        $claim->setClaimer($claimer);
        $claim->setDate(new DateTime());
        $form = $this->createForm(ClaimType::class, $claim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($claim);
            $entityManager->flush();

            return $this->redirectToRoute('showAllClaims',['id_u'=>$id]);
        }
        $errors = [];
        foreach ($form->getErrors(true, true) as $error) {
            // Get the field name associated with the error
            $fieldName = $error->getOrigin()->getName();
            // Get the error message
            $errorMessage = $error->getMessage();
            // Add error message to the array
            $errors[$fieldName] = $errorMessage;
        }
        if($claimer instanceof Recruiter)
        {
            return $this->render('claim/new.html.twig', [
                'form' => $form->createView(),
                'errors' => $errors,
                'idU'=>$id,
            ]);
        }
        if($claimer instanceof Freelancer)
        {
            return $this->render('claim/new2.html.twig', [
                'form' => $form->createView(),
                'errors' => $errors,
                'idU'=>$id,
            ]);
        }
    }
    #[Route('/claim/{id_u}/{id}', name: 'showClaim')]
    public function show(int $id,$id_u): Response
    {
        // Retrieve the claim based on the provided ID
        $claimer=$this->getDoctrine()->getRepository(User::class)->find($id_u);
        $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id);

        // Check if the claim exists
        if (!$claim) {
            throw $this->createNotFoundException('Claim not found');
        }

        if($claimer instanceof Freelancer)
        {
            return $this->render('claim/show2.html.twig', [
            'claim' => $claim,
            'idU'=>$id_u,
        ]);
        }
        if($claimer instanceof Recruiter)
        {
            return $this->render('claim/show.html.twig', [
            'claim' => $claim,
            'idU'=>$id_u,
        ]);
        }
    }
    #[Route('/claims/{id_u}', name: 'showAllClaims')]
    public function showAllClaims($id_u): Response
    {
        $claimer=$this->getDoctrine()->getRepository(User::class)->find($id_u);

        if($claimer instanceof Freelancer)
        {
            $claims = $this->getDoctrine()->getRepository(Claim::class)->findBy(['claimer'=>$claimer]);
            $claimsForMe = $this->getDoctrine()->getRepository(Claim::class)->findBy(['claimFor'=>$claimer]);
            return $this->render('claim/showall.html.twig', [
                'claims' => $claims,
                'claimsFor'=>$claimsForMe,
                'idU'=>$id_u,
            ]);
        }
        if($claimer instanceof Recruiter)
        {
            $claims = $this->getDoctrine()->getRepository(Claim::class)->findBy(['claimer'=>$claimer]);
            $claimsForMe = $this->getDoctrine()->getRepository(Claim::class)->findBy(['claimFor'=>$claimer]);
            return $this->render('claim/show_all.html.twig', [
                'claims' => $claims,
                'idU'=>$id_u,
                'claimsFor'=>$claimsForMe,
                
            ]);
        }
    }
    #[Route('/deleteclaim/{id_u}/{id}', name: 'deleteClaim')]
public function deleteClaim(int $id,$id_u): RedirectResponse
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
    return $this->redirectToRoute('showAllClaims',['id_u'=>$id_u]);
}
#[Route('/editclaim/{id_u}/{id_c}', name: 'editClaim')]
public function editClaim(int $id_u,$id_c, Request $request): Response
{
    $claim = $this->getDoctrine()->getRepository(Claim::class)->find($id_c);
    $claimer=$this->getDoctrine()->getRepository(User::class)->find($id_u);

    if (!$claim) {
        throw $this->createNotFoundException('Claim not found');
    }

    $form = $this->createForm(ClaimType::class, $claim);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', 'Claim updated successfully');

        return $this->redirectToRoute('showAllClaims',['id_u'=>$id_u]);
    }
    $errors = [];
    foreach ($form->getErrors(true, true) as $error) {
        $fieldName = $error->getOrigin()->getName();
        $errorMessage = $error->getMessage();
        $errors[$fieldName] = $errorMessage;
    }
    if($claimer instanceof Freelancer)
    {
        return $this->render('claim/new.html.twig', [
        'form' => $form->createView(),
        'errors' => $errors,
        'idU'=> $id_u,
    ]);
    }
    if($claimer instanceof Recruiter)
    {
        return $this->render('claim/new.html.twig', [
        'form' => $form->createView(),
        'errors' => $errors,
        'idU'=> $id_u,
    ]);
    }
}

    #[Route('/claim', name: 'app_claim')]
    public function index(): Response
    {
        return $this->render('claim/index.html.twig', [
            'controller_name' => 'ClaimController',
        ]);
    }
}
