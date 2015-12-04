<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations")
 * @ORM\Entity
 */
class Locations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="loc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer", nullable=false)
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="comp_name", type="string", length=100, nullable=false)
     */
    private $compName;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="bigint", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=false)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="latitude", type="bigint", nullable=true)
     */
    private $latitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="bigint", nullable=true)
     */
    private $length;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_id", type="bigint", nullable=true)
     */
    private $taxId;



    /**
     * Get locId
     *
     * @return integer
     */
    public function getLocId()
    {
        return $this->locId;
    }

    /**
     * Set compId
     *
     * @param integer $compId
     *
     * @return Locations
     */
    public function setCompId($compId)
    {
        $this->compId = $compId;

        return $this;
    }

    /**
     * Get compId
     *
     * @return integer
     */
    public function getCompId()
    {
        return $this->compId;
    }

    /**
     * Set compName
     *
     * @param string $compName
     *
     * @return Locations
     */
    public function setCompName($compName)
    {
        $this->compName = $compName;

        return $this;
    }

    /**
     * Get compName
     *
     * @return string
     */
    public function getCompName()
    {
        return $this->compName;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Locations
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Locations
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Locations
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Locations
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Locations
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set latitude
     *
     * @param integer $latitude
     *
     * @return Locations
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return integer
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return Locations
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set taxId
     *
     * @param integer $taxId
     *
     * @return Locations
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId
     *
     * @return integer
     */
    public function getTaxId()
    {
        return $this->taxId;
    }
}
