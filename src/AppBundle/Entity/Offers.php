<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity
 */
class Offers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="camp_id", type="integer", nullable=false)
     */
    private $campId;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=100, nullable=true)
     */
    private $product;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="final_price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $finalPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="dollars", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $dollars;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentage", type="integer", nullable=true)
     */
    private $percentage;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="redeemars", type="integer", nullable=true)
     */
    private $redeemars;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="gross_margin", type="integer", nullable=true)
     */
    private $grossMargin;

    /**
     * @var string
     *
     * @ORM\Column(name="markup", type="string", length=100, nullable=true)
     */
    private $markup;

    /**
     * @var string
     *
     * @ORM\Column(name="scan", type="blob", nullable=true)
     */
    private $scan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     */
    private $active = 'Y';



    /**
     * Get offerId
     *
     * @return integer
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set campId
     *
     * @param integer $campId
     *
     * @return Offers
     */
    public function setCampId($campId)
    {
        $this->campId = $campId;

        return $this;
    }

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
     * Set product
     *
     * @param string $product
     *
     * @return Offers
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Offers
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Offers
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
     * Set image
     *
     * @param string $image
     *
     * @return Offers
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
     * Set finalPrice
     *
     * @param string $finalPrice
     *
     * @return Offers
     */
    public function setFinalPrice($finalPrice)
    {
        $this->finalPrice = $finalPrice;

        return $this;
    }

    /**
     * Get finalPrice
     *
     * @return string
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    /**
     * Set dollars
     *
     * @param string $dollars
     *
     * @return Offers
     */
    public function setDollars($dollars)
    {
        $this->dollars = $dollars;

        return $this;
    }

    /**
     * Get dollars
     *
     * @return string
     */
    public function getDollars()
    {
        return $this->dollars;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     *
     * @return Offers
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return integer
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return Offers
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set redeemars
     *
     * @param integer $redeemars
     *
     * @return Offers
     */
    public function setRedeemars($redeemars)
    {
        $this->redeemars = $redeemars;

        return $this;
    }

    /**
     * Get redeemars
     *
     * @return integer
     */
    public function getRedeemars()
    {
        return $this->redeemars;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Offers
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set grossMargin
     *
     * @param integer $grossMargin
     *
     * @return Offers
     */
    public function setGrossMargin($grossMargin)
    {
        $this->grossMargin = $grossMargin;

        return $this;
    }

    /**
     * Get grossMargin
     *
     * @return integer
     */
    public function getGrossMargin()
    {
        return $this->grossMargin;
    }

    /**
     * Set markup
     *
     * @param string $markup
     *
     * @return Offers
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;

        return $this;
    }

    /**
     * Get markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Set scan
     *
     * @param string $scan
     *
     * @return Offers
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * Get scan
     *
     * @return string
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Offers
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Offers
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
