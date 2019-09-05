<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>UP Imobiliária Digital</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('lib/materialize/dist/css/materialize.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    </head>
    <body id="app-layout">
        <header>
            @include('layouts._site._navbar')
        </header>
        <main>
            @if(Session::has('mensagem'))
                <div class="container">
                    <div class="row">
                        <div class="card {{ Session::get('mensagem')['class'] }}">
                            <div align="center" class="card-content">
                                {{ Session::get('mensagem')['msg'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
        <footer>
            @include('layouts._site._footer')
        </footer>
        
        <!-- JavaScripts -->
        <script type="text/javascript" src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
    </body>
</html>
