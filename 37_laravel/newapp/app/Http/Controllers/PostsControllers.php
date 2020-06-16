<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller {
    function createPost(){
        $post = new Post();
        $post->title = "Quick Brown Fox";
        $post->content = "Jumps Over the lazy dog. lorem ipsum ";
        $post->save();
        return $post;
    }
}
