<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo;
use App\Imovel;

class TipoController extends Controller
{
    public function index()
    {
        $registros = Tipo::all();
        return view('admin.tipos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $registro = new Tipo;
        $registro->titulo = $dados['titulo'];
        $registro->save();
        \Session::flash('mensagem', ['msg' => 'Registro cadastrado com sucesso!', 'class' => 'light-green white-text']);
        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Tipo::find($id);
        $dados = $request->all();
        $registro->titulo = $dados['titulo'];
        $registro->update();
        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'light-green white-text']);
        return redirect()->route('admin.tipos');
    }

    public function deletar($id)
    {
        if(Imovel::where('tipo_id', '=', $id)->count()){
            \Session::flash('mensagem', ['msg' => 'Impossivel deletar esse tipo de im�vel pois possui im�veis vinculados a ele. Delete primeiro todos os im�veis desse tipo.', 'class' => 'red lighten-2 white-text']);
            return redirect()->route('admin.tipos');
        }
        Tipo::find($id)->delete();
        \Session::flash('mensagem', ['msg' => 'Registro removido com sucesso!', 'class' => 'light-green white-text']);
        return redirect()->route('admin.tipos');
    }
}