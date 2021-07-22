<?php

namespace App\Controller;

use App\Repository\PhotographyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PhotographyRepository $photographyRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'photographies' => $photographyRepository->findAll(),
            'controller_name' => 'HomeController',
        ]);
    }
}
