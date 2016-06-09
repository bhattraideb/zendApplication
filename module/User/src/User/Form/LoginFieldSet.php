<?php
	namespace User\Form;
	
	use Zend\Form\FieldSet;
	
	class LoginFieldSet extends FieldSet{
		
		public function __construct($name = NULL, $options = NULL){
			parent::__construct($name, $options);
			//$this->setHydrator(new ClassMethods(true));
			//$this->setObject(new Login());
			$this->add(
				array(
					'type' => 'text',
					'name' => 'user_name',
					'options' => array(					
						'label' => 'User Name',
						'id' => 'user_name',
						'placeholder' => 'Login/User Id'
					),
					'attributes' => array(
						'required' => true
					)
				)
			);
			$this->add(
				array(
					'type' => 'password',
					'name' => 'password',
					'options' => array(					
						'label' => 'Passwod',
						'id' => 'password',
						'placeholder' => 'Password'
					),
					'attributes' => array(
						'required' => true
					)
				)
			);
		}
		
	}

?>