<?php
namespace LIFO\ClassifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use LIFO\ClassifBundle\Form\DecorType;
use LIFO\ClassifBundle\Form\TypeDecorType;
use LIFO\ClassifBundle\Entity\TypeDecor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use LIFO\ClassifBundle\Entity\Decor;

class AdminController extends Controller{
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function adminAction(Request $request){

		return $this->render ( 'LIFOClassifBundle:Admin:admin.html.twig' );
	    
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function ajoutAction(Request $request){
		$em = $this->getDoctrine ()->getManager ();
		$decorAjout = new Decor();
		$formAjoutDecor = $this->get ( 'form.factory' )->create ( DecorType::class, $decorAjout );
		$formAjoutDecor->add('Valider', SubmitType::class);
		
		$typeDecorAjout = new TypeDecor();
		$formAjoutTypeDecor = $this->get ( 'form.factory' )->create ( TypeDecorType::class, $typeDecorAjout );
		$formAjoutTypeDecor->add('Valider', SubmitType::class);

		if ($request->isMethod ( 'POST' ) && $formAjoutTypeDecor->handleRequest ( $request )->isValid ()) {
			if(is_object($typeDecorAjout)){
				$testTypeDecorAjout=$em->getRepository('LIFOClassifBundle:TypeDecor')->findOneByNom($typeDecorAjout->getNom());
				if(!is_object($testTypeDecorAjout)){
					$em->persist($typeDecorAjout);
				}
				$em->flush();
			}
			return $this->redirectToRoute ( 'lifo_classif_admin_ajout');
		}
		if ($request->isMethod ( 'POST' ) && $formAjoutDecor->handleRequest ( $request )->isValid ()) {
			if(is_object($decorAjout)){
				$testDecorAjout=$em->getRepository('LIFOClassifBundle:Decor')->findOneByPosition($decorAjout->getPosition());
				if(!is_object($testDecorAjout)){
					$em->persist($decorAjout);
				}
				$em->flush();
			}
			return $this->redirectToRoute ( 'lifo_classif_admin_ajout');
		}
			
		return $this->render ( 'LIFOClassifBundle:Admin:ajout.html.twig', array (
				'formAjoutDecor' => $formAjoutDecor->createView (),
				'formAjoutTypeDecor' => $formAjoutTypeDecor->createView ()
		) );
		
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function suppressionAction(Request $request){
		$em = $this->getDoctrine ()->getManager ();
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
				
			return $this->redirectToRoute ( 'lifo_classif_admin_suppression');
		}
			
		return $this->render ( 'LIFOClassifBundle:Admin:suppression.html.twig', array (
				'formSuppression' => $formSuppression->createView ()
		) );
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function utilisateurAction(){
		
	}
	
}
