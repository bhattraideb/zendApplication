<?php
 // Filename: /module/Blog/src/Blog/Service/PostServiceInterface.php
 /*namespace User\Service;

 use User\Model\UserInterface;

 interface UserServiceInterface
 {
     /**
      * Should return a set of all blog posts that we can iterate over. Single entries of the array are supposed to be
      * implementing \Blog\Model\PostInterface
      *
      * @return array|PostInterface[]
      */
     //public function findAllUsers();

     /**
      * Should return a single blog post
      *
      * @param  int $id Identifier of the Post that should be returned
      * @return PostInterface
      */
     /*/public function findUser($id);
 }*/



	namespace User\Service;
	
	use User\Model\UserInterface;
	
	interface UserServiceInterface{
		public function findAllUsers();
		
		public function findUser($id);
	}
?>