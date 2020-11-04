<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap-grid.min.css")}}">
        <script src="{{url("assets/js/jquery-3.5.1.min.js")}}"></script>
        <script src="{{url("assets/js/bootstrap.min.js")}}"></script>
        @yield('head')
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">AGENDE</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">Minhas turmas</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">Tarefas</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-3">
            <div class="row justify-content-md-center">
                <div class="col-10">
                    @yield('content')
                </div>
            </div>
        </div>

    </body>
</html>