<?php

namespace App\Controller;

use App\Entity\Job;
use App\Entity\User;
use App\Form\JobType;
use App\Repository\JobRepository;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Transport as MailerTransport;
use Symfony\Component\Mime\Email;



class RecruiterJobController extends AbstractController
{
    /**
     * @Route("/recruiter/job", name="recruiter_job_list")
     */
    public function list(JobRepository $jobRepository): Response
    {
       
        $jobs = $jobRepository->findAll(); // Retrieve all jobs

        return $this->render('recruiter/job/list.html.twig', [
            'jobs' => $jobs,

        ]);
    }

/**
 * @Route("/recruiter/job/add", name="recruiter_job_add")
 */
public function add(Request $request, EntityManagerInterface $entityManager): Response
{
    $users = $entityManager->getRepository(User::class)->findAll(); // Retrieve all users

    $job = new Job();

    $form = $this->createForm(JobType::class, $job);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Mailing:
        $transport = MailerTransport::fromDsn('gmail+smtp://flixworkteam@gmail.com:nkbnqbibnenlciiz@default');
        $mailer = new Mailer($transport);
        $logoUrl = 'https://i.ibb.co/cgZvtRR/logo.png';

        foreach ($users as $user) {
            $email = (new Email())
                ->from('flixworkteam@gmail.com')
                ->to($user->getEmail())
                ->subject('New Job Added')
                ->html('<div style="text-align: center;"><img src="' . $logoUrl . '" alt="Logo"></div><br>'
                    . '<p>Hello ' . $user->getFullName() . ',</p>'
                    . '<p>We would like to inform you that a new Job has been added to your works: ' . $job->getTitle() . '.</p>'
                    . '<p>Please review the postulation and take necessary actions.</p>'
                    . '<p>Best regards,<br>FlixWork</p>');

            $mailer->send($email);
        }
        // End mailer

        $entityManager->persist($job);
        $entityManager->flush();

        return $this->redirectToRoute('recruiter_job_list');
    }

    return $this->render('recruiter/job/add.html.twig', [
        'form' => $form->createView(),
    ]);
}

 
 

 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 

 
 
 

 
 
 
 

    /**
     * @Route("/recruiter/job/{id}", name="recruiter_job_show")
     */
    public function show($id, JobRepository $jobRepository): Response
    {
        $job = $jobRepository->find($id);

        // Assuming the category name is stored in the 'categoryName' property of the related category
        $relatedJobs = $jobRepository->findBy(['category' => $job->getCategory()]);

        return $this->render('recruiter/job/show.html.twig', [
            'job' => $job,
            'relatedJobs' => $relatedJobs,
        ]);
    }

    /**
     * @Route("/recruiter/job/edit/{id}", name="recruiter_job_edit")
     */
    public function edit($id, Request $request, JobRepository $jobRepository, EntityManagerInterface $entityManager): Response
    {
        $job = $jobRepository->find($id);

        if (!$job) {
            throw $this->createNotFoundException('Job not found');
        }

        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('recruiter_job_list');
        }

        return $this->render('recruiter/job/edit.html.twig', [
            'job' => $job,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/recruiter/job/delete/{id}", name="recruiter_job_delete")
     */
    public function delete($id, JobRepository $jobRepository, EntityManagerInterface $entityManager): Response
    {
        $job = $jobRepository->find($id);

        if (!$job) {
            throw $this->createNotFoundException('Job not found');
        }

        $entityManager->remove($job);
        $entityManager->flush();

        return $this->redirectToRoute('recruiter_job_list');
    }

    /**
     * @Route("/recruiter/job/related/{id}", name="recruiter_job_related")
     */
    public function relatedJobs($id, JobRepository $jobRepository): Response
    {
        $job = $jobRepository->find($id);

        // Assuming the category name is stored in the 'categoryName' property of the related category
        $relatedJobs = $jobRepository->findBy(['category' => $job->getCategory()]);

        return $this->render('recruiter/job/related.html.twig', [
            'job' => $job,
            'relatedJobs' => $relatedJobs,
        ]);
    }



/**
     * @Route("/recruiter/job/pdf/all", name="recruiter_job_pdf_all", methods={"GET"})
     */
    public function generatePdfForAllJobs(JobRepository $jobRepository, PdfService $pdfService): Response
    {
        $jobs = $jobRepository->findAll();

        $html = $this->renderView('recruiter/job/pdf_template_all.html.twig', [
            'jobs' => $jobs,
        ]);

        return $pdfService->generateResponsePDF($html, 'recruiter_job_list');



}
}
