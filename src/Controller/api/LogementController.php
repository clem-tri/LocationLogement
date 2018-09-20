<?php

namespace App\Controller\Api;

use App\Entity\Logement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



/**
 * Api Logement controller.
 *
 * @Route("/api")
 */
class LogementController extends Controller
{

    /**
     * Lists all Articles.
     * @FOSRest\Get("/logements")
     *
     * @return View
     */
    public function getLogementsAction()
    {
        $repository = $this->getDoctrine()->getRepository(Logement::class);

        $logement = $repository->findAll();

        return View::create($logement, Response::HTTP_OK , []);

    } /**
     * Lists all Articles.
     * @FOSRest\Get("/logement/{id}")
     *
     * @return View
     */
    public function getLogementAction($id)
    {
        $repository = $this->getDoctrine()->getRepository(Logement::class);

        // query for a single logement by its primary key (usually "id")
        $logement = $repository->find($id);

        return View::create($logement, Response::HTTP_OK , []);

    }

    /**
     * Create Logement.
     * @FOSRest\Post("/logement")
     *
     * @return View
     */
    public function postLogementAction(Request $request)
    {
        $logement = new Logement();
        $logement->setName($request->get('name'));
        $logement->setDescription($request->get('description'));
        $logement->setAddress($request->get('address'));
        $logement->setPrice($request->get('price'));
        $logement->setNbRoom($request->get('nbRoom'));
        $logement->setNbMaxVoyager($request->get('nbMaxVoyager'));
        $logement->setCoorX($request->get("coorX"));
        $logement->setCoorY($request->get("coorY"));

        $em = $this->getDoctrine()->getManager();
        $em->persist($logement);
        $em->flush();

        return View::create($logement, Response::HTTP_CREATED , []);

    }
}
