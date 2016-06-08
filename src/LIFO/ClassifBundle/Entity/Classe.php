<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="nomClasse", type="string", length=255, unique=true)
     */
    private $nomClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\TypeClassification")
     */
    private  $typeClassification;

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
     * Set nomClasse
     *
     * @param string $nomClasse
     *
     * @return Classe
     */
    public function setNomClasse($nomClasse)
    {
        $this->nomClasse = $nomClasse;

        return $this;
    }

    /**
     * Get nomClasse
     *
     * @return string
     */
    public function getNomClasse()
    {
        return $this->nomClasse;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Classe
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
     * Set typeClassification
     *
     * @param \LIFO\ClassifBundle\Entity\TypeClassification $typeClassification
     *
     * @return Classe
     */
    public function setTypeClassification(\LIFO\ClassifBundle\Entity\TypeClassification $typeClassification = null)
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
}
