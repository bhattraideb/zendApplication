<?php
	return array(
		'service_manager' => array(
			'invokables' => array(
				'User\Service\UserServiceInterface' => 'User\Service\UserService',
			)
		),
		
		'view_manager' => array(
			'template_path_stack' => array(
			 	__DIR__ .'/../view'
			)
		),
		
		'controllers' => array(
			/*'invokables' => array(			//constructed without any arguments
				'User\Controller\List' => 'User\Controller\ListController',
			)*/
			'factories' => array(
				'User\Controller\List' => 'User\Factory\ListControllerFactory',
			)
		),
		
		'router' => array(
			'routes' => array(
				'user' => array(
					'type' => 'literal',
					'options' => array(
						'route' => '/user',
						'defaults' => array(
							'controller' => 'User\Controller\List',
							'action' => 'index'
						)
					)
				)
			)
		)
	);

?>