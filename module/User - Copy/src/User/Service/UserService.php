<?php
// Filename: /module/Blog/src/Blog/Service/PostService.php
 /*namespace User\Service;

use User\Model\User;

 class UserService implements UserServiceInterface
 {
     protected $data = array(
         array(
             'id'    => 1,
             'title' => 'Hello World #1',
             'text'  => 'This is our first blog post!'
         ),
         array(
             'id'     => 2,
             'title' => 'Hello World #2',
             'text'  => 'This is our second blog post!'
         ),
         array(
             'id'     => 3,
             'title' => 'Hello World #3',
             'text'  => 'This is our third blog post!'
         ),
         array(
             'id'     => 4,
             'title' => 'Hello World #4',
             'text'  => 'This is our fourth blog post!'
         ),
         array(
             'id'     => 5,
             'title' => 'Hello World #5',
             'text'  => 'This is our fifth blog post!'
         )
     );

     /**
      * {@inheritDoc}
      */
     /*public function findAllUsers()
     {
         $allUsers = array();

         foreach ($this->data as $index => $User) {
             $allUsers[] = $this->findUser($index);
         }

         return $allUsers;
     }

     /**
      * {@inheritDoc}
      */
     /*public function findUser($id)
     {
         $userData = $this->data[$id];

         $model = new User();
         $model->setId($userData['id']);
         $model->setTitle($userData['title']);
         $model->setText($userData['text']);

         return $model;
     }
 }*/
 
 namespace User\Service;
	
	use User\Model\User;
	
	class UserService implements UserServiceInterface{
		protected $data = array(
			array(
				'id' => 1,
				'first_name' => 'Deb Prasad',
				'last_name' => 'Bhatrai',
				'contact_num' => '123456',
				'email' => 'bhatrai_dev@gmail.com',
				'designation' => 'PHP programmer',
				'profile_pic' => 'picture',
				'text' => 'This is our first blog post!'
			),
			array(
				'id' => 2,
				'first_name' => 'Test Name',
				'last_name' => 'Last',
				'contact_num' => '98765433',
				'email' => 'test@email.com',
				'designation' => '.Net Programmer',
				'profile_pic' => 'profile Img',
				'text' => 'This is our second blog post!'
			),
			array(
				'id' => 3,
				'first_name' => 'Dakshyani',
				'last_name' => 'Bhatrai',
				'contact_num' => '876676788686',
				'email' => 'daksh@gmail.com',
				'designation' => 'C# programmer',
				'profile_pic' => 'dakshImg',
				'text' => 'This is our third blog post!'
			),
			array(
				'id' => 4,
				'first_name' => 'Shobha',
				'last_name' => 'Bhatrai',
				'contact_num' => '981467374',
				'email' => 'shova.bhatrai@gmail.com',
				'designation' => 'Web Designer',
				'profile_pic' => 'shovaPics',
				'text' => 'This is our forth blog post!'
			),
			array(
				'id' => 5,
				'first_name' => 'Deb',
				'last_name' => 'bhatrai',
				'contact_num' => '123456',
				'email' => 'bhatrai@gmail.com',
				'designation' => 'programmer',
				'profile_pic' => 'test_pic',
				'text' => 'This is our fifth blog post!'
			)
		);
		
		public function findAllUsers(){
			$allUsers = array();
			
			foreach($this->data as $index => $User ){
				$allUsers[] = $this->findUser($index);
			}
			//echo'<pre>'; print_r($allUsers); die;
			return $allUsers;
		}
		
		public function findUser($id){
			$userData = $this->data[$id];
			
			$model = new User();
			$model->setId($userData['id']);
			$model->setName($userData['first_name'], $userData['last_name']);
			$model->setContact($userData['contact_num']);
			$model->setEmail($userData['email']);
			$model->setDesignation($userData['designation']);
			$model->setProfilePic($userData['profile_pic']);
			$model->setText($userData['text']);
			return $model;
		}
		
	}

?>