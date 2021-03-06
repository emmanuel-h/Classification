<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Molette
 *
 * @ORM\Table(name="molette")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\MoletteRepository")
 */
class Molette
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
    private $description="Aucune";
    
    /**
     * @ORM\OneToOne(targetEntity="LIFO\ClassifBundle\Entity\Tesson")
     */
    private $referencePar;
    
    private $reference;


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
     * Set description
     *
     * @param string $description
     *
     * @return Molette
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
     * Set referencePar
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $referencePar
     *
     * @return Molette
     */
    public function setReferencePar(\LIFO\ClassifBundle\Entity\Tesson $referencePar = null)
    {
        $this->referencePar = $referencePar;

        return $this;
    }

    /**
     * Get referencePar
     *
     * @return \LIFO\ClassifBundle\Entity\Tesson
     */
    public function getReferencePar()
    {
        return $this->referencePar;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Molette
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
    
    public function setReference($b){
    	$this->reference=$b;
    }
    
    public function getReference(){
    	return $this->reference;
    }
}
