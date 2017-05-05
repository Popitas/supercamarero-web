<?php $__env->startSection('specific-css'); ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-table/bootstrap-table.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Panel de control
                </div>
                <div class="panel-body">
                    <table  data-toggle="table"
                            data-toolbar="#toolbar"
                            data-search="true"
                            data-show-refresh="true"
                            data-show-toggle="true"
                            data-show-columns="true"
                            data-sort-name="stargazers_count"
                            data-sort-order="desc"
                            data-show-export="true"
                            data-show-pagination-switch="true"
                            data-pagination="true"
                            data-height="400"
                            data-url="https://api.github.com/users/wenzhixin/repos"
                            data-query-params="queryParams"
                            data-pagination="true"
                            data-search="true">
                        <thead>
                            <tr><th data-field="state" data-checkbox="true"></th>
                                <th data-field="name"
                                    data-sortable="true">Name</th>
                                <th data-field="stargazers_count"
                                    data-sortable="true">Stars</th>
                                <th data-field="forks_count"
                                    data-sortable="true">Forks</th>
                                <th data-field="watchers_count"
                                    data-sortable="true">Watchers</th>
                                <th data-field="description"
                                    data-sortable="true">Description</th>
                                <th data-field="open_issues_count"
                                    data-sortable="true" data-visible="false">Open Issues</th>
                                <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('specific-js'); ?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="bootstrap-table/bootstrap-table.js"></script>
<script src="bootstrap-table/locale/bootstrap-table-es-ES.js"></script>
<script src="js/menu.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>