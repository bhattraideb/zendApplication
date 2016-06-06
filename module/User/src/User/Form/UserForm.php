<?php
	namespace User\Form;
	
	use Zend\InputFilter;
	use Zend\Form\Element;
	use Zend\Form\Form;
	
	
	class UserForm extends Form{
		public function __construct($name = NULL, $options = NULL){
			parent::__construct($name, $options);
			//$this->addElements();
			//$this->addInputFilter();
			$this->add(
				array(
					'name' => 'user-fieldset',
					'type' => 'User\Form\UserFieldSet',
					'options' => array(
						'use_as_base_fieldset' => true
					)
				)
			);
			
			$this->add(
				array(
					'type' => 'submit',
					'name' => 'submit',
					'attributes' => array(
						'value' => 'Add User'
					)
				)
			);
		}
		/*public function addElements(){
			$file = new Element\File('profile_pic');
			$file->setLabel('Profile Image');
			$file->setAttribute('id', 'profile_pic');
			$file->setAttribute('multiple', true);
			$this->add($file);
		}		
		public function addInputFilter(){
			$inputFilter = new InputFilter\InputFilter();

			// File Input
			$fileInput = new InputFilter\FileInput('profile_pic');
			$fileInput->setRequired(true);
			$fileInput->getFilterChain()->attachByName(
				'filerenameupload',
				array(
					'target'    => './data/uploads/avatar.png',
					'randomize' => true,
				)
			);
			$inputFilter->add($fileInput);
			$this->setInputFilter($inputFilter);
		}*/
		
	}
?>