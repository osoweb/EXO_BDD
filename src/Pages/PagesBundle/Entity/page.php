<?php

namespace Pages\PagesBundle\Entity;

/**
 * page
 */
class page
{
    /**
     * @var int
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=65)
     */
    private $titre;

    /**
     *@var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=false)
     */
    private $contenu;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return page
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return page
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

