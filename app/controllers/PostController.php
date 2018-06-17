<?php 
require_once 'app/models/Post.php';

/**
 * summary
 */
class PostController
{

    public function index()
    {
    	$posts = Post::all();
    	// var_dump($posts);die;
        include_once 'app/views/posts/index.php';
    }
}