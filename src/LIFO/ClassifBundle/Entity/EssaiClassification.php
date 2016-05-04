<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EssaiClassification
 *
 * @ORM\Table(name="essai_classification")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\EssaiClassificationRepository")
 */
class EssaiClassification
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
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\TypeClassification")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeClassification;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\PropositionClasse",
     * inversedBy="essaiClassification",
     * cascade={"persist"})
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $propositionClasse;


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
     * @return EssaiClassification
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return EssaiClassification
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set typeClassification
     *
     * @param \LIFO\ClassifBundle\Entity\TypeClassification $typeClassification
     *
     * @return EssaiClassification
     */
    public function setTypeClassification(\LIFO\ClassifBundle\Entity\TypeClassification $typeClassification)
    {
        $this->typeClassification = $typeClassification;

        return $this;
    }

    /**
     * Get typeClassification
     *
     * @return \LIFO\ClassifBundle\Entity\TypeClassification
     */
    public function getTypeClassification()
    {
        return $this->typeClassification;
    }

    /**
     * Set propositionClasse
     *
     * @param \LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse
     *
     * @return EssaiClassification
     */
    public function setPropositionClasse(\LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse)
    {
        $this->propositionClasse = $propositionClasse;

        return $this;
    }

    /**
     * Get propositionClasse
     *
     * @return \LIFO\ClassifBundle\Entity\PropositionClasse
     */
    public function getPropositionClasse()
    {
        return $this->propositionClasse;
    }
}
