<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ['vampir daries', 'loki', 'black widow', 'john week', 'barby', 'avangers: endgame'];
        return $this->render('index.html.twig', array(
            'movies' => $movies

        ));
    }
}
