@extends('layouts.form')
@section('css')
    <link href="css/login.css" rel="stylesheet">
@stop

@section('content')
    <form id="loginForm" action="loginAction.php" method="post">
        <h3 class="light">Iniciar sesión</h3>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="inputUser" id="inputUser" placeholder="Correo electrónico" required>
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Contraseña" required>
                <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
            </div>
        </div>

        <input type="submit" name="login" id="inputLogin" value="Iniciar sesión" class="btn wow tada btn-embossed btn-primary">
    </form>
@stop
