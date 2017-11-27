<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function getAllPosts() {
    	//TODO pegar isso da DAO;
    	$posts = Post::all();
    	return view('home',compact('posts'));
    }
}
