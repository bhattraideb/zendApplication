<?php
	namespace User\Factory;
	
	use User\Controller\DeleteController;
	use Zend\ServiceManager\FactoryInterface;
	use Zend\ServiceManager\ServiceLocatorInterface;
	
	class DeleteControllerFactory implements FactoryInterface{
		public function createService(ServiceLocatorInterface $serviceLocator){
			$realServiceLocator = $serviceLocator->getServiceLocator();
			$userService 		= $realServiceLocator->get('User\Service\UserServiceInterface');
			return new DeleteController($userService);
		}
	}
?>