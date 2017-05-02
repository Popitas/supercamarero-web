@extends('layouts.app')

@section('specific-css')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-table.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de control</div>

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
