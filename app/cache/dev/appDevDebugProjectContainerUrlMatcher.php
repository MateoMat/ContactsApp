<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // newAddres
        if ($pathinfo === '/newAddres') {
            return array (  '_controller' => 'AppBundle\\Controller\\AddresController::newAddresAction',  '_route' => 'newAddres',);
        }

        // app_addres_editaddres
        if (0 === strpos($pathinfo, '/editAddres') && preg_match('#^/editAddres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_addres_editaddres')), array (  '_controller' => 'AppBundle\\Controller\\AddresController::editAddresAction',));
        }

        // app_addres_deleteaddres
        if (0 === strpos($pathinfo, '/deleteAddres') && preg_match('#^/deleteAddres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_addres_deleteaddres')), array (  '_controller' => 'AppBundle\\Controller\\AddresController::deleteAddresAction',));
        }

        // app_addres_showalladdres
        if ($pathinfo === '/showAllAddres') {
            return array (  '_controller' => 'AppBundle\\Controller\\AddresController::showAllAddresAction',  '_route' => 'app_addres_showalladdres',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // addEmail
        if ($pathinfo === '/addEmail') {
            return array (  '_controller' => 'AppBundle\\Controller\\EmailController::addEmailAction',  '_route' => 'addEmail',);
        }

        // app_email_editemail
        if (0 === strpos($pathinfo, '/editEmail') && preg_match('#^/editEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_email_editemail')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::editEmailAction',));
        }

        // app_email_deleteemail
        if (0 === strpos($pathinfo, '/deleteEmail') && preg_match('#^/deleteEmail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_email_deleteemail')), array (  '_controller' => 'AppBundle\\Controller\\EmailController::deleteEmailAction',));
        }

        // newPerson
        if ($pathinfo === '/newPerson') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonController::newPersonAction',  '_route' => 'newPerson',);
        }

        // edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'AppBundle\\Controller\\PersonController::modifyAction',));
        }

        // deletePerson
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletePerson')), array (  '_controller' => 'AppBundle\\Controller\\PersonController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/show')) {
            // showAll
            if ($pathinfo === '/showAll') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonController::showAllAction',  '_route' => 'showAll',);
            }

            // app_person_showperson
            if (preg_match('#^/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_person_showperson')), array (  '_controller' => 'AppBundle\\Controller\\PersonController::showPersonAction',));
            }

        }

        // app_phone_addphone
        if ($pathinfo === '/addPhone') {
            return array (  '_controller' => 'AppBundle\\Controller\\PhoneController::addPhoneAction',  '_route' => 'app_phone_addphone',);
        }

        // app_phone_editphone
        if (0 === strpos($pathinfo, '/editPhone') && preg_match('#^/editPhone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_phone_editphone')), array (  '_controller' => 'AppBundle\\Controller\\PhoneController::editPhoneAction',));
        }

        // app_phone_deletephone
        if (0 === strpos($pathinfo, '/deletePhone') && preg_match('#^/deletePhone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_phone_deletephone')), array (  '_controller' => 'AppBundle\\Controller\\PhoneController::deletePhoneAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
