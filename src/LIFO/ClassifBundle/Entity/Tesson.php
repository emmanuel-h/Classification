<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tesson
 *
 * @ORM\Table(name="tesson")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\TessonRepository")
 */
class Tesson
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
     * @ORM\Column(name="numEnregistrement", type="integer", unique=true, nullable=true)
     */
    private $numEnregistrement;
    
    /**
     * @var int
     * 
     * @ORM\Column(name="anneeDecouverte", type="integer")
     */
    private $anneeDecouverte=0;

    /**
     * @var string
     *
     * @ORM\Column(name="developpe", type="string", length=255, nullable=true)
     */
    private $developpe;

    /**
     * @var string
     *
     * @ORM\Column(name="lotIndividu", type="string", length=255)
     */
    private $lotIndividu;

    /**
     * @var int
     *
     * @ORM\Column(name="numTombe", type="integer", nullable=true)
     */
    private $numTombe;

    /**
     * @var int
     *
     * @ORM\Column(name="fait", type="integer", nullable=true)
     */
    private $fait;
    
    /**
     * @var decimal
     * 
     * @ORM\Column(name="largeur", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $largeur;
    
    /**
     * @var decimal
     * 
     * @ORM\Column(name="longueur", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $longueur;

    /**
     * @var string
     *
     * @ORM\Column(name="ordreLargeur", type="string", length=255)
     */
    private $ordreLargeur="=";

    /**
     * @var string
     *
     * @ORM\Column(name="ordreLongueur", type="string", length=255)
     */
    private $ordreLongueur="=";

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire="Aucun";

    /**
     * @var int
     *
     * @ORM\Column(name="nombreMotifsVerticaux", type="integer", nullable=true)
     */
    private $nombreMotifsVerticaux;

    /**
     * @var string
     *
     * @ORM\Column(name="ordreMotifsVerticaux", type="string", length=255)
     */
    private $ordreMotifsVerticaux="=";

    /**
     * @var int
     *
     * @ORM\Column(name="nombreMotifsHorizontaux", type="integer", nullable=true)
     */
    private $nombreMotifsHorizontaux;

    /**
     * @var string
     *
     * @ORM\Column(name="ordremotifsHorizontaux", type="string", length=255)
     */
    private $ordreMotifsHorizontaux="=";

    /**
     * @var int
     *
     * @ORM\Column(name="numIsolation", type="integer")
     */
    private $numIsolation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnregistrement", type="datetime")
     */
    private $dateEnregistrement;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\TessonMolette",
     * cascade={"persist"})
     */
    private $tessonMolette;
    
    /**
     * @ORM\OneToMany(targetEntity="LIFO\ClassifBundle\Entity\Numerisation",
     * cascade={"persist", "remove"},
     * mappedBy="tesson")
     */
    private $numerisation;
    
    /**
     * @ORM\ManyToMany(targetEntity="LIFO\ClassifBundle\Entity\Decor",
     * inversedBy="tesson")
     * 
     * @ORM\JoinColumn(nullable=false) 
     */
    private $decor;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\US")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
    private $us;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Site")
     *
     * @ORM\JoinColumn(nullable=false)
     */
    private $site;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Zone")
     */
    private $zone;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Utilisateur")
     */
    private $validePar;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Utilisateur")
     * 
     * @ORM\JoinColumn(nullable=false)
     */
        
    private $enregistrePar;
    

    /** @ORM\OneToMany(targetEntity="LIFO\ClassifBundle\Entity\TypageEn", mappedBy="tesson") */
    private $typageEn;
    
    /**
     * @ORM\OneToMany(targetEntity="LIFO\ClassifBundle\Entity\PropositionClasse",
     * mappedBy="tesson",
     * cascade={"persist", "remove"})
     */
    private $propositionClasse;
    
    /**
     * @ORM\ManyToMany(targetEntity="LIFO\ClassifBundle\Entity\TypeDecor",
     * inversedBy="tesson")
     * @ORM\JoinColumn(nullable=false) 
     */
    private $typeDecor;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Periode")
     */
    private $periode;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Phase")
     */
    private $phase;
    
    /**
     * @ORM\ManyToOne(targetEntity="LIFO\ClassifBundle\Entity\Sequence")
     */
    private $sequence;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numerisation = new \Doctrine\Common\Collections\ArrayCollection();
        $this->decor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typageEn = new \Doctrine\Common\Collections\ArrayCollection();
        $this->propositionClasse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typeDecor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numIsolation=0;
        $this->dateEnregistrement= new \DateTime();
    }

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
     * Set numEnregistrement
     *
     * @param integer $numEnregistrement
     *
     * @return Tesson
     */
    public function setNumEnregistrement($numEnregistrement)
    {
        $this->numEnregistrement = $numEnregistrement;

        return $this;
    }

    /**
     * Get numEnregistrement
     *
     * @return integer
     */
    public function getNumEnregistrement()
    {
        return $this->numEnregistrement;
    }

    /**
     * Set anneeDecouverte
     *
     * @param integer $anneeDecouverte
     *
     * @return Tesson
     */
    public function setAnneeDecouverte($anneeDecouverte)
    {
        $this->anneeDecouverte = $anneeDecouverte;

        return $this;
    }

    /**
     * Get anneeDecouverte
     *
     * @return integer
     */
    public function getAnneeDecouverte()
    {
        return $this->anneeDecouverte;
    }

    /**
     * Set developpe
     *
     * @param string $developpe
     *
     * @return Tesson
     */
    public function setDeveloppe($developpe)
    {
        $this->developpe = $developpe;

        return $this;
    }

    /**
     * Get developpe
     *
     * @return string
     */
    public function getDeveloppe()
    {
        return $this->developpe;
    }

    /**
     * Set lotIndividu
     *
     * @param string $lotIndividu
     *
     * @return Tesson
     */
    public function setLotIndividu($lotIndividu)
    {
        $this->lotIndividu = $lotIndividu;

        return $this;
    }

    /**
     * Get lotIndividu
     *
     * @return string
     */
    public function getLotIndividu()
    {
        return $this->lotIndividu;
    }

    /**
     * Set numTombe
     *
     * @param integer $numTombe
     *
     * @return Tesson
     */
    public function setNumTombe($numTombe)
    {
        $this->numTombe = $numTombe;

        return $this;
    }

    /**
     * Get numTombe
     *
     * @return integer
     */
    public function getNumTombe()
    {
        return $this->numTombe;
    }

    /**
     * Set fait
     *
     * @param integer $fait
     *
     * @return Tesson
     */
    public function setFait($fait)
    {
        $this->fait = $fait;

        return $this;
    }

    /**
     * Get fait
     *
     * @return integer
     */
    public function getFait()
    {
        return $this->fait;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     *
     * @return Tesson
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set longueur
     *
     * @param string $longueur
     *
     * @return Tesson
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return string
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set ordreLargeur
     *
     * @param string $ordreLargeur
     *
     * @return Tesson
     */
    public function setOrdreLargeur($ordreLargeur)
    {
        $this->ordreLargeur = $ordreLargeur;

        return $this;
    }

    /**
     * Get ordreLargeur
     *
     * @return string
     */
    public function getOrdreLargeur()
    {
        return $this->ordreLargeur;
    }

    /**
     * Set ordreLongueur
     *
     * @param string $ordreLongueur
     *
     * @return Tesson
     */
    public function setOrdreLongueur($ordreLongueur)
    {
        $this->ordreLongueur = $ordreLongueur;

        return $this;
    }

    /**
     * Get ordreLongueur
     *
     * @return string
     */
    public function getOrdreLongueur()
    {
        return $this->ordreLongueur;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Tesson
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nombreMotifsVerticaux
     *
     * @param integer $nombreMotifsVerticaux
     *
     * @return Tesson
     */
    public function setNombreMotifsVerticaux($nombreMotifsVerticaux)
    {
        $this->nombreMotifsVerticaux = $nombreMotifsVerticaux;

        return $this;
    }

    /**
     * Get nombreMotifsVerticaux
     *
     * @return integer
     */
    public function getNombreMotifsVerticaux()
    {
        return $this->nombreMotifsVerticaux;
    }

    /**
     * Set ordreMotifsVerticaux
     *
     * @param string $ordreMotifsVerticaux
     *
     * @return Tesson
     */
    public function setOrdreMotifsVerticaux($ordreMotifsVerticaux)
    {
        $this->ordreMotifsVerticaux = $ordreMotifsVerticaux;

        return $this;
    }

    /**
     * Get ordreMotifsVerticaux
     *
     * @return string
     */
    public function getOrdreMotifsVerticaux()
    {
        return $this->ordreMotifsVerticaux;
    }

    /**
     * Set nombreMotifsHorizontaux
     *
     * @param integer $nombreMotifsHorizontaux
     *
     * @return Tesson
     */
    public function setNombreMotifsHorizontaux($nombreMotifsHorizontaux)
    {
        $this->nombreMotifsHorizontaux = $nombreMotifsHorizontaux;

        return $this;
    }

    /**
     * Get nombreMotifsHorizontaux
     *
     * @return integer
     */
    public function getNombreMotifsHorizontaux()
    {
        return $this->nombreMotifsHorizontaux;
    }

    /**
     * Set ordreMotifsHorizontaux
     *
     * @param string $ordreMotifsHorizontaux
     *
     * @return Tesson
     */
    public function setOrdreMotifsHorizontaux($ordreMotifsHorizontaux)
    {
        $this->ordreMotifsHorizontaux = $ordreMotifsHorizontaux;

        return $this;
    }

    /**
     * Get ordreMotifsHorizontaux
     *
     * @return string
     */
    public function getOrdreMotifsHorizontaux()
    {
        return $this->ordreMotifsHorizontaux;
    }

    /**
     * Set numIsolation
     *
     * @param integer $numIsolation
     *
     * @return Tesson
     */
    public function setNumIsolation($numIsolation)
    {
        $this->numIsolation = $numIsolation;

        return $this;
    }

    /**
     * Get numIsolation
     *
     * @return integer
     */
    public function getNumIsolation()
    {
        return $this->numIsolation;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Tesson
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set tessonMolette
     *
     * @param \LIFO\ClassifBundle\Entity\TessonMolette $tessonMolette
     *
     * @return Tesson
     */
    public function setTessonMolette(\LIFO\ClassifBundle\Entity\TessonMolette $tessonMolette = null)
    {
        $this->tessonMolette = $tessonMolette;

        return $this;
    }

    /**
     * Get tessonMolette
     *
     * @return \LIFO\ClassifBundle\Entity\TessonMolette
     */
    public function getTessonMolette()
    {
        return $this->tessonMolette;
    }

    /**
     * Add numerisation
     *
     * @param \LIFO\ClassifBundle\Entity\Numerisation $numerisation
     *
     * @return Tesson
     */
    public function addNumerisation(\LIFO\ClassifBundle\Entity\Numerisation $numerisation)
    {
        $this->numerisation[] = $numerisation;
        return $this;
    }

    /**
     * Remove numerisation
     *
     * @param \LIFO\ClassifBundle\Entity\Numerisation $numerisation
     */
    public function removeNumerisation(\LIFO\ClassifBundle\Entity\Numerisation $numerisation)
    {
        $this->numerisation->removeElement($numerisation);
    }

    /**
     * Get numerisation
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNumerisation()
    {
        return $this->numerisation;
    }

    /**
     * Add decor
     *
     * @param \LIFO\ClassifBundle\Entity\Decor $decor
     *
     * @return Tesson
     */
    public function addDecor(\LIFO\ClassifBundle\Entity\Decor $decor)
    {
    	// Si l'objet fait déjà partie de la collection on ne l'ajoute pas
    	if (!$this->decor->contains($decor)) {
    		if (!$decor->getTesson()->contains($this)) {
    			$decor->addTesson($this);
    		}
    		$this->decor->add($decor);
    	}
        return $this;
    }

    /**
     * Remove decor
     *
     * @param \LIFO\ClassifBundle\Entity\Decor $decor
     */
    public function removeDecor(\LIFO\ClassifBundle\Entity\Decor $decor)
    {
        $this->decor->removeElement($decor);
    }

    /**
     * Get decor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDecor()
    {
        return $this->decor;
    }

    /**
     * Set site
     *
     * @param \LIFO\ClassifBundle\Entity\Site $site
     *
     * @return Tesson
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

    /**
     * Set zone
     *
     * @param \LIFO\ClassifBundle\Entity\Zone $zone
     *
     * @return Tesson
     */
    public function setZone(\LIFO\ClassifBundle\Entity\Zone $zone = null)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \LIFO\ClassifBundle\Entity\Zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set validePar
     *
     * @param \LIFO\ClassifBundle\Entity\Utilisateur $validePar
     *
     * @return Tesson
     */
    public function setValidePar(\LIFO\ClassifBundle\Entity\Utilisateur $validePar = null)
    {
        $this->validePar = $validePar;

        return $this;
    }

    /**
     * Get validePar
     *
     * @return \LIFO\ClassifBundle\Entity\Utilisateur
     */
    public function getValidePar()
    {
        return $this->validePar;
    }

    /**
     * Set enregistrePar
     *
     * @param \LIFO\ClassifBundle\Entity\Utilisateur $enregistrePar
     *
     * @return Tesson
     */
    public function setEnregistrePar(\LIFO\ClassifBundle\Entity\Utilisateur $enregistrePar)
    {
        $this->enregistrePar = $enregistrePar;

        return $this;
    }

    /**
     * Get enregistrePar
     *
     * @return \LIFO\ClassifBundle\Entity\Utilisateur
     */
    public function getEnregistrePar()
    {
        return $this->enregistrePar;
    }

    /**
     * Add typageEn
     *
     * @param \LIFO\ClassifBundle\Entity\TypageEn $typageEn
     *
     * @return Tesson
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

    /**
     * Add propositionClasse
     *
     * @param \LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse
     *
     * @return Tesson
     */
    public function addPropositionClasse(\LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse)
    {
        $this->propositionClasse[] = $propositionClasse;

        return $this;
    }

    /**
     * Remove propositionClasse
     *
     * @param \LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse
     */
    public function removePropositionClasse(\LIFO\ClassifBundle\Entity\PropositionClasse $propositionClasse)
    {
        $this->propositionClasse->removeElement($propositionClasse);
    }

    /**
     * Get propositionClasse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPropositionClasse()
    {
        return $this->propositionClasse;
    }

    /**
     * Add typeDecor
     *
     * @param \LIFO\ClassifBundle\Entity\TypeDecor $typeDecor
     *
     * @return Tesson
     */
    public function addTypeDecor(\LIFO\ClassifBundle\Entity\TypeDecor $typeDecor)
    {
    	if (!$this->typeDecor->contains($typeDecor)) {
    		if (!$typeDecor->getTesson()->contains($this)) {
    			$typeDecor->addTesson($this);
    		}
    		$this->typeDecor->add($typeDecor);
    	}
        return $this;
    }

    /**
     * Remove typeDecor
     *
     * @param \LIFO\ClassifBundle\Entity\TypeDecor $typeDecor
     */
    public function removeTypeDecor(\LIFO\ClassifBundle\Entity\TypeDecor $typeDecor)
    {
        $this->typeDecor->removeElement($typeDecor);
    }

    /**
     * Get typeDecor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeDecor()
    {
        return $this->typeDecor;
    }

    /**
     * Set periode
     *
     * @param \LIFO\ClassifBundle\Entity\Periode $periode
     *
     * @return Tesson
     */
    public function setPeriode(\LIFO\ClassifBundle\Entity\Periode $periode = null)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \LIFO\ClassifBundle\Entity\Periode
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set phase
     *
     * @param \LIFO\ClassifBundle\Entity\Phase $phase
     *
     * @return Tesson
     */
    public function setPhase(\LIFO\ClassifBundle\Entity\Phase $phase = null)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return \LIFO\ClassifBundle\Entity\Phase
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set sequence
     *
     * @param \LIFO\ClassifBundle\Entity\Sequence $sequence
     *
     * @return Tesson
     */
    public function setSequence(\LIFO\ClassifBundle\Entity\Sequence $sequence = null)
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

    /**
     * Set us
     *
     * @param \LIFO\ClassifBundle\Entity\US $us
     *
     * @return Tesson
     */
    public function setUs(\LIFO\ClassifBundle\Entity\US $us)
    {
        $this->us = $us;

        return $this;
    }

    /**
     * Get us
     *
     * @return \LIFO\ClassifBundle\Entity\US
     */
    public function getUs()
    {
        return $this->us;
    }
}
