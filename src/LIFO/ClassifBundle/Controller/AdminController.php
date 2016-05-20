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
	public function utilisateurAction(Request $request){
		$em = $this->getDoctrine ()->getManager ();
		$formAddUser = $this->createFormBuilder()
			->add('Utilisateur', UtilisateurType::class)
			->add('Role', ChoiceType::class, array(
            		'choices'  => array(
            				'Utilisateur Normal' => "User",
            				'Archéologue' => "Archéologue",
            				'Administrateur' => "Administrateur")))
            -> add('valider', SubmitType::class)
			->getForm();
			
		$formSearchUser = $this->createFormBuilder()
			->add('Username', TextType::class)
			->add('Rechercher', SubmitType::class)
			->getForm();
		

		if ($request->isMethod ( 'POST' ) && $formSearchUser->handleRequest ( $request )->isValid ()) {
			$username = $formSearchUser->get('Username')->getData();
			$verifyUser = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneByUsername($username);
			if(! is_object($verifyUser)){
				return $this->render ( 'LIFOClassifBundle:Admin:utilisateur.html.twig', array (
						'formAddUser' => $formAddUser->createView (),
						'formSearchUser' => $formSearchUser->createView (),
						'messageImportant' => "Nom d'utilisateur inconnu"));
			} else {
				return $this->redirectToRoute ( 'lifo_classif_admin_afficher_utilisateur', array ('id' => $verifyUser->getId ()) );
			}
		}
			
		if ($request->isMethod ( 'POST' ) && $formAddUser->handleRequest ( $request )->isValid ()) {
			$user = $formAddUser->get('Utilisateur')->getData();
			$username = $user->getUsername();
			$verifyUsername = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneByUsername($username);
			if(is_object($verifyUsername)){
				return $this->render ( 'LIFOClassifBundle:Admin:utilisateur.html.twig', array (
						'formAddUser' => $formAddUser->createView (),
						'formSearchUser' => $formSearchUser->createView (),
						'messageImportant' => "Nom d'utilisateur déjà pris"));
			} else {
				$options = ['cost' => 12,];
				$user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT, $options));
				$role = $formAddUser->get('Role')->getData();
				if("User" == $role){
	      			$user->setRoles(array('ROLE_USER'));
				}
				if("Archéologue" == $role){
	      			$user->setRoles(array('ROLE_USER', 'ROLE_ARCHEOLOGUE'));
				}
				if("Administrateur" == $role){
	      			$user->setRoles(array('ROLE_USER','ROLE_ADMIN'));
				}
				$user->setSalt('');
				$em->persist($user);
				$em->flush($user);
				return $this->redirectToRoute ( 'lifo_classif_admin_utilisateur');
			}
		}
		
		return $this->render ( 'LIFOClassifBundle:Admin:utilisateur.html.twig', array (
				'formAddUser' => $formAddUser->createView (),
				'formSearchUser' => $formSearchUser->createView (),
				'messageImportant' => ""
		) );
	}
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function allUsersAction($page){
		$em = $this->getDoctrine()->getManager();
		$nbUtilisateursParPage=2;
		
		$utilisateurs = $em->getRepository('LIFOClassifBundle:Utilisateur')
		->pagination($page, $nbUtilisateursParPage);
		
		$pagination = array(
				'page' => $page,
				'nbPages' => ceil(count($utilisateurs) / $nbUtilisateursParPage),
				'nomRoute' => 'lifo_classif_admin_all_users',
				'paramsRoute' => array()
		);

		return $this->render ( 'LIFOClassifBundle:Admin:allUsers.html.twig', array(
				'utilisateurs' => $utilisateurs,
				'pagination' => $pagination
		)); 
	}
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function afficherUtilisateurAction(Request $request, $id){
		$em = $this->getDoctrine ()->getManager ();
		$user = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneById($id);
		$formModifierRole = $this->createFormBuilder()
			->add('nouveauRole', ChoiceType::class, array(
            		'choices'  => array(
            				'Utilisateur Normal' => "User",
            				'Archéologue' => "Archéologue",
            				'Administrateur' => "Administrateur")))
            -> add('valider', SubmitType::class)
            -> getForm();
			
		if ($request->isMethod ( 'POST' ) && $formModifierRole->handleRequest ( $request )->isValid ()) {

			$role = $formModifierRole->get('nouveauRole')->getData();
			if("User" == $role){
				$user->setRoles(array('ROLE_USER'));
			}
			if("Archéologue" == $role){
				$user->setRoles(array('ROLE_USER', 'ROLE_ARCHEOLOGUE'));
			}
			if("Administrateur" == $role){
				$user->setRoles(array('ROLE_USER','ROLE_ADMIN'));
			}
			$em->persist($user);
			$em->flush($user);
			return $this->render ( 'LIFOClassifBundle:Admin:afficherUtilisateur.html.twig', array (
				'user' => $user,
				'formModifierRole' => $formModifierRole->createView(),
				'messageImportant' => "Changements enregistrés"
			) );
		}

		return $this->render ( 'LIFOClassifBundle:Admin:afficherUtilisateur.html.twig', array (
				'user' => $user,
				'formModifierRole' => $formModifierRole->createView(),
				'messageImportant' => ""
		) );
	    
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function afficherAllUserAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		
		$utilisateurs = $em->getRepository('LIFOClassifBundle:Utilisateur')
		->pagination($page, 10);
		
		$pagination = array(
				'page' => $page,
				'nbPages' => ceil(count($articles) / $nbArticlesParPage),
				'nomRoute' => 'lifo_classif_admin_afficher_tous_utilisateurs',
				'paramsRoute' => array()
		);

		return $this->render ( 'LIFOClassifBundle:Admin:afficherTousUtilisateurs.html.twig', array(
				'utilisateurs' => $utilisateurs,
				'pagination' => $pagination
		)); 
	}
	
}
