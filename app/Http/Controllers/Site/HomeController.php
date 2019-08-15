<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Slide;

class HomeController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::orderBy('id', 'desc')->paginate(4);
        $slides = Slide::where('publicado', '=', 'sim')->orderBy('ordem')->get();
        $direcaoTexto = ['center-align', 'left-align', 'right-align'];
        return view('site.home', compact('imoveis', 'slides', 'direcaoTexto'));
    }
}
