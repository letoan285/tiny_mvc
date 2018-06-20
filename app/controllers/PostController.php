<?php 

namespace App\Controllers;

use App\Models\Post;
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

    public function create()
    {
    	include_once 'app/views/posts/create.php';
    }

    public function store()
    {
    	$title = $_POST['title'];
    	$description = $_POST['description'];
    	$author = $_POST['author'];
    	$image = $_FILES['image'];
        // var_dump($image);die;
        $fileName = "";

        if($image['size'] > 0){
            $fileName = 'uploads/'.time().'-'.$image['name'];
            move_uploaded_file($image['tmp_name'], $fileName);
        }

    	$post = new Post();

    	$post->title = $title;
    	$post->description = $description;
        $post->author = $author;
    	$post->image = $fileName;
    	// var_dump($title);die;
    	$post->insert();

    	header("location: ./");
    }
}