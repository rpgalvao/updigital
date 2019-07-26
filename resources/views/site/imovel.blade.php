@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 align="center">Imóvel</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m8">
            <div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{ '/img/modelo_detalhe_1.jpg' }}" alt="Imagem de slide de imóvel">
                            <div class="caption center-align">
                                <h3>Título do Imóvel</h3>
                                <h5>Chamada legal desse imóvel</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ '/img/modelo_detalhe_2.jpg' }}" alt="Imagem de slide de imóvel">
                            <div class="caption left-align">
                                <h3>Título do Imóvel</h3>
                                <h5>Chamada legal desse imóvel</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ '/img/modelo_detalhe_3.jpg' }}" alt="Imagem de slide de imóvel">
                            <div class="caption right-align">
                                <h3>Título do Imóvel</h3>
                                <h5>Chamada legal desse imóvel</h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{ '/img/modelo_detalhe_4.jpg' }}" alt="Imagem de slide de imóvel">
                            <div class="caption center-align">
                                <h3>Título do Imóvel</h3>
                                <h5>Chamada legal desse imóvel</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button class="btn blue-grey" onclick="sliderPrev()">Anterior</button>
                <button class="btn blue-grey" onclick="sliderNext()">Próximo</button>
            </div>
        </div>
        <div class="col s12 m4">
            <h4>Título do Imóvel</h4>
            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptate officia, totam consectetur tempora quidem at, esse minus id ducimus dolorem, corrupti iusto voluptas ratione vel laboriosam? Iusto, voluptatibus odio.</blockquote>
            <p><b>Código:</b> 345672</p>
            <p><b>Status:</b> Venda</p>
            <p><b>Tipo:</b> Alvenaria</p>
            <p><b>Endereço:</b> Rua das Couves, 1130</p>
            <p><b>CEP:</b> 01234-567</p>
            <p><b>Cidade:</b> Fim do Mundo</p>
            <p><b>Valor:</b> R$ 200.000,00</p>
            <a class="btn deep-orange darken-1" href="{{ route('site.contato') }}">Entre em contato</a>
        </div>
    </div>
</div>
@endsection