<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDecor
 *
 * @ORM\Table(name="type_decor")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\TypeDecorRepository")
 */
class TypeDecor
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @ORM\ManyToMany(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
     * mappedBy="typeDecor")
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
     * Set nom
     *
     * @param string $nom
     *
     * @return TypeDecor
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TypeDecor
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
     * Constructor
     */
    public function __construct()
    {
        $this->tesson = new \Doctrine\Common\Collections\ArrayCollection();
        $this->description="Aucune";
    }

    /**
     * Add tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return TypeDecor
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
}
