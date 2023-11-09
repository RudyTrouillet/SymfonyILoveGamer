<?php

namespace App\Controller;

use App\Entity\Games;
use App\Form\SearchGameType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HomeController extends AbstractController
{
    // #[Route('/', name: 'app_home',methods:['GET','POST'])]
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
}
