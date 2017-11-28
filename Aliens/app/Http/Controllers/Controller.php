<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //TODO Change this function name
	public function isAuthenticated(Request $request) {
		$user = $request->session()->get('user');
		if ($user != null) {
			return (!$user->isEmpty());
		} else {
			return(false);
		}
	}

    public function login(Request $request)
    {
    	$usersController = new UsersController;

    	if ($request->isMethod('post')) {
    		$usersController->authenticateLogin($request);
    	} else if ($this->isAuthenticated($request)) {
    		return redirect('home');
    	} else {
    		return view('login');
    	}
    }

    public function logout(Request $request) {
    	$request->session()->forget('user');
    	return view('login');
    }

    public function new_post(Request $request) {
    	if ($this->isAuthenticated($request)) {
    		return view('new_post');
    	} else {
    		return redirect('login');
    	}
    }

    public function home(Request $request) {
    	if ($this->isAuthenticated($request)) {
    		$postsController = new PostsController;
    		return $postsController->getAllPosts();
    	} else {
    		return redirect('login');
    	}
    }

    function register (Request $request) {
    	return view('register');
    }
   
}
