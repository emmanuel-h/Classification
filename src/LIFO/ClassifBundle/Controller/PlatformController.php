<?php

namespace LIFO\ClassifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LIFO\ClassifBundle\Entity\Tesson;
use LIFO\ClassifBundle\Entity\US;
use LIFO\ClassifBundle\Entity\Site;
use LIFO\ClassifBundle\Entity\Periode;
use LIFO\ClassifBundle\Entity\Phase;
use LIFO\ClassifBundle\Entity\Sequence;
use LIFO\ClassifBundle\Entity\Utilisateur;
use LIFO\ClassifBundle\Entity\Numerisation;
use LIFO\ClassifBundle\Entity\Decor;
use LIFO\ClassifBundle\Form\TessonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use LIFO\ClassifBundle\Entity\Molette;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use LIFO;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;

class PlatformController extends Controller {
	public function indexAction() {
			return $this->redirectToRoute ( 'lifo_classif_upload' );
	}
	
	/**
     * @Security("has_role('ROLE_USER')")
     */
	public function uploadAction(Request $request) {
		
		$tesson = new Tesson ();
		$tesson->setUS ( new US () );
		$tesson->setSite ( new Site () );
		$tesson->setPeriode ( new Periode () );
		$tesson->setPhase ( new Phase () );
		$tesson->setSequence ( new Sequence () );
		$tesson->getUS ()->setSite ( $tesson->getSite () );
		$utilisateur = $this->getUser();
		
		$tesson->setEnregistrePar ( $utilisateur );
		$form = $this->get ( 'form.factory' )->create ( TessonType::class, $tesson );
		
		if ($request->isMethod ( 'POST' ) && $form->handleRequest ( $request )->isValid ()) {
			$this->verifierFormTesson($tesson);
			
			$request->getSession ()->getFlashBag ()->add ( 'notice', 'Tesson enregistré' );
			return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
		}
		
		return $this->render ( 'LIFOClassifBundle:Platform:upload.html.twig', array (
				'form' => $form->createView () 
		) );
	}

	/**
	 * @Security("has_role('ROLE_USER')")
	 */
	public function rechercheAction(Request $request) {
		
		$messageImportant ="";
		$formRechercheID = $this->createFormBuilder(array(
		'name' => 'fomrid',
        'csrf_protection' => true,
        'csrf_field_name' => '_token',
		'attr' => array(
				'name' => 'FormRechercheID',
				'id' => 'FormRechercheI'
				)
   		))
					 ->add('identifiant', IntegerType::class)
					 ->add('Rechercher', SubmitType::class)
					 ->getForm();
		
		$formRechercheLocalisation = $this->createFormBuilder(array(
        'csrf_protection' => true,
        'csrf_field_name' => '_token',
		'attr' => array(
				'name' => 'FormRechercheLocalisation',
				'id' => 'FormRechercheL'
				)
   		))
					->add('codeInsee', IntegerType::class)
					->add('numeroCommune', IntegerType::class)
					->add('us', TextType::class)
					->add('numeroIsolation', IntegerType::class)
					->add('Rechercher', SubmitType::class)
					->getForm();


		$em = $this->getDoctrine ()->getManager ();
					
		if ($request->isMethod ( 'POST' ) && $formRechercheID->handleRequest ( $request )->isValid ()) {
			$tesson = $em->getRepository('LIFOClassifBundle:Tesson')->findOneById($formRechercheID->get('identifiant')->getData());
			if(is_object($tesson)){
				return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
			} else {
				$messageImportant="Pas de tesson correspondant à l'identifiant";
			}
		}
		
		if ($request->isMethod ( 'POST' ) && $formRechercheLocalisation->handleRequest ( $request )->isValid ()) {
			
			//On vérifie que le site existe
			$codeInsee=$formRechercheLocalisation->get('codeInsee')->getData();
			$numSiteCommune=$formRechercheLocalisation->get('numeroCommune')->getData();
			$site = $em->getRepository ( 'LIFOClassifBundle:Site' )->findOneBy ( array (
					'codeINSEE' => $codeInsee,
					'numSiteCommune' => $numSiteCommune
			) );
			if ( is_object ( $site )) {
				
				//Puis que l'US lui est bien associé
				$us = $em->getRepository ( 'LIFOClassifBundle:US' )->findOneBy ( array (
						'nom' => $formRechercheLocalisation->get('us')->getData(),
						'site' => $site
				) );
				if ( is_object ( $us )) {
					
					//Puis que le numero d'isolation donné amène effectivement à un tesson
					$numIsolation = $formRechercheLocalisation->get('numeroIsolation')->getData();
					$t = $em->getRepository ( 'LIFOClassifBundle:Tesson' )->findOneBy ( array (
							'us' => $us,
							'site' => $site,
							'numIsolation' => $numIsolation
					) );
					if(is_object($t)){
						return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
					} else {
						$messageImportant = "Pas de numero d'isolation correspondant";
					}
				} else {
					$messageImportant = "Pas d'US correspondant";
				}
			} else {
				$messageImportant = "Pas de site correspondant";
			}
		}
		return $this->render ( 'LIFOClassifBundle:Platform:recherche.html.twig', array (
				'formRechercheID' => $formRechercheID->createView (),
				'formRechercheLocalisation' => $formRechercheLocalisation->createView (),
				'messageImportant' => $messageImportant
		) );
	}

	/**
	 * @Security("has_role('ROLE_USER')")
	 */
	public function classificationAction($page) {

		$em = $this->getDoctrine()->getManager();
		$nbTessonsParPage=10;
		
		$tessons = $em->getRepository('LIFOClassifBundle:Tesson')
		->pagination($page, $nbTessonsParPage);
		
		$pagination = array(
				'page' => $page,
				'nbPages' => ceil(count($tessons) / $nbTessonsParPage),
				'nomRoute' => 'lifo_classif_classification',
				'paramsRoute' => array()
		);
		
		return $this->render ( 'LIFOClassifBundle:Platform:classification.html.twig', array(
				'tessons' => $tessons,
				'pagination' => $pagination
		));
	}

	/**
	 * @Security("has_role('ROLE_USER')")
	 */
	public function tessonAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		$tesson = $em->getRepository('LIFOClassifBundle:Tesson')->findOneById($id);
		return $this->render ( 'LIFOClassifBundle:Platform:tesson.html.twig', array(
					'tesson' => $tesson));
	}

	/**
	 * @Security("has_role('ROLE_USER')")
	 */
	public function menuAction(){
		$em = $this->getDoctrine ()->getManager ();
		$maxTessons=10;
		$listeTessons = $em->getRepository('LIFOClassifBundle:Tesson')->findBy(
				array(),
				array('id' => 'desc'),
				$maxTessons,
				0);
		
		return $this->render('LIFOClassifBundle:Platform:menu.html.twig', array(	
			'listeTessons' => $listeTessons
		));
	}
	
	public function telechargementNumerisationAction($id){
		$em = $this->getDoctrine ()->getManager ();
		$numerisation = $em->getRepository('LIFOClassifBundle:Numerisation')->findOneById($id);
		if(is_object ($numerisation)){
			$fichier = $numerisation->getWebPath();
			
			$response = new Response();
			$response->setContent(file_get_contents($fichier));
			$response->headers->set('Content-Type', 'application/force-download'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
			$response->headers->set('Content-disposition', 'filename='. $fichier);
			
			return $response;
		}
	}
	
	protected function verifierFormTesson($tesson){
		$em = $this->getDoctrine ()->getManager ();
				
			$site = $em->getRepository ( 'LIFOClassifBundle:Site' )->findOneBy ( array (
					'codeINSEE' => $tesson->getSite ()->getCodeINSEE (),
					'numSiteCommune' => $tesson->getSite ()->getNumSiteCommune ()
			) );
				
			if (! is_object ( $site )) {
				$site = new Site ();
				$site->setCodeINSEE ( $tesson->getSite ()->getCodeINSEE () );
				$site->setNumSiteCommune ( $tesson->getSite ()->getNumSiteCommune () );
			}
			$em->persist ( $site );
			$tesson->setSite ( $site );
				
			$us = $em->getRepository ( 'LIFOClassifBundle:US' )->findOneBy ( array (
					'nom' => $tesson->getUs ()->getNom (),
					'site' => $tesson->getSite ()
			) );
			if (! is_object ( $us )) {
				$us = new US ();
				$us->setNom ( $tesson->getUs ()->getNom () );
				$us->setSite ( $site );
				$em->persist ( $us );
			}
			$tesson->setUs ( $us );
				
			if($tesson->getSequence() != NULL){
				if($tesson->getSequence()->getNumeroSequence() != ""){
					$sequence = $em->getRepository ( 'LIFOClassifBundle:Sequence' )->findOneBy ( array (
							'numeroSequence' => $tesson->getSequence()->getNumeroSequence(),
							'site' => $site
					) );
					if (! is_object ( $sequence )) {
						$sequence = new Sequence ();
						$sequence->setNumeroSequence ( $tesson->getSequence()->getNumeroSequence() );
						$sequence->setSite ( $site );
						$em->persist ( $sequence );
					}
					$tesson->setSequence ( $sequence );
				} else {
					$tesson->setSequence(NULL);
				}
			}
				
			if($tesson->getPeriode() != NULL){
				if($tesson->getPeriode()->getNumeroPeriode() != ""){
					$periode = $em->getRepository ( 'LIFOClassifBundle:Periode' )->findOneBy ( array (
							'numeroPeriode' => $tesson->getPeriode()->getNumeroPeriode(),
							'site' => $site
					) );
					if (! is_object ( $periode )) {
						$periode = new Periode ();
						$periode->setNumeroPeriode ( $tesson->getPeriode()->getNumeroPeriode() );
						$periode->setSite ( $site );
						$em->persist ( $periode );
					}
					$tesson->setPeriode ( $periode );
				} else {
					$tesson->setPeriode(NULL);
				}
			}
				
			if($tesson->getPhase()!=NULL){
				if($tesson->getPhase()->getNumeroPhase() != ""){
					$phase = $em->getRepository ( 'LIFOClassifBundle:Phase' )->findOneBy ( array (
							'numeroPhase' => $tesson->getPhase()->getNumeroPhase(),
							'site' => $site
					) );
					if (! is_object ( $phase )) {
						$phase = new Phase ();
						$phase->setNumeroPhase ( $tesson->getPhase()->getNumeroPhase() );
						$phase->setSite ( $site );
						$em->persist ( $phase );
					}
					$tesson->setPhase ( $phase );
				} else {
					$tesson->setPhase(NULL);
				}
			}
				
			if ($tesson->getNumIsolation () == 0) {
				$numIsolation = $em->getRepository ( 'LIFOClassifBundle:Tesson' )->findNumIsolationMax ( $tesson->getUs ()->getId (), $tesson->getSite ()->getId () );
				$tesson->setNumIsolation ( ($numIsolation + 1) );
			}
				
			foreach($tesson->getNumerisation() as $numerisation){
				if(NULL===$numerisation->getFile()){
					$tesson->removeNumerisation($numerisation);
				} else {
					$numerisation->setTesson($tesson);
				}
			}
				
			if(count($tesson->getDecor())==0){
				$tesson->addDecor($em->getRepository('LIFOClassifBundle:Decor')->findOneByPosition("indéterminé"));
			}
				
			if(($tesson->getTessonMolette()->getEgal() == true || $tesson->getTessonMolette()->getEgal() == false)
					&& $tesson->getTessonMolette()->getMolette()->getNom() != "" ){
						$reference=$tesson->getTessonMolette()->getMolette()->getReference();
						$descriptionMolette=$tesson->getTessonMolette()->getMolette()->getdescription();
						$molette=$em->getRepository('LIFOClassifBundle:Molette')->findOneByNom($tesson->getTessonMolette()->getMolette()->getNom());
						if(is_object($molette)){
							$tesson->getTessonMolette()->setMolette($molette);
						}
						if($reference == true){
							$tesson->getTessonMolette()->getMolette()->setReferencePar($tesson);
						}
						if($descriptionMolette == NULL){
							$tesson->getTessonMolette()->getMolette()->setDescription("Aucune");
						}
						$em->persist($tesson->getTessonMolette()->getMolette());
						$em->persist($tesson->getTessonMolette());
			} else {
				$tesson->setTessonMolette(NULL);
			}
			$em->persist ( $tesson );
			$em->persist ( $tesson->getUS () );
			$em->persist ( $tesson->getSite () );
			$em->flush ();
	}
	
	public function tessonModifierAction (Request $request, $id){
		$messageImportant="";
		$em = $this->getDoctrine ()->getManager ();
		$tesson = $em->getRepository('LIFOClassifBundle:Tesson')->findOneById($id);
		if(is_object($tesson)){
			$formTessonModifie = $this->get ( 'form.factory' )->create ( TessonType::class, $tesson );
		} else {
			$messageImportant="Pas de tesson correspondant à l'id";
		}
		if ($request->isMethod ( 'POST' ) && $formTessonModifie->handleRequest ( $request )->isValid ()) {
			$this->verifierFormTesson($tesson);
			return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
		}
		return $this->render ( 'LIFOClassifBundle:Platform:upload.html.twig', array (
				'form' => $formTessonModifie->createView (),
				'messageImportant' => $messageImportant
		) );
		
	}
}
