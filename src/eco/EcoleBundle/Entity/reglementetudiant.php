<?php

namespace eco\EcoleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reglementetudiant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class reglementetudiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReglement", type="date")
     */
    private $dateReglement;

    /**
     * @var string
     *
     * @ORM\Column(name="modeReglement", type="string", length=100)
     */
    private $modeReglement;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50)
     */
    private $reference;

      /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Eleve")
     */
    private $idEtudiant;


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
     * Set dateReglement
     *
     * @param \DateTime $dateReglement
     * @return reglementetudiant
     */
    public function setDateReglement($dateReglement)
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    /**
     * Get dateReglement
     *
     * @return \DateTime 
     */
    public function getDateReglement()
    {
        return $this->dateReglement;
    }

    /**
     * Set modeReglement
     *
     * @param string $modeReglement
     * @return reglementetudiant
     */
    public function setModeReglement($modeReglement)
    {
        $this->modeReglement = $modeReglement;

        return $this;
    }

    /**
     * Get modeReglement
     *
     * @return string 
     */
    public function getModeReglement()
    {
        return $this->modeReglement;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return reglementetudiant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return reglementetudiant
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set idEtudiant
     *
     * @param integer $idEtudiant
     * @return reglementetudiant
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return integer 
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }
}
