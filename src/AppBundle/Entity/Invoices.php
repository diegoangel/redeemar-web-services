<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="invoices")
 * @ORM\Entity
 */
class Invoices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inv_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=100, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="offer_id", type="string", length=100, nullable=false)
     */
    private $offerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="bigint", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'Y';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inv_date", type="date", nullable=false)
     */
    private $invDate;



    /**
     * Get invId
     *
     * @return integer
     */
    public function getInvId()
    {
        return $this->invId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return Invoices
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set offerId
     *
     * @param string $offerId
     *
     * @return Invoices
     */
    public function setOfferId($offerId)
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * Get offerId
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return Invoices
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
     * Set status
     *
     * @param string $status
     *
     * @return Invoices
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Invoices
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
     * Set invDate
     *
     * @param \DateTime $invDate
     *
     * @return Invoices
     */
    public function setInvDate($invDate)
    {
        $this->invDate = $invDate;

        return $this;
    }

    /**
     * Get invDate
     *
     * @return \DateTime
     */
    public function getInvDate()
    {
        return $this->invDate;
    }
}
