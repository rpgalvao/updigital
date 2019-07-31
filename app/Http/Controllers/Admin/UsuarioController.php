<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

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

    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function adicionar()
    {
        return view('admin.usuarios.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        $usuario = new User;
        $usuario->name = $dados['name'];
        $usuario->email = $dados['email'];
        $usuario->password = bcrypt($dados['password']);
        $usuario->save();
        \Session::flash('mensagem', ['msg' => 'Usuário cadastrado com sucesso!', 'class' => 'light-green white-text']);
        return redirect()->route('admin.usuarios');
    }
}