<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Building;

/**
 * Building controller.
 * @Route("/api", name="api_")
 */
class BuildingController extends FOSRestController
{
    /**
     * Lists all Buildings.
     * @Rest\Get("/buildings")
     *
     * @return Response
     */
    public function getBuildingAction()
    {
        $repository = $this->getDoctrine()->getRepository(Building::class);
        $movies = $repository->findall();
        return $this->handleView($this->view($movies));
    }
}