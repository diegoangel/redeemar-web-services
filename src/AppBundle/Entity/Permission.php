<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="permission", indexes={@ORM\Index(name="resource_id", columns={"resource_id"})})
 * @ORM\Entity
 */
class Permission
{
    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;

    /**
     * @var string
     *
     * @ORM\Column(name="permission_name", type="string", length=45, nullable=false)
     */
    private $permissionName;

    /**
     * @var \AppBundle\Entity\Resource
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Resource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="resource_id")
     * })
     */
    private $resource;



    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set permissionName
     *
     * @param string $permissionName
     *
     * @return Permission
     */
    public function setPermissionName($permissionName)
    {
        $this->permissionName = $permissionName;

        return $this;
    }

    /**
     * Get permissionName
     *
     * @return string
     */
    public function getPermissionName()
    {
        return $this->permissionName;
    }

    /**
     * Set resource
     *
     * @param \AppBundle\Entity\Resource $resource
     *
     * @return Permission
     */
    public function setResource(\AppBundle\Entity\Resource $resource = null)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource
     *
     * @return \AppBundle\Entity\Resource
     */
    public function getResource()
    {
        return $this->resource;
    }
}
