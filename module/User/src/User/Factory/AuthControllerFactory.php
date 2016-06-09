<?php
	namespace User\Factory;
	
	use User\Controller\AuthController;
	use Zend\ServiceManager\FactoryInterface;
	use Zend\ServiceManager\ServiceLocatorInterface;
	
	
	class AuthControllerFactory implements FactoryInterface{
		public function createService(ServiceLocatorInterface $serviceLocator){
			$realServiceLocator = $serviceLocator->getServiceLocator();
			$userService 		= $realServiceLocator->get('User\Service\UserServiceInterface');
			$userLoginForm		= $realServiceLocator->get('FormElementManager')->get('User\Form\LoginForm');
			//$authservice 		= $realServiceLocator->get('Zend\Authentication\AuthenticationServiceInterface');
			
			//return new AuthController($userService, $userLoginForm, $authservice);
			return new AuthController($userService, $userLoginForm);
		}
	}
?>