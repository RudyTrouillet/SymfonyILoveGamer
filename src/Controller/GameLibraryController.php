<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameLibraryController extends AbstractController
{
    #[Route('/game/library', name: 'app_game_library')]
    public function index(): Response
    {
        return $this->render('game_library/index.html.twig', [
            'videoGames'=> $this->getUser()->getVideogames()
        ]);
    }
}
