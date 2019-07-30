<nav>
    <div class="nav-wrapper blue-grey">
        <div class="container">
            <a href="{{ route('site.home') }}" class="brand-logo">SysAdmin</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
            <ul class="sidenav" id="mobile-demo">
                <li><a target="_blank" href="{{ route('site.home') }}">Site</a></li>
                @if(Auth::guest())
                    <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                    <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>