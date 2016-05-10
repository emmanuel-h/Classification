<?php

namespace LIFO\ClassifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LIFO\ClassifBundle\Entity\Tesson;
use LIFO\ClassifBundle\Entity\US;
use LIFO\ClassifBundle\Entity\Site;
use LIFO\ClassifBundle\Entity\Utilisateur;
use LIFO\ClassifBundle\Form\TessonType;
use Symfony\Component\HttpFoundation\Request;

class PlatformController extends Controller
{
    public function indexAction()
    {
        return $this->render('LIFOClassifBundle:Platform:index.html.twig');
    }

    public function telechargementAction(){
    	return $this->render('LIFOClassifBundle:Platform:telechargement.html.twig');
    }

    public function uploadAction(Request $request){
    	$tesson=new tesson();
    	$tesson->setUS(new US());
    	$tesson->setSite(new Site());
    	$tesson->getUS()->setSite($tesson->getSite());
    	$utilisateur = new Utilisateur();
    	$utilisateur->setPrenom("test");
    	$utilisateur->setNom("d'upload");
    	$tesson->setEnregistrePar($utilisateur);
    	$form = $this->get('form.factory')->create(TessonType::class, $tesson);
    	
	    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($utilisateur);
	      $em->persist($tesson);
	      $em->persist($tesson->getUS());
	      $em->persist($tesson->getSite());
	      $em->flush();
	
	      $request->getSession()->getFlashBag()->add('notice', 'Tesson enregistré.');
	      return $this->redirectToRoute('lifo_classif_tesson', array('id' => $tesson->getId()));
	    }
	
	    return $this->render('LIFOClassifBundle:Platform:upload.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }

    public function rechercheAction(){
    	return $this->render('LIFOClassifBundle:Platform:recherche.html.twig');
    }

    public function classificationAction(){
    	return $this->render('LIFOClassifBundle:Platform:classification.html.twig');
    }

    public function tessonAction(){
    	return $this->render('LIFOClassifBundle:Platform:tesson.html.twig');
    }
}
