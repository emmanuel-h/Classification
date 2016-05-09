<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TessonMolette
 *
 * @ORM\Table(name="tesson_molette")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\TessonMoletteRepository")
 */
class TessonMolette
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
     * @var boolean
     *
     * @ORM\Column(name="egal", type="boolean")
     */
    private $egal;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Molette")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
	private $molette;

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
     * Constructor
     */
    public function __construct()
    {
        $this->tesson = new \Doctrine\Common\Collections\ArrayCollection();
        $this->molette = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set egal
     *
     * @param boolean $egal
     *
     * @return TessonMolette
     */
    public function setEgal($egal)
    {
        $this->egal = $egal;

        return $this;
    }

    /**
     * Get egal
     *
     * @return boolean
     */
    public function getEgal()
    {
        return $this->egal;
    }

    /**
     * Set molette
     *
     * @param \LIFO\ClassifBundle\Entity\Molette $molette
     *
     * @return TessonMolette
     */
    public function setMolette(\LIFO\ClassifBundle\Entity\Molette $molette)
    {
        $this->molette = $molette;

        return $this;
    }

    /**
     * Get molette
     *
     * @return \LIFO\ClassifBundle\Entity\Molette
     */
    public function getMolette()
    {
        return $this->molette;
    }
}
