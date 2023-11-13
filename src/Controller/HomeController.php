<?php

namespace App\Controller;

use App\Entity\Games;
use App\Form\SearchGameType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, HttpClientInterface $client): Response
    {
        // $game= new Games();
        $form = $this->createForm(SearchGameType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $search_result = ($request->request->all()['search_game']['gameName']);
            $search = $form->getData();
            // dd($search);
            $response = $client->request(
                    'GET',
                    "https://api.rawg.io/api/games?key=" . 'b6cc0d847c8f4000b5e6c5f2aa5f8c7a' . "&search=" . $search['gameName']
            );
            
            $results = $response->toArray();
            // dd($results);
 
                //return view results
            return $this->render('home/results.html.twig', [
                  'videoGames' => $results['results'],
                  'searchedGame' => $search['gameName']
            ]);
        }
        return $this->render('home/index.html.twig', [
           'form'=> $form->createView()
        ]);
    }
    
    #[Route('add_game/{id}', name: 'game_add', methods: ['GET'])]
    public function addgame( int $id,EntityManagerInterface $em, Request $request, HttpClientInterface $client): Response

    {
        $gameAPI=$client->request(
            'GET',
            "https://api.rawg.io/api/games/" . $id ."?key=" . 'b6cc0d847c8f4000b5e6c5f2aa5f8c7a'
        );
        $gameToAdd = $gameAPI->toArray();
        $game = new Games();
        $game->setname($gameToAdd['name']);
        $game->setSlug($gameToAdd['slug']);
        $game->setBackgroundImage($gameToAdd['background_image']);
        $user = $this->getUser();
        $user->addVideogame($game);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute("app_game_library");
    }
}
