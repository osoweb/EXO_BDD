<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RecetteRepository")
 */
class Recette
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
     *
     *@ORM\OneToOne(targetEntity="Pages\PagesBundle\Entity\page",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $titre;

    /*public function __construct()
    {
        parent::__construct();
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();

    }*/

    /**
     *
     * @var string
     *
     * @ORM\Column(name="produits", type="string", nullable=true)
     */
    private $produits;

    /**
     *
     *@ORM\OneToOne(targetEntity="Pages\PagesBundle\Entity\page",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $preparation;

    /**
     *
     *@ORM\OneToOne(targetEntity="AppBundle\Entity\Media",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


    /**
     * @var string
     *
     * @ORM\Column(name="temps", type="string")
     */
    private $temps;

    /**
     * Add produit
     *
     * @param \AppBundle\Entity\produits $produit
     *
     * @return nom

    public function addProduit(\AppBundle\Entity\produits $produit)
    {
        $this->produits[] = $produit;

        return $this;
    } */

    /**
     * Remove produit
     *
     * @param \AppBundle\Entity\produits $produit
    public function removeProduit(\AppBundle\Entity\produits $produit)
    {
        $this->produits->removeElement($produit);
    }*/


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Recette
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Set produits
     *
     * @param string $produits
     *
     * @return Recette
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return string
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set preparation
     *
     * @param string $preparation
     *
     * @return Recette
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation
     *
     * @return string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * @return string
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * @param string $temps
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;
    }





}

