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
use LIFO\ClassifBundle\Entity\Utilisateur;
use LIFO\ClassifBundle\Form\UtilisateurType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ParametresController extends Controller{

	/**
	 * @Security("has_role('ROLE_ARCHEOLOGUE')")
	 */
	public function typeDecorAction(Request $request){
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
			return $this->redirectToRoute ( 'lifo_classif_parametres_positionDecor');
		}
		if ($request->isMethod ( 'POST' ) && $formAjoutDecor->handleRequest ( $request )->isValid ()) {
			if(is_object($decorAjout)){
				$testDecorAjout=$em->getRepository('LIFOClassifBundle:Decor')->findOneByPosition($decorAjout->getPosition());
				if(!is_object($testDecorAjout)){
					$em->persist($decorAjout);
				}
				$em->flush();
			}
			return $this->redirectToRoute ( 'lifo_classif_parametres_positionDecor');
		}
			
		return $this->render ( 'LIFOClassifBundle:Parametres:positionDecor.html.twig', array (
				'formAjoutDecor' => $formAjoutDecor->createView (),
				'formAjoutTypeDecor' => $formAjoutTypeDecor->createView ()
		) );
		
	}

	/**
	 * @Security("has_role('ROLE_ARCHEOLOGUE')")
	 */
	public function positionDecorAction(Request $request){
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
				
			return $this->redirectToRoute ( 'lifo_classif_parametres_typeDecor');
		}
			
		return $this->render ( 'LIFOClassifBundle:Parametres:typeDecor.html.twig', array (
				'formSuppression' => $formSuppression->createView ()
		) );
	}
}
