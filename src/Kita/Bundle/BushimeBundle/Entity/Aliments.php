<?php

namespace Kita\Bundle\BushimeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliments
 */
class Aliments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $calories;

    /**
     * @var string
     */
    private $protides;

    /**
     * @var string
     */
    private $glucides;

    /**
     * @var string
     */
    private $lipides;


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
     * Set nom
     *
     * @param string $nom
     * @return Aliments
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
     * Set calories
     *
     * @param string $calories
     * @return Aliments
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return string 
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set protides
     *
     * @param string $protides
     * @return Aliments
     */
    public function setProtides($protides)
    {
        $this->protides = $protides;

        return $this;
    }

    /**
     * Get protides
     *
     * @return string 
     */
    public function getProtides()
    {
        return $this->protides;
    }

    /**
     * Set glucides
     *
     * @param string $glucides
     * @return Aliments
     */
    public function setGlucides($glucides)
    {
        $this->glucides = $glucides;

        return $this;
    }

    /**
     * Get glucides
     *
     * @return string 
     */
    public function getGlucides()
    {
        return $this->glucides;
    }

    /**
     * Set lipides
     *
     * @param string $lipides
     * @return Aliments
     */
    public function setLipides($lipides)
    {
        $this->lipides = $lipides;

        return $this;
    }

    /**
     * Get lipides
     *
     * @return string 
     */
    public function getLipides()
    {
        return $this->lipides;
    }
}
