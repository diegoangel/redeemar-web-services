<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditCard
 *
 * @ORM\Table(name="credit_card")
 * @ORM\Entity
 */
class CreditCard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="credit_card_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $creditCardId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="card_number", type="bigint", nullable=false)
     */
    private $cardNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=100, nullable=false)
     */
    private $bank;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exp_data", type="date", nullable=false)
     */
    private $expData;

    /**
     * @var integer
     *
     * @ORM\Column(name="security_code", type="integer", nullable=false)
     */
    private $securityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     */
    private $active = 'Y';



    /**
     * Get creditCardId
     *
     * @return integer
     */
    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return CreditCard
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
     * Set cardNumber
     *
     * @param integer $cardNumber
     *
     * @return CreditCard
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get cardNumber
     *
     * @return integer
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set bank
     *
     * @param string $bank
     *
     * @return CreditCard
     */
    public function setBank($bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set expData
     *
     * @param \DateTime $expData
     *
     * @return CreditCard
     */
    public function setExpData($expData)
    {
        $this->expData = $expData;

        return $this;
    }

    /**
     * Get expData
     *
     * @return \DateTime
     */
    public function getExpData()
    {
        return $this->expData;
    }

    /**
     * Set securityCode
     *
     * @param integer $securityCode
     *
     * @return CreditCard
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Get securityCode
     *
     * @return integer
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return CreditCard
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
