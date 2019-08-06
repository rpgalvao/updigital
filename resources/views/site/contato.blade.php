@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 align="center">Fale Conosco</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m5">
            @if(isset($pagina->mapa))
                <div class="video-container">
                    {!! $pagina->mapa !!}
                </div>
            @else
                <img class="responsive-img" src="{{ asset($pagina->imagem) }}" alt="Imagem do contato">
            @endif
        </div>
        <div class="col s12 m7">
            <h4>{{ $pagina->titulo }}</h4>
            <blockquote style="text-align: justify;">{{ $pagina->descricao }}</blockquote>
            <form action="{{ route('site.contato.enviar') }}" method="POST" class="col s12">
                {{ csrf_field() }}
                <div class="input-field">
                    <input type="text" name="nome" class="validate" placeholder="Nome">
                </div>
                <div class="input-field">
                    <input type="text" name="email" class="validate" placeholder="E-mail">
                </div>
                <div class="input-field">
                    <textarea name="msg" class="materialize-textarea" placeholder="Mensagem"></textarea>
                </div>
                <button class="btn blue-grey">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection