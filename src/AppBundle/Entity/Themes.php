<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Themes
 *
 * @ORM\Table(name="themes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ThemesRepository")
 */
class Themes
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
     * @var string
     *
     * @ORM\Column(name="PaysRegion", type="string", length=255)
     */
    private $paysRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="Fetes", type="string", length=255)
     */
    private $fetes;

    /**
     * @var string
     *
     * @ORM\Column(name="Tendances", type="string", length=255)
     */
    private $tendances;


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
     * Set paysRegion
     *
     * @param string $paysRegion
     *
     * @return Themes
     */
    public function setPaysRegion($paysRegion)
    {
        $this->paysRegion = $paysRegion;

        return $this;
    }

    /**
     * Get paysRegion
     *
     * @return string
     */
    public function getPaysRegion()
    {
        return $this->paysRegion;
    }

    /**
     * Set fetes
     *
     * @param string $fetes
     *
     * @return Themes
     */
    public function setFetes($fetes)
    {
        $this->fetes = $fetes;

        return $this;
    }

    /**
     * Get fetes
     *
     * @return string
     */
    public function getFetes()
    {
        return $this->fetes;
    }

    /**
     * Set tendances
     *
     * @param string $tendances
     *
     * @return Themes
     */
    public function setTendances($tendances)
    {
        $this->tendances = $tendances;

        return $this;
    }

    /**
     * Get tendances
     *
     * @return string
     */
    public function getTendances()
    {
        return $this->tendances;
    }
}

