<?php
	namespace User\Controller;
	
	use User\Service\UserServiceInterface;
	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;
	
	class DeleteController extends AbstractActionController{
		protected $userService;
		
		public function __construct(UserServiceInterface $userService){
			$this->userService = $userService;
		}
		
		public function deleteAction(){ 
			try{
				$user = $this->userService->findUser($this->params('id'));
			}catch(\InvalidArgumentException $e){ //echo $e->message(); die;
				return $this->redirect()->toRoute('user');
			}
			$request = $this->getRequest();
			if($request->isPost()){
				$del = $request->getPost('delete_confirmation', 'no');
				if($del == 'Yes'){
					$this->userService->deleteUser($user);
				}
				return $this->redirect()->toRoute('user');
			}
			return  new ViewModel(
				array('user' => $user)
			);
		}
	}
?>