<?php

require_once 'init.php';

$_title = 'waves - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_waves';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'waves description';

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
                            <li class="breadcrumb-item active">waves</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> Waves <sup class='badge badge-success fw-500'>EXTENSION</sup>
                                <small>
                                    waves description
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
                                        <p>Waves is an external library that we've included in SmartAdmin to allow us to create the ink effect you notice on Google's Material Design concept. To put the waves effect on an element, you just add the class <code>.js-waves-on</code>. Waves are automatically attached to all <code>.btn</code> classes and nav elements, if you like to turn this feature off for any reason you can add <code>.js-waves-off</code> </p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Waves's <a href="http://fian.my.id/Waves/#start" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Waves <span class="fw-300"><i>turned on manually</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Below we use <code>.js-waves-on</code> class to add the waves effect to div element. You can do this for any element with a CSS style <code>.d-block</code> or <code>.d-flex</code>.
                                            </div>
                                            <h5 class="frame-heading">Waves are on by default</h5>
                                            <div class="frame-wrap">
                                                <div class="row no-gutters row-grid">
                                                    <div class="col-6">
                                                        <div class="w-100 js-waves-on bg-primary-500 cursor-auto" style="height:12rem">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="w-100 js-waves-on bg-fusion-500 cursor-auto" style="height:12rem">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Waves <span class="fw-300"><i>disable and auto attach</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                The waves function is automatically attached to all .btn classes and nav elements. You can disable this by adding <code>.js-waves-off</code>
                                            </div>
                                            <h5 class="frame-heading">Waves are on by default</h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                                    <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                                    <button type="button" class="btn btn-outline-primary btn-lg">Primary Outline</button>
                                                    <button type="button" class="btn btn-outline-secondary btn-lg">Secondary Outline</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">Waves are off using a class</h5>
                                            <div class="frame-wrap">
                                                <button type="button" class="btn btn-primary btn-lg js-waves-off">Waves disabled</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Waves <span class="fw-300"><i>Config</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <h5 class="frame-heading">Turn off via global config through app.config.js</h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
rippleEffect: true, // material design effect that appears on all buttons</pre>
                                            </div>
                                            <h5 class="frame-heading">Script that turns on the plugin in app.core.js</h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
if (window.Waves && myapp_config.rippleEffect) {
    Waves.attach('.nav-menu:not(.js-waves-off) a, .btn:not(.js-waves-off):not(.btn-switch), .js-waves-on', ['waves-themed']);
    Waves.init();
    ... 
} </pre>
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
