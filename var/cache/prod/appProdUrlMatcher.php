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

        // lifo_classif_telechargement
        if ($pathinfo === '/telechargement') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::telechargementAction',  '_route' => 'lifo_classif_telechargement',);
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
        if ($pathinfo === '/classification') {
            return array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::classificationAction',  '_route' => 'lifo_classif_classification',);
        }

        // lifo_classif_tesson
        if (0 === strpos($pathinfo, '/tesson') && preg_match('#^/tesson/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lifo_classif_tesson')), array (  '_controller' => 'LIFO\\ClassifBundle\\Controller\\PlatformController::tessonAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
