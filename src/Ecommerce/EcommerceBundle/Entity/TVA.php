<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TvaFixtures
 *
 * @ORM\Table(name="tva")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repository\TVARepository")
 */
class TVA
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="multiplicate",type="float")
     *
     */
    private $multiplicate;

    /**
     * @ORM\Column(name="nom",type="string" ,length=200)
     *
     */
    private $nom;
    /**
     * @ORM\Column(name="valeur",type="float")
     *
     */
    private $valeur;

    /**
     * TvaFixtures constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set multiplicate
     *
     * @param float $multiplicate
     *
     * @return TVA
     */
    public function setMultiplicate($multiplicate)
    {
        $this->multiplicate = $multiplicate;

        return $this;
    }

    /**
     * Get multiplicate
     *
     * @return float
     */
    public function getMultiplicate()
    {
        return $this->multiplicate;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return TVA
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set valeur
     *
     * @param float $valeur
     *
     * @return TVA
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return float
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}
