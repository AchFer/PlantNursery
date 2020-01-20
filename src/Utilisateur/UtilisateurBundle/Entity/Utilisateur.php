<?php


namespace Utilisateur\UtilisateurBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->adresses= new ArrayCollection();
        $this->commandes= new ArrayCollection();
    }
    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commande",mappedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse",mappedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

    /**
     * Add commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     *
     * @return Utilisateur
     */
    public function addCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     */
    public function removeCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adress
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse $adress
     *
     * @return Utilisateur
     */
    public function addAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse $adress
     */
    public function removeAdress(\Ecommerce\EcommerceBundle\Entity\UtilisateurAdresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
