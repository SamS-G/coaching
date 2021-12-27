<?php

namespace App\Controller;

use App\Form\AppointmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppointmentController extends AbstractController
{
    #[Route('/appointment', name: 'appointment')]
    public function index(): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(AppointmentType::class);

        return $this->render('appointment/appointment.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }


}
