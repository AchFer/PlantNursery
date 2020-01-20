<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nursery
 *
 * @ORM\Table(name="nursery", indexes={@ORM\Index(name="ind1", columns={"id_u"})})
 * @ORM\Entity
 */
class Nursery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_n", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idN;

    /**
     * @var string
     *
     * @ORM\Column(name="nameN", type="string", length=255, nullable=false)
     */
    private $namen;

    /**
     * @var string
     *
     * @ORM\Column(name="loc", type="string", length=255, nullable=false)
     */
    private $loc;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="string", length=1000, nullable=false)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_u", type="integer", nullable=false)
     */
    private $idU;



    /**
     * Get idN
     *
     * @return integer
     */
    public function getIdN()
    {
        return $this->idN;
    }

    /**
     * Set namen
     *
     * @param string $namen
     *
     * @return Nursery
     */
    public function setNamen($namen)
    {
        $this->namen = $namen;

        return $this;
    }

    /**
     * Get namen
     *
     * @return string
     */
    public function getNamen()
    {
        return $this->namen;
    }

    /**
     * Set loc
     *
     * @param string $loc
     *
     * @return Nursery
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set descr
     *
     * @param string $descr
     *
     * @return Nursery
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Nursery
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
     * Set idU
     *
     * @param integer $idU
     *
     * @return Nursery
     */
    public function setIdU($idU)
    {
        $this->idU = $idU;

        return $this;
    }

    /**
     * Get idU
     *
     * @return integer
     */
    public function getIdU()
    {
        return $this->idU;
    }
}
