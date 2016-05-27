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

		return $this->redirectToRoute('lifo_classif_admin_utilisateur_afficherTous');
	    
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
		
			
		if ($request->isMethod ( 'POST' ) && $formAddUser->handleRequest ( $request )->isValid ()) {
			$user = $formAddUser->get('Utilisateur')->getData();
			$username = $user->getUsername();
			$verifyUsername = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneByUsername($username);
			if(is_object($verifyUsername)){
				return $this->render ( 'LIFOClassifBundle:Admin:utilisateur.html.twig', array (
						'formAddUser' => $formAddUser->createView (),
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
				'messageImportant' => ""
		) );
	}
	
	public function utilisateurRechercherAction(Request $request){

		$em = $this->getDoctrine ()->getManager ();

		$formSearchUser = $this->createFormBuilder()
		->add('Username', TextType::class)
		->add('Rechercher', SubmitType::class)
		->getForm();

		if ($request->isMethod ( 'POST' ) && $formSearchUser->handleRequest ( $request )->isValid ()) {
			$username = $formSearchUser->get('Username')->getData();
			$verifyUser = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneByUsername($username);
			if(! is_object($verifyUser)){
				return $this->render ( 'LIFOClassifBundle:Admin:utilisateurRechercher.html.twig', array (
						'formSearchUser' => $formSearchUser->createView (),
						'messageImportant' => "Nom d'utilisateur inconnu"));
			} else {
				return $this->redirectToRoute ( 'lifo_classif_admin_utilisateur_afficher', array ('id' => $verifyUser->getId ()) );
			}
		}
		
		return $this->render ( 'LIFOClassifBundle:Admin:utilisateurRechercher.html.twig', array (
				'formSearchUser' => $formSearchUser->createView (),
				'messageImportant' => ""
		) );
	}
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function utilisateurAfficherTousAction($page){
		$em = $this->getDoctrine()->getManager();
		$nbUtilisateursParPage=10;
		
		$utilisateurs = $em->getRepository('LIFOClassifBundle:Utilisateur')
		->pagination($page, $nbUtilisateursParPage);
		
		$pagination = array(
				'page' => $page,
				'nbPages' => ceil(count($utilisateurs) / $nbUtilisateursParPage),
				'nomRoute' => 'lifo_classif_admin_utilisateur_afficherTous',
				'paramsRoute' => array()
		);

		return $this->render ( 'LIFOClassifBundle:Admin:utilisateurAfficherTous.html.twig', array(
				'utilisateurs' => $utilisateurs,
				'pagination' => $pagination
		)); 
	}
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function utilisateurAfficherAction(Request $request, $id){
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
			return $this->render ( 'LIFOClassifBundle:Admin:utilisateurAfficher.html.twig', array (
				'user' => $user,
				'formModifierRole' => $formModifierRole->createView(),
				'messageImportant' => "Changements enregistrés"
			) );
		}

		return $this->render ( 'LIFOClassifBundle:Admin:utilisateurAfficher.html.twig', array (
				'user' => $user,
				'formModifierRole' => $formModifierRole->createView(),
				'messageImportant' => ""
		) );
	    
	}
}
