<?php


namespace App\Repository\Filter;


class BuildingFilter
{
    /*
     * var string
     */
    private $name;

    /**
     * var decimal
     */
    private $minPrice;

    /**
     * var decimal
     */
    private $maxPrice;

    /**
     * var integer
     */
    private $bedrooms;

    /**
     * var integer
     */
    private $bathrooms;

    /**
     * var integer
     */
    private $storeys;

    /**
     * var integer
     */
    private $garages;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return BuildingFilter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param mixed $minPrice
     * @return BuildingFilter
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param mixed $maxPrice
     * @return BuildingFilter
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * @param mixed $bedrooms
     * @return BuildingFilter
     */
    public function setBedrooms($bedrooms)
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @param mixed $bathrooms
     * @return BuildingFilter
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStoreys()
    {
        return $this->storeys;
    }

    /**
     * @param mixed $storeys
     * @return BuildingFilter
     */
    public function setStoreys($storeys)
    {
        $this->storeys = $storeys;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGarages()
    {
        return $this->garages;
    }

    /**
     * @param mixed $garages
     * @return BuildingFilter
     */
    public function setGarages($garages)
    {
        $this->garages = $garages;

        return $this;
    }
}