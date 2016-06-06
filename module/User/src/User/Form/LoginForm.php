<?php
	namespace User\Login;
	
	use Zend\Form\Form;
	
	class UserLogin extends Form{
		public function init();
		$this->setMethod('post');
		
		$this->addElement(
			'text', 'username', array(
				'label' => 'Username',
				'required' => true,
				'filters' => array('Stringtrim')
			)
		);
		
		$this->addElement(
			'text', 'passeord', array(
				'label' => 'Password',
				'required' => true,
			)
		);
		
		$this->addElement(
			'submit', 'submit', array(
				'ignore' => true,
				'label' => 'Login'
			)
			
		)
	}
?>