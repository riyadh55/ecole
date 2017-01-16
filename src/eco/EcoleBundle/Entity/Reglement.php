<?php

namespace eco\EcoleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Reglement
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
     * @ORM\Column(name="dateReg", type="date")
     */
    private $dateReg;

    /**
     * @var string
     *
     * @ORM\Column(name="natureReg", type="string", length=80)
     */
    private $natureReg;


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
     * Set dateReg
     *
     * @param \DateTime $dateReg
     * @return Reglement
     */
    public function setDateReg($dateReg)
    {
        $this->dateReg = $dateReg;

        return $this;
    }

    /**
     * Get dateReg
     *
     * @return \DateTime 
     */
    public function getDateReg()
    {
        return $this->dateReg;
    }

    /**
     * Set natureReg
     *
     * @param string $natureReg
     * @return Reglement
     */
    public function setNatureReg($natureReg)
    {
        $this->natureReg = $natureReg;

        return $this;
    }

    /**
     * Get natureReg
     *
     * @return string 
     */
    public function getNatureReg()
    {
        return $this->natureReg;
    }
}
