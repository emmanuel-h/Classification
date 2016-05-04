<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sequence
 *
 * @ORM\Table(name="sequence")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\SequenceRepository")
 */
class Sequence
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
     * @ORM\Column(name="numeroSequence", type="integer")
     */
    private $numeroSequence;

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
     * Set numeroSequence
     *
     * @param integer $numeroSequence
     *
     * @return Sequence
     */
    public function setNumeroSequence($numeroSequence)
    {
        $this->numeroSequence = $numeroSequence;

        return $this;
    }

    /**
     * Get numeroSequence
     *
     * @return integer
     */
    public function getNumeroSequence()
    {
        return $this->numeroSequence;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sequence
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
     * @return Sequence
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
