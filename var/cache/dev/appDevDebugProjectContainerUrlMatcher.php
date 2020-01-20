<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/plant')) {
                if (0 === strpos($pathinfo, '/plant/plant')) {
                    // plant_search
                    if ('/plant/plant/search' === $pathinfo) {
                        $ret = array (  '_controller' => 'PlantBundle\\Controller\\PlantController::searchAction',  '_route' => 'plant_search',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_plant_search;
                        }

                        return $ret;
                    }
                    not_plant_search:

                    // plant_index
                    if ('/plant/plant' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PlantBundle\\Controller\\PlantController::indexAction',  '_route' => 'plant_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_plant_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'plant_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_plant_index;
                        }

                        return $ret;
                    }
                    not_plant_index:

                    // plant_show
                    if (preg_match('#^/plant/plant/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plant_show')), array (  '_controller' => 'PlantBundle\\Controller\\PlantController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_plant_show;
                        }

                        return $ret;
                    }
                    not_plant_show:

                    // plant_new
                    if ('/plant/plant/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PlantBundle\\Controller\\PlantController::newAction',  '_route' => 'plant_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_plant_new;
                        }

                        return $ret;
                    }
                    not_plant_new:

                    // plant_edit
                    if (preg_match('#^/plant/plant/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plant_edit')), array (  '_controller' => 'PlantBundle\\Controller\\PlantController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_plant_edit;
                        }

                        return $ret;
                    }
                    not_plant_edit:

                    // plant_delete
                    if (preg_match('#^/plant/plant/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plant_delete')), array (  '_controller' => 'PlantBundle\\Controller\\PlantController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_plant_delete;
                        }

                        return $ret;
                    }
                    not_plant_delete:

                    if (0 === strpos($pathinfo, '/plant/plantmaintaining')) {
                        // plantmaintaining_index
                        if ('/plant/plantmaintaining' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::indexAction',  '_route' => 'plantmaintaining_index',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_plantmaintaining_index;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'plantmaintaining_index'));
                            }

                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_plantmaintaining_index;
                            }

                            return $ret;
                        }
                        not_plantmaintaining_index:

                        if (0 === strpos($pathinfo, '/plant/plantmaintaining/new')) {
                            // plantmaintaining_new
                            if ('/plant/plantmaintaining/new' === $pathinfo) {
                                $ret = array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::newAction',  '_route' => 'plantmaintaining_new',);
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_plantmaintaining_new;
                                }

                                return $ret;
                            }
                            not_plantmaintaining_new:

                            // myplantmaintaining_new
                            if (preg_match('#^/plant/plantmaintaining/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'myplantmaintaining_new')), array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::myPlantmaintainingNewAction',));
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_myplantmaintaining_new;
                                }

                                return $ret;
                            }
                            not_myplantmaintaining_new:

                        }

                        // myplantmaintaining_index
                        if (preg_match('#^/plant/plantmaintaining/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'myplantmaintaining_index')), array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::myPlantIndexAction',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_myplantmaintaining_index;
                            }

                            return $ret;
                        }
                        not_myplantmaintaining_index:

                        // plantmaintaining_show
                        if (preg_match('#^/plant/plantmaintaining/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plantmaintaining_show')), array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::showAction',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_plantmaintaining_show;
                            }

                            return $ret;
                        }
                        not_plantmaintaining_show:

                        // plantmaintaining_edit
                        if (preg_match('#^/plant/plantmaintaining/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plantmaintaining_edit')), array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::editAction',));
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_plantmaintaining_edit;
                            }

                            return $ret;
                        }
                        not_plantmaintaining_edit:

                        // plantmaintaining_delete
                        if (preg_match('#^/plant/plantmaintaining/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'plantmaintaining_delete')), array (  '_controller' => 'PlantBundle\\Controller\\PlantmaintainingController::deleteAction',));
                            if (!in_array($requestMethod, array('DELETE'))) {
                                $allow = array_merge($allow, array('DELETE'));
                                goto not_plantmaintaining_delete;
                            }

                            return $ret;
                        }
                        not_plantmaintaining_delete:

                    }

                }

                elseif (0 === strpos($pathinfo, '/plant/userplant')) {
                    // userplant_index
                    if ('/plant/userplant' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'PlantBundle\\Controller\\UserplantController::indexAction',  '_route' => 'userplant_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_userplant_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'userplant_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_userplant_index;
                        }

                        return $ret;
                    }
                    not_userplant_index:

                    // userplant_show
                    if (preg_match('#^/plant/userplant/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'userplant_show')), array (  '_controller' => 'PlantBundle\\Controller\\UserplantController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_userplant_show;
                        }

                        return $ret;
                    }
                    not_userplant_show:

                    // userplant_new
                    if ('/plant/userplant/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'PlantBundle\\Controller\\UserplantController::newAction',  '_route' => 'userplant_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_userplant_new;
                        }

                        return $ret;
                    }
                    not_userplant_new:

                    // userplant_edit
                    if (preg_match('#^/plant/userplant/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'userplant_edit')), array (  '_controller' => 'PlantBundle\\Controller\\UserplantController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_userplant_edit;
                        }

                        return $ret;
                    }
                    not_userplant_edit:

                    // userplant_delete
                    if (preg_match('#^/plant/userplant/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'userplant_delete')), array (  '_controller' => 'PlantBundle\\Controller\\UserplantController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_userplant_delete;
                        }

                        return $ret;
                    }
                    not_userplant_delete:

                }

                // plant_homepage
                if ('/plant' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PlantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'plant_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_plant_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'plant_homepage'));
                    }

                    return $ret;
                }
                not_plant_homepage:

            }

            // main_homepage
            if ('/pl' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_main_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'main_homepage'));
                }

                return $ret;
            }
            not_main_homepage:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/ecommerce')) {
            // testformulaire
            if ('/ecommerce/teste' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\DefaultController::testformulaireAction',  '_route' => 'testformulaire',);
            }

            // ecommerce_homepage
            if ('/ecommerce' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::indexAction',  '_route' => 'ecommerce_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ecommerce_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ecommerce_homepage'));
                }

                return $ret;
            }
            not_ecommerce_homepage:

            // presentation
            if (0 === strpos($pathinfo, '/ecommerce/presentation') && preg_match('#^/ecommerce/presentation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::presentationAction',));
            }

            if (0 === strpos($pathinfo, '/ecommerce/panier')) {
                // panier
                if ('/ecommerce/panier' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
                }

                // ajouteraupanier
                if (0 === strpos($pathinfo, '/ecommerce/panier/ajouter') && preg_match('#^/ecommerce/panier/ajouter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouteraupanier')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterproduitaupanierAction',));
                }

                // supprimerpanier
                if (0 === strpos($pathinfo, '/ecommerce/panier/supprimer') && preg_match('#^/ecommerce/panier/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerpanier')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerproduitdepanierAction',));
                }

                // calcultva
                if ('/ecommerce/panier/calcultva' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::calcultvaAction',  '_route' => 'calcultva',);
                }

                // livraisonsupprimeradress
                if (0 === strpos($pathinfo, '/ecommerce/panier/livraison/adresse') && preg_match('#^/ecommerce/panier/livraison/adresse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonsupprimeradress')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimeradresslivraisonAction',));
                }

            }

            // layout
            if ('/ecommerce/layout' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::layoutAction',  '_route' => 'layout',);
            }

            // livraison
            if ('/ecommerce/livraison' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
            }

            // validation
            if ('/ecommerce/validation' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
            }

            // categorieproduits
            if (0 === strpos($pathinfo, '/ecommerce/categorie') && preg_match('#^/ecommerce/categorie/(?P<categorie>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieproduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::findbycategorieAction',));
            }

            if (0 === strpos($pathinfo, '/ecommerce/recherche')) {
                // recherchebutton
                if ('/ecommerce/recherche' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::recherchebuttonAction',  '_route' => 'recherchebutton',);
                }

                // rechercheproduit
                if ('/ecommerce/rechercheproduit' === $pathinfo) {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitController::recherchetraitementAction',  '_route' => 'rechercheproduit',);
                }

            }

            // f
            if ('/ecommerce/f' === $pathinfo) {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::factureAction',  '_route' => 'f',);
            }

            if (0 === strpos($pathinfo, '/ecommerce/admin/produit')) {
                // admin_index
                if ('/ecommerce/admin/produit' === $pathinfo) {
                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitAdminController::indexAction',  '_route' => 'admin_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_index;
                    }

                    return $ret;
                }
                not_admin_index:

                // admin_show
                if (preg_match('#^/ecommerce/admin/produit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitAdminController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_show;
                    }

                    return $ret;
                }
                not_admin_show:

                // admin_new
                if ('/ecommerce/admin/produit//new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitAdminController::newAction',  '_route' => 'admin_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_new;
                    }

                    return $ret;
                }
                not_admin_new:

                // admin_edit
                if (preg_match('#^/ecommerce/admin/produit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitAdminController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_edit;
                    }

                    return $ret;
                }
                not_admin_edit:

                // admin_delete
                if (preg_match('#^/ecommerce/admin/produit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitAdminController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_admin_delete;
                    }

                    return $ret;
                }
                not_admin_delete:

            }

            elseif (0 === strpos($pathinfo, '/ecommerce/admin/media')) {
                // admin_media_index
                if ('/ecommerce/admin/media' === $pathinfo) {
                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::indexAction',  '_route' => 'admin_media_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_media_index;
                    }

                    return $ret;
                }
                not_admin_media_index:

                // admin_media_show
                if (preg_match('#^/ecommerce/admin/media/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_media_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_admin_media_show;
                    }

                    return $ret;
                }
                not_admin_media_show:

                // admin_media_new
                if ('/ecommerce/admin/media/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::newAction',  '_route' => 'admin_media_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_media_new;
                    }

                    return $ret;
                }
                not_admin_media_new:

                // admin_media_edit
                if (preg_match('#^/ecommerce/admin/media/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_media_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_admin_media_edit;
                    }

                    return $ret;
                }
                not_admin_media_edit:

                // admin_media_delete
                if (preg_match('#^/ecommerce/admin/media/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_media_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_admin_media_delete;
                    }

                    return $ret;
                }
                not_admin_media_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/event')) {
            if (0 === strpos($pathinfo, '/event/event')) {
                // event_index
                if ('/event/event' === $pathinfo) {
                    $ret = array (  '_controller' => 'EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_event_index;
                    }

                    return $ret;
                }
                not_event_index:

                // event_show
                if (preg_match('#^/event/event/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'EventBundle\\Controller\\EventController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_event_show;
                    }

                    return $ret;
                }
                not_event_show:

                // event_new
                if ('/event/event/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_event_new;
                    }

                    return $ret;
                }
                not_event_new:

                // event_edit
                if (preg_match('#^/event/event/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'EventBundle\\Controller\\EventController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_event_edit;
                    }

                    return $ret;
                }
                not_event_edit:

                // event_delete
                if (preg_match('#^/event/event/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'EventBundle\\Controller\\EventController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_event_delete;
                    }

                    return $ret;
                }
                not_event_delete:

                // addcomm
                if (preg_match('#^/event/event/(?P<id>[^/]++)/showcomm$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'addcomm')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::showaddcommAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_addcomm;
                    }

                    return $ret;
                }
                not_addcomm:

            }

            elseif (0 === strpos($pathinfo, '/event/avis')) {
                // avis_index
                if ('/event/avis' === $pathinfo) {
                    $ret = array (  '_controller' => 'EventBundle\\Controller\\AvisController::indexAction',  '_route' => 'avis_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_avis_index;
                    }

                    return $ret;
                }
                not_avis_index:

                // avis_show
                if (preg_match('#^/event/avis/(?P<idA>[^/]++)/showc$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_show')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_avis_show;
                    }

                    return $ret;
                }
                not_avis_show:

                // avis_new
                if (0 === strpos($pathinfo, '/event/avis/newc') && preg_match('#^/event/avis/newc/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_new')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::newAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_avis_new;
                    }

                    return $ret;
                }
                not_avis_new:

                // avis_edit
                if (preg_match('#^/event/avis/(?P<idA>[^/]++)/editc$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_edit')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_avis_edit;
                    }

                    return $ret;
                }
                not_avis_edit:

                // avis_delete
                if (preg_match('#^/event/avis/(?P<idA>[^/]++)/deletec$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'avis_delete')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_avis_delete;
                    }

                    return $ret;
                }
                not_avis_delete:

                // cmt_new
                if (0 === strpos($pathinfo, '/event/avis/newco') && preg_match('#^/event/avis/newco/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'cmt_new')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::cmtAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_cmt_new;
                    }

                    return $ret;
                }
                not_cmt_new:

            }

            // annuleservation
            if (0 === strpos($pathinfo, '/event/annparticiper') && preg_match('#^/event/annparticiper/(?P<idEvent>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuleservation')), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::AnnuleparticiperAction',));
            }

            // ajouterComm
            if (0 === strpos($pathinfo, '/event/comment') && preg_match('#^/event/comment/(?P<idEvent>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterComm')), array (  '_controller' => 'EventBundle\\Controller\\AvisController::ajouterCommAction',));
            }

            if (0 === strpos($pathinfo, '/event/particip')) {
                // ajouterservation
                if (0 === strpos($pathinfo, '/event/participer') && preg_match('#^/event/participer/(?P<idEvent>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterservation')), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::participerAction',));
                }

                if (0 === strpos($pathinfo, '/event/participant')) {
                    // participant_index
                    if ('/event/participant' === $pathinfo) {
                        $ret = array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::indexAction',  '_route' => 'participant_index',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_participant_index;
                        }

                        return $ret;
                    }
                    not_participant_index:

                    // participant_show
                    if (preg_match('#^/event/participant/(?P<idPar>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_show')), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_participant_show;
                        }

                        return $ret;
                    }
                    not_participant_show:

                    // participant_new
                    if ('/event/participant/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::newAction',  '_route' => 'participant_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_participant_new;
                        }

                        return $ret;
                    }
                    not_participant_new:

                    // participant_edit
                    if (preg_match('#^/event/participant/(?P<idPar>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_edit')), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_participant_edit;
                        }

                        return $ret;
                    }
                    not_participant_edit:

                    // participant_delete
                    if (preg_match('#^/event/participant/(?P<idPar>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_delete')), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_participant_delete;
                        }

                        return $ret;
                    }
                    not_participant_delete:

                }

                // participation_page
                if ('/event/participation' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::affichelistAction',  '_route' => 'participation_page',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/Nusery')) {
            if (0 === strpos($pathinfo, '/Nusery/nursery')) {
                // nursery_index
                if ('/Nusery/nursery/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'NuseryBundle\\Controller\\NurseryController::indexAction',  '_route' => 'nursery_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_nursery_index;
                    }

                    return $ret;
                }
                not_nursery_index:

                // nursery_show
                if (preg_match('#^/Nusery/nursery/(?P<idN>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_show')), array (  '_controller' => 'NuseryBundle\\Controller\\NurseryController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_nursery_show;
                    }

                    return $ret;
                }
                not_nursery_show:

                // nursery_new
                if ('/Nusery/nursery/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'NuseryBundle\\Controller\\NurseryController::newAction',  '_route' => 'nursery_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_nursery_new;
                    }

                    return $ret;
                }
                not_nursery_new:

                // nursery_edit
                if (preg_match('#^/Nusery/nursery/(?P<idN>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_edit')), array (  '_controller' => 'NuseryBundle\\Controller\\NurseryController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_nursery_edit;
                    }

                    return $ret;
                }
                not_nursery_edit:

                // nursery_delete
                if (preg_match('#^/Nusery/nursery/(?P<idN>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'nursery_delete')), array (  '_controller' => 'NuseryBundle\\Controller\\NurseryController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_nursery_delete;
                    }

                    return $ret;
                }
                not_nursery_delete:

                // nursery_earth
                if ('/Nusery/nursery/earth' === $pathinfo) {
                    $ret = array('_route' => 'nursery_earth');
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_nursery_earth;
                    }

                    return $ret;
                }
                not_nursery_earth:

            }

            elseif (0 === strpos($pathinfo, '/Nusery/revs')) {
                // revs_index
                if ('/Nusery/revs/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'NuseryBundle\\Controller\\RevsController::indexAction',  '_route' => 'revs_index',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_revs_index;
                    }

                    return $ret;
                }
                not_revs_index:

                // revs_show
                if (preg_match('#^/Nusery/revs/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'revs_show')), array (  '_controller' => 'NuseryBundle\\Controller\\RevsController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_revs_show;
                    }

                    return $ret;
                }
                not_revs_show:

                // revs_new
                if ('/Nusery/revs/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'NuseryBundle\\Controller\\RevsController::newAction',  '_route' => 'revs_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_revs_new;
                    }

                    return $ret;
                }
                not_revs_new:

                // revs_edit
                if (preg_match('#^/Nusery/revs/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'revs_edit')), array (  '_controller' => 'NuseryBundle\\Controller\\RevsController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_revs_edit;
                    }

                    return $ret;
                }
                not_revs_edit:

                // revs_delete
                if (preg_match('#^/Nusery/revs/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'revs_delete')), array (  '_controller' => 'NuseryBundle\\Controller\\RevsController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_revs_delete;
                    }

                    return $ret;
                }
                not_revs_delete:

            }

            // nusery_homepage
            if ('/Nusery' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'NuseryBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nusery_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_nusery_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nusery_homepage'));
                }

                return $ret;
            }
            not_nusery_homepage:

        }

        elseif (0 === strpos($pathinfo, '/Blog')) {
            if (0 === strpos($pathinfo, '/Blog/article')) {
                // article_index
                if ('/Blog/article' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_article_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'article_index'));
                    }

                    return $ret;
                }
                not_article_index:

                // article_pdf
                if (preg_match('#^/Blog/article/(?P<idA>[^/]++)/pdf$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_pdf')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::pdfAction',));
                }

                // article_list
                if ('/Blog/article/list' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listAction',  '_route' => 'article_list',);
                }

                if (0 === strpos($pathinfo, '/Blog/article/listCat')) {
                    // article_listCat1
                    if ('/Blog/article/listCat1' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat1Action',  '_route' => 'article_listCat1',);
                    }

                    // article_listCat2
                    if ('/Blog/article/listCat2' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat2Action',  '_route' => 'article_listCat2',);
                    }

                    // article_listCat3
                    if ('/Blog/article/listCat3' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat3Action',  '_route' => 'article_listCat3',);
                    }

                    // article_listCat4
                    if ('/Blog/article/listCat4' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat3Action',  '_route' => 'article_listCat4',);
                    }

                    // article_listCat5
                    if ('/Blog/article/listCat5' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat5Action',  '_route' => 'article_listCat5',);
                    }

                    // article_listCat6
                    if ('/Blog/article/listCat6' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat6Action',  '_route' => 'article_listCat6',);
                    }

                    // article_listCat7
                    if ('/Blog/article/listCat7' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat7Action',  '_route' => 'article_listCat7',);
                    }

                    // article_listCat8
                    if ('/Blog/article/listCat8' === $pathinfo) {
                        return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::listCat8Action',  '_route' => 'article_listCat8',);
                    }

                }

                // article_show
                if (preg_match('#^/Blog/article/(?P<idA>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::showAction',));
                }

                // article_new
                if ('/Blog/article/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_article_new;
                    }

                    return $ret;
                }
                not_article_new:

                // article_edit
                if (preg_match('#^/Blog/article/(?P<idA>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::editAction',));
                }

                // article_delete
                if (preg_match('#^/Blog/article/(?P<idA>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::deleteAction',));
                }

                // ajax_search
                if ('/Blog/article/search' === $pathinfo) {
                    return array (  '_controller' => 'BlogBundle\\Controller\\ArticleController::searchAction',  '_route' => 'ajax_search',);
                }

            }

            // blog_homepage
            if ('/Blog' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_blog_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'blog_homepage'));
                }

                return $ret;
            }
            not_blog_homepage:

            // commentaire_index
            if ('/Blog/commentaires' === $pathinfo) {
                return array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire_index',);
            }

            // commentaire_show
            if (preg_match('#^/Blog/(?P<idCommentaire>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::showAction',));
            }

            // commentaire_new
            if (preg_match('#^/Blog/(?P<idA>[^/]++)/new$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_new')), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::newAction',));
            }

            // commentaire_edit
            if (preg_match('#^/Blog/(?P<idCommentaire>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::editAction',));
            }

            // commentaire_delete
            if (preg_match('#^/Blog/(?P<idCommentaire>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'BlogBundle\\Controller\\CommentaireController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
