<?php
	namespace User\Model;
	
	class User implements UserInterface{
		protected $id;
		protected $first_name;
		protected $last_name;
		protected $contact_num;
		protected $email;
		protected $designation;
		protected $description;
		protected $user_name;
		protected $password;
		protected $profile_pic;

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getFirst_name(){
			return $this->first_name;
		}
		public function setFirst_name($first_name){
			$this->first_name = $first_name;
		}
		public function getLast_name(){
			return $this->last_name;
		}
		public function setLast_name($last_name){
			$this->last_name = $last_name;
		}
		public function getContact_num(){
			return $this->contact_num;
		}
		public function setContact_num($contact_num){
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
		public function getProfile_pic(){
			return $this->profile_pic;
		}
		public function setProfile_pic($profile_pic){
			$this->profile_pic = $profile_pic;
		}
		public function getDescription(){
			return $this->description;
		}
		public function setDescription($description){
			$this->description = $description;
		}
		public function getUser_name(){
			return $this->user_name;
		}
		public function setUser_name($user_name){
			$this->user_name = $user_name;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
	}
?>