<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="ind2", columns={"id_n"})})
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_p", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idP;

    /**
     * @var string
     *
     * @ORM\Column(name="nameP", type="string", length=255, nullable=false)
     */
    private $namep;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_n", type="integer", nullable=false)
     */
    private $idN;



    /**
     * Get idP
     *
     * @return integer
     */
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * Set namep
     *
     * @param string $namep
     *
     * @return Product
     */
    public function setNamep($namep)
    {
        $this->namep = $namep;

        return $this;
    }

    /**
     * Get namep
     *
     * @return string
     */
    public function getNamep()
    {
        return $this->namep;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Product
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set idN
     *
     * @param integer $idN
     *
     * @return Product
     */
    public function setIdN($idN)
    {
        $this->idN = $idN;

        return $this;
    }

    /**
     * Get idN
     *
     * @return integer
     */
    public function getIdN()
    {
        return $this->idN;
    }
}
