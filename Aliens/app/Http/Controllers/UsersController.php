<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function authenticate($login, $password) {
    	return User::where('login','=',$login,'and','password','=',$password)->get();
    }
}
