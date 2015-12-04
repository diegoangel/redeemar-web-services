<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profiles
 *
 * @ORM\Table(name="profiles")
 * @ORM\Entity
 */
class Profiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prof_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=100, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=false)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone", type="bigint", nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="blob", nullable=false)
     */
    private $pdf;



    /**
     * Get profId
     *
     * @return integer
     */
    public function getProfId()
    {
        return $this->profId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Profiles
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Profiles
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Profiles
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
     * Set image
     *
     * @param string $image
     *
     * @return Profiles
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set pdf
     *
     * @param string $pdf
     *
     * @return Profiles
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }
}
