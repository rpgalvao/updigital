<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Papel;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller {
	public function login(Request $req) {
		$dados = $req->all();
		if (Auth::attempt(['email'          => $dados['email'], 'password'          => $dados['password']])) {
			\Session::flash('mensagem', ['msg' => 'Usuário logado com sucesso!', 'class' => 'light-green white-text']);
			return redirect()->route('admin.principal');
		}
		\Session::flash('mensagem', ['msg' => 'E-mail e/ou senha incorretos. Tente novamente!', 'class' => 'red lighten-2 white-text']);
		return redirect()->route('admin.login');
	}

	public function sair() {
		Auth::logout();
		return redirect()->route('admin.login');
	}

	public function index() {
		if (auth()->user()->can('usuario_listar')) {
			$usuarios = User::all();
			return view('admin.usuarios.index', compact('usuarios'));
		} else {
			return redirect()->route('admin.principal');
		}
	}

	public function adicionar() {
		return view('admin.usuarios.adicionar');
	}

	public function salvar(Request $req) {
		$dados             = $req->all();
		$usuario           = new User;
		$usuario->name     = $dados['name'];
		$usuario->email    = $dados['email'];
		$usuario->password = bcrypt($dados['password']);
		$usuario->save();
		\Session::flash('mensagem', ['msg' => 'Usuário cadastrado com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.usuarios');
	}

	public function editar($id) {
		$usuario = User::find($id);
		return view('admin.usuarios.editar', compact('usuario'));
	}

	public function atualizar(Request $req, $id) {
		$usuario = User::find($id);
		$dados   = $req->all();
		if (isset($dados['password']) && strlen($dados['password']) > 5) {
			$dados['password'] = bcrypt($dados['password']);
		} else {
			unset($dados['password']);
		}
		$usuario->update($dados);
		\Session::flash('mensagem', ['msg' => 'Usuário atualizado com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.usuarios');
	}

	public function deletar($id) {
		User::find($id)->delete();
		\Session::flash('mensagem', ['msg' => 'Usuário removido com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.usuarios');
	}

	public function papel($id) {
		$usuario = User::find($id);
		$papeis  = Papel::all();
		return view('admin.usuarios.papel', compact('usuario', 'papeis'));
	}

	public function salvarPapel(Request $request, $id) {
		$usuario = User::find($id);
		$dados   = $request->all();
		$papel   = Papel::find($dados['papel_id']);
		$usuario->adicionaPapel($papel);
		return redirect()->back();
	}

	public function removerPapel($id, $papel_id) {
		$usuario = User::find($id);
		$papel   = Papel::find($papel_id);
		$usuario->removePapel($papel);
		return redirect()->back();
	}
}