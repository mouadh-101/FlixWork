<?php

namespace App\Controller;

use App\Entity\TrainingCategory;
use App\Form\TrainingCategoryType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingCategoryController extends AbstractController
{
   
    #[Route('/categorie_list', name: 'listcategorie')]
    public function list(ManagerRegistry $doctrine): Response
    {   $categorierep=$doctrine->getRepository(TrainingCategory::class);
        $categorie=$categorierep->findAll();
        return $this->render('training_category/list.html.twig', [
            'categories' => $categorie,
        ]);
    }

    #[Route('/categorieadd', name: 'addcategorie')]
    public function addcategorie(ManagerRegistry $doctrine,Request $request): Response
    {    
        $categorie =New TrainingCategory;
        $form=$this->createForm(TrainingCategoryType::class,$categorie);
        $form->handleRequest($request);
        $em=$doctrine->getManager();
        
        if ($form->isSubmitted())
        {

            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('listcategorie');
        }
        
        return $this->render('training_category/add.html.twig', [
            'formcat' => $form->createView(),
        ]);
    }

    #[Route('/deletecategorie/{id}', name: 'deletecategorie')]
    public function deletecategorie($id, ManagerRegistry $doctrine): Response
    {
        $categorieRepository = $doctrine->getRepository(TrainingCategory::class); 
        $categorie = $categorieRepository->find($id);
    
        if (!$categorie) {
            throw $this->createNotFoundException('book not found');
        }
    
        $em = $doctrine->getManager();
        $em->remove($categorie);
        $em->flush();
    
        return $this->redirectToRoute('listcategorie');
    }


    #[Route('/editc/{id}',name:'editcategorie')]
    public function editcategorie($id,ManagerRegistry $doctrine,Request $request): Response{
       $em=$doctrine->getManager();
      $categorie=$em->getRepository(TrainingCategory::class)->find($id);
      $form=$this->createForm(TrainingCategoryType::class,$categorie);
      $form->handleRequest($request);
      if($form->isSubmitted()){
       $em->persist($categorie);
      $em->flush();
      return $this->redirectToRoute('listcategorie');
     
      
           }
           return $this->render('training_category/add.html.twig', [
               'formcat' => $form->createView(),
           ]);
           
   }


    

}
