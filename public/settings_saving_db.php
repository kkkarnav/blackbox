<?php

require_once 'init.php';

$_title = 'Saving to Database - Theme Settings - SmartAdmin v4.6.3';
$_active_nav = 'settings_saving_db';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'How to save and load settings from database';

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
                            <li class="breadcrumb-item">Theme Settings</li>
                            <li class="breadcrumb-item active">Saving to Database</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Theme Settings: <span class='fw-300'>Saving to Database</span>
                                <small>
                                    How to save and load settings from database
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Test <span class="fw-300"><i>it out!</i></span>
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
                                                All changes are stored to localStorage by default. <strong>pushSettings()</strong> inherits this trait. Set <code>"storeLocally"</code> to <strong>false</strong> via <strong>app.config.js</strong> to disable this action.
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 order-2 order-xl-1">
                                                    <div class="form-group">
                                                        <label for="pushSettings_input">
                                                            <strong>Push Settings</strong>
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" id="pushSettings_input" list="css_list" name="pushSettings_input" class="form-control" placeholder="e.g. header-function-fixed nav-function-fixed">
                                                            <datalist id="css_list">
                                                                <option value="header-function-fixed">
                                                                <option value="nav-function-fixed">
                                                                <option value="nav-function-minify">
                                                                <option value="nav-function-hidden">
                                                                <option value="nav-function-top">
                                                                <option value="mod-main-boxed">
                                                                <option value="nav-mobile-push">
                                                                <option value="nav-mobile-no-overlay">
                                                                <option value="nav-mobile-slide-out">
                                                                <option value="mod-bigger-font">
                                                            </datalist>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-secondary btn-w-m" type="button" id="pushSettings_btn">push()</button>
                                                            </div>
                                                        </div>
                                                        <div class="help-block">
                                                            $.ajax({ .. success: function (data) { var DataBase_str = data[i].appSettings } .. }); initApp.pushSettings( DataBase_str );
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="getSettings_input">
                                                            <strong>Get Settings</strong>
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" id="getSettings_input" name="getSettings_input" readonly="readonly" class="form-control" placeholder="filters and returns nav-*, header-*, mod-*, & display-*">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-secondary btn-w-m" type="button" id="getSettings_btn">get()</button>
                                                            </div>
                                                        </div>
                                                        <div class="help-block">
                                                            var DataBase_str = initApp.getSettings(); $.ajax({ data: {DataBase_str}, dataType: "json" ... })
                                                        </div>
                                                    </div>
                                                    <hr class="my-5">
                                                    <button class="btn btn-outline-danger mr-1" type="button" data-action="app-reset"><u>R</u>eset Settings</button>
                                                    <button class="btn btn-outline-success" type="button" id="ng_eventlog_clear"><u>C</u>lear Events</button>
                                                </div>
                                                <div class="col-xl-6 order-1 order-xl-1">
                                                    <div id="app-eventlog" class="alert alert-primary p-1 h-auto mb-4 mb-xl-0"></div>
                                                </div>
                                            </div>
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
        <script type="text/javascript">
            var ng_eventlog = function()
            {

                if ($('#app-eventlog').length)
                {

                    var dt = new Date(),
                        time = "<div class='p-1'><span class='badge badge-primary fw-500 rounded-0'>" + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() + " </span> <i>body class changed to: </i>";
                    $('#app-eventlog').prepend(time + "<strong> [ " + initApp.getSettings().split(' ') + " ] </strong>" + "</div/>");

                }

            };

            var ng_eventlog_clear = function()
            {
                $('#app-eventlog').empty();
            }

            var ng_pushSettings = function()
            {
                if ($('#pushSettings_input').val())
                {
                    initApp.pushSettings($('#pushSettings_input').val());
                    $('#pushSettings_input').val('');
                    ng_eventlog();
                }
            }

            var ng_getSettings = function()
            {
                var getSettings_array = initApp.getSettings();
                if (getSettings_array)
                {
                    $('#getSettings_input').val(getSettings_array)
                }
                else
                {
                    $('#getSettings_input').val('<body> class is empty or nothing to return')
                }
            }

            $('[data-action="toggle"]').on('click', function()
            {
                ng_eventlog();
            });

            $('#pushSettings_btn').on('click', function()
            {
                ng_pushSettings();
            });

            $('#getSettings_btn').on('click', function()
            {
                ng_getSettings();
            });

            $('#ng_eventlog_clear').on('click', function()
            {
                ng_eventlog_clear();
            });

        </script>
    </body>
</html>
