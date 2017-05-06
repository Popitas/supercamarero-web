@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/page">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Añadir nuevo plato</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Guardar</button>
          <a href="/page" class="btn btn-default">Volver al menú</a>
        </div>
      </div>
      <hr>

      @include('page.form')
    </form>

  </div>
@endsection
