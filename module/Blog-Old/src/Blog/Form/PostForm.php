<?php
// Filename: /module/Blog/src/Blog/Form/PostForm.php
namespace Blog\Form;

use Zend\Form\Form;

class PostForm extends Form{
	public function __construct(){
		parent::__construct($name, $options); 
		$this->add(array(
				'name' => 'post-fieldset',
				'type' => 'Blog\Form\PostFieldSet'
		));
		
		$this->add(array(
			'name' => 'submit',
			'type' => 'submit',
			'attributes' => array(
				'value' => 'Insert New Post'
			) 
		));
	}
}
?>