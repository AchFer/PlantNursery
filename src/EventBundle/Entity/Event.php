<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
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
     * @var string
     *
     * @ORM\Column(name="Name_E", type="string", length=255, nullable=false)
     */
    private $nameE;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=1000, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_E", type="date", nullable=false)
     */
    private $dateE;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieu_E", type="string", length=255, nullable=false)
     */
    private $lieuE;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nb_p", type="integer", nullable=false)
     */
    private $nbP;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameE
     *
     * @param string $nameE
     *
     * @return Event
     */
    public function setNameE($nameE)
    {
        $this->nameE = $nameE;

        return $this;
    }

    /**
     * Get nameE
     *
     * @return string
     */
    public function getNameE()
    {
        return $this->nameE;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateE
     *
     * @param \DateTime $dateE
     *
     * @return Event
     */
    public function setDateE($dateE)
    {
        $this->dateE = $dateE;

        return $this;
    }

    /**
     * Get dateE
     *
     * @return \DateTime
     */
    public function getDateE()
    {
        return $this->dateE;
    }

    /**
     * Set lieuE
     *
     * @param string $lieuE
     *
     * @return Event
     */
    public function setLieuE($lieuE)
    {
        $this->lieuE = $lieuE;

        return $this;
    }

    /**
     * Get lieuE
     *
     * @return string
     */
    public function getLieuE()
    {
        return $this->lieuE;
    }

    /**
     * Set nbP
     *
     * @param integer $nbP
     *
     * @return Event
     */
    public function setNbP($nbP)
    {
        $this->nbP = $nbP;

        return $this;
    }

    /**
     * Get nbP
     *
     * @return integer
     */
    public function getNbP()
    {
        return $this->nbP;
    }
    public function __toString()
    {
        return "  ";
    }
}
