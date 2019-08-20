<nav>
    <div class="nav-wrapper blue-grey">
        <div class="container">
            <a href="{{ route('admin.principal') }}" class="brand-logo">SysAdmin</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="#">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>
                            <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
                            <li><a href="{{ route('admin.tipos') }}">Tipos de Imóveis</a></li>
                            <li><a href="{{ route('admin.cidades') }}">Cidades</a></li>
                            <li><a href="{{ route('admin.imoveis') }}">Lista de Imóveis</a></li>
                            <li><a href="{{ route('admin.slides') }}">Lista de Slides</a></li>
                            <li><a href="{{ route('admin.papel') }}">Lista de Cargos</a></li>
                        </ul>
                @endif
            </ul>
            <ul class="sidenav" id="mobile-demo">
                <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else                    
                    <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>
                    <li><a href="{{ route('admin.paginas') }}">Páginas</a></li>
                    <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                    <li><a href="{{ route('admin.tipos') }}">Tipos de Imóveis</a></li>
                    <li><a href="{{ route('admin.cidades') }}">Cidades</a></li>
                    <li><a href="{{ route('admin.imoveis') }}">Lista de Imóveis</a></li>
                    <li><a href="{{ route('admin.slides') }}">Lista de Slides</a></li>
                    <li><a href="{{ route('admin.papel') }}">Lista de Cargos</a></li>
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>