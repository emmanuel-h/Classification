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
use LIFO\ClassifBundle\Entity\TypeDecor;
use LIFO\ClassifBundle\Form\TessonType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use LIFO\ClassifBundle\Entity\Molette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use LIFO\ClassifBundle\Form\DecorType;
use LIFO\ClassifBundle\Form\TypeDecorType;
use LIFO;

class PlatformController extends Controller {
	public function indexAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:index.html.twig' );
	}
	public function telechargementAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:telechargement.html.twig' );
	}
	public function uploadAction(Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$tesson = new Tesson ();
		$tesson->setUS ( new US () );
		$tesson->setSite ( new Site () );
		$tesson->setPeriode ( new Periode () );
		$tesson->setPhase ( new Phase () );
		$tesson->setSequence ( new Sequence () );
		$tesson->getUS ()->setSite ( $tesson->getSite () );
		$utilisateur = $em->getRepository ( 'LIFOClassifBundle:Utilisateur' )->findOneBy ( array (
				'nom' => "upload",
				'prenom' => "test" 
		) );
		if (! is_object ( $utilisateur )) {
			$utilisateur = new Utilisateur ();
			$utilisateur->setPrenom ( "test" );
			$utilisateur->setNom ( "upload" );
		}
		
		$tesson->setEnregistrePar ( $utilisateur );
		$form = $this->get ( 'form.factory' )->create ( TessonType::class, $tesson );
		
		if ($request->isMethod ( 'POST' ) && $form->handleRequest ( $request )->isValid ()) {
			
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
			
			$em->persist ( $utilisateur );
			$em->persist ( $tesson );
			$em->persist ( $tesson->getUS () );
			$em->persist ( $tesson->getSite () );
			$em->flush ();
			
			$request->getSession ()->getFlashBag ()->add ( 'notice', 'Tesson enregistré' );
			return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
		}
		
		return $this->render ( 'LIFOClassifBundle:Platform:upload.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	
	public function rechercheAction(Request $request) {
		

		$defaultData = array('message' => 'Recherche');
		$form = $this->createFormBuilder($defaultData)
					 ->add('Identifiant', IntegerType::class)
					 ->add('Valider', SubmitType::class)
					 ->getForm();

		
		if ($request->isMethod ( 'POST' ) && $form->handleRequest ( $request )->isValid ()) {
			$em = $this->getDoctrine ()->getManager ();
			$tesson = $em->getRepository('LIFOClassifBundle:Tesson')->findOneById($form->getData(0));
			if(is_object($tesson)){
				return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
			}
		}
		return $this->render ( 'LIFOClassifBundle:Platform:recherche.html.twig', array (
				'form' => $form->createView () ) );
	}
	
	public function adminAction(Request $request){
		$formSuppression = $this->createFormBuilder()
			->add('decor', EntityType::class, array(
		        'class'   		=> 'LIFOClassifBundle:Decor',
		        'choice_label'  => 'position',
		        'multiple'		=> true,
				'expanded' 		=> true
		    ))
			->add('typeDecor', EntityType::class, array(
		        'class'   		=> 'LIFOClassifBundle:TypeDecor',
		        'choice_label'  => 'nom',
		        'multiple'		=> true,
				'expanded' 		=> true
		    ))
			->add('Supprimer', SubmitType::class)
			->getForm();

		$decorAjout = new Decor();
		$formAjoutDecor = $this->get ( 'form.factory' )->create ( DecorType::class, $decorAjout );
		$formAjoutDecor->add('Valider', SubmitType::class);
		
		$typeDecorAjout = new TypeDecor();
		$formAjoutTypeDecor = $this->get ( 'form.factory' )->create ( TypeDecorType::class, $typeDecorAjout );
		$formAjoutTypeDecor->add('Valider', SubmitType::class);

		$em = $this->getDoctrine ()->getManager ();
	    if ($request->isMethod ( 'POST' ) && $formSuppression->handleRequest ( $request )->isValid ()) {
	    	$listeDecor=$formSuppression->get('decor')->getData();
	    	$listeTypeDecor=$formSuppression->get('typeDecor')->getData();
	    	foreach ($listeDecor as $decor){
		    	if(is_object($decor)){
		    		$em->remove($decor);
		    	}
	    	}
	    	foreach ($listeTypeDecor as $typeDecor){
		    	if(is_object($typeDecor)){
		    		$em->remove($typeDecor);
		    	}
	    	}
			$em->flush ();
			
			return $this->redirectToRoute ( 'lifo_classif_admin');
		}


		if ($request->isMethod ( 'POST' ) && $formAjoutDecor->handleRequest ( $request )->isValid ()) {
			if(is_object($decorAjout)){
				$testDecorAjout=$em->getRepository('LIFOClassifBundle:Decor')->findOneByPosition($decorAjout->getPosition());
				if(!is_object($testDecorAjout)){
					$em->persist($decorAjout);
				}
				$em->flush();
			}
			return $this->redirectToRoute ( 'lifo_classif_admin');
		}

		if ($request->isMethod ( 'POST' ) && $formAjoutTypeDecor->handleRequest ( $request )->isValid ()) {
			if(is_object($typeDecorAjout)){
				$testTypeDecorAjout=$em->getRepository('LIFOClassifBundle:TypeDecor')->findOneByNom($typeDecorAjout->getNom());
				if(!is_object($testTypeDecorAjout)){
					$em->persist($typeDecorAjout);
				}
				$em->flush();
			}
			return $this->redirectToRoute ( 'lifo_classif_admin');
		}
			
		return $this->render ( 'LIFOClassifBundle:Platform:admin.html.twig', array (
				'formSuppression' => $formSuppression->createView (),
				'formAjoutDecor' => $formAjoutDecor->createView (),
				'formAjoutTypeDecor' => $formAjoutTypeDecor->createView ()
		) );
	}
	
	public function classificationAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:classification.html.twig' );
	}
	
	public function tessonAction($id) {
		$em = $this->getDoctrine ()->getManager ();
		$tesson = $em->getRepository('LIFOClassifBundle:Tesson')->findOneById($id);
		return $this->render ( 'LIFOClassifBundle:Platform:tesson.html.twig', array(
					'listeNumerisation' => $tesson->getNumerisation() ));
	}
}
