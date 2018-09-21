<?php

namespace App\Controller\Api;

use App\Entity\Location;
use App\Entity\Logement;
use App\Entity\User;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Symfony\Component\Validator\Constraints\Date;


/**
 * Api Logement controller.
 *
 * @Route("/api")
 */
class LocationController extends Controller
{
    /**
     * Create Location.
     * @FOSRest\Post("/location")
     *
     * @return View
     */
    public function postLogementAction(Request $request)
    {

        $logementRepository = $this->getDoctrine()->getRepository(Logement::class);
        /** @var Logement $logement */
        $logement = $logementRepository->find($request->get('logement_id'));

        $userRepository = $this->getDoctrine()->getRepository(User::class);
        /** @var User $user */
        $user = $userRepository->find(1); //$request->get('user_id')

        $location = new Location();
        $location->setLogement($logement);
        $location->setUser($user);
        $location->setDtStLocation(new \DateTime($request->get('dt_st_location')));
        $location->setDtEndLocation(new \DateTime($request->get('dt_end_location')));
        $location->setNbVoyager(intval($request->get('nb_voyager')));

        $em = $this->getDoctrine()->getManager();
        $em->persist($location);
        $em->flush();

        return View::create($location, Response::HTTP_CREATED , []);

    }
}
