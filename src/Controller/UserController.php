<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserInformation;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {

        /*  create an User and UserInformation */
        $user = new User();
        $userInformation = new UserInformation();

        $form = $this->createForm(UserType::class, $user);


        return $this->render('user/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
