<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    /*Esta função faz a autenticação do usuário.
    *TODO: migrar para Middleware.
    */
    public function authenticateLogin(Request $request) {
		$email = $request->input('email');
    	$password = $request->input('password');
    	$user = User::where([
    		['email','=',$email],
    		['password','=',$password]])->get(); 
    	$request->session()->put('user',$user);

    	if ($this->isAuthenticated($request)) {
    		return redirect('home');
    	} else {
    		return view('login');
    	}
    }

    /*Está função insere um novo usuário no banco de dados*/
    public function insert(Request $request) {
    	$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
    	$user->save();
    	return redirect('login');
    }
}
