<?php
	namespace User\Controller;
	
	use User\Service\UserServiceInterface;
	use Zend\Mvc\Controller\AbstractActionController;
	use Zend\View\Model\ViewModel;
	
	class ListController extends AbstractActionController{
		protected $userService;	
		
		public function __construct(UserServiceInterface $userService){
			$this->userService = $userService;
		}
		
		public function indexAction(){
			return new ViewModel(array(
				'users' => $this->userService->findAllUsers()
			));
		}
		
		public function detailAction(){
			$id = $this->params()->fromRoute('id');
			try {
				$user = $this->userService->findUser($id);
			}catch(\InvalidArgumentException $ex){
				return $this->redirect()->toRoute('user');
			}
			return new ViewModel(
				array( 'user' =>$user )
			);	
		}
	}
?>