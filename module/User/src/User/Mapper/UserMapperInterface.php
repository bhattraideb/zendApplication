<?php
	namespace User\Mapper;
	
	use User\Model\UserInterface;
	
	interface UserMapperInterface{
		
		public function find($id);
		public function findAll();
		public function save(userInterface $userObject);
		public function delete(UserInterface $userObject);
	}
?>