<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;  // Ajout de l'import UserRepository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    #[Route('/app_user', name: "app_user")] // Modifier le nom de la route
    public function app_user(): Response // Renommer la méthode
    {   
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'users' => $user
        ]);
    }
   

    #[Route('/app_user', name: "app_user")] // Modifier le nom de la route
    public function index(): Response // Renommer la méthode
    {   
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findAll();
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'users' => $user
        ]);
    }
    
    
    #[Route('/admin', name: "display_admin")]
    public function indexAdmin(): Response
    {   
        return $this->render('Admin/index.html.twig');
    }
    #[Route('/client', name: "display_client")]
    public function indexClient(): Response
    {   
        return $this->render('Client/index.html.twig');
    }

    #[Route('/adduser', name: "adduser")]
    public function adduser(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));
            $entityManager->flush();
            return $this->redirectToRoute('app_login');
        }
        
        
        return $this->render('user/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/deleteUser/{id}', name: "supp_user")]
    public function suppressionUser($id, UserRepository $repo): Response
    {   
        $em = $this->getDoctrine()->getManager();
        $user = $repo->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('app_user');
    }

    #[Route('/modifuser/{id}', name: "modifuser")]
    public function modifuser(Request $request, $id): Response
    {
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            
            return $this->redirectToRoute('app_user');
        }
        
        
        return $this->render('user/update.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    
}
