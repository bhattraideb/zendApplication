<?php
namespace User\Model;
	
	interface UserInterface{
		
		public function getId();
		public function getName();
		public function getContact();
		public function getEmail();
		public function getDesignation();
		public function getProfilePic();
		public function getText();
		
		//public function getDetails();
		//public function getTitle();
	}
?>