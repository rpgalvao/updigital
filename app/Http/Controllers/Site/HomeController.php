<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imovel;

class HomeController extends Controller
{
    public function index()
    {
       $imoveis = Imovel::orderBy('id', 'desc')->paginate(4);
        return view('site.home', compact('imoveis'));
    }
}
