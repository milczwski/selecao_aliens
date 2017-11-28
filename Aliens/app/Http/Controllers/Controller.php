<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;


/*  A Classe Controller realiza as chamadas das páginas web
*   deste sistema. Está classe tem finalidade de ser uma Façade.
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*Esta função retorna true se existe um usuário
    * logado e false para caso não exista.
    */
	public function isAuthenticated(Request $request) {
		$user = $request->session()->get('user');
		if ($user != null) {
			return (!$user->isEmpty());
		} else {
			return(false);
		}
	}

    /*Esta função vai para a tela de login
    * se chamada por métdo GET ou tenta realizar
    * o login se chamada pele método POST.
    */
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

    /*Esta função realiza o logout do usuário*/
    public function logout(Request $request) {
    	$request->session()->forget('user');
    	return view('login');
    }

    /*Esta função redireciona o usuário para a página
    * de criação de post.
    */
    public function new_post(Request $request) {
    	if ($this->isAuthenticated($request)) {
    		return view('new_post');
    	} else {
    		return redirect('login');
    	}
    }

    /*Esta função redireciona o usuário para a home
    * quando logado.
    */
    public function home(Request $request) {
    	if ($this->isAuthenticated($request)) {
    		$postsController = new PostsController;
    		return $postsController->getAllPosts();
    	} else {
    		return redirect('login');
    	}
    }

    /*Esta função redireciona o usuário convidado para a tela
    * de cadastro de usuário.
    */
    function register (Request $request) {
    	return view('register');
    }
   
}
