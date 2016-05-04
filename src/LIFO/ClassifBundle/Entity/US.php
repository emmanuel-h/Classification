<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * US
 *
 * @ORM\Table(name="u_s")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\USRepository")
 */
class US
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
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description="Aucune";
    
    /**
     * @ORM\ManyToMany(targetEntity="LIFO\ClassifBundle\Entity\Tesson",
     * mappedBy="us")
     */
    private $tesson;
    

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
     * Set numero
     *
     * @param integer $numero
     *
     * @return US
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return US
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
    }

    /**
     * Add tesson
     *
     * @param \LIFO\ClassifBundle\Entity\Tesson $tesson
     *
     * @return US
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
