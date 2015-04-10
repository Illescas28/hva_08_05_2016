<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'HVA\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/index',
                    'defaults' => array(
                        '__NAMESPACE__' => 'HVA\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'proveedor' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/proveedor[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Proveedor\Controller\Proveedor',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'tipo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/tipo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Tipo\Controller\Tipo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'udm' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/udm[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\UDM\Controller\UDM',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'articulo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/articulo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Articulo\Controller\Articulo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'articulovariante' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/articulovariante[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Articulovariante\Controller\Articulovariante',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'propiedad' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/propiedad[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Propiedad\Controller\Propiedad',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'producto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/producto[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Producto\Controller\Producto',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'medico' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/medico[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar|ver',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Medico\Controller\Medico',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'auth' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/:action',
                    'defaults' => array(
                        'controller' => 'Auth\Controller\Auth',
                        'action'     => 'login',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            // Index
            'HVA\Controller\Index' => 'HVA\Controller\IndexController',
            
            //Login
            'Auth\Controller\Auth' => 'Auth\Controller\AuthController',

            // Módulo Catalogos
            'Catalogos\Proveedor\Controller\Proveedor'                  => 'Catalogos\Proveedor\Controller\ProveedorController',
            'Catalogos\Tipo\Controller\Tipo'                            => 'Catalogos\Tipo\Controller\TipoController',
            'Catalogos\UDM\Controller\UDM'                              => 'Catalogos\UDM\Controller\UDMController',
            'Catalogos\Articulo\Controller\Articulo'                    => 'Catalogos\Articulo\Controller\ArticuloController',
            'Catalogos\Articulovariante\Controller\Articulovariante'    => 'Catalogos\Articulovariante\Controller\ArticulovarianteController',
            'Catalogos\Propiedad\Controller\Propiedad'                  => 'Catalogos\Propiedad\Controller\PropiedadController',
            'Catalogos\Producto\Controller\Producto'                    => 'Catalogos\Producto\Controller\ProductoController',
            'Catalogos\Medico\Controller\Medico'                        => 'Catalogos\Medico\Controller\MedicoController',

        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'                 => __DIR__ . '/../view/layout/layout.phtml',
            'hva/index/index'               => __DIR__ . '/../view/hva/index/index.phtml',
            'error/404'                     => __DIR__ . '/../view/error/404.phtml',
            'error/index'                   => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
