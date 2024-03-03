<?php

namespace App\Controller;

use App\Entity\TrainingCategory;
use App\Form\TrainingCategoryType;
use App\Repository\TrainingCategoryRepository;
use App\Repository\TrainingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

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
        
        if ($form->isSubmitted() && $form->isValid())
        {

            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('listcategorie');
        }
        $errors = [];
        foreach ($form->getErrors(true, true) as $error) {
            $fieldName = $error->getOrigin()->getName();
            $errorMessage = $error->getMessage();
            $errors[$fieldName] = $errorMessage;
        }
        
        return $this->render('training_category/add.html.twig', [
            'formcat' => $form->createView(),
            'errors' => $errors,
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

           $errors = [];
           foreach ($form->getErrors(true, true) as $error) {
               $fieldName = $error->getOrigin()->getName();
               $errorMessage = $error->getMessage();
               $errors[$fieldName] = $errorMessage;
           }

           return $this->render('training_category/add.html.twig', [
               'formcat' => $form->createView(),
               'errors' =>$errors,
           ]);
           
   }



   #[Route('/searchCat', name: 'search_categorie')]
   public function search(Request $request, TrainingCategoryRepository $trainingcategoryRepository): Response
   {
       $searchTerm = $request->query->get('t');
       $categories = $trainingcategoryRepository->findBycategory_name($searchTerm);

       return $this->render('training_category/searchCat.html.twig', [
           'controller_name' => 'TrainingController',
           'categories' => $categories,
       ]);
   }


   #[Route('/generate-pdf_cat', name: 'generate_pdf_cat')]
   public function generatePdf(TrainingCategoryRepository $trainingcategoryRepository): Response
   {
       $categories = $trainingcategoryRepository->findAll();
       
       if (!$categories) {
           throw $this->createNotFoundException('Aucune formation trouvée.');
       }
   
       $html = $this->renderView('training_category/pdf_cat.html.twig', [
           'categories' => $categories,
       ]);
   
       $dompdf = new Dompdf();
       $dompdf->loadHtml($html);
       $dompdf->setPaper('A3', 'landscape');
       $dompdf->render();
   
       return new Response($dompdf->output(), Response::HTTP_OK, [
           'Content-Type' => 'application/pdf',
       ]);
   }


   #[Route('/categorie/{id}', name: 'showcategorie')]
public function showcategorie($id, TrainingCategoryRepository $trainingCategoryRepository): Response
{
    $categorie = $trainingCategoryRepository->find($id);
    return $this->render('training_category/show.html.twig', [
        'categorie' => $categorie,
    ]);
}


#[Route('/chart', name: 'chart')]
public function chart(TrainingCategoryRepository $tc, TrainingRepository $trainingRepository): Response
{
    $categories = $tc->findAll();

    $categoryLabels = [];
    $categoryCounts = [];

    foreach ($categories as $category) {
        $categoryLabels[] = $category->getCategoryName();
        $trainings = $trainingRepository->findBy(['category' => $category]);
        $categoryCounts[] = count($trainings);
    }

    return $this->render('training_category/chart.html.twig', [
        'categoryLabels' => json_encode($categoryLabels),
        'categoryCounts' => json_encode($categoryCounts),
    ]);
}


#[Route('/generate-csv-cat', name: 'generate_csv_cat')]
public function generateCsvCat(TrainingCategoryRepository $categoryRepository): Response
{
    $categories = $categoryRepository->findAll();
    
    if (!$categories) {
        throw $this->createNotFoundException('Aucune catégorie trouvée.');
    }

   
    $csvData = "ID,NAME OF CATEGORY\n";

   
    foreach ($categories as $category) {
        $csvData .= $category->getId() . ',' .
                    '"' . $category->getCategoryName() . '"' .
                    "\n";
    }

   
    $response = new Response($csvData);

   
    $response->headers->set('Content-Type', 'text/csv');
    $response->headers->set('Content-Disposition', 'attachment; filename="liste_categories_formations.csv"');

    return $response;
}

   


    

}
