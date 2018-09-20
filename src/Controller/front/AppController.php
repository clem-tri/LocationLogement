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
        return $this->render('app/map.html.twig', []);
    }

    /**
     * @Route("/profile", name="profile")
     *
     */
}
