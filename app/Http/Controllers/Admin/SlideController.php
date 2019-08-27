<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller {
	public function index() {
		$registros = Slide::orderBy('ordem')->get();
		return view('admin.slides.index', compact('registros'));
	}

	public function adicionar() {
		return view('admin.slides.adicionar');
	}

	public function salvar(Request $request) {
		if (Slide::count()) {
			$slide      = Slide::orderBy('ordem', 'desc')->first();
			$ordemAtual = $slide->ordem;
		} else {
			$ordemAtual = 0;
		}
		if ($request->hasFile('imagens')) {
			$arquivos = $request->file('imagens');
			foreach ($arquivos as $imagem) {
				$registro    = new Slide();
				$rand        = rand(11111, 99999);
				$diretorio   = "img/imoveis/";
				$ext         = $imagem->guessClientExtension();
				$nomeArquivo = "_img_".$rand.".".$ext;
				$imagem->move($diretorio, $nomeArquivo);
				$registro->ordem = $ordemAtual+1;
				$ordemAtual++;
				$registro->imagem = $diretorio.'/'.$nomeArquivo;
				$registro->save();
			}
		}
		\Session::flash('mensagem', ['msg' => 'Imagens cadastradas com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.slides');
	}

	public function editar($id) {
		$registro = Slide::find($id);
		return view('admin.slides.editar', compact('registro'));
	}

	public function atualizar(Request $request, $id) {
		$registro            = Slide::find($id);
		$dados               = $request->all();
		$registro->titulo    = $dados['titulo'];
		$registro->descricao = $dados['descricao'];
		$registro->ordem     = $dados['ordem'];
		$registro->link      = $dados['link'];
		$registro->publicado = $dados['publicado'];
		$file                = $request->file('imagem');
		if ($file) {
			$rand        = rand(11111, 99999);
			$diretorio   = "img/imoveis/";
			$ext         = $file->guessClientExtension();
			$nomeArquivo = "_img_".$rand.".".$ext;
			$file->move($diretorio, $nomeArquivo);
			$registro->imagem = $diretorio.'/'.$nomeArquivo;
		}
		$registro->update();
		\Session::flash('mensagem', ['msg' => 'Imagem atualizada com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.slides');
	}

	public function deletar($id) {
		$slide = Slide::find($id);
		$slide->delete();
		\Session::flash('mensagem', ['msg' => 'Imagem removida com sucesso!', 'class' => 'light-green white-text']);
		return redirect()->route('admin.slides');
	}
}
