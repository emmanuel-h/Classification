<?php

namespace LIFO\ClassifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="LIFO\ClassifBundle\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface, EquatableInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @ORM\Column(name="username", type="string", length=255, unique=true)
    */
    private $username;
    
    /**
    * @ORM\Column(name="password", type="string", length=255)
    */
    private $password;
    
    /**
    * @ORM\Column(name="salt", type="string", length=255)
    */
    private $salt;
    
    /**
    * @ORM\Column(name="roles", type="array")
    */
    private $roles = array();

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Utilisateur
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Utilisateur
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return Utilisateur
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {
    }
    
    public function isEqualTo(UserInterface $user)
    {
    	if (!$user instanceof WebserviceUser) {
    		return false;
    	}
    
    	if ($this->password !== $user->getPassword()) {
    		return false;
    	}
    
    	if ($this->salt !== $user->getSalt()) {
    		return false;
    	}
    
    	if ($this->username !== $user->getUsername()) {
    		return false;
    	}
    
    	return true;
    }
}
