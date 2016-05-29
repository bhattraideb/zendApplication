<?php
namespace Blog\Service;

use Blog\Model\Post;
use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface{
	/**
	* @var \Blog\Mapper\PostMapperInterface
	*/
	protected $postMapper;
	
	/**
	* @param PostMapperInterface $postMapper
	*/
	public function __construct(postMapperInterface $postMapper){
		$this->postMapper = $postMapper;
	}
	protected $data = array(
		array(
			'id' => 1,
			'title' => 'Hello world 1',
			'text' => 'test blog post1'
		),
		array(
			'id' => 2,
			'title' => 'Hello world 2',
			'text' => 'test blog post2'
		),
		array(
			'id' => 3,
			'title' => 'Hello world 3',
			'text' => 'test blog post3'
		),
		array(
			'id' => 4,
			'title' => 'Hello world 4',
			'text' => 'test blog post4'
		),
	);
	/**
	** @return array|PostInterface[]
	*/
	public function findAllPosts(){
		/*
		$allPosts = array();
		foreach($this->data as $index => $post){
			$allPosts[] = $this->findPost($index);
		}
		return $allPosts;
		*/
		return $this->postMapper->findAll();
	}
	
	/**
	 * @param int|string $id
	 * @return PostInterface
	 * @throws \InvalidArgumentException
	 */
	public function findPost($id){
		/*
		$postData = $this->data[$id];
		$model = new Post();
		$model->setId($postData['id']);
		$model->setTitle($postData['title']);
		$model->setText($postData['text']);
		
		return $model;
		*/
		return $this->postMapper->find($id);
	}
}
?>