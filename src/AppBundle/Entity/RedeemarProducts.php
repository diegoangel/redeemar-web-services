<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RedeemarProducts
 *
 * @ORM\Table(name="redeemar_products")
 * @ORM\Entity
 */
class RedeemarProducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="red_prod_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $redProdId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type_prod", type="string", length=100, nullable=false)
     */
    private $typeProd;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="bigint", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $price;



    /**
     * Get redProdId
     *
     * @return integer
     */
    public function getRedProdId()
    {
        return $this->redProdId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return RedeemarProducts
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
     * Set typeProd
     *
     * @param string $typeProd
     *
     * @return RedeemarProducts
     */
    public function setTypeProd($typeProd)
    {
        $this->typeProd = $typeProd;

        return $this;
    }

    /**
     * Get typeProd
     *
     * @return string
     */
    public function getTypeProd()
    {
        return $this->typeProd;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return RedeemarProducts
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return RedeemarProducts
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
