<?php
	namespace User\Service;
 	
	use User\Model\User;
	use User\Model\UserInterface;
	use User\Mapper\UserMapperInterface;
	
	class UserService implements UserServiceInterface{
		protected $userMapper;
		
		public function __construct(UserMapperInterface  $userMapper){
			$this->userMapper = $userMapper;
		}
		
		public function findAllUsers(){
			return $this->userMapper->findAll();
		}
		
		public function findUser($id){
			return $this->userMapper->find($id);
		}
		
		public function saveUser(UserInterface $user){
			return $this->userMapper->save($user);
		}
		
		public function deleteUser(UserInterface $user){
			return $this->userMapper->delete($user);
		}
		
	}

?>