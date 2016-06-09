<?php
	namespace User\Form;
	
	use User\Model\User;
	use Zend\Form\FieldSet;
	use Zend\Stdlib\Hydrator\ClassMethods;
	
	class UserFieldSet extends FieldSet{
		public function __construct($name = NULL, $options = NULL){
			parent::__construct($name, $options);
			//$this->addElements();
			$this->setHydrator(new ClassMethods(true));
			$this->setObject(new User());
			
			$this->add(
				array(
					'type' => 'hidden',
					'name' => 'id'
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'first_name',
					'options' => array(
						'label' => 'First Name'
					)
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'last_name',
					'options' => array(
						'label' => 'Last Name'
					)
				)				
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'designation',
					'options' => array(					
						'label' => 'Designation'
					)
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'email',
					'options' => array(					
						'label' => 'Email'
					)
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'contact_num',
					'options' => array(
						'label' => 'Contact Number'
					),
					'attributes' => array(
						 'required' => 'required'
					)
				)
			);
			$this->add(
				array(
					'type' => 'textarea',
					'name' => 'description',
					'options' => array(					
						'label' => 'Description'
					)
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'user_name',
					'options' => array(					
						'label' => 'User Name'
					)
				)
			);
			$this->add(
				array(
					'type' => 'password',
					'name' => 'password',
					'options' => array(					
						'label' => 'Passwod'
					)
				)
			);
			$this->add(
				array(
					'type' => 'text',
					'name' => 'profile_pic',
					'options' => array(					
						'label' => 'Profile Image',
					),
					'attributes' => array(
						'value' => 'contant_pic_now.jpg',
						'readonly' => true,
						'multiple' => true
					)
				)
			);
			/*
			$this->add(
				array(
					'type' => 'Zend\Form\Element\File',	//'type' => 'file',
					'name' => 'profile_pic',
					'options' => array(					
						'label' => 'Profile Image',
					),
					'attributes' => array(
						'value' => 'contant_pic_now.jpg',
						'readonly' => true,
						'multiple' => true
					)
				)
			);
			*/
		}
		
	}

?>