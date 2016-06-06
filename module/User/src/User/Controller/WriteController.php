<?php
	namespace User\Controller;
	
	use User\Service\UserServiceInterface;
	use Zend\Form\FormInterface;
	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;
	
	class WriteController extends AbstractActionController{
		protected $userService;
		protected $userForm;
		
		public function __construct(
			UserServiceInterface $userService,
			FormInterface $userForm
		){
			$this->userService = $userService ;
			$this->userForm = $userForm;
		}
		
		public function addAction(){
			$request = $this->getRequest();
			if($request->isPost()){ 
				/*
				$profile = array_merge_recursive(
					$request->getPost()->toArray(),
					$request->getFiles()->toArray()	
				);				
				$prg = $this->fileprg($this->userForm);
				if($prg instanceof Zen\Http\PhpEnvironment\Response){
					return $prg;
				}else if(is_array($prg)){
				*/
				$this->userForm->setData($request->getPost());
					if($this->userForm->isValid()){
						try{
							 //\Zend\Debug\Debug::dump($this->userForm->getData());die();
							$this->userService->saveUser($this->userForm->getData());
							return $this->redirect()->toRoute('user');
						}catch(\Exception $e){
							echo $e->getMessage();//exception
						}
					}
				//}
			}
			return new ViewModel(
				array('form' => $this->userForm)
			);
		}
		
		public function editAction(){
			$request = $this->getRequest();
			$user = $this->userService->findUser($this->params('id'));
			$this->userForm->bind($user);
			if($request->isPost()){
				$this->userForm->setData($request->getPost());
				if($this->userForm->isValid()){
					try{
						$this->userService->saveUser($user);
						return $this->redirect()->toRoute('user');
					}catch(\Exception $e){
							die($e->getMessage());
					}
				}
			}
			return new viewModel(
				array('form' => $this->userForm)
			);
		}
	}
?>