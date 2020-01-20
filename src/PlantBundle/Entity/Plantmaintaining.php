<?php

namespace PlantBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Plantmaintaining
 *
 * @ORM\Table(name="plantmaintaining", indexes={@ORM\Index(name="userPlant", columns={"userPlant"})})
 * @ORM\Entity(repositoryClass="PlantBundle\Repository\PlantmaintainingRepository")

 */
class Plantmaintaining
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @Assert\NotNull
     * @Assert\DateTime(format="d/m/Y")
     * @Assert\LessThanOrEqual("today")
     * @Assert\GreaterThan(value="-30 days")
     *
     */
    private $date;

    /**
     * @var string
     * @Assert\Choice({"sandy soil", "clay soil"})
     * @ORM\Column(name="SoilType", type="string", length=255, nullable=false)
     * @Assert\NotNull
     */
    private $soiltype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="watered", type="boolean", nullable=false)
     */
    private $watered;

    /**
     * @var integer
     * @Assert\Range(
     *      min = 0,
     *      max = 100)
     * @ORM\Column(name="humidity", type="integer", nullable=true)
     */
    private $humidity;

    /**
     * @var integer
     * @Assert\Range(
     *      min = -50,
     *      max = 70)
     * @ORM\Column(name="temperature", type="integer", nullable=true)
     */
    private $temperature;

    /**
     * @var string
     * @Assert\Range(
     *      min = 0,
     *      max = 24)
     * @ORM\Column(name="luminosity", type="integer", nullable=true)
     */
    private $luminosity;

    /**
     * @var integer
     * @Assert\Range(min = 0)
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var \Userplant
     *
     * @ORM\ManyToOne(targetEntity="Userplant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userPlant", referencedColumnName="id")
     * })
     */
    private $userplant;



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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Plantmaintaining
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
     * Set soiltype
     *
     * @param string $soiltype
     *
     * @return Plantmaintaining
     */
    public function setSoiltype($soiltype)
    {
        $this->soiltype = $soiltype;

        return $this;
    }

    /**
     * Get soiltype
     *
     * @return string
     */
    public function getSoiltype()
    {
        return $this->soiltype;
    }

    /**
     * Set watered
     *
     * @param boolean $watered
     *
     * @return Plantmaintaining
     */
    public function setWatered($watered)
    {
        $this->watered = $watered;

        return $this;
    }

    /**
     * Get watered
     *
     * @return boolean
     */
    public function getWatered()
    {
        return $this->watered;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     *
     * @return Plantmaintaining
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return integer
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set temperature
     *
     * @param integer $temperature
     *
     * @return Plantmaintaining
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return integer
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set luminosity
     *
     * @param integer $luminosity
     *
     * @return Plantmaintaining
     */
    public function setLuminosity($luminosity)
    {
        $this->luminosity = $luminosity;

        return $this;
    }

    /**
     * Get luminosity
     *
     * @return integer
     */
    public function getLuminosity()
    {
        return $this->luminosity;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Plantmaintaining
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Plantmaintaining
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set userplant
     *
     * @param \PlantBundle\Entity\Userplant $userplant
     *
     * @return Plantmaintaining
     */
    public function setUserplant(\PlantBundle\Entity\Userplant $userplant = null)
    {
        $this->userplant = $userplant;

        return $this;
    }

    /**
     * Get userplant
     *
     * @return \PlantBundle\Entity\Userplant
     */
    public function getUserplant()
    {
        return $this->userplant;
    }
}
