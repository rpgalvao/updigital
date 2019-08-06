<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre()
    {
    	$pagina = Pagina::where('tipo', '=', 'sobre')->first();
    	return view('site.sobre', compact('pagina'));
    }

    public function contato()
    {
    	$pagina = Pagina::where('tipo', '=', 'contato')->first();
    	return view('site.contato', compact('pagina'));
    }

    public function enviarContato(Request $request)
    {
    	$pagina = Pagina::where('tipo', '=', 'contato')->first();
    	$email = $pagina->email;

    	\Mail::send('emails.contato', ['request' => $request], function($msg) use ($request, $email){
    		$msg->from($request['email'], $request['nome']);
    		$msg->replyTo($request['email'], $request['nome']);
    		$msg->subject('Contato do Site');
    		$msg->to($email, 'Contato Memphis');
    	});

    	\Session::flash('mensagem', ['msg' => 'Seu contato foi enviado ao nosso pessoal. Aguarde uma resposta!', 'class' => 'light-green white-text']);

    	return redirect()->route('site.contato');
    }
}
