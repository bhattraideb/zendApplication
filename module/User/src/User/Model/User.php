<?php
	// Filename: /module/Blog/src/Blog/Model/Post.php
/* namespace User\Model;

 class User implements UserInterface
 {
     /**
      * @var int
      */
     //protected $id;

     /**
      * @var string
      */
     //protected $title;

     /**
      * @var string
      */
     //protected $text;

     /**
      * {@inheritDoc}
      */
     /*public function getId()
     {
         return $this->id;
     }

     /**
      * @param int $id
      */
     /*public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * {@inheritDoc}
      */
     /*public function getTitle()
     {
         return $this->title;
     }

     /**
      * @param string $title
      */
     /*public function setTitle($title)
     {
         $this->title = $title;
     }

     /**
      * {@inheritDoc}
      */
     /*public function getText()
     {
         return $this->text;
     }

     /**
      * @param string $text
      */
     /*public function setText($text)
     {
         $this->text = $text;
     }
 }*/
	
	
	namespace User\Model;
	//use User\Model\UserInterface;
	
	class User implements UserInterface{
		protected $id;
		//protected $title;
		protected $first_name;
		protected $last_name;
		protected $contact_num;
		protected $email;
		protected $designation;
		protected $text;
		protected $name;
		protected $profile_pic;

		/*public function getTitle(){
			return $this->title;
		}
		public function setTitle($title){
			$this->title = $title;
		}*/
		
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getName(){
			return $this->name;
		}
		public function setName($first_name, $last_name){
			$this->name = $first_name.' '.$last_name;
		}
		
		public function getContact(){
			return $this->contact_num;
		}
		public function setContact($contact_num){
			$this->contact_num = $contact_num;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getDesignation(){
			return $this->designation;
		}
		public function setDesignation($designation){
			$this->designation = $designation;
		}
		public function getProfilePic(){
			return $this->profile_pic;
		}
		public function setProfilePic($profile_pic){
			$this->profile_pic = $profile_pic;
		}
		public function getText(){
			return $this->text;
		}
		public function setText($text){
			$this->text = $text;
		}
	}
?>