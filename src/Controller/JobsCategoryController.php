<?php

namespace App\Controller;

use App\Entity\JobsCategory;
use App\Form\JobsCategoryType;
use App\Repository\JobsCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobsCategoryController extends AbstractController
{
    /**
     * @Route("/jobs_category", name="jobs_category_list", methods={"GET"})
     */
    public function list(JobsCategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        return $this->render('jobs_category/list.html.twig', [
            'categories' => $categories,
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

            return $this->redirectToRoute('jobs_category_list');
        }

        return $this->render('jobs_category/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/jobs_category/{id}", name="jobs_category_show", methods={"GET"})
     */
    public function show($id, JobsCategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);

        return $this->render('jobs_category/show.html.twig', [
            'category' => $category,
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
}

    
    

    
    
    

    
    

    
    

