@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 align="center">Fale Conosco</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m5">
            <img class="responsive-img" src="{{ asset('img/modelo_img_home.jpg') }}" alt="Imagem do sobre">
        </div>
        <div class="col s12 m7">
            <form action="#" class="col s12">
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