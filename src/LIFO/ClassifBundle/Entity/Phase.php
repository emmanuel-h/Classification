<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Phase
 *
 * @ORM\Table(name="phase")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\PhaseRepository")
 */
class Phase
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
     * @var int
     *
     * @ORM\Column(name="numeroPhase", type="integer")
     */
    private $numeroPhase;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Site")
     * 
     * @ORM\JoinColumn(nullable=false))
     */
    private $site;

    
    public function __construct(){
    	$this->description="Aucune";
    }

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
     * Set numeroPhase
     *
     * @param integer $numeroPhase
     *
     * @return Phase
     */
    public function setNumeroPhase($numeroPhase)
    {
        $this->numeroPhase = $numeroPhase;

        return $this;
    }

    /**
     * Get numeroPhase
     *
     * @return integer
     */
    public function getNumeroPhase()
    {
        return $this->numeroPhase;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Phase
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set site
     *
     * @param \LIFO\ClassifBundle\Entity\Site $site
     *
     * @return Phase
     */
    public function setSite(\LIFO\ClassifBundle\Entity\Site $site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \LIFO\ClassifBundle\Entity\Site
     */
    public function getSite()
    {
        return $this->site;
    }
}
