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
    		return redirect()->route('admin.principal');
    	}
    }
}