<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // lifo_classif
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lifo_classif');
            }

            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::indexAction',  '_route' => 'lifo_classif',);
        }

        // lifo_classif_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::uploadAction',  '_route' => 'lifo_classif_upload',);
        }

        // lifo_classif_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::rechercheAction',  '_route' => 'lifo_classif_recherche',);
        }

        // lifo_classif_classification
        if (0 === strpos($pathinfo, '/classification') && preg_match('#^/classification(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_classification')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classificationAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/tesson')) {
            // lifo_classif_tesson
            if (preg_match('#^/tesson/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_tesson')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonAction',));
            }

            // lifo_classif_tesson_modifier
            if (0 === strpos($pathinfo, '/tesson/modifier') && preg_match('#^/tesson/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_tesson_modifier')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonModifierAction',));
            }

        }

        // lifo_classif_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::adminAction',  '_route' => 'lifo_classif_admin',);
        }

        if (0 === strpos($pathinfo, '/parametres')) {
            // lifo_classif_parametres_positionDecor
            if ($pathinfo === '/parametres/positiondecor') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\ParametresController::positionDecorAction',  '_route' => 'lifo_classif_parametres_positionDecor',);
            }

            // lifo_classif_parametres_typeDecor
            if ($pathinfo === '/parametres/typedecor') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\ParametresController::typeDecorAction',  '_route' => 'lifo_classif_parametres_typeDecor',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/utilisateur')) {
            // lifo_classif_admin_utilisateur
            if ($pathinfo === '/admin/utilisateur') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAction',  '_route' => 'lifo_classif_admin_utilisateur',);
            }

            // lifo_classif_admin_utilisateur_rechercher
            if ($pathinfo === '/admin/utilisateur/rechercher') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurRechercherAction',  '_route' => 'lifo_classif_admin_utilisateur_rechercher',);
            }

            if (0 === strpos($pathinfo, '/admin/utilisateur/afficher')) {
                // lifo_classif_admin_utilisateur_afficherTous
                if (0 === strpos($pathinfo, '/admin/utilisateur/afficherTous') && preg_match('#^/admin/utilisateur/afficherTous(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_admin_utilisateur_afficherTous')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAfficherTousAction',  'page' => 1,));
                }

                // lifo_classif_admin_utilisateur_afficher
                if (preg_match('#^/admin/utilisateur/afficher/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_admin_utilisateur_afficher')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\AdminController::utilisateurAfficherAction',));
                }

            }

        }

        // lifo_classif_telechargement_numerisation
        if (0 === strpos($pathinfo, '/tesson/telecharger/numerisation') && preg_match('#^/tesson/telecharger/numerisation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_telechargement_numerisation')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::telechargementNumerisationAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
