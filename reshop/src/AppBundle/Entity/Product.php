<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="cate_product", columns={"cateId"}), @ORM\Index(name="user_product", columns={"userId"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var string
     *
     * *@Assert\NotBlank(
     *     message="Name not blank"
     * )
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255, nullable=true)
     */
    private $details;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="diameter", type="float", precision=12, scale=0, nullable=true)
     */
    private $diameter;

    /**
     * @var integer
     *
     * @ORM\Column(name="productId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productid;

    /**
     * @var \AppBundle\Entity\Cate
     ** *@Assert\NotBlank(
     *     message="Cate not blank"
     * )
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cateId", referencedColumnName="cateId")
     * })
     */
    private $cateid;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * @return bool
     */
    public function isStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * @param float $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * @return int
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * @param int $productid
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    /**
     * @return Cate
     */
    public function getCateid()
    {
        return $this->cateid;
    }

    /**
     * @param Cate $cateid
     */
    public function setCateid($cateid)
    {
        $this->cateid = $cateid;
    }

    /**
     * @return User
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param User $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }


}

