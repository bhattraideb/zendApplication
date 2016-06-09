<?php
	namespace User\Controller;

	use User\Service\UserServiceInterface;
	//use Zend\Authentication\AuthenticationServiceInterface;
	use Zend\Form\FormInterface;
	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;
	
	class AuthController extends AbstractActionController{ 
		protected $userService;
		protected $loginForm;
		//protected $authservice;
				
		//public function __construct(UserServiceInterface $userService, FormInterFace $loginForm, AuthenticationService $authservice){
		public function __construct(UserServiceInterface $userService, FormInterFace $loginForm){
			$this->userService = $userService;
			$this->loginForm   = $loginForm;
			//$this->authservice = $authservice;
		}
		public function loginAction(){
			$request = $this->getRequest(); 
			if($request->isPost()){ 
				$this->loginForm->setData($request->getPost());
				if($this->loginForm->isValid()){  
				$user = $this->loginForm->getData(); 
				echo'<pre>'; print_r($this->loginForm->getData()); die;
				$user = $this->userService->isUserExists($this->params('id'));
				echo'<pre>'; print_r($user->bind($user)); die;
				
				$user = $this->userService->isUserExists($this->params('id'));
				echo'<pre>'; print_r($this->loginForm->bind($user)); die;
					/*$adapter = new AdapterInterface(
						'tbl_users',
						'username',
						'password',
						'MD5(CONCAT(?, password_salt))'
					); echo 'hello'; die; 
					var_dump($adapter);
					$adapter->setIdentity($loginForm->getValue('user_name'));
					$adapter->setCredential($loginForm->getValue('password'));
					$result = $auth->authenticate($adapter);*/
					if ($result->isValid()) {
						$this->_helper->FlashMessenger('Successful Login');
						$this->redirect('/user');
						return;
					}
				}
			}
			//$loginForm = new Default_Form_Auth_Login($_POST);
			
			return new ViewModel(
				array('form' => $this->loginForm)
			);
			
			//$this->view->loginForm = $loginForm;
		}
		
	}
?>