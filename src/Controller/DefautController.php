<?php

namespace App\Controller;

use App\Repository\MediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefautController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(MediaRepository $mediaRepository): Response
    {
        $medias = $mediaRepository->findAll();

        return $this->render('defaut/index.html.twig', [
            'controller_name' => 'DefautController',
            'medias'=>$medias
        ]);
    }
}
