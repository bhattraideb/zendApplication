<?php
	namespace User\Form;
	
	use User\Model\User;
	use Zend\Form\FieldSet;
	use Zend\Stdlib\Hydrator\ClassMethods;
	
	class UserFieldSet extends FieldSet{
		public function __construct($name = NULL, $options = NULL){
			parent::__construct($name, $options);
			
			$this->setHydrator(new ClassMethods(false));
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
					'name' => 'user_info',
					'options' => array(					
						'label' => 'Description'
					)
				)
			);
			$this->add(
				array(
					'type' => 'file',
					'name' => 'prfile_pic',
					'options' => array(					
						'label' => 'Profile Image'
					)
				)
			);
		}
	}

?>