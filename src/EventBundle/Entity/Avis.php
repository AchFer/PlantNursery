<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="id_e", columns={"id_e"}), @ORM\Index(name="id_U", columns={"id_U"})})
 * @ORM\Entity(repositoryClass="EventBundle\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idA;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

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
     * Get idA
     *
     * @return integer
     */
    public function getIdA()
    {
        return $this->idA;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Avis
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set idE
     *
     * @param \EventBundle\Entity\Event $idE
     *
     * @return Avis
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
     * @return Avis
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
