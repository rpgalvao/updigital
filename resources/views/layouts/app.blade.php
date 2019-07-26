<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>

</head>
<body id="app-layout">
    <nav>
        <div class="nav-wrapper blue-grey">
            <div class="container">
                <a href="{{ route('site.home') }}" class="brand-logo">Memphis Invest</a>
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


    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
</body>
</html>
