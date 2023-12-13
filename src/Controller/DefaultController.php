<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('index.html.twig', ['name' => 'tata']);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
    #[Route('/connecter', name: 'app_connecter')]
    public function connecter(): Response
    {
        return $this->render('connecter.html.twig');
    }

    #[Route('/viande', name: 'app_viande')]
    public function viande(): Response
    {
        return $this->render('galerie_1.html.twig');
    }
}
