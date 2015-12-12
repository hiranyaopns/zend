<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),
    'router' => array(
        'routes' => array(
          'albumhome' => array(
             // 'type' => 'Zend\Mvc\Router\Http\Literal',
              'type' => 'Literal',
          'options' => array(
            'route' => '/album',
            'defaults' => array(
               // '__NAMESPACE__' => 'Album\Controller',
                'controller'    => 'Album\Controller\Album',
                'action'        => 'index',
              ),
            ),
           ),

            'albumadd' => array(
                // 'type' => 'Zend\Mvc\Router\Http\Literal',
                'type' => 'Literal',
                'options' => array(
                    'route' => '/albumadd',
                    'defaults' => array(
                        // '__NAMESPACE__' => 'Album\Controller',
                        'controller'    => 'Album\Controller\Album',
                        'action'        => 'add',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
          //  'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
         //   'album' => __DIR__ . '/../view/album/album/index.phtml',

        /*    module name/controller name/action => template path*/

            'album/album/add' => __DIR__ . '/../view/album/add/add.phtml',
         //   'error/404'               => __DIR__ . '/../view/error/404.phtml',
          //  'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);