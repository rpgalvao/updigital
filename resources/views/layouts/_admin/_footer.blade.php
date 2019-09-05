<footer class="page-footer upcolor">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">SysAdmin</h5>
                <p class="white-text">Sistema administrativo</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-4" target="_blank" href="{{ route('site.home') }}">Site</a></li>
                    @if(Auth::guest())
                        <li><a class="grey-text text-lighten-4" href="{{ route('admin.login') }}">Login</a></li>
                    @else
                        <li><a class="grey-text text-lighten-4" href="{{ route('admin.login.sair') }}">Sair</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright blue-grey darken-3">
        <div class="container">
            © 2019 Copyright SysAdmin
            @if(!Auth::guest())
                <a class="grey-text text-lighten-4 right" href="#">{{ Auth::user()->name }}</a>
            @endif
        </div>
    </div>
</footer>