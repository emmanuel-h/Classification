<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="numerisation")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\NumerisationRepository")
 */
class Numerisation {
	/**
	 *
	 * @var int @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="path", type="string", length=255)
	 */
	private $path;
	
	/**
	 * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
	 * inversedBy="numerisation")
	 * 
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $tesson;
	
	/**
	 * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\TypeNumerisation",
	 * inversedBy="numerisation")
	 * 
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $typeNumerisation;
	
	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set path
	 *
	 * @param string $path        	
	 *
	 * @return Image
	 */
	public function setPath($path) {
		$this->path = $path;
		
		return $this;
	}
	
	/**
	 * Get path
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tesson = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeImage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return Numerisation
     */
    public function setTesson(\LIFO\ClassifBundle\Entity\Tesson $tesson)
    {
        $this->tesson = $tesson;

        return $this;
    }

    /**
     * Get tesson
     *
     * @return \LIFO\ClassifBundle\Entity\Tesson
     */
    public function getTesson()
    {
        return $this->tesson;
    }

    /**
     * Set typeNumerisation
     *
     * @param \LIFO\ClassifBundle\Entity\TypeNumerisation $typeNumerisation
     *
     * @return Numerisation
     */
    public function setTypeNumerisation(\LIFO\ClassifBundle\Entity\TypeNumerisation $typeNumerisation)
    {
        $this->typeNumerisation = $typeNumerisation;

        return $this;
    }

    /**
     * Get typeNumerisation
     *
     * @return \LIFO\ClassifBundle\Entity\TypeNumerisation
     */
    public function getTypeNumerisation()
    {
        return $this->typeNumerisation;
    }
}
