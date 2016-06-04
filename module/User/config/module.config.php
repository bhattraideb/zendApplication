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
				'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
				
				/*'User\Mapper\UserMapperInterface' => 'User\Factory\ZendDbSqlMapperFactory',
				'User\Service\UserServiceInterface' => 'User\Service\Factory\UserServiceFactory',
				'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'*/
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
				'User\Controller\Write' => 'User\Factory\WriteControllerFactory'
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
						)
					)			
				)
			)
		)
	);

?>