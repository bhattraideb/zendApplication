<?php
	// Filename: /module/Blog/src/Blog/Controller/ListController.php
 /*namespace User\Controller;

 use User\Service\UserServiceInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class ListController extends AbstractActionController
 {
     //**
      * @var \Blog\Service\PostServiceInterface
      */	
     /*protected $userService;

     public function __construct(UserServiceInterface $userService)
     {
         $this->userService = $userService;
     }
	 
	 public function indexAction()
     {
         return new ViewModel(array(
             'users' => $this->userService->findAllUsers()
         ));
     }
 }*/
	
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
	}
?>