<?php


namespace App\Repository;

use App\Entity\Building;
use App\Repository\Filter\BuildingFilter;
use Doctrine\ORM\EntityRepository;


class BuildingRepository extends EntityRepository
{
    /**
     * @param BuildingFilter $filter
     * @return mixed
     */
    public function findAllByFilter(BuildingFilter $filter)
    {
        $qb = $this->createQueryBuilderByBuildingFilter($filter);

        return $qb->getQuery()->getResult();
    }

    /**
     * @param BuildingFilter $filter
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function createQueryBuilderByBuildingFilter(BuildingFilter $filter)
    {
        $qb = $this->createQueryBuilder('building');

        if ($filter->getName()) {
            $qb->andWhere('building.name LIKE :name')
                ->setParameter('name', '%' . $filter->getName() . '%');
        }

        if ($filter->getBathrooms()) {
            $qb->andWhere('building.bathrooms = :bathrooms')
                ->setParameter('bathrooms', $filter->getBathrooms());
        }

        if ($filter->getBedrooms()) {
            $qb->andWhere('building.bedrooms = :bedrooms')
                ->setParameter('bedrooms', $filter->getBedrooms());
        }

        if ($filter->getGarages()) {
            $qb->andWhere('building.garages = :garages')
                ->setParameter('garages', $filter->getGarages());
        }

        if ($filter->getStoreys()) {
            $qb->andWhere('building.storeys = :storeys')
                ->setParameter('storeys', $filter->getStoreys());
        }

        if ($filter->getMinPrice() && $filter->getMaxPrice()) {
            $qb->andWhere('building.price > :minPrice')
                ->andWhere('building.price < :maxPrice')
                ->setParameter('minPrice', $filter->getMinPrice())
                ->setParameter('maxPrice', $filter->getMaxPrice());
        } elseif ($filter->getMinPrice()) {
            $qb->andWhere('building.price > :minPrice')
                ->setParameter('minPrice', $filter->getMinPrice());
        } elseif ($filter->getMaxPrice()) {
            $qb->andWhere('building.price < :maxPrice')
                ->setParameter('maxPrice', $filter->getMaxPrice());
        }

        return $qb;
    }

}