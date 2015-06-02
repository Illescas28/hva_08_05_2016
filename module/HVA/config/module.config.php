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
            // Módulo Pacientes
            'pacientes' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/paciente[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|actuales|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Paciente\Controller\Paciente',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'consultorio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/consultorio[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Consultorio\Controller\Consultorio',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'servicio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/servicios[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Servicio\Controller\Servicio',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'cargoconsulta' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cargoconsulta[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Cargoconsulta\Controller\Cargoconsulta',
                        'action'     => 'listar',
                    ),
                ),
            ),

            // Catalogos
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
            'lugar' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/lugar[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'ver|nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Lugar\Controller\Lugar',
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
            'especialidad' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/especialidad[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Especialidad\Controller\Especialidad',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'cuarto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/cuarto[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Cuarto\Controller\Cuarto',
                        'action'     => 'listar',
                    ),
                ),
            ),
            /*
            'servicio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/servicio[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Servicio\Controller\Servicio',
                        'action'     => 'listar',
                    ),
                ),
            ),
            */
            'banco' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/banco[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Banco\Controller\Banco',
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
            'Catalogos\Articulo\Controller\Articulo'                    => 'Catalogos\Articulo\Controller\ArticuloController',
            'Catalogos\Articulovariante\Controller\Articulovariante'    => 'Catalogos\Articulovariante\Controller\ArticulovarianteController',
            'Catalogos\Propiedad\Controller\Propiedad'                  => 'Catalogos\Propiedad\Controller\PropiedadController',
            'Catalogos\Producto\Controller\Producto'                    => 'Catalogos\Producto\Controller\ProductoController',
            'Catalogos\Medico\Controller\Medico'                        => 'Catalogos\Medico\Controller\MedicoController',
            'Catalogos\Especialidad\Controller\Especialidad'            => 'Catalogos\Especialidad\Controller\EspecialidadController',
            'Catalogos\Cuarto\Controller\Cuarto'                        => 'Catalogos\Cuarto\Controller\CuartoController',
            //'Catalogos\Servicio\Controller\Servicio'                    => 'Catalogos\Servicio\Controller\ServicioController',

            // Módulo Pacientes
            'Pacientes\Paciente\Controller\Paciente'                    => 'Pacientes\Paciente\Controller\PacienteController',
            'Pacientes\Consultorio\Controller\Consultorio'              => 'Pacientes\Consultorio\Controller\ConsultorioController',
            'Pacientes\Servicio\Controller\Servicio'                    => 'Pacientes\Servicio\Controller\ServicioController',
            'Pacientes\Cargoconsulta\Controller\Cargoconsulta'          => 'Pacientes\Cargoconsulta\Controller\CargoconsultaController',
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
        //other configuration
        'strategies' => array(
            'ViewJsonStrategy',
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
