<div class="row section">
    <h3 align="center">Imóveis</h3>
    <div class="divider"></div>
    <br>
    @include('layouts._site._filtros')
</div><!--row-->
<div class="row section">
    @foreach($imoveis as $imovel)
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <a href="{{ route('site.imovel', [$imovel->id, str_slug($imovel->titulo, '-')]) }}"><img src="{{ asset($imovel->imagem) }}" alt="{{ $imovel->titulo }}" height="150"></a>
                </div>
                <div class="card-content">
                    <p><b class="deep-orange-text darkeen-1">{{ strtoupper($imovel->status) }}</b></p>
                    <p><b>{{ $imovel->titulo }}</b></p>
                    <p>{{ $imovel->descricao }}</p>
                    <p><b>R$ {{ number_format($imovel->valor, 2, ",", ".") }}</b></p>
                </div>
                <div class="card-action">
                    <a href="{{ route('site.imovel', [$imovel->id, str_slug($imovel->titulo, '-')]) }}">Ver mais...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div align="center" class="row">
    {{ $imoveis->links() }}
</div>