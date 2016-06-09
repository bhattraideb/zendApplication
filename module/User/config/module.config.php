<?php
	return array(
		/*'db' => array(
			'driver' => 'Pdo',
			'username' => 'root',
			'password' => '',
			'dsn' => 'mysql:dbname=db_zendapp; host=localhost',
			'driver_options' => array(
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
			)
		),
		*/
		'service_manager' => array(
			'factories' => array(				
				'User\Mapper\UserMapperInterface' => 'User\Factory\ZendDbSqlMapperFactory',
				'User\Service\UserServiceInterface' => 'User\Factory\UserServiceFactory',
				'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
				//'Zend\Authentication\Authentication' => 'Zend\Authentication\AuthenticationServiceFactory'
				//'Zend\Authentication\Adapter\AbstractAdapter' => 'Zend\Authentication\AuthenticationServiceInterface',
			)
		),
		
		'view_manager' => array(
			'template_path_stack' => array(
			 	__DIR__ .'/../view'
			)
		),
		
		'controllers' => array(
			/*'invokables' => array(			//constructed without any arguments
				//'User\Controller\List' => 'User\Controller\ListController',
				'User\Controller\Login' => 'User\Controller\AuthController'
			),*/
			'factories' => array(
				'User\Controller\List' 		=> 'User\Factory\ListControllerFactory',
				'User\Controller\Write' 	=> 'User\Factory\WriteControllerFactory',
				'User\Controller\Delete' 	=> 'User\Factory\DeleteControllerFactory',
				'User\Controller\Auth' 	=> 'User\Factory\AuthControllerFactory'
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
					),
					'may_terminate' => true,
					'child_routes' => array(
						'detail' => array(
							'type' => 'segment',
							'options' => array(
								'route' => '/:id',
								'defaults' => array(
									'action' => 'detail'
								),
								'constraints' => array(
									'id' => '[1-9]\d*'
								)
							)
						),
						'add' => array(
							'type' => 'literal',
							'options' => array(
								'route' => '/add',
								'defaults' => array(
									'controller' => 'User\Controller\Write',
									'action' => 'add'
								)
							)
						),
						'edit' => array(
							'type' => 'segment',
							'options' => array(
								'route' => '/edit/:id',
								'defaults' => array(
									'controller' => 'User\Controller\Write',
									'action' => 'edit'
								),
								'constraints' => array(
									'id' => '[1-9]\d*'
								)
							)
						),						
						'delete' => array(
							'type' => 'segment',
							'options' => array(
								'route' => '/delete/:id',
								'defaults' => array(
									'controller' => 'User\Controller\Delete',
									'action' => 'delete'
								),
								'constraints' => array(
									'id' => '[1-9]\d*'
								)
							)
						),
						'login' => array(
							'type' => 'literal',
							'options' => array(
								'route' => '/login',
								'defaults' => array(
									'controller' => 'User\Controller\Auth',
									'action' => 'login'
								)
							)
						),
					)			
				)
			)
		)
	);

?>