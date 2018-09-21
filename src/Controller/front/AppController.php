<?php

namespace App\Controller\Front;

use App\Controller\Api\LogementController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AppController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route("/map", name="map")
     */
    public function map(Request $request): Response
    {

        //$search = $_POST['search'];
        //var_dump($request->getSession());


        $result = $request->request->get('search');
        $coords = [2.2770205, 48.8589507];
        if($result){
          $url = "https://photon.komoot.de/api/?q=$result&limit=5&lang=fr";
          $content = json_decode(file_get_contents($url));
          $coords = $content->features[0]->geometry->coordinates;
        }


        return $this->render('app/map.html.twig', [
          'coords' => $coords
        ]);
    }



}
