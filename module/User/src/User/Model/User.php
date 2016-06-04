<?php
	namespace User\Model;
	
	class User implements UserInterface{
		protected $id;
		protected $first_name;
		protected $last_name;
		protected $contact_num;
		protected $email;
		protected $designation;
		protected $text;
		protected $name;
		protected $profile_pic;

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
		/*public function getText(){
			return $this->text;
		}
		public function setText($text){
			$this->text = $text;
		}*/
	}
?>