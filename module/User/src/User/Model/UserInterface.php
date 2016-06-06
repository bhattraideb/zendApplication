<?php
namespace User\Model;
	
	interface UserInterface{
		
		public function getId();
		public function getFirst_name();
		public function getLast_name();
		public function getContact_num();
		public function getEmail();
		public function getDesignation();
		public function getProfile_pic();
		public function getUser_name();
		public function getPassword();
		public function getDescription();
	}
?>