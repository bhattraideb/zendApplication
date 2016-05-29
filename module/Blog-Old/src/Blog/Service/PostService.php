<?php
// Filename: /module/Blog/src/Blog/Service/PostService.php
namespace Blog\Service;

use Blog\Model\PostInterface;
use Blog\Mapper\PostMapperInterface;

class PostService implements PostServiceInterface{
	/**
	* @var \Blog\Mapper\PostMapperInterface
	*/
	protected $postMapper;
	
	/**
	* @param PostMapperInterface $postMapper
	*/
	public function __construct(PostMapperInterface $postMapper){
		$this->postMapper = $postMapper;
	}
	/**
	* @return array|PostInterface[]
	*/
	public function findAllPosts(){
		return $this->postMapper->findAll();
	}
	
	/**
	 * @param int|string $id
	 * @return PostInterface
	 * @throws \InvalidArgumentException
	 */
	public function findPost($id){
		return $this->postMapper->find($id);
	}
	
	
	public function savePost(PostInterface $post){
		return $this->postMapper->save($post);
	}
}
?>