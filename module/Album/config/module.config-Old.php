<?php
return array(
	/*
	*The controllers section provides a list of all the controllers provided by the module.
	*/
	
	'controllers' => array(
		'invokables' => array(
			'Album\Controller\Album' => 'Album\Controller\AlbumController',
		),
	),
	
	'router' => array(
		'routes' => array(
			'album' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/album/[:/action][/:id]',
					'constraints' => array(
						'action' =>'[a-zA-Z][a-zA-Z0-9_-]*',
						'id' => '[0-9]+',
					),
					'defaults' => array(
						'controller' => 'Album\Controller\Album',
						'action' => 'index',
					),
				),
			),
		),
	),
	
	/*
	*view_manager will allow to find the view scripts for the Album module that are stored in our view/ directory.
	*/
	
	'view_manager' => array(
		'template_path_stack' => array( 
			'album' => __DIR__ . '/../view',
		)
	)
);
?>