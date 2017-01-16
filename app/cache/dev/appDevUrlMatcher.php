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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/classe')) {
            // classe
            if (rtrim($pathinfo, '/') === '/classe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'classe');
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe',);
            }
            not_classe:

            // classe_create
            if ($pathinfo === '/classe/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_classe_create;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
            }
            not_classe_create:

            // classe_new
            if ($pathinfo === '/classe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe_new;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
            }
            not_classe_new:

            // classe_show
            if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::showAction',));
            }
            not_classe_show:

            // classe_edit
            if (preg_match('#^/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_classe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::editAction',));
            }
            not_classe_edit:

            // classe_update
            if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_classe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::updateAction',));
            }
            not_classe_update:

            // classe_delete
            if (preg_match('#^/classe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_classe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ClasseController::deleteAction',));
            }
            not_classe_delete:

        }

        // eco_ecole_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eco_ecole_default_index')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::indexAction',));
        }

        // addeleve
        if ($pathinfo === '/ajouterEleve') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ajouterEleveAction',  '_route' => 'addeleve',);
        }

        // modifeleve
        if (0 === strpos($pathinfo, '/ModifierEleve') && preg_match('#^/ModifierEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifeleve')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ModifierEleveAction',));
        }

        // supp_eleve
        if (0 === strpos($pathinfo, '/SupprimerEleve') && preg_match('#^/SupprimerEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_eleve')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::SupprimerEleveAction',));
        }

        // eco_ecole_default_listeleves
        if ($pathinfo === '/listEleves') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::listElevesAction',  '_route' => 'eco_ecole_default_listeleves',);
        }

        // addproff
        if ($pathinfo === '/ajouterProfesseur') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ajouterProfesseurAction',  '_route' => 'addproff',);
        }

        // modifproff
        if (0 === strpos($pathinfo, '/ModifierProfesseur') && preg_match('#^/ModifierProfesseur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifproff')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ModifierProfesseurAction',));
        }

        // supp_proff
        if (0 === strpos($pathinfo, '/SupprimerProfesseur') && preg_match('#^/SupprimerProfesseur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_proff')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::SupprimerProfesseurAction',));
        }

        // eco_ecole_default_listprofesseurs
        if ($pathinfo === '/listProfesseurs') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::listProfesseursAction',  '_route' => 'eco_ecole_default_listprofesseurs',);
        }

        if (0 === strpos($pathinfo, '/ajouter')) {
            // eco_ecole_default_ajouterreglement
            if ($pathinfo === '/ajouterReglement') {
                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ajouterReglementAction',  '_route' => 'eco_ecole_default_ajouterreglement',);
            }

            // addmatr
            if ($pathinfo === '/ajouterMatiere') {
                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ajouterMatiereAction',  '_route' => 'addmatr',);
            }

        }

        // supp_mat
        if (0 === strpos($pathinfo, '/SupprimerMatiere') && preg_match('#^/SupprimerMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_mat')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::SupprimerMatiereAction',));
        }

        // modifmat
        if (0 === strpos($pathinfo, '/ModifierMatiere') && preg_match('#^/ModifierMatiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifmat')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ModifierMatiereAction',));
        }

        // eco_ecole_default_listmatieres
        if ($pathinfo === '/listMatieres') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::listMatieresAction',  '_route' => 'eco_ecole_default_listmatieres',);
        }

        // addclasse
        if ($pathinfo === '/ajouterClasse') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ajouterClasseAction',  '_route' => 'addclasse',);
        }

        // modifclass
        if (0 === strpos($pathinfo, '/ModifierClasses') && preg_match('#^/ModifierClasses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifclass')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::ModifierClassesAction',));
        }

        // supp_class
        if (0 === strpos($pathinfo, '/SupprimerClasse') && preg_match('#^/SupprimerClasse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp_class')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::SupprimerClasseAction',));
        }

        // eco_ecole_default_listclasses
        if ($pathinfo === '/listClasses') {
            return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\DefaultController::listClassesAction',  '_route' => 'eco_ecole_default_listclasses',);
        }

        if (0 === strpos($pathinfo, '/eleve')) {
            // eleve
            if (rtrim($pathinfo, '/') === '/eleve') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eleve;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eleve');
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::indexAction',  '_route' => 'eleve',);
            }
            not_eleve:

            // eleve_create
            if ($pathinfo === '/eleve/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_eleve_create;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::createAction',  '_route' => 'eleve_create',);
            }
            not_eleve_create:

            // eleve_new
            if ($pathinfo === '/eleve/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eleve_new;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::newAction',  '_route' => 'eleve_new',);
            }
            not_eleve_new:

            // eleve_show
            if (preg_match('#^/eleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eleve_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::showAction',));
            }
            not_eleve_show:

            // eleve_edit
            if (preg_match('#^/eleve/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_eleve_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::editAction',));
            }
            not_eleve_edit:

            // eleve_update
            if (preg_match('#^/eleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_eleve_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::updateAction',));
            }
            not_eleve_update:

            // eleve_delete
            if (preg_match('#^/eleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_eleve_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eleve_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\EleveController::deleteAction',));
            }
            not_eleve_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/matiere')) {
                // matiere
                if (rtrim($pathinfo, '/') === '/matiere') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matiere;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'matiere');
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
                }
                not_matiere:

                // matiere_create
                if ($pathinfo === '/matiere/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_matiere_create;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
                }
                not_matiere_create:

                // matiere_new
                if ($pathinfo === '/matiere/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matiere_new;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
                }
                not_matiere_new:

                // matiere_show
                if (preg_match('#^/matiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matiere_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::showAction',));
                }
                not_matiere_show:

                // matiere_edit
                if (preg_match('#^/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_matiere_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::editAction',));
                }
                not_matiere_edit:

                // matiere_update
                if (preg_match('#^/matiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_matiere_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::updateAction',));
                }
                not_matiere_update:

                // matiere_delete
                if (preg_match('#^/matiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_matiere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\MatiereController::deleteAction',));
                }
                not_matiere_delete:

            }

            if (0 === strpos($pathinfo, '/modereglement')) {
                // modereglement
                if (rtrim($pathinfo, '/') === '/modereglement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modereglement;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'modereglement');
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::indexAction',  '_route' => 'modereglement',);
                }
                not_modereglement:

                // modereglement_create
                if ($pathinfo === '/modereglement/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_modereglement_create;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::createAction',  '_route' => 'modereglement_create',);
                }
                not_modereglement_create:

                // modereglement_new
                if ($pathinfo === '/modereglement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modereglement_new;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::newAction',  '_route' => 'modereglement_new',);
                }
                not_modereglement_new:

                // modereglement_show
                if (preg_match('#^/modereglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modereglement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modereglement_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::showAction',));
                }
                not_modereglement_show:

                // modereglement_edit
                if (preg_match('#^/modereglement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modereglement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modereglement_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::editAction',));
                }
                not_modereglement_edit:

                // modereglement_update
                if (preg_match('#^/modereglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_modereglement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modereglement_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::updateAction',));
                }
                not_modereglement_update:

                // modereglement_delete
                if (preg_match('#^/modereglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_modereglement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modereglement_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ModereglementController::deleteAction',));
                }
                not_modereglement_delete:

            }

        }

        if (0 === strpos($pathinfo, '/note')) {
            // note
            if (rtrim($pathinfo, '/') === '/note') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note');
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::indexAction',  '_route' => 'note',);
            }
            not_note:

            // note_create
            if ($pathinfo === '/note/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_create;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::createAction',  '_route' => 'note_create',);
            }
            not_note_create:

            // note_new
            if ($pathinfo === '/note/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_new;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::newAction',  '_route' => 'note_new',);
            }
            not_note_new:

            // note_show
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::showAction',));
            }
            not_note_show:

            // note_edit
            if (preg_match('#^/note/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::editAction',));
            }
            not_note_edit:

            // note_update
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_note_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::updateAction',));
            }
            not_note_update:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_note_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\NoteController::deleteAction',));
            }
            not_note_delete:

        }

        if (0 === strpos($pathinfo, '/professeur')) {
            // professeur
            if (rtrim($pathinfo, '/') === '/professeur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_professeur;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'professeur');
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::indexAction',  '_route' => 'professeur',);
            }
            not_professeur:

            // professeur_create
            if ($pathinfo === '/professeur/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_professeur_create;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::createAction',  '_route' => 'professeur_create',);
            }
            not_professeur_create:

            // professeur_new
            if ($pathinfo === '/professeur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_professeur_new;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::newAction',  '_route' => 'professeur_new',);
            }
            not_professeur_new:

            // professeur_show
            if (preg_match('#^/professeur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_professeur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'professeur_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::showAction',));
            }
            not_professeur_show:

            // professeur_edit
            if (preg_match('#^/professeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_professeur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'professeur_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::editAction',));
            }
            not_professeur_edit:

            // professeur_update
            if (preg_match('#^/professeur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_professeur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'professeur_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::updateAction',));
            }
            not_professeur_update:

            // professeur_delete
            if (preg_match('#^/professeur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_professeur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'professeur_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ProfesseurController::deleteAction',));
            }
            not_professeur_delete:

        }

        if (0 === strpos($pathinfo, '/reglement')) {
            // reglement
            if (rtrim($pathinfo, '/') === '/reglement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reglement;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reglement');
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::indexAction',  '_route' => 'reglement',);
            }
            not_reglement:

            // reglement_create
            if ($pathinfo === '/reglement/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reglement_create;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::createAction',  '_route' => 'reglement_create',);
            }
            not_reglement_create:

            // reglement_new
            if ($pathinfo === '/reglement/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reglement_new;
                }

                return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::newAction',  '_route' => 'reglement_new',);
            }
            not_reglement_new:

            // reglement_show
            if (preg_match('#^/reglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reglement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglement_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::showAction',));
            }
            not_reglement_show:

            // reglement_edit
            if (preg_match('#^/reglement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reglement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglement_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::editAction',));
            }
            not_reglement_edit:

            // reglement_update
            if (preg_match('#^/reglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_reglement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglement_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::updateAction',));
            }
            not_reglement_update:

            // reglement_delete
            if (preg_match('#^/reglement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reglement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglement_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementController::deleteAction',));
            }
            not_reglement_delete:

            if (0 === strpos($pathinfo, '/reglementetudiant')) {
                // reglementetudiant
                if (rtrim($pathinfo, '/') === '/reglementetudiant') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reglementetudiant;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reglementetudiant');
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::indexAction',  '_route' => 'reglementetudiant',);
                }
                not_reglementetudiant:

                // reglementetudiant_create
                if ($pathinfo === '/reglementetudiant/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reglementetudiant_create;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::createAction',  '_route' => 'reglementetudiant_create',);
                }
                not_reglementetudiant_create:

                // reglementetudiant_new
                if ($pathinfo === '/reglementetudiant/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reglementetudiant_new;
                    }

                    return array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::newAction',  '_route' => 'reglementetudiant_new',);
                }
                not_reglementetudiant_new:

                // reglementetudiant_show
                if (preg_match('#^/reglementetudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reglementetudiant_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglementetudiant_show')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::showAction',));
                }
                not_reglementetudiant_show:

                // reglementetudiant_edit
                if (preg_match('#^/reglementetudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reglementetudiant_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglementetudiant_edit')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::editAction',));
                }
                not_reglementetudiant_edit:

                // reglementetudiant_update
                if (preg_match('#^/reglementetudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_reglementetudiant_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglementetudiant_update')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::updateAction',));
                }
                not_reglementetudiant_update:

                // reglementetudiant_delete
                if (preg_match('#^/reglementetudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_reglementetudiant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reglementetudiant_delete')), array (  '_controller' => 'eco\\EcoleBundle\\Controller\\ReglementetudiantController::deleteAction',));
                }
                not_reglementetudiant_delete:

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
