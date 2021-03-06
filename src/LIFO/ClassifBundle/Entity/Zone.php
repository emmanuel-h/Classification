<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zone
 *
 * @ORM\Table(name="zone")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\ZoneRepository")
 */
class Zone
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
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Site",
     * inversedBy="zone")
     */
    private $site;


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
     * Set numero
     *
     * @param integer $numero
     *
     * @return Zone
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set site
     *
     * @param \LIFO\ClassifBundle\Entity\Site $site
     *
     * @return Zone
     */
    public function setSite(\LIFO\ClassifBundle\Entity\Site $site = null)
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
