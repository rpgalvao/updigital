<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioController extends Controller
{
    public function login(Request $req)
    {
    	$dados = $req->all();
    	if(Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])){
    		\Session::flash('mensagem', ['msg' => 'Usuário logado com sucesso!', 'class' => 'light-green white-text']);
    		return redirect()->route('admin.principal');
    	}
    	\Session::flash('mensagem', ['msg' => 'E-mail e/ou senha incorretos. Tente novamente!', 'class' => 'red lighten-2 white-text']);
    	return redirect()->route('admin.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}