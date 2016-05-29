<?php
	namespace User\Factory;
	
	use User\Controller\ListController;
	use Zend\ServiceManager\FactoryInterface;
	use Zend\ServiceManager\ServiceLocatorInterface;
	
	class ListControllerFactory implements FactoryInterface{
		public function createService(ServiceLocatorInterface $serviceLocator){
			$realServiceLocator = $serviceLocator->getServiceLocator();
			$userService 		= $realServiceLocator->get('User\Service\UserServiceInterface');	 
			
			return 	new ListController($userService);			
		}
	}

?>