<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /*Esta função busca e retorna todas as postagens
    * salvas no banco de dados.
    */
    public function getAllPosts() {
    	$posts = Post::all();
    	return view('home',compact('posts'));
    }

    /*Esta função insere uma nova postagem no banco de dados.*/
    public function insert(Request $request) {
    	$post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->session()->get('user')[0]->id
        ]);
    	$post->save();
    	return redirect('home');
    }

}
