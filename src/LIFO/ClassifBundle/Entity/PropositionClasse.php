<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropositionClasse
 *
 * @ORM\Table(name="proposition_classe")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\PropositionClasseRepository")
 */
class PropositionClasse
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
     * inversedBy="proposition classe")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $tesson;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Classe")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;
    
    /**
     * @ORM\OneToMany(targetEntity="LIFO\ClassifBundle\Entity\EssaiClassification",
     * mappedBy="propositionClasse",
     * cascade={"persist"})
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $essaiClassification;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PropositionClasse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return PropositionClasse
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
     * Set classe
     *
     * @param \LIFO\ClassifBundle\Entity\Classe $classe
     *
     * @return PropositionClasse
     */
    public function setClasse(\LIFO\ClassifBundle\Entity\Classe $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \LIFO\ClassifBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Add essaiClassification
     *
     * @param \LIFO\ClassifBundle\Entity\EssaiClassification $essaiClassification
     *
     * @return PropositionClasse
     */
    public function addEssaiClassification(\LIFO\ClassifBundle\Entity\EssaiClassification $essaiClassification)
    {
        $this->essaiClassification[] = $essaiClassification;

        return $this;
    }

    /**
     * Remove essaiClassification
     *
     * @param \LIFO\ClassifBundle\Entity\EssaiClassification $essaiClassification
     */
    public function removeEssaiClassification(\LIFO\ClassifBundle\Entity\EssaiClassification $essaiClassification)
    {
        $this->essaiClassification->removeElement($essaiClassification);
    }

    /**
     * Get essaiClassification
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEssaiClassification()
    {
        return $this->essaiClassification;
    }
}
