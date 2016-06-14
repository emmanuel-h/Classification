<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'lifo_classif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_upload' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_recherche_afficher' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::rechercheAfficherAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/recherche/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_classification' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classificationAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/classification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_classification_modifier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classeModifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classification/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_tesson' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tesson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_tesson_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonModifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tesson/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_parametres_positionDecor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\ParametresController::positionDecorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametres/positiondecor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_parametres_typeDecor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\ParametresController::typeDecorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/parametres/typedecor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_admin_utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_admin_utilisateur_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurRechercherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateur/rechercher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_admin_utilisateur_afficherTous' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAfficherTousAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/utilisateur/afficherTous',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_admin_utilisateur_afficher' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAfficherAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/utilisateur/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lifo_classif_telechargement_numerisation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::telechargementNumerisationAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tesson/telecharger/numerisation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'LIFO\\ClassifBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
