<?php
return array(
	/**
	 *Can also define in root config file
	/* 
	'db' => array(
		'driver' => 'Pdo',
		'usename' => 'root',
		'password' => '',
		'dsn' => 'mysql:dbname=db_zendapp;host=localhost',
		'driver_options' => array(
			\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		)
	),
	*/	
	'service_manager' => array(
		'factories' => array(
			'Blog\Mapper\PostMapperInterface' => 'Blog\Factory\ZendDbSqlMapperFactory',
			'Blog\Service\PostServiceInterface' => 'Blog\Factory\PostServiceFactory',
			'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
			
			
		)
	),	
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ .'/../view'
		)
	),	
	'controllers' => array(
		'factories' => array(
			'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory',
			'Blog\Controller\Write' => 'Blog\Factory\WriteControllerFactory'
		)
	),
	//Opens the  configuration for route manager
	'router' => array(
		//opens configuration for all possible routes
		'routes' => array(
			//defines a new route called 'post'
			'blog' => array(
				//defines the routes type to be "Zned\Mvc\Http\Literal" which is basically  configure the route itself
				'type' => 'literal',
				'options' => array(
					//listen to '/blog' as uri
					'route' => '/blog',
					//define default controller and action to be called when this route is matched
					'defaults' => array(
						'controller' => 'Blog\Controller\List',
						'action' => 'index',
					),
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
					'add' =>array(
						'type' => 'literal',
						'options' => array(
							'route' => '/add',
							'defaults' => array(
								'controller' => 'Blog\Controller\Write',
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