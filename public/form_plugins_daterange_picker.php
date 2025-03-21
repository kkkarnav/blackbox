<?php

require_once 'init.php';

$_title = 'Date Range Picker - Form Plugins - SmartAdmin v4.6.3';
$_active_nav = 'form_plugins_daterange_picker';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
';
$_description = 'A JavaScript component for choosing date ranges, dates and times.';

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
                            <li class="breadcrumb-item">Form Plugins</li>
                            <li class="breadcrumb-item active">Date Range Picker</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-credit-card-front'></i> Date Range Picker<sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    A JavaScript component for choosing date ranges, dates and times.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">About</span>
                                        <p>This date range picker component creates a dropdown menu from which a user can select a range of dates. I created it while building the UI for Improvely, which needed a way to select date ranges for reports. Features include limiting the selectable date range, localizable strings and date formats, a single date picker mode, a time picker, and predefined date ranges.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Addon's <a href="http://www.daterangepicker.com/" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Datepicker Range Picker<span class="fw-300"><i>Examples</i></span>
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
                                                Below you will find various date picker examples which you can use for your project
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Minimum Setup</label>
                                                <div class="col-12 col-lg-6 ">
                                                    <input type="text" class="form-control" id="datepicker-1" placeholder="Select date" value="01/01/2018 - 01/15/2018">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Date Range Picker With Times</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Select date" id="datepicker-2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Single Date Picker</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="07/17/2020" id="datepicker-3">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="help-block">Enable clear and today helper buttons</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Predefined Ranges</label>
                                                <div class="col-12 col-lg-6">
                                                    <input type="text" class="form-control " value="07/17/2020" id="datepicker-4">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Advanced Options</label>
                                                <div class="col-12 col-lg-6">
                                                    <input type="text" class="form-control" id="custom-range">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Modal Demos</label>
                                                <div class="col-12 col-lg-6">
                                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#default-example-modal">Show inside datepicker</a>
                                                </div>
                                            </div>
                                            <!-- modal -->
                                            <div class="modal fade" id="default-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">
                                                                Date picker inside modal
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="form-label" for="datepicker-modal-2">Minimum Setup</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fs-xl"><i class="fal fa-calendar"></i></span>
                                                                    </div>
                                                                    <input type="text" id="datepicker-modal-2" class="form-control" placeholder="Select a date" aria-label="date" aria-describedby="datepicker-modal-2">
                                                                </div>
                                                                <span class="help-block">Some help content goes here</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="datepicker-modal-3">Date Range Picker With Times</label>
                                                                <div class="input-group">
                                                                    <input type="text" id="datepicker-modal-3" class="form-control" placeholder="End date" aria-label="date" aria-describedby="datepicker-modal-3">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text fs-xl"><i class="fal fa-calendar-alt"></i></span>
                                                                    </div>
                                                                </div>
                                                                <span class="help-block">Some help content goes here</span>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- modal end -->
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
        <script src="<?= ASSETS_URL ?>/js/dependency/moment/moment.js"></script>
        <script src="<?= ASSETS_URL ?>/js/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
        <script>
            $(document).ready(function()
            {



                $('#datepicker-1, #datepicker-modal-2').daterangepicker(
                {
                    opens: 'left'
                }, function(start, end, label)
                {
                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });

                $('#datepicker-2, #datepicker-modal-3').daterangepicker(
                {
                    timePicker: true,
                    startDate: moment().startOf('hour'),
                    endDate: moment().startOf('hour').add(32, 'hour'),
                    locale:
                    {
                        format: 'M/DD hh:mm A'
                    }
                });

                $('#datepicker-3').daterangepicker(
                {
                    singleDatePicker: true,
                    showDropdowns: true
                });

                $(function()
                {

                    var start = moment().subtract(29, 'days');
                    var end = moment();

                    function cb(start, end)
                    {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }

                    $('#datepicker-4').daterangepicker(
                    {
                        startDate: start,
                        endDate: end,
                        ranges:
                        {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        }
                    }, cb);

                    cb(start, end);

                });

                $('#custom-range').daterangepicker(
                {
                    "showDropdowns": true,
                    "showWeekNumbers": true,
                    "showISOWeekNumbers": true,
                    "timePicker": true,
                    "timePicker24Hour": true,
                    "timePickerSeconds": true,
                    "autoApply": true,
                    "maxSpan":
                    {
                        "days": 7
                    },
                    ranges:
                    {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    "alwaysShowCalendars": true,
                    "startDate": "05/12/2019",
                    "endDate": "05/18/2019",
                    "applyButtonClasses": "btn-default shadow-0",
                    "cancelClass": "btn-success shadow-0"
                }, function(start, end, label)
                {
                    console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
                });

            });

        </script>
    </body>
</html>
