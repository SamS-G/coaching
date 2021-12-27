<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResponseController extends AbstractController
{
    #[Route('/taekwondo', name: 'app_taekwondo')]
    public function taekwondo(): Response {
        return $this->render('main/taekwondo.html.twig', [
        'controller_name' => 'ResponseController',
        ]);
    }

    #[Route('/muaythai', name: 'app_muaythai')]
    public function muaythai(): Response {
        return $this->render('main/muay-thai.html.twig', [
            'controller_name' => 'ResponseController',
        ]);
    }


    #[Route('/crossfight', name: 'app_crossfight')]
    public function crossfight(): Response {
        return $this->render('main/crossfight.html.twig', [
            'controller_name' => 'ResponseController',
        ]);
    }
}
