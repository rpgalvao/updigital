<div class="slider">
    <ul class="slides">
        @foreach($slides as $slide)
            <li><img src="{{ asset($slide->imagem) }}" alt="{{ $slide->titulo }}">
                <div class="caption {{ $direcaoTexto[rand(0,2)] }}">
                    <h3>{{ $slide->titulo }}</h3>
                    <h5>{{ $slide->descricao }}</h5>
                    @if($slide->link)
                        <a href="{{ $slide->link }}" class="btn-large blue-grey">Mais...</a>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>