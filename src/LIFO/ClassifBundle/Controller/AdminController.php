<?php
namespace LIFO\ClassifBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use LIFO\ClassifBundle\Entity\Utilisateur;
use LIFO\ClassifBundle\Form\UtilisateurType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AdminController extends Controller{
	
	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function adminAction(Request $request){
		return $this->redirect($this->getParameter("base_url"). $this->generateUrl( 'lifo_classif_admin_utilisateur_afficherTous' ));
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function utilisateurAction(Request $request){
		$em = $this->getDoctrine ()->getManager ();
		$formAddUser = $this->createFormBuilder()
			->add('utilisateur', UtilisateurType::class)
			->add('role', ChoiceType::class, array(
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
				return $this->redirect($this->getParameter("base_url"). $this->generateUrl( 'lifo_classif_admin_utilisateur' ));
			}
		}
		
		return $this->render ( 'LIFOClassifBundle:Admin:utilisateur.html.twig', array (
				'formAddUser' => $formAddUser->createView (),
				'messageImportant' => ""
		) );
	}

	/**
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function utilisateurRechercherAction(Request $request){

		$em = $this->getDoctrine ()->getManager ();

		$formSearchUser = $this->createFormBuilder()
		->add('username', TextType::class)
		->add('rechercher', SubmitType::class)
		->getForm();

		if ($request->isMethod ( 'POST' ) && $formSearchUser->handleRequest ( $request )->isValid ()) {
			$username = $formSearchUser->get('username')->getData();
			$verifyUser = $em->getRepository('LIFOClassifBundle:Utilisateur')->findOneByUsername($username);
			if(! is_object($verifyUser)){
				return $this->render ( 'LIFOClassifBundle:Admin:utilisateurRechercher.html.twig', array (
						'formSearchUser' => $formSearchUser->createView (),
						'messageImportant' => "Nom d'utilisateur inconnu"));
			} else {
		return $this->redirect($this->getParameter("base_url"). $this->generateUrl( 'lifo_classif_admin_utilisateur_afficher', array ('id' => $verifyUser->getId ()) ));
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
		$formModifierUser = $this->createFormBuilder()
			->add('nouveauRole', ChoiceType::class, array(
            		'choices' 			=> array(
            				'Utilisateur Normal'	=> "User",
            				'Archéologue'			=> "Archeologue",
            				'Administrateur'		=> "Administrateur"),
					'required'			=> false
            ))
            ->add('changePasswd', RepeatedType::class, array(
            		'type'		=> PasswordType::class,
            		'invalid_message'	=> 'Les deux mots de passe ne correspondent pas',
            		'required'			=> false
            ))
            -> add('valider', SubmitType::class)
            -> getForm();
			
		if ($request->isMethod ( 'POST' ) && $formModifierUser->handleRequest ( $request )->isValid ()) {

			$role = $formModifierUser->get('nouveauRole')->getData();
			if("User" == $role){
				$user->setRoles(array('ROLE_USER'));
			}
			if("Archeologue" == $role){
				$user->setRoles(array('ROLE_USER', 'ROLE_ARCHEOLOGUE'));
			}
			if("Administrateur" == $role){
				$user->setRoles(array('ROLE_USER','ROLE_ADMIN'));
			}
			if(NULL != $formModifierUser->get('changePasswd')->getData()){
				$options = ['cost' => 12,];
				$user->setPassword(password_hash($formModifierUser->get('changePasswd')->getData(), PASSWORD_BCRYPT, $options));
			}
			$em->persist($user);
			$em->flush($user);
			return $this->render ( 'LIFOClassifBundle:Admin:utilisateurAfficher.html.twig', array (
				'user' => $user,
				'formModifierUser' => $formModifierUser->createView(),
				'messageImportant' => "Changements enregistrés"
			) );
		}

		return $this->render ( 'LIFOClassifBundle:Admin:utilisateurAfficher.html.twig', array (
				'user' => $user,
				'formModifierUser' => $formModifierUser->createView(),
				'messageImportant' => ""
		) );
	    
	}
}
