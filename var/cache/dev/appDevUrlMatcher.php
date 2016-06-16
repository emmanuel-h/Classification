<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // lifo_classif
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lifo_classif');
            }

            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::indexAction',  '_route' => 'lifo_classif',);
        }

        // lifo_classif_numerisations
        if (0 === strpos($pathinfo, '/numerisations') && preg_match('#^/numerisations(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_numerisations')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::numerisationsAction',  'page' => 1,));
        }

        // lifo_classif_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::uploadAction',  '_route' => 'lifo_classif_upload',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // lifo_classif_recherche
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::rechercheAction',  '_route' => 'lifo_classif_recherche',);
            }

            // lifo_classif_recherche_afficher
            if (0 === strpos($pathinfo, '/recherche/afficher') && preg_match('#^/recherche/afficher(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_recherche_afficher')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::rechercheAfficherAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/classification')) {
            // lifo_classif_classification
            if (preg_match('#^/classification(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_classification')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classificationAction',  'page' => 1,));
            }

            // lifo_classif_classification_modifier
            if ($pathinfo === '/classification/modifier') {
                return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classeModifierAction',  '_route' => 'lifo_classif_classification_modifier',);
            }

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

            // lifo_classif_tesson_exporter
            if (0 === strpos($pathinfo, '/tesson/exporter') && preg_match('#^/tesson/exporter/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_tesson_exporter')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonExporterAction',));
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
