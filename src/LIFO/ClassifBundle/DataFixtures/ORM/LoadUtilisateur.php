<?php

namespace LIFO\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIFO\UserBundle\Entity\Utilisateur;

class LoadUtilisateur implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Alexandre', 'Marine', 'Anna');

    foreach ($listNames as $name) {
      // On crée l'utilisateur
      $user = new Utilisateur;

      // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
      $user->setUsername($name);
		$options = ['cost' => 12,];
		$user->setPassword(password_hash($name, PASSWORD_BCRYPT, $options));
		
      // On ne se sert pas du sel pour l'instant
      $user->setSalt('');
      // On définit uniquement le role ROLE_USER qui est le role de base
      if($name=="Marine"){
      	$user->setRoles(array('ROLE_USER', 'ROLE_ADMIN'));
      } else {
      	$user->setRoles(array('ROLE_USER'));
      }

      // On le persiste
      $manager->persist($user);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}