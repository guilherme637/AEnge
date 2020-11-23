<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url(mix('css/styles.css'))}}">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">AEnge</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('novo-cliente')}}">Cadastro de Clientes <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lista-cliente')}}">Lista de clientes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('nova-proposta')}}">Nova Propsota</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lista-proposta')}}">Lista de Proposta</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users')}}">Cadastro de Usuários</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
    </body>
</html>