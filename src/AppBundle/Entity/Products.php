<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Products
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prod_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_prod_id", type="integer", nullable=false)
     */
    private $typeProdId;



    /**
     * Get prodId
     *
     * @return integer
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
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
     * Set typeProdId
     *
     * @param integer $typeProdId
     *
     * @return Products
     */
    public function setTypeProdId($typeProdId)
    {
        $this->typeProdId = $typeProdId;

        return $this;
    }

    /**
     * Get typeProdId
     *
     * @return integer
     */
    public function getTypeProdId()
    {
        return $this->typeProdId;
    }
}
