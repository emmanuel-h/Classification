<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="numerisation")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\NumerisationRepository")
 * @ORM\HasLifecycleCallbacks
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
	 * @ORM\Column(name="extension", type="string", length=255)
	 */
	private $extension;
	
	/**
	 * @ORM\Column(name="alt", type="string", length=255)
	 */
	private $alt;
	
	// Pour pemettre l'envoi de fichier via un formulaire
	private $file;
	
	// Pour stocker temporairement le nom du fichier
	private $tempFilename;
	
	/**
	 * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
	 * inversedBy="numerisation",
	 * cascade="persist")
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
	public function __construct() {
		$this->tesson = new \Doctrine\Common\Collections\ArrayCollection ();
		$this->typeImage = new \Doctrine\Common\Collections\ArrayCollection ();
	}
	
	/**
	 * Set tesson
	 *
	 * @param \LIFO\ClassifBundle\Entity\Tesson $tesson        	
	 *
	 * @return Numerisation
	 */
	public function setTesson(\LIFO\ClassifBundle\Entity\Tesson $tesson) {
		$this->tesson = $tesson;
		
		return $this;
	}
	
	/**
	 * Get tesson
	 *
	 * @return \LIFO\ClassifBundle\Entity\Tesson
	 */
	public function getTesson() {
		return $this->tesson;
	}
	
	/**
	 * Set typeNumerisation
	 *
	 * @param \LIFO\ClassifBundle\Entity\TypeNumerisation $typeNumerisation        	
	 *
	 * @return Numerisation
	 */
	public function setTypeNumerisation(\LIFO\ClassifBundle\Entity\TypeNumerisation $typeNumerisation) {
		$this->typeNumerisation = $typeNumerisation;
		
		return $this;
	}
	
	/**
	 * Get typeNumerisation
	 *
	 * @return \LIFO\ClassifBundle\Entity\TypeNumerisation
	 */
	public function getTypeNumerisation() {
		return $this->typeNumerisation;
	}
	
	/**
	 * Set alt
	 *
	 * @param string $alt        	
	 *
	 * @return Numerisation
	 */
	public function setAlt($alt) {
		$this->alt = $alt;
		
		return $this;
	}
	
	/**
	 * Get alt
	 *
	 * @return string
	 */
	public function getAlt() {
		return $this->alt;
	}
	public function getFile() {
		return $this->file;
	}
	public function setFile(UploadedFile $file) {
		$this->file = $file;
		if (null !== $this->extension) {
			$this->tempFilename = $this->extension;
			$this->extension = null;
			$this->alt = null;
		}
	}
	
	/**
	 * @ORM\PrePersist()
	 * @ORM\PreUpdate()
	 */
	public function preUpload() {
		if (null === $this->file) {
			return;
		}
		$this->extension = $this->file->guessExtension ();
		$this->alt = $this->file->getClientOriginalName ();
	}
	
	/**
	 * @ORM\PostPersist()
	 *
	 * @ORM\PostUpdate()
	 */
	public function upload() {
		if (null === $this->file) {
			return;
		}
		$strAlt = "t" . $this->tesson->getId () . "-n" . $this->id . "." . $this->extension;
		$this->alt = $strAlt;
		if (null !== $this->tempFilename) {
			$oldFile = $this->getUploadRootDir () . '/t' . $this->tesson->getId () . "-n" . $this->id . '.' . $this->tempFilename;
			if (file_exists ( $oldFile )) {
				unlink ( $oldFile );
			}
		}
		$this->file->move ( $this->getUploadRootDir (), // Le répertoire de destination
							"t" . $this->tesson->getId () . "-n" . $this->id . '.' . $this->extension ); // Le nom du fichier à créer, ici « id.extension »

	}
	
	/**
	 * @ORM\PreRemove()
	 */
	public function preRemoveUpload() {
		$this->tempFilename = $this->getUploadRootDir () . '/' . $this->id . "-" . $this->tesson->getId () . '.' . $this->extension;
	}
	
	/**
	 * @ORM\PostRemove()
	 */
	public function removeUpload() {
		if (file_exists ( $this->tempFilename )) {
			unlink ( $this->tempFilename );
		}
	}
	public function getUploadDir() {
		return 'uploads/numerisations';
	}
	protected function getUploadRootDir() {
		return __DIR__ . '/../../../../web/' . $this->getUploadDir ();
	}
	
	/**
	 * Set extension
	 *
	 * @param string $extension        	
	 *
	 * @return Numerisation
	 */
	public function setExtension($extension) {
		$this->extension = $extension;
		
		return $this;
	}
	
	/**
	 * Get extension
	 *
	 * @return string
	 */
	public function getExtension() {
		return $this->extension;
	}
	
	public function getWebPath()
	{
		return $this->getUploadDir()."/t" . $this->tesson->getId () . "-n" . $this->id . '.' . $this->extension;
	}
}
