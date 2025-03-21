<?php

require_once 'init.php';

$_title = 'Date Picker - Form Plugins - SmartAdmin v4.6.3';
$_active_nav = 'form_plugins_datepicker';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
';
$_description = 'Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.';

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
                            <li class="breadcrumb-item active">Date Picker</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-credit-card-front'></i> Date Picker<sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.
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
                                        <p>Bootstrap datepicker allows the user to enter a date by merely clicking on a date in the pop-up calendar as opposed to having to take their hand off the mouse to type in a date. The UI makes easy to select the date and keep the proper formatting</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Bootstrap Datepicker's <a href="https://bootstrap-datepicker.readthedocs.io/en/stable/" target="_blank">Official Documentation</a>
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
                                            Datepicker <span class="fw-300"><i>Examples</i></span>
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
                                                    <input type="text" class="form-control" id="datepicker-1" readonly placeholder="Select date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Input Group Setup</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " readonly placeholder="Select date" id="datepicker-2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Enable Helper Buttons</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " readonly value="07/17/2020" id="datepicker-3">
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
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Orientation</label>
                                                <div class="col-12 col-lg-6 demo-v-spacing-sm">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " placeholder="Top left" id="datepicker-4-1">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar-check"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " placeholder="Top right" id="datepicker-4-2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar-times"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " placeholder="Bottom left" id="datepicker-4-3">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar-exclamation"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " placeholder="Bottom right" id="datepicker-4-4">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text fs-xl">
                                                                <i class="fal fa-calendar-plus"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Range Picker</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class="input-daterange input-group" id="datepicker-5">
                                                        <input type="text" class="form-control" name="start">
                                                        <div class="input-group-append input-group-prepend">
                                                            <span class="input-group-text fs-xl"><i class="fal fa-ellipsis-h"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="end">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-12 col-lg-3 form-label text-lg-right">Inline Mode</label>
                                                <div class="col-12 col-lg-6">
                                                    <div class id="datepicker-6"></div>
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
                                                                <label class="form-label" for="datepicker-modal-2">Select a date</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text fs-xl"><i class="fal fa-calendar"></i></span>
                                                                    </div>
                                                                    <input type="text" id="datepicker-modal-2" class="form-control" placeholder="Select a date" aria-label="date" aria-describedby="datepicker-modal-2">
                                                                </div>
                                                                <span class="help-block">Some help content goes here</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="datepicker-modal-3">Datepicker with button</label>
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
        <script src="<?= ASSETS_URL ?>/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script>
            // Class definition

            var controls = {
                leftArrow: '<i class="fal fa-angle-left" style="font-size: 1.25rem"></i>',
                rightArrow: '<i class="fal fa-angle-right" style="font-size: 1.25rem"></i>'
            }

            var runDatePicker = function()
            {

                // minimum setup
                $('#datepicker-1').datepicker(
                {
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: controls
                });


                // input group layout 
                $('#datepicker-2').datepicker(
                {
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: controls
                });

                // input group layout for modal demo
                $('#datepicker-modal-2').datepicker(
                {
                    todayHighlight: true,
                    orientation: "bottom left",
                    templates: controls
                });

                // enable clear button 
                $('#datepicker-3').datepicker(
                {
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });

                // enable clear button for modal demo
                $('#datepicker-modal-3').datepicker(
                {
                    todayBtn: "linked",
                    clearBtn: true,
                    todayHighlight: true,
                    templates: controls
                });

                // orientation 
                $('#datepicker-4-1').datepicker(
                {
                    orientation: "top left",
                    todayHighlight: true,
                    templates: controls
                });

                $('#datepicker-4-2').datepicker(
                {
                    orientation: "top right",
                    todayHighlight: true,
                    templates: controls
                });

                $('#datepicker-4-3').datepicker(
                {
                    orientation: "bottom left",
                    todayHighlight: true,
                    templates: controls
                });

                $('#datepicker-4-4').datepicker(
                {
                    orientation: "bottom right",
                    todayHighlight: true,
                    templates: controls
                });

                // range picker
                $('#datepicker-5').datepicker(
                {
                    todayHighlight: true,
                    templates: controls
                });

                // inline picker
                $('#datepicker-6').datepicker(
                {
                    todayHighlight: true,
                    templates: controls
                });
            }

            $(document).ready(function()
            {
                runDatePicker();
            });

        </script>
    </body>
</html>
