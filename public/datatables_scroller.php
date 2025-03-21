<?php

require_once 'init.php';

$_title = 'Scroller - Datatables - SmartAdmin v4.6.3';
$_active_nav = 'datatables_scroller';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/datagrid/datatables/datatables.bundle.css">
';
$_description = 'Example of Scroller extention with server side processing ';

?>
<!DOCTYPE html>
<!-- 
Template Name:: SmartAdmin PHP Responsive WebApp - Template built with Bootstrap 4 and PHP
Version: 4.5.3
Author: Jovanni Lo
Website: https://smartadmin.lodev09.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-php-responsive-webapp-WB05M9585
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <?php include_once APP_PATH.'/includes/head.php'; ?>
    <body class="mod-bg-1 mod-nav-link mod-skin-<?= $_theme ?> ">
        <?php include_once APP_PATH.'/includes/theme.php'; ?>
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper">
            <div class="page-inner">
                <?php include_once APP_PATH.'/includes/nav.php'; ?>
                <div class="page-content-wrapper">
                    <?php include_once APP_PATH.'/includes/header.php'; ?>
                    <!-- BEGIN Page Content -->
                    <!-- the #js-page-content id is needed for some plugins to initialize -->
                    <main id="js-page-content" role="main" class="page-content">
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
                            <li class="breadcrumb-item">Datatables</li>
                            <li class="breadcrumb-item active">Scroller</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-table'></i> DataTables: <span class='fw-300'>Scroller</span> <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Example of Scroller extention with server side processing
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Example <span class="fw-300"><i>Table</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>
                                                    Scroller is a plug-in for DataTables which enhances DataTables' built-in scrolling features to allow large amounts of data to be rendered on page very quickly. This is done by Scroller through the use of a virtual rendering technique that will render only the part of the table that is actually required for the current view.
                                                </p>
                                                <p>
                                                    This example shows how Scroller for DataTables can be initialised, when the Scroller Javascript file is included, by simply setting the <code>scroller</code> option to true. This option can also be given as an object to specify initialisation options for Scroller.
                                                </p>
                                            </div>
                                            <!-- datatable start -->
                                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Client</th>
                                                        <th>Account#</th>
                                                        <th>Office</th>
                                                        <th>Age.</th>
                                                        <th>Payment date</th>
                                                        <th>Transfer Amount</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Client</th>
                                                        <th>Account#</th>
                                                        <th>Office</th>
                                                        <th>Age.</th>
                                                        <th>Payment date</th>
                                                        <th>Transfer Amount</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- datatable end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- END Page Content -->
                    <?php include_once APP_PATH.'/includes/footer.php'; ?>
                </div>
            </div>
        </div>
        <!-- END Page Wrapper -->
        <?php include_once APP_PATH.'/includes/extra.php'; ?>
        <?php include_once APP_PATH.'/includes/js.php'; ?>
        <!-- datatble responsive bundle contains: 
    + jquery.dataTables.js
    + dataTables.bootstrap4.js
    + dataTables.autofill.js                            
    + dataTables.buttons.js
    + buttons.bootstrap4.js
    + buttons.html5.js
    + buttons.print.js
    + buttons.colVis.js
    + dataTables.colreorder.js                          
    + dataTables.fixedcolumns.js                            
    + dataTables.fixedheader.js                     
    + dataTables.keytable.js                        
    + dataTables.responsive.js                          
    + dataTables.rowgroup.js                            
    + dataTables.rowreorder.js                          
    + dataTables.scroller.js                            
    + dataTables.select.js                          
    + datatables.styles.app.js
    + datatables.styles.buttons.app.js -->
        <script src="<?= ASSETS_URL ?>/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
            $(document).ready(function()
            {
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    stateSave: true, //remembers your table settings (filter, scroll point, sort, etc)
                    processing: true,
                    pageLength: false,
                    sAjaxSource: myapp_config.assetsUrl + '/media/data/2500.json',
                    deferRender: true,
                    scrollY: 300,
                    scrollCollapse: true,
                    scroller: true,
                    /* render dynamic buttons */
                    columnDefs: [
                    {
                        targets: -1,
                        title: '',
                        orderable: false,
                        render: function(data, type, full, meta)
                        {

                            /*
                            -- ES6
                            -- convert using https://babeljs.io online transpiler
                            return `
                            <a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>
                                <i class="fal fa-times"></i>
                            </a>
                            <div class='dropdown d-inline-block'>
                                <a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>
                                    <i class="fal fa-ellipsis-v"></i>
                                </a>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='javascript:void(0);'>Change Status</a>
                                    <a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>
                                </div>
                            </div>`;
                                
                            ES5 example below:  

                            */
                            return "\n\t\t\t\t\t\t<a href='javascript:void(0);' class='btn btn-sm btn-icon btn-outline-danger rounded-circle mr-1' title='Delete Record'>\n\t\t\t\t\t\t\t<i class=\"fal fa-times\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<div class='dropdown d-inline-block'>\n\t\t\t\t\t\t\t<a href='#'' class='btn btn-sm btn-icon btn-outline-primary rounded-circle shadow-0' data-toggle='dropdown' aria-expanded='true' title='More options'>\n\t\t\t\t\t\t\t\t<i class=\"fal fa-ellipsis-v\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t<div class='dropdown-menu'>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Change Status</a>\n\t\t\t\t\t\t\t\t<a class='dropdown-item' href='javascript:void(0);'>Generate Report</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>";
                        },
                    },
                    {
                        targets: 7,
                        /*  The `data` parameter refers to the data for the cell (defined by the
                            `data` option, which defaults to the column being worked with, in this case `data: 16`.*/
                        render: function(data, type, full, meta)
                        {
                            var badge = {
                                1:
                                {
                                    'title': 'Pending',
                                    'class': 'badge-warning'
                                },
                                2:
                                {
                                    'title': 'Pending',
                                    'class': 'badge-warning'
                                },
                                3:
                                {
                                    'title': 'Canceled',
                                    'class': 'badge-secondary'
                                },
                                4:
                                {
                                    'title': 'Attempt',
                                    'class': 'bg-danger-100 text-white'
                                },
                                5:
                                {
                                    'title': 'Failed',
                                    'class': 'badge-danger text-white'
                                },
                                6:
                                {
                                    'title': 'Delivered',
                                    'class': 'badge-success'
                                },
                                7:
                                {
                                    'title': 'Attention!',
                                    'class': 'badge-primary'
                                },
                                8:
                                {
                                    'title': 'In Progress',
                                    'class': 'bg-success-300'
                                },
                            };
                            if (typeof badge[data] === 'undefined')
                            {
                                return data;
                            }
                            return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
                        },
                    }],
                });
            });

        </script>
    </body>
</html>
