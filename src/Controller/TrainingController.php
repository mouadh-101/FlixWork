<?php

namespace App\Controller;

use App\Entity\Training;
use App\Entity\User;
use App\Form\TrainingType;
use App\Repository\TrainingCategoryRepository;
use App\Repository\TrainingRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface ;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainingController extends AbstractController
{

    #[Route('/trainings/list', name: 'list_training')]
    public function listr(TrainingRepository $trainingRepository): Response
    {
        $trainings = $trainingRepository->findAll();

        return $this->render('training/list.html.twig' , [
            'trainings' => $trainings,
        ]);
    }
    #[Route('/trainingf/list', name: 'list_trainingf')]
    public function listf(TrainingRepository $trainingRepository,TrainingCategoryRepository $tc): Response
    {
        $trainings = $trainingRepository->findAll();
        $categories=$tc->findAll();

        return $this->render('training/listf.html.twig' , [
            'trainings' => $trainings,
            'categories'=>$categories
        ]);
    }

    #[Route('/trainingf/list/{id_cat}', name: 'list_trainingbycat')]
    public function listc($id_cat,TrainingRepository $trainingRepository,TrainingCategoryRepository $tc): Response
    {
        $cat=$tc->find($id_cat);
        $trainings = $trainingRepository->findBy(['category'=>$cat]);
        $categories=$tc->findAll();
        return $this->render('training/listf.html.twig' , [
            'trainings' => $trainings,
            'categories'=>$categories
        ]);
    }




    #[Route('/training/add', name: 'addtraining')]
    public function addTraining(ManagerRegistry $doctrine, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find(1);

        $training = new Training();
        $training->setTrainer($user);
       
       
        $form = $this->createForm(TrainingType::class, $training);
        $form->handleRequest($request);
        $em = $doctrine->getManager();

        if ($form->isSubmitted() ) { 
            
            $em->persist($training);
            $em->flush();

            return $this->redirectToRoute('list_training');
        }

        return $this->render('training/addTraining.html.twig', [
            'formA' => $form->createView(),
        ]);
    }
    

    #[Route('/training/{id}', name: 'showtraining')]
    public function showTraining($id,TrainingRepository $trainingRepository): Response
    {
        $training = $trainingRepository->find($id);
        return $this->render('training/detailtraining.html.twig', [
            'training' => $training,
        ]);
    }
    



    #[Route('/deletetraining/{id}', name: 'deletetraining')]
    public function deleteTraining($id, ManagerRegistry $doctrine): Response
    {
        $trainingRepository = $doctrine->getRepository(Training::class); 
        $training = $trainingRepository->find($id);
    
        if (!$training) {
            throw $this->createNotFoundException('Training not found');
        }
    
        $em = $doctrine->getManager();
        $em->remove($training);
        $em->flush();
    
        return $this->redirectToRoute('list_training');
    }

      


    #[Route('/edit/{id}',name:'edit')]
 public function edit($id,ManagerRegistry $doctrine,Request $request): Response{
    $em=$doctrine->getManager();
   $training=$em->getRepository(Training::class)->find($id);
   $form=$this->createForm(TrainingType::class,$training);
   $form->handleRequest($request);
   if($form->isSubmitted()){
    $em->persist($training);
   $em->flush();
   return $this->redirectToRoute('list_training');
  
   
        }
        return $this->render('training/addTraining.html.twig', [
            'formA' => $form->createView(),
        ]);
        
}
}
