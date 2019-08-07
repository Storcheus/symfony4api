<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="building")
 */
class Building
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     *
     */
    private $name;
    /**
     * @ORM\Column(type="decimal", scale=2)
     *
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=100)
     *
     */
    private $bedrooms;
    /**
     * @ORM\Column(type="integer")
     *
     */
    private $bathrooms;

    /**
     * @ORM\Column(type="integer")
     *
     */
    private $storeys;
    /**
     * @ORM\Column(type="integer")
     *
     */
    private $garages;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Building
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return Building
     */
    public function setPrice($price)
    {
        if (ctype_digit($price))
            $this->price = doubleval($price);
        else
            $this->price = 0;

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
     * @return Building
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
     * @return Building
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
     * @return Building
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
     * @return Building
     */
    public function setGarages($garages)
    {
        $this->garages = $garages;

        return $this;
    }
}