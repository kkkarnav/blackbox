<?php

require_once 'init.php';

$_title = 'PaceJS - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_pacejs';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Include pace.js and a CSS theme of your choice, and you get a beautiful progress indicator for your page load and ajax navigation.';

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
                            <li class="breadcrumb-item">Core Plugins</li>
                            <li class="breadcrumb-item active">PaceJS</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> PaceJS <sup class='badge badge-warning fw-500'>RECOMMENDED</sup>
                                <small>
                                    Include pace.js and a CSS theme of your choice, and you get a beautiful progress indicator for your page load and ajax navigation.
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
                                        <span class="h5">Important information</span>
                                        <p>This plugin is not required but <strong>highly recommended</strong>. If you decide to remove PaceJS from core, Internet Explorer may have some CSS issues during page load. Some animations will execute before a page is fully loaded, resulting 'jumpy / jerky' animations.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Pace's <a href="https://github.hubspot.com/pace/" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Settings</i></span>
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
                                                Default paceJS settings, no changes needed!
                                            </div>
                                            <div class="demo-window m-auto shadow-1 rounded mb-g" style="max-width:550px">
                                                <div class="demo-window-content">
                                                    <div class="app-body-demo d-flex flex-column border-0 position-relative">
                                                        <div class="position-absolute pos-top w-100">
                                                            <div class="progress rounded-0 progress-xs bg-transparent">
                                                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-1">
                                                            <div class="d-flex app-body-demo border-top-0 border-left-0">
                                                                <div class="app-nav-demo bg-success-500 p-1 pt-0 pattern-1"></div>
                                                                <div class="d-flex flex-column flex-1">
                                                                    <div class="app-header-demo bg-success-50 pattern-1"></div>
                                                                    <div class="app-container-demo flex-1 p-3">
                                                                        <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Custom <span class="fw-300"><i>CSS</i></span>
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
                                                Custom location by adding class <code>.mod-pace-custom</code>
                                            </div>
                                            <div class="demo-window m-auto shadow-1 rounded mb-g" style="max-width:550px">
                                                <div class="demo-window-content">
                                                    <!-- app-theme -->
                                                    <div class="app-body-demo d-flex flex-column border-0">
                                                        <div class="flex-1">
                                                            <div class="d-flex app-body-demo border-top-0 border-left-0">
                                                                <div class="app-nav-demo bg-success-500 p-1 pt-0 pattern-1"></div>
                                                                <div class="d-flex flex-column flex-1">
                                                                    <div class="app-header-demo bg-success-50 pattern-1"></div>
                                                                    <div class="app-container-demo bg-faded d-flex align-items-center justify-content-center flex-1">
                                                                        <div class="text-center" style="width:100px">
                                                                            <div class="progress progress-sm bg-white rounded-0" style="border:1px solid #dadada">
                                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Core <span class="fw-300"><i>API</i></span>
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
                                                SmartAdmin for PHP comes with integrated and customized styles for PaceJS plugin. PaceJS in short, improves usability from an user's point of view
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h5 class="frame-heading">Methods</h5>
                                                    <div class="frame-wrap">
                                                        <table class="table table-bordered mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:150px">
                                                                        Methods
                                                                    </th>
                                                                    <th>
                                                                        Description
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <code>Pace.start</code>
                                                                    </td>
                                                                    <td class="fs-sm">
                                                                        Show the progress bar and start updating. Called automatically if you don't use AMD or CommonJS.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <code>Pace.restart</code>
                                                                    </td>
                                                                    <td class="fs-sm">
                                                                        Show the progress bar if it's hidden and start reporting the progress from scratch.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <code>Pace.stop</code>
                                                                    </td>
                                                                    <td class="fs-sm">
                                                                        Hide the progress bar and stop updating it
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <code>Pace.track</code>
                                                                    </td>
                                                                    <td class="fs-sm">
                                                                        Explicitly track one or more requests, see Tracking below
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <code>Pace.ignore</code>
                                                                    </td>
                                                                    <td class="fs-sm">
                                                                        Expliticly ignore one or more requests, see Tracking below
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <h5 class="frame-heading">Configuration
                                                        <small>
                                                            Pace is fully automatic, no configuration is necessary to get started. If you would like to make some tweaks, here's how. You can set <code>window.paceOptions</code> before bringing in the file:</small>
                                                    </h5>
                                                    <div class="frame-wrap">
                                                        <pre class="prettyprint">
paceOptions = {
  // Disable the 'elements' source
  elements: false,

  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
}
</pre>
                                                    </div>
                                                    <h5 class="frame-heading">You can also put options on the script tag</h5>
                                                    <div class="frame-wrap">
                                                        <pre class="prettyprint">
&lt;script data-pace-options='{ "ajax": false }' src='pace.js'&gt;&lt;/script&gt;
</pre>
                                                    </div>
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
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </body>
</html>
