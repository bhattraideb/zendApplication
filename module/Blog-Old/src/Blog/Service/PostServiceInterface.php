<?php 
namespace Blog\Service;

use Blog\Model\PostInterface;

interface PostServiceInterface{
	
	/**
	*should return a set of all blog posts that we can iterate over. single entries of the array implementing 'Blog\Model\PostInterface'
	*return array|PostInterface[]
	*/
	public function findAllPosts();
	
	/**
	*should return a single blog post
	*@param int $id identifier of the post that should be returned
	*@return PostInterface
	*/
	public function findPost($id);
	
	/**
	 * Should save a given implementation of the PostInterface and return it. If it is an existing Post 27 * should be updated, if it’s a new Post it should be created.
	 *
	 * @param PostInterface $blog
	 * @return PostInterface
	 */
	public function savePost(PostInterface $blog);
}
?>