<?php
namespace User;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
//use Zend\Authentication\AuthenticationService;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface{
	
	public function getAutoloaderConfig(){
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ =>	__DIR__.'/src/'.__NAMESPACE__,
				)
			) 
		);
	}
	public function getConfig(){
		return include __DIR__. '/config/module.config.php';
	}
} 
?>
