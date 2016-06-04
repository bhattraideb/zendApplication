<?php
	namespace User\Form;
	
	use Zend\Form\Form;
	
	class UserForm extends Form{
		public function __construct($name = NULL, $options = NULL){
			parent::__construct($name, $options);
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
	}
?>