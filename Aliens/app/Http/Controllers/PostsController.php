<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function getAllPosts() {
    	$posts = Post::all();
    	return view('home',compact('posts'));
    }

    public function getPost($id, Request $request) {
    	if ($request->isMethod('post')) {
		    echo "é post";
		} else {
			echo "não é post";
		}


    	$posts = Post::where('id',$id)->get();
    	return $posts;
    }

    public function insert(Request $request) {
    	$post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => 1
        ]);
    	//TODO COLOCAR USER ID VINDO NO REQUEST
    	$post->user_id = 1;
    	echo $post;
    	$post->save();
    }
}
