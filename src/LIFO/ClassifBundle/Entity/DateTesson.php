<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateTesson
 *
 * @ORM\Table(name="date_tesson")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\DateTessonRepository")
 */
class DateTesson
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
     * @ORM\Column(name="dateDebut", type="smallint")
     */
    private $dateDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="dateFin", type="smallint")
     */
    private $dateFin;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Sequence")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $sequence;


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
     * Set dateDebut
     *
     * @param integer $dateDebut
     *
     * @return DateTesson
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return int
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param integer $dateFin
     *
     * @return DateTesson
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return int
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periode = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set sequence
     *
     * @param \LIFO\ClassifBundle\Entity\Sequence $sequence
     *
     * @return DateTesson
     */
    public function setSequence(\LIFO\ClassifBundle\Entity\Sequence $sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return \LIFO\ClassifBundle\Entity\Sequence
     */
    public function getSequence()
    {
        return $this->sequence;
    }
}
