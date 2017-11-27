<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login()
    {
    	return view('login');
    }

    public function authenticate(Request $request) {
    	$user_control = new UsersController;
    	$login = $request->input('login');
    	$password = $request->input('password');
    	return $user_control->authenticate($login,$password);
    }
}
