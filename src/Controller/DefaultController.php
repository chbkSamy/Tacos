<?php

namespace App\Controller;

use App\Entity\Dessert;
use App\Repository\DrinkRepository;
use App\Repository\SauceRepository;
use App\Repository\TacosRepository;
use App\Repository\ViandeRepository;
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
        return $this->render('register.html.twig');
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
    #[Route('/Tacos', name: 'app_tacos')]

    public function tacos(): Response
    {
        return $this->render('galerie_2.html.twig');
    }
    #[Route('/sauce', name: 'app_sauce')]
    public function sauce(): Response
    {
        return $this->render('galerie_3.html.twig');
    }
    #[Route('/boisson', name: 'app_boisson')]
    public function boisson(): Response
    {
        return $this->render('galerie_4.html.twig');
    }
    #[Route('/desert', name: 'app_dessert')]
    public function dessert(): Response
    {
        return $this->render('galerie_5.html.twig');
    }

    #[Route('/viande', name: 'app_viande')]
    public function showv(ViandeRepository $repository): Response
    {
        return $this->render('galerie_1.html.twig',['viandes'=> $repository ->findAll()]);
    }
    #[Route('/tacos', name: 'app_tacos')]
    public function showt(TacosRepository $repository): Response
    {
        return $this->render('galerie_2.html.twig',['tacoss'=> $repository ->findAll()]);
    }
    #[Route('/sauce', name: 'app_sauce')]
    public function shows(SauceRepository $repository): Response
    {
        return $this->render('galerie_3.html.twig',['sauces'=> $repository ->findAll()]);
    }
    #[Route('/boisson', name: 'app_boisson')]
    public function showb(DrinkRepository $repository): Response
    {
        return $this->render('galerie_4.html.twig',['boissons'=> $repository ->findAll()]);
    }
    #[Route('/dessert', name: 'app_dessert')]
    public function showd(DessertRepository $repository): Response
    {
        return $this->render('galerie_5.html.twig',['desserts'=> $repository ->findAll()]);
    }
}
