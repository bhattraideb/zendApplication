<?php
 	namespace User\Service;
	
	use User\Model\UserInterface;
	
	interface UserServiceInterface{
		public function findAllUsers();
		
		public function findUser($id);
		
		public function saveUser(UserInterface $user);
		
		public function deleteUser(UserInterface $user);
		
		public function authenticateUser(UserInterface $user);
	}
?>