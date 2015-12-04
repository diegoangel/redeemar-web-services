<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logos
 *
 * @ORM\Table(name="logos")
 * @ORM\Entity
 */
class Logos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="logo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer", nullable=false)
     */
    private $compId;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=200, nullable=false)
     */
    private $logo;



    /**
     * Get logoId
     *
     * @return integer
     */
    public function getLogoId()
    {
        return $this->logoId;
    }

    /**
     * Set compId
     *
     * @param integer $compId
     *
     * @return Logos
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Logos
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
