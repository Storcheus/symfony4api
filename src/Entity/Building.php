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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     */
    public function setBedrooms($bedrooms): void
    {
        $this->bedrooms = $bedrooms;
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
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
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
     */
    public function setStoreys($storeys)
    {
        $this->storeys = $storeys;
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
     */
    public function setGarages($garages)
    {
        $this->garages = $garages;
    }
}