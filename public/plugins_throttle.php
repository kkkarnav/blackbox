<?php

require_once 'init.php';

$_title = 'throttle - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_throttle';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'An intelligent way to increase app performance';

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
                            <li class="breadcrumb-item active">throttle</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> Throttle <sup class='badge badge-danger fw-500'>CORE</sup>
                                <small>
                                    An intelligent way to increase app performance
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
                                        <p>jQuery throttle / debounce allows you to rate-limit your functions in multiple useful ways. Passing a delay and callback to <code>$.throttle</code> returns a new function that will execute no more than once every delay milliseconds. Passing a delay and callback to <code>$.debounce</code> returns a new function that will execute only once, coalescing multiple sequential calls into a single execution at either the very beginning or end.</p>
                                        <p>
                                            jQuery isn’t actually required for this plugin, because nothing internal uses any jQuery methods or properties. jQuery is just used as a namespace under which these methods can exist.
                                        </p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on it's <a href="http://benalman.com/projects/jquery-throttle-debounce-plugin/" target="_blank">Official Documentation</a>
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
                                            Sometimes <span class="fw-300"><i>less is more!</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <h5>
                                                Throttling
                                            </h5>
                                            <p>
                                                You can pass a delay and function to <code>$.throttle</code> to get a new function, that when called repetitively, executes the original function (in the same context and with all arguments passed through) no more than once every delay milliseconds.
                                            </p>
                                            <figure class="figure my-4">
                                                <img src="<?= ASSETS_URL ?>/img/demo/throttle.png" class="figure-img img-fluid rounded" alt="throttle">
                                                <figcaption class="figure-caption">Throttled with no_trailing specified as false or unspecified.</figcaption>
                                            </figure>
                                            <figure class="figure my-4">
                                                <img src="<?= ASSETS_URL ?>/img/demo/throttle-no_trailing.png" class="figure-img img-fluid rounded" alt="throttle-no_trailing">
                                                <figcaption class="figure-caption">Throttled with no_trailing specified as true.</figcaption>
                                            </figure>
                                            <h5>
                                                Debouncing
                                            </h5>
                                            <p>
                                                You can pass a delay and function to <code>$.debounce</code> to get a new function, that when called repetitively, executes the original function just once per “bunch” of calls, effectively coalescing multiple sequential calls into a single execution at either the beginning or end.
                                            </p>
                                            <figure class="figure my-4">
                                                <img src="<?= ASSETS_URL ?>/img/demo/debounce.png" class="figure-img img-fluid rounded" alt="debounce">
                                                <figcaption class="figure-caption">Debounced with at_begin specified as false or unspecified</figcaption>
                                            </figure>
                                            <figure class="figure my-4">
                                                <img src="<?= ASSETS_URL ?>/img/demo/debounce-at_begin.png" class="figure-img img-fluid rounded" alt="debounce-no_trailing">
                                                <figcaption class="figure-caption">Debounced with at_begin specified as true</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Usage <span class="fw-300"><i>examples</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <table class="table table-bordered mb-g">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 8rem">
                                                            Arguments
                                                        </th>
                                                        <th>
                                                            Description
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <code>delay</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            (Number) A zero-or-greater delay in milliseconds. For event callbacks, values around 100 or 250 (or even higher) are most useful.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>no_trailing</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            (Boolean) Optional, defaults to false. If no_trailing is true, callback will only execute every `delay` milliseconds while the throttled-function is being called. If no_trailing is false or unspecified, callback will be executed one final time after the last throttled-function call. (After the throttled-function has not been called for `delay` milliseconds, the internal counter is reset)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>at_begin</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            (Boolean) Optional, defaults to false. If at_begin is false or unspecified, callback will only be executed `delay` milliseconds after the last debounced-function call. If at_begin is true, callback will be executed only at the first debounced-function call. (After the throttled-function has not been called for `delay` milliseconds, the internal counter is reset)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>callback</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            (Function) A function to be executed after delay milliseconds. The `this` context and all arguments are passed through, as-is, to `callback` when the debounced-function is executed.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h5 class="frame-heading">
                                                Script
                                            </h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
$(window).scroll(
  $.throttle( myapp_config.throttleDelay, function (e) {
    /** -- insert your other scroll codes below this line -- **/
  })
);</pre>
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
