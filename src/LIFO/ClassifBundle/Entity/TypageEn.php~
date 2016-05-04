<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypageEn
 *
 * @ORM\Table(name="typage_en")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\TypageEnRepository")
 */
class TypageEn
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="TypeClassification")
     */
    private $typeClassification;
    
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Tesson")
     */
    private $tesson;
    
    /**
     * @ORM\ManyToOne(targetEntity="Classe")
     */
    private $classe;


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
     * Set typeClassification
     *
     * @param \LIFO\ClassifBundle\Entity\TypeClassification $typeClassification
     *
     * @return TypageEn
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
     * Set tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return TypageEn
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
     * @return TypageEn
     */
    public function setClasse(\LIFO\ClassifBundle\Entity\Classe $classe = null)
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
}
