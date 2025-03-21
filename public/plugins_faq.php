<?php

require_once 'init.php';

$_title = 'Plugins FAQ - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_faq';
$_head = '';
$_description = 'The difference types of plugins and its appliaction importance within the template';

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
                            <li class="breadcrumb-item active">Plugins FAQ</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> Plugins FAQ
                                <small>
                                    The difference types of plugins and its appliaction importance within the template
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            Jquery
                                            <sup>
                                                <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                                            </sup>
                                        </h2>
                                        jQuery is a lightweight, "write less, do more", JavaScript library. The purpose of jQuery is to make it much easier to use JavaScript on your website. jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            jquery-ui-cust.js
                                            <sup>
                                                <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                                            </sup>
                                        </h2>
                                        jQuery UI is a widget and interaction library built on top of the jQuery JavaScript Library that you can use to build highly interactive web applications.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            popper.js
                                            <sup>
                                                <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                                            </sup>
                                        </h2>
                                        Dependency for Bootstrap.js to relay and position popovers and tooltips.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            bootstrap.js
                                            <sup>
                                                <span class="badge bg-fusion-500 fs-nano">DEPENDENCY</span>
                                            </sup>
                                        </h2>
                                        Dependency for Bootstrap.js to relay and position popovers and tooltips.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            app.navigation.js
                                            <sup>
                                                <span class="badge badge-danger fs-nano">CORE</span>
                                            </sup>
                                        </h2>
                                        Is a simple jQuery plugin for creating accordion like menus for SmartAdmin for PHP.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            ba-throttle-debounce.js
                                            <sup>
                                                <span class="badge badge-danger fs-nano">CORE</span>
                                            </sup>
                                        </h2>
                                        Using jQuery throttle / debounce, you can pass a delay and function to $.debounce to get a new function, that when called repetitively, executes the original function just once per “bunch” of calls, effectively coalescing multiple sequential calls into a single execution at either the beginning or end.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            jquery-snippets.js
                                            <sup>
                                                <span class="badge badge-danger fs-nano">CORE</span>
                                            </sup>
                                        </h2>
                                        A number of useful snippets library that is used repeatedly throught the app.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            app.core.js
                                            <sup>
                                                <span class="badge badge-danger fs-nano">CORE</span>
                                            </sup>
                                        </h2>
                                        The entire app core, has a lot of useful functions, including saving/loading, mapping objects, data management, DOM cycles, page hight calculations, and many more.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            bootbox
                                            <sup>
                                                <span class="badge badge-success fs-nano">EXTENSION</span>
                                            </sup>
                                        </h2>
                                        A small JavaScript library which allows you to create programmatic dialog boxes using Bootstrap modals, without having to worry about creating, managing, or removing any of the required DOM elements or JavaScript event handlers.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            waves.js
                                            <sup>
                                                <span class="badge badge-success fs-nano">EXTENSION</span>
                                            </sup>
                                        </h2>
                                        A tiny foundation for creating reactive components with interpolation, data-binding, and plugins.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            SlimScroll
                                            <sup>
                                                <span class="badge badge-success fs-nano">EXTENSION</span>
                                            </sup>
                                        </h2>
                                        slimScroll is a small jQuery plugin that transforms any div into a scrollable area. slimScroll doesn't occupy any visual space as it only appears on a user initiated mouse-over.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            SmartPanels
                                            <sup>
                                                <span class="badge badge-success fs-nano">EXTENSION</span>
                                            </sup>
                                        </h2>
                                        Transforms your panel component into draggable, localstorage based component. Remembering position, collapse state, and color changes.
                                    </div>
                                </div>
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h2 class="color-danger-400">
                                            Pace.js
                                            <sup>
                                                <span class="badge badge-warning fs-nano">RECOMMENDED</span>
                                            </sup>
                                        </h2>
                                        An automatic web page progress bar. Created using standalone javascript library.
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
    </body>
</html>
