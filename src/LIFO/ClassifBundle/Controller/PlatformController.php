<?php

namespace LIFO\ClassifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LIFO\ClassifBundle\Entity\Tesson;
use LIFO\ClassifBundle\Entity\US;
use LIFO\ClassifBundle\Entity\Site;
use LIFO\ClassifBundle\Entity\Utilisateur;
use LIFO\ClassifBundle\Entity\Numerisation;
use LIFO\ClassifBundle\Entity\TypeNumerisation;
use LIFO\ClassifBundle\Form\TessonType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PlatformController extends Controller {
	public function indexAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:index.html.twig' );
	}
	public function telechargementAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:telechargement.html.twig' );
	}
	public function uploadAction(Request $request) {
		$em = $this->getDoctrine ()->getManager ();
		
		$tesson = new tesson ();
		$tesson->setUS ( new US () );
		$tesson->setSite ( new Site () );
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
			
			$em->persist ( $utilisateur );
			$em->persist ( $tesson );
			$em->persist ( $tesson->getUS () );
			$em->persist ( $tesson->getSite () );
			$em->flush ();
			
			$request->getSession ()->getFlashBag ()->add ( 'notice', 'Tesson enregistré.' );
			return $this->redirectToRoute ( 'lifo_classif_tesson', array ('id' => $tesson->getId ()) );
		}
		
		return $this->render ( 'LIFOClassifBundle:Platform:upload.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	
	public function rechercheAction() {
		return $this->render ( 'LIFOClassifBundle:Platform:recherche.html.twig' );
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
