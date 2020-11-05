<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{url("assets/css/bootstrap-grid.min.css")}}">
        <script src="{{url("assets/js/jquery-3.5.1.min.js")}}"></script>
        <script src="{{url("assets/js/bootstrap.min.js")}}"></script>
    </head>
    <body>

        <div class="container" style="height: 100vh;">
            <div class="row d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="col-4">
                    <h2>Login</h2>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <a href="{{ route("turmas.index") }}" class="btn btn-primary">Login</a>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>