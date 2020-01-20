<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", indexes={@ORM\Index(name="id_e", columns={"id_e"}), @ORM\Index(name="id_U", columns={"id_U"})})
 * @ORM\Entity(repositoryClass="EventBundle\Repository\ParticipantRepository")
 */
class Participant
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_par", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPar;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_e", referencedColumnName="id")
     * })
     */
    private $idE;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_U", referencedColumnName="id")
     * })
     */
    private $idU;



    /**
     * Get idPar
     *
     * @return integer
     */
    public function getIdPar()
    {
        return $this->idPar;
    }

    /**
     * Set idE
     *
     * @param \EventBundle\Entity\Event $idE
     *
     * @return Participant
     */
    public function setIdE(\EventBundle\Entity\Event $idE = null)
    {
        $this->idE = $idE;

        return $this;
    }

    /**
     * Get idE
     *
     * @return \EventBundle\Entity\Event
     */
    public function getIdE()
    {
        return $this->idE;
    }

    /**
     * Set idU
     *
     * @param \AppBundle\Entity\User $idU
     *
     * @return Participant
     */
    public function setIdU(\AppBundle\Entity\User $idU = null)
    {
        $this->idU = $idU;

        return $this;
    }

    /**
     * Get idU
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdU()
    {
        return $this->idU;
    }
}
