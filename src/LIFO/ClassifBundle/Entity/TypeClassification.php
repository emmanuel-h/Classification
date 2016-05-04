<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeClassification
 *
 * @ORM\Table(name="type_classification")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\TypeClassificationRepository")
 */
class TypeClassification
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
     * @ORM\Column(name="nomType", type="string", length=255)
     */
    private $nomType;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    

    /** @ORM\OneToMany(targetEntity="TypageEn", mappedBy="typeClassification") */
    private $typageEn;


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
     * Set nomType
     *
     * @param string $nomType
     *
     * @return TypeClassification
     */
    public function setNomType($nomType)
    {
        $this->nomType = $nomType;

        return $this;
    }

    /**
     * Get nomType
     *
     * @return string
     */
    public function getNomType()
    {
        return $this->nomType;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TypeClassification
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
        $this->typageEn = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typageEn
     *
     * @param \LIFO\ClassifBundle\Entity\TypageEn $typageEn
     *
     * @return TypeClassification
     */
    public function addTypageEn(\LIFO\ClassifBundle\Entity\TypageEn $typageEn)
    {
        $this->typageEn[] = $typageEn;

        return $this;
    }

    /**
     * Remove typageEn
     *
     * @param \LIFO\ClassifBundle\Entity\TypageEn $typageEn
     */
    public function removeTypageEn(\LIFO\ClassifBundle\Entity\TypageEn $typageEn)
    {
        $this->typageEn->removeElement($typageEn);
    }

    /**
     * Get typageEn
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypageEn()
    {
        return $this->typageEn;
    }
}
