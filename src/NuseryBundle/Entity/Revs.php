<?php

namespace NuseryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Revs
 *
 * @ORM\Table(name="revs")
 * @ORM\Entity
 */
class Revs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_n", type="integer", nullable=false)
     */
    private $idN;

    /**
     * @return int
     */
    public function getIdN()
    {
        return $this->idN;
    }

    /**
     * @param int $idN
     * @return Revs
     */
    public function setIdN($idN)
    {
        $this->idN = $idN;
        return $this;
    }


    /**
     * @var integer
     *
     * @ORM\Column(name="rev", type="integer", nullable=false)
     */
    private $rev;

    /**
     * @return int
     */
    public function getRev()
    {
        return $this->rev;
    }

    /**
     * @param int $rev
     * @return Revs
     */
    public function setRev($rev)
    {
        $this->rev = $rev;
        return $this;
    }



    public function __toString()
    {
        return '  ';
    }


}

