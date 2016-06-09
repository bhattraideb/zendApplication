<?php
	namespace User\Form;
	
	
	use Zend\InputFilter;
	use Zend\Form\Element;
	use Zend\Form\Form;
	
	class LoginForm extends Form{
		//public function __construct(){
		public function __construct($name = NULL, $options = NULL){
		parent::__construct($name, $options);
			
			$this->add(
				array(
					'name' => 'login-fieldset',
					'type' => 'User\Form\LoginFieldSet',
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
						'value' => 'Login'
					)
				)
			);
		}
	}
?>