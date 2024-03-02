<?php

namespace App\Controller;

use App\Entity\JobsCategory;
use App\Form\JobsCategoryType;
use App\Repository\JobsCategoryRepository;
use App\Service\PdfService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport as MailerTransport;
use Symfony\Component\Mime\Email;
use App\Entity\User;
use App\Entity\Job; // Don't forget to import the Job entity

class JobsCategoryController extends AbstractController
{
    private $pdfService;

    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    /**
     * @Route("/jobs_category", name="jobs_category_list", methods={"GET"})
     */
    public function list(Request $request, JobsCategoryRepository $categoryRepository, PaginatorInterface $paginator, EntityManagerInterface $entityManager): Response
    {
        $query = $categoryRepository->createQueryBuilder('c')
            ->orderBy('c.id', 'DESC')
            ->getQuery();

        $categories = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Items per page
        );

        // Convert the PaginationInterface to an array
        $categoriesArray = $categories->getItems();

        // Calculate job count for each category
        $categoryJobsCount = [];
        foreach ($categoriesArray as $category) {
            $categoryJobsCount[$category->getId()] = $entityManager->getRepository(Job::class)->count(['category' => $category]);
        }

        return $this->render('jobs_category/list.html.twig', [
            'categories' => $categoriesArray,
            'categoryJobsCount' => $categoryJobsCount, // Pass categoryJobsCount to the template
        ]);
    }
  
  /**
 * @Route("/jobs_category/add", name="jobs_category_add", methods={"GET", "POST"})
 */
public function add(Request $request, EntityManagerInterface $entityManager): Response
{
    $category = new JobsCategory();

    $form = $this->createForm(JobsCategoryType::class, $category);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($category);
        $entityManager->flush();

        // Sending email notification
        $users = $entityManager->getRepository(User::class)->findAll();

        $transport = MailerTransport::fromDsn('gmail+smtp://flixworkteam@gmail.com:nkbnqbibnenlciiz@default');
        $mailer = new Mailer($transport);
        $logoUrl = 'https://i.ibb.co/cgZvtRR/logo.png';

        foreach ($users as $user) {
            $email = (new Email())
                ->from('flixworkteam@gmail.com')
                ->to($user->getEmail())
                ->subject('New Category Added')
                ->html('<div style="text-align: center;"><img src="' . $logoUrl . '" alt="Logo"></div><br>'
                    . '<p>Hello ' . $user->getFullName() . ',</p>'
                    . '<p>We would like to inform you that a new Category has been added: ' . $category->getCategoryName() . '.</p>'
                    . '<p>Please review the changes and take necessary actions.</p>'
                    . '<p>Best regards,<br>FlixWork</p>');

            $mailer->send($email);
        }
        // End email sending

        return $this->redirectToRoute('jobs_category_list');
    }

    return $this->render('jobs_category/add.html.twig', [
        'form' => $form->createView(),
    ]);
}
    /**
     * @Route("/jobs_category/edit/{id}", name="jobs_category_edit", methods={"GET", "POST"})
     */
    public function edit($id, Request $request, JobsCategoryRepository $categoryRepository, EntityManagerInterface $entityManager): Response
    {
        $category = $categoryRepository->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }

        $form = $this->createForm(JobsCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('jobs_category_list');
        }

        return $this->render('jobs_category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/jobs_category/delete/{id}", name="jobs_category_delete", methods={"POST"})
     */
    public function delete($id, JobsCategoryRepository $categoryRepository, EntityManagerInterface $entityManager): Response
    {
        $category = $categoryRepository->find($id);

        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }

        $entityManager->remove($category);
        $entityManager->flush();

        return $this->redirectToRoute('jobs_category_list');
    }

    /**
     * @Route("/jobs_category/pdf/all", name="jobs_category_pdf_all", methods={"GET"})
     */
    public function generatePdfForAllCategories(JobsCategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        $html = $this->renderView('jobs_category/pdf_template_all.html.twig', [
            'categories' => $categories,

        ]);

        // Assuming you have a PdfService similar to the one in RecruiterJobController
        return $this->pdfService->generateResponsePDF($html);
    }
}
