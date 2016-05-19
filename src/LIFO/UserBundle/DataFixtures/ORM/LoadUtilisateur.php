<?php

namespace LIFO\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LIFO\UserBundle\Entity\Utilisateur;

class LoadUtilisateur implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs � cr�er
    $listNames = array('Alexandre', 'Marine', 'Anna');

    foreach ($listNames as $name) {
      // On cr�e l'utilisateur
      $user = new Utilisateur;

      // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
      $user->setUsername($name);
      $user->setPassword(md5($name));

      // On ne se sert pas du sel pour l'instant
      $user->setSalt('');
      // On d�finit uniquement le role ROLE_USER qui est le role de base
      $user->setRoles(array('ROLE_USER'));

      // On le persiste
      $manager->persist($user);
    }

    // On d�clenche l'enregistrement
    $manager->flush();
  }
}