<?php


namespace App\Controller;

use App\Repository\BuildingRepository;
use App\Repository\Filter\BuildingFilter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @var BuildingRepository
     */
    private $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Building::class);
    }

    /**
     * Search Building.
     * @Rest\Get("/buildings")
     *
     * @return JsonResponse
     */
    public function searchBuildingAction(Request $request)
    {
        $buildingFilter = new BuildingFilter();

        if (!empty($request->query->get('name')) && is_string($request->query->get('name')))
            $buildingFilter->setName( $request->query->get('name'));

        if (is_numeric($request->query->get('minPrice')))
            $buildingFilter->setMinPrice( $request->query->get('minPrice'));

        if (is_numeric($request->query->get('maxPrice')))
            $buildingFilter->setMaxPrice($request->query->get('maxPrice'));

        if (filter_var($request->query->get('bedrooms'),FILTER_VALIDATE_INT))
            $buildingFilter->setBedrooms($request->query->get('bedrooms'));

        if (filter_var($request->query->get('bathrooms'),FILTER_VALIDATE_INT))
            $buildingFilter->setBathrooms($request->query->get('bathrooms'));

        if (filter_var($request->query->get('storeys'),FILTER_VALIDATE_INT))
            $buildingFilter->setStoreys($request->query->get('storeys'));

        if (filter_var($request->query->get('garages'),FILTER_VALIDATE_INT))
            $buildingFilter->setGarages($request->query->get('garages'));

        $result = $this->repository->findAllByFilter($buildingFilter);

        return $this->json($result);
    }

}