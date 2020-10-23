<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'), null, null, null, false, false, null)),
            '/admin/organizer' => array(array(array('_route' => 'organizer', '_controller' => 'App\\Controller\\AdminController::organisateur'), null, null, null, false, false, null)),
            '/category' => array(array(array('_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'), null, array('GET' => 0), null, true, false, null)),
            '/category/new' => array(array(array('_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/event/new' => array(array(array('_route' => 'event_event', '_controller' => 'App\\Controller\\EventController::new'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\EventController::home'), null, null, null, false, false, null)),
            '/testqr' => array(array(array('_route' => 'test', '_controller' => 'App\\Controller\\EventController::test'), null, null, null, false, false, null)),
            '/inscription' => array(array(array('_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'), null, null, null, false, false, null)),
            '/connexion' => array(array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, false, null)),
            '/logout' => array(array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, false, null)),
            '/active' => array(array(array('_route' => 'active', '_controller' => 'App\\Controller\\SecurityController::active'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/category/([^/]++)(?'
                        .'|(*:28)'
                        .'|/edit(*:40)'
                        .'|(*:47)'
                    .')'
                    .'|/event/(?'
                        .'|details/([^/]++)(*:81)'
                        .'|command/([^/]++)(*:104)'
                    .')'
                    .'|/activation/([^/]++)(*:133)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:172)'
                        .'|wdt/([^/]++)(*:192)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:238)'
                                .'|router(*:252)'
                                .'|exception(?'
                                    .'|(*:272)'
                                    .'|\\.css(*:285)'
                                .')'
                            .')'
                            .'|(*:295)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            28 => array(array(array('_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'), array('id'), array('GET' => 0), null, false, true, null)),
            40 => array(array(array('_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, false, null)),
            47 => array(array(array('_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'), array('id'), array('DELETE' => 0), null, false, true, null)),
            81 => array(array(array('_route' => 'event_details', '_controller' => 'App\\Controller\\EventController::ShowEvent'), array('id'), null, null, false, true, null)),
            104 => array(array(array('_route' => 'command', '_controller' => 'App\\Controller\\EventController::command'), array('id'), null, null, false, true, null)),
            133 => array(array(array('_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'), array('token'), null, null, false, true, null)),
            172 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            192 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            238 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            252 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            272 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            285 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            295 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
