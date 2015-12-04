<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="prof_id", columns={"prof_id"}), @ORM\Index(name="credit_card_id", columns={"credit_card_id"})})
 * @ORM\Entity
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="prof_id", type="integer", nullable=true)
     */
    private $profId;

    /**
     * @var integer
     *
     * @ORM\Column(name="credit_card_id", type="integer", nullable=true)
     */
    private $creditCardId;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", nullable=false)
     */
    private $active = 'Y';



    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set profId
     *
     * @param integer $profId
     *
     * @return Users
     */
    public function setProfId($profId)
    {
        $this->profId = $profId;

        return $this;
    }

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
     * Set creditCardId
     *
     * @param integer $creditCardId
     *
     * @return Users
     */
    public function setCreditCardId($creditCardId)
    {
        $this->creditCardId = $creditCardId;

        return $this;
    }

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
     * Set active
     *
     * @param string $active
     *
     * @return Users
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
