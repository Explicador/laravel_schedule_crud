<!DOCTYPE html>
<html lang="pt-br">
<head>
    {{--<script  src="{{asset('mybootstrap/jquery/jquery-3.3.1.js')}}"></script>--}}
    {{--<link href="{{asset('mybootstrap/css/bootstrap.css')}}">--}}
    {{--<script src="{{asset('mybootstrap/js/bootstrap.js')}}"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="corpo">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{url('pessoas/novo')}}">Adicionar</a></li>
        <li class="divider"></li>
        <li><a href="{{url('pessoas')}}">Listar</a></li>
        <li class="divider"></li>
        <li><a href="#!">Eliminar</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Agenda de Contactos</a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a class="dropdown-trigger" href="#" data-target="dropdown1">Contactos<i
                                class="material-icons right">arrow_drop_down</i></a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</div>

<script>
    $(document).ready(function () {
        $(".dropdown-trigger").dropdown();
    });
</script>
</body>
</html>