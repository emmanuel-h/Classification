<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periode
 *
 * @ORM\Table(name="periode")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\PeriodeRepository")
 */
class Periode {
	/**
	 *
	 * @var int @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var decimal @ORM\Column(name="numeroPeriode", type="decimal", precision=4, scale=2)
	 */
	private $numeroPeriode;
	
	/**
	 *
	 * @var string @ORM\Column(name="description", type="text")
	 */
	private $description;
	
	/**
	 * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Site")
	 *
	 * @ORM\JoinColumn(nullable=false))
	 */
	private $site;
	
	
	public function __construct() {
		$this->description = "Aucune";
	}
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set numeroPeriode
	 *
	 * @param integer $numeroPeriode        	
	 *
	 * @return Periode
	 */
	public function setNumeroPeriode($numeroPeriode) {
		$this->numeroPeriode = $numeroPeriode;
		
		return $this;
	}
	
	/**
	 * Get numeroPeriode
	 *
	 * @return integer
	 */
	public function getNumeroPeriode() {
		return $this->numeroPeriode;
	}
	
	/**
	 * Set description
	 *
	 * @param string $description        	
	 *
	 * @return Periode
	 */
	public function setDescription($description) {
		$this->description = $description;
		
		return $this;
	}
	
	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Set site
	 *
	 * @param \LIFO\ClassifBundle\Entity\Site $site        	
	 *
	 * @return Periode
	 */
	public function setSite(\LIFO\ClassifBundle\Entity\Site $site) {
		$this->site = $site;
		
		return $this;
	}
	
	/**
	 * Get site
	 *
	 * @return \LIFO\ClassifBundle\Entity\Site
	 */
	public function getSite() {
		return $this->site;
	}
}
