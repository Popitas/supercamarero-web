@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Bienvenido
            @if (auth()->check())
              <strong>
                {{ auth()->user()->name }}
              </strong>
            @endif
          </div>

          <div class="panel-body">
            @if (auth()->guest())
              Para acceder al <a href="{{ route('page.index') }}">menú</a>,
              necesita estar
              <a href="/register">registrado</a>.
            @else
              Acceda al
              <a href="{{ route('page.index') }}">menú</a> de su restaurante.
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
