<?php

namespace PlantBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Plant
 *
 * @ORM\Table(name="plant")
 * @ORM\Entity(repositoryClass="PlantBundle\Repository\PlantRepository")
 */
class Plant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="plantname", type="string", length=255, nullable=false)
     * @Assert\NotNull
     */
    private $plantname;

    /**
     * @var string
     *
     * @ORM\Column(name="binomialName", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $binomialname;

    /**
     * @var string
     *
     * @ORM\Column(name="clade1", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $clade1;

    /**
     * @var string
     *
     * @ORM\Column(name="clade2", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $clade2;

    /**
     * @var string
     *
     * @ORM\Column(name="clade3", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $clade3;

    /**
     * @var string
     *
     * @ORM\Column(name="plantOrder", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $plantorder;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $family;

    /**
     * @var string
     *
     * @ORM\Column(name="subfamily", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $subfamily;

    /**
     * @var string
     *
     * @ORM\Column(name="tribe", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $tribe;

    /**
     * @var string
     *
     * @ORM\Column(name="genus", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     */
    private $genus;

    /**
     * @var string
     *
     * @ORM\Column(name="species", type="string", length=255, nullable=true)
     * @Assert\Type(type="alpha")
     *
     */
    private $species;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     * @Assert\NotNull
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="wateringSandySoil", type="integer", nullable=false)
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 0,
     *      max = 4)
     */
    private $wateringsandysoil;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequencyWateringSandySoil", type="integer", nullable=false)
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 1,
     *      max = 7)
     */
    private $frequencywateringsandysoil;

    /**
     * @var string
     *
     * @ORM\Column(name="periodOfWateringSandySoil", type="string", length=255, nullable=false)
     * @Assert\Choice({"day(s)", "week(s)","month(s)"})
     */
    private $periodofwateringsandysoil;

    /**
     * @var integer
     *
     * @ORM\Column(name="wateringClaySoil", type="integer", nullable=false)
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 0,
     *      max = 4)
     */
    private $wateringclaysoil;

    /**
     * @var integer
     *
     * @ORM\Column(name="frequencyWateringClaySoil", type="integer", nullable=false)
     * @Assert\NotNull
     * @Assert\Range(
     *      min = 1,
     *      max = 7)
     *
     */
    private $frequencywateringclaysoil;

    /**
     * @var string
     *
     * @ORM\Column(name="periodOfWateringClaySoil", type="string", length=255, nullable=false)
     * @Assert\NotNull
     * @Assert\Choice({"day(s)", "week(s)","month(s)"})
     */
    private $periodofwateringclaysoil;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;



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
     * Set plantname
     *
     * @param string $plantname
     *
     * @return Plant
     */
    public function setPlantname($plantname)
    {
        $this->plantname = $plantname;

        return $this;
    }

    /**
     * Get plantname
     *
     * @return string
     */
    public function getPlantname()
    {
        return $this->plantname;
    }

    /**
     * Set binomialname
     *
     * @param string $binomialname
     *
     * @return Plant
     */
    public function setBinomialname($binomialname)
    {
        $this->binomialname = $binomialname;

        return $this;
    }

    /**
     * Get binomialname
     *
     * @return string
     */
    public function getBinomialname()
    {
        return $this->binomialname;
    }

    /**
     * Set clade1
     *
     * @param string $clade1
     *
     * @return Plant
     */
    public function setClade1($clade1)
    {
        $this->clade1 = $clade1;

        return $this;
    }

    /**
     * Get clade1
     *
     * @return string
     */
    public function getClade1()
    {
        return $this->clade1;
    }

    /**
     * Set clade2
     *
     * @param string $clade2
     *
     * @return Plant
     */
    public function setClade2($clade2)
    {
        $this->clade2 = $clade2;

        return $this;
    }

    /**
     * Get clade2
     *
     * @return string
     */
    public function getClade2()
    {
        return $this->clade2;
    }

    /**
     * Set clade3
     *
     * @param string $clade3
     *
     * @return Plant
     */
    public function setClade3($clade3)
    {
        $this->clade3 = $clade3;

        return $this;
    }

    /**
     * Get clade3
     *
     * @return string
     */
    public function getClade3()
    {
        return $this->clade3;
    }

    /**
     * Set plantorder
     *
     * @param string $plantorder
     *
     * @return Plant
     */
    public function setPlantorder($plantorder)
    {
        $this->plantorder = $plantorder;

        return $this;
    }

    /**
     * Get plantorder
     *
     * @return string
     */
    public function getPlantorder()
    {
        return $this->plantorder;
    }

    /**
     * Set family
     *
     * @param string $family
     *
     * @return Plant
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set subfamily
     *
     * @param string $subfamily
     *
     * @return Plant
     */
    public function setSubfamily($subfamily)
    {
        $this->subfamily = $subfamily;

        return $this;
    }

    /**
     * Get subfamily
     *
     * @return string
     */
    public function getSubfamily()
    {
        return $this->subfamily;
    }

    /**
     * Set tribe
     *
     * @param string $tribe
     *
     * @return Plant
     */
    public function setTribe($tribe)
    {
        $this->tribe = $tribe;

        return $this;
    }

    /**
     * Get tribe
     *
     * @return string
     */
    public function getTribe()
    {
        return $this->tribe;
    }

    /**
     * Set genus
     *
     * @param string $genus
     *
     * @return Plant
     */
    public function setGenus($genus)
    {
        $this->genus = $genus;

        return $this;
    }

    /**
     * Get genus
     *
     * @return string
     */
    public function getGenus()
    {
        return $this->genus;
    }

    /**
     * Set species
     *
     * @param string $species
     *
     * @return Plant
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Plant
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
     * Set wateringsandysoil
     *
     * @param integer $wateringsandysoil
     *
     * @return Plant
     */
    public function setWateringsandysoil($wateringsandysoil)
    {
        $this->wateringsandysoil = $wateringsandysoil;

        return $this;
    }

    /**
     * Get wateringsandysoil
     *
     * @return integer
     */
    public function getWateringsandysoil()
    {
        return $this->wateringsandysoil;
    }

    /**
     * Set frequencywateringsandysoil
     *
     * @param integer $frequencywateringsandysoil
     *
     * @return Plant
     */
    public function setFrequencywateringsandysoil($frequencywateringsandysoil)
    {
        $this->frequencywateringsandysoil = $frequencywateringsandysoil;

        return $this;
    }

    /**
     * Get frequencywateringsandysoil
     *
     * @return integer
     */
    public function getFrequencywateringsandysoil()
    {
        return $this->frequencywateringsandysoil;
    }

    /**
     * Set periodofwateringsandysoil
     *
     * @param string $periodofwateringsandysoil
     *
     * @return Plant
     */
    public function setPeriodofwateringsandysoil($periodofwateringsandysoil)
    {
        $this->periodofwateringsandysoil = $periodofwateringsandysoil;

        return $this;
    }

    /**
     * Get periodofwateringsandysoil
     *
     * @return string
     */
    public function getPeriodofwateringsandysoil()
    {
        return $this->periodofwateringsandysoil;
    }

    /**
     * Set wateringclaysoil
     *
     * @param integer $wateringclaysoil
     *
     * @return Plant
     */
    public function setWateringclaysoil($wateringclaysoil)
    {
        $this->wateringclaysoil = $wateringclaysoil;

        return $this;
    }

    /**
     * Get wateringclaysoil
     *
     * @return integer
     */
    public function getWateringclaysoil()
    {
        return $this->wateringclaysoil;
    }

    /**
     * Set frequencywateringclaysoil
     *
     * @param integer $frequencywateringclaysoil
     *
     * @return Plant
     */
    public function setFrequencywateringclaysoil($frequencywateringclaysoil)
    {
        $this->frequencywateringclaysoil = $frequencywateringclaysoil;

        return $this;
    }

    /**
     * Get frequencywateringclaysoil
     *
     * @return integer
     */
    public function getFrequencywateringclaysoil()
    {
        return $this->frequencywateringclaysoil;
    }

    /**
     * Set periodofwateringclaysoil
     *
     * @param string $periodofwateringclaysoil
     *
     * @return Plant
     */
    public function setPeriodofwateringclaysoil($periodofwateringclaysoil)
    {
        $this->periodofwateringclaysoil = $periodofwateringclaysoil;

        return $this;
    }

    /**
     * Get periodofwateringclaysoil
     *
     * @return string
     */
    public function getPeriodofwateringclaysoil()
    {
        return $this->periodofwateringclaysoil;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Plant
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
     * @Assert\IsTrue(message="Clane duplicated")
     */
    public function  isValidClane1()
    {
        if (!(empty($this->clade1))) {
            if (($this->clade1 !== $this->clade2) && ($this->clade1 !== $this->clade3)) return true;
            else return false;
        }
        else return true;
    }

    /**
     * @Assert\IsTrue(message="Clane duplicated")
     */
    public function  isValidClane2()
    {
        if ($this->isValidClane1()){
            if (!(empty($this->clade2))) {
                if (($this->clade2 !== $this->clade1) && ($this->clade3 !== $this->clade3)) return true;
                else return false;
        }
        }
        else return true;
    }

    /**
     * @Assert\IsTrue(message="Clane duplicated")
     */
    public function  isValidClane3()
    {
        if ($this->isValidClane1()&&$this->isValidClane2()){
            if (!(empty($this->clade3))) {
                if (($this->clade3 !== $this->clade2) && ($this->clade3 !== $this->clade1)) return true;
                else return false;
            }
        }
        else return true;
    }

    /**
     * @Assert\IsTrue(message="Clane duplicated")
     */
    public function  isValidsubfamily()
    {
        if (!(empty($this->subfamily))) {
            if ($this->subfamily !== $this->family)  return true;
            else return false;
        }
        else return true;
    }


}
