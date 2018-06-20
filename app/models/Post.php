<?php 
namespace App\Models;

/**
 * summary
 */
class Post extends BaseModel
{
    public $tableName = "posts";

    public $columns = ['title', 'description', 'author', 'created_by', 'image'];
}


