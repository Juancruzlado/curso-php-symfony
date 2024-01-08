<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    public function register(Request $request, UserPasswordHasherInterface $encoder, PersistenceManagerRegistry $doctrine)
    {
        $user =  new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $user->setRole('USER_ROLE');
            $user->setCreatedAt(new \DateTime('now'));
            $encoded = $encoder->hashPassword($user, $user->getPassword());
            $user->setPassword($encoded);
            var_dump($user);

            $em = $doctrine->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }


    public function login(AuthenticationUtils $authentication){
        $error = $authentication->getLastAuthenticationError();
        $lastUsername = $authentication->getLastUsername();

        return $this->render('user/login.html.twig', array(
            'error' => $error,
            'last_username' => $lastUsername
        ));
    }

}
