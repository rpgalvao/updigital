<nav>
    <div class="nav-wrapper upcolor">
        <div class="container">
            <a href="{{ route('site.home') }}" class="brand-logo"><!--<img src="{{ asset('img/logo_up.png') }}" alt="logo site" height="70">-->UP Imobiliária Digital</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="{{ route('site.home') }}">Home</a></li>
                <li><a href="{{ route('site.sobre') }}">Sobre</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>