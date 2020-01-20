<?php

namespace NuseryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nursery
 * @ORM\Entity(repositoryClass="NuseryBundle\Repository\NurseryRepository")
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
     * @return int
     */
    public function getIdN()
    {
        return $this->idN;
    }

    /**
     * @param int $idN
     */
    public function setIdN($idN)
    {
        $this->idN = $idN;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @return string
     */
    public function getNamen()
    {
        return $this->namen;
    }

    /**
     * @param string $namen
     * @return Nursery
     */
    public function setNamen($namen)
    {
        $this->namen = $namen;
        return $this;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return Nursery
     */
    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdU()
    {
        return $this->idU;
    }

    /**
     * @param int $idU
     * @return Nursery
     */
    public function setIdU($idU)
    {
        $this->idU = $idU;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRevs()
    {
        return $this->Revs;
    }

    /**
     * @param mixed $Revs
     * @return Nursery
     */
    public function setRevs($Revs)
    {
        $this->Revs = $Revs;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * @param string $descr
     * @return Nursery
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
        return $this;
    }

    /**
     * @param string $loc
     * @return Nursery
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
        return $this;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_u", type="integer", nullable=false)
     */
    private $idU;

    /**
     * @ORM\ManyToOne(targetEntity="NuseryBundle\Entity\Revs")
     * @ORM\JoinColumn(name="Revs_id",referencedColumnName="id")

     */
    private $Revs;





}

