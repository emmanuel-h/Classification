<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decor
 *
 * @ORM\Table(name="decor")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\DecorRepository")
 */
class Decor
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
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;
    
    /**
     * @ORM\ManyToMany(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
     * mappedBy="decor")
     */
    private $tesson;


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
     * Set position
     *
     * @param string $position
     *
     * @return Decor
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tesson = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeDecor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return Decor
     */
    public function addTesson(\LIFO\ClassifBundle\Entity\Tesson $tesson)
    {
        $this->tesson[] = $tesson;

        return $this;
    }

    /**
     * Remove tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     */
    public function removeTesson(\LIFO\ClassifBundle\Entity\Tesson $tesson)
    {
        $this->tesson->removeElement($tesson);
    }

    /**
     * Get tesson
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTesson()
    {
        return $this->tesson;
    }
    
    public function __toString(){
    	return $this->position;
    }
}
