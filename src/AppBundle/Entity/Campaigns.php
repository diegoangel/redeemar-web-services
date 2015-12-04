<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns")
 * @ORM\Entity
 */
class Campaigns
{
    /**
     * @var integer
     *
     * @ORM\Column(name="camp_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $campId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer", nullable=false)
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="hours", type="integer", nullable=false)
     */
    private $hours;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=200, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     */
    private $active = 'Y';



    /**
     * Get campId
     *
     * @return integer
     */
    public function getCampId()
    {
        return $this->campId;
    }

    /**
     * Set compId
     *
     * @param integer $compId
     *
     * @return Campaigns
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
     * Set name
     *
     * @param string $name
     *
     * @return Campaigns
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Campaigns
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Campaigns
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set hours
     *
     * @param integer $hours
     *
     * @return Campaigns
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     * @return integer
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Campaigns
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
     * Set active
     *
     * @param string $active
     *
     * @return Campaigns
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }
}
