<nav>
    <div class="nav-wrapper blue-grey">
        <div class="container">
            <a href="{{ route('site.home') }}" class="brand-logo">SysAdmin</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('admin.login') }}">Home</a></li>
                <li><a href="{{ route('site.home') }}">Site</a></li>             
            </ul>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="{{ route('admin.login') }}">Home</a></li>
                <li><a href="{{ route('site.home') }}">Site</a></li>
            </ul>
        </div>
    </div>
</nav>