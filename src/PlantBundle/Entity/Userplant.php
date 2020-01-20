<?php

namespace PlantBundle\Entity;
use MainBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * Userplant
 *
 * @ORM\Table(name="userplant", indexes={@ORM\Index(name="plantReferdence", columns={"plantReferdence"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="PlantBundle\Repository\UserplantRepository")
 */
class Userplant
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotNull
     * @Assert\Type(type={"alpha", "digit"})
     *
     */
    private $name;

    /**
     * @var \Plant
     *
     * @ORM\ManyToOne(targetEntity="Plant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plantReferdence", referencedColumnName="id")
     * })
     */
    private $plantreferdence;

    /**
     * @var MainBubdle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set name
     *
     * @param string $name
     *
     * @return Userplant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set plantreferdence
     *
     * @param \PlantBundle\Entity\Plant $plantreferdence
     *
     * @return Userplant
     */
    public function setPlantreferdence(\PlantBundle\Entity\Plant $plantreferdence = null)
    {
        $this->plantreferdence = $plantreferdence;

        return $this;
    }

    /**
     * Get plantreferdence
     *
     * @return \PlantBundle\Entity\Plant
     */
    public function getPlantreferdence()
    {
        return $this->plantreferdence;
    }

    /**
     * Set user
     *
     * @param \MainBundle\Entity\User $user
     *
     * @return Userplant
     */
    public function setUser(\MainBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MainBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
