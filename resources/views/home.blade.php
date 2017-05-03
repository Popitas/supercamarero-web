@extends('layouts.app')

@section('specific-css')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-table.css">
<link rel="stylesheet" href="css/pepito.css">

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de control</div>
<center>
  <form action="/insert" method="post">
    <table>
      <tr>
        {{ csrf_field() }}
      <td> Nombre: </td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td> Descripcion: </td>
      <td><input type="text" name="description"></td>
    </tr>
    <tr>
      <td> Ingredientes: </td>
      <td><input type="text" name="ingredients"></td>
    </tr>
    <tr>
      <td> Foto: </td>
      <td><input type="text" name="picture"></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="Añadir"></td>
    </tr>
    </table>
</center>



                <center>
                  <table style="width:100%">
                    <tr>
                      <td>Nombre </td>
                        <td>Descripción </td>
                        <td>Ingredientes </td>
                    </tr>
                  </table>
                  @foreach ($data as $value)
                    <table>
                      <tr>
                        <td>{{$value->name}}</td>
                          <td>{{$value->description}}</td>
                          <td>{{$value->ingredients}}</td>
                          <td><a href=""><button>Editar</button>&nbsp;<a href=""><button>Borrar</button>&nbsp;</tr>
                      </tr>
                    </table>
                  @endforeach
                </center>



                <div class="panel-body">
                    <table data-toggle="table"
                           data-height="300"
                           data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
                           data-search="true">
                        <thead>
                            <tr>
                                <th data-field="name">Name</th>
                                <th data-field="stargazers_count">Stars</th>
                                <th data-field="forks_count">Forks</th>
                                <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('specific-js')
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/bootstrap-table-es-ES.js"></script>
@endsection
