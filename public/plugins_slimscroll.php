<?php

require_once 'init.php';

$_title = 'slimscroll - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_slimscroll';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'slimScroll is a small (2.8KB) jQuery plugin that transforms any div into a scrollable area with a nice scrollbar - similar to the one Facebook and Google started using.';

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
                            <li class="breadcrumb-item active">slimscroll</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> SlimScroll <sup class='badge badge-success fw-500'>EXTENSION</sup>
                                <small>
                                    slimScroll is a small (2.8KB) jQuery plugin that transforms any div into a scrollable area with a nice scrollbar - similar to the one Facebook and Google started using.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-i-cursor icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">About</span>
                                        <p>
                                            slimScroll is a small (4.6KB) jQuery plugin that transforms any div into a scrollable area with a nice scrollbar - similar to the one Facebook and Google started using in their products recently. slimScroll doesn't occupy any visual space as it only appears on a user initiated mouse-over. User can drag the scrollbar or use mouse-wheel to change the scroll value.</p>
                                        <p class="m-0">
                                            SlimScroll has been around for a long time, and it is very stable and extreamly lightweight. In all sense of the word it gets the job done efficiently.
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
                                            Example for <span class="fw-300"><i>Size, position and direction</i></span>
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
                                                The example below we use the following codes for <code>position: 'left'</code>, <code>height: '300px'</code>, <code>railVisible: true</code>, <code>alwaysVisible: true</code>
                                            </div>
                                            <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                                <div class="demo-window-content h-100">
                                                    <div id="slimtest2" class="p-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit.</p>
                                                        <p>Integer malesuada molestie dolor sit amet viverra. Mauris nec urna lorem. Integer commodo feugiat ligula eget fermentum. In in tellus a risus convallis pellentesque. Cras non faucibus est. Morbi sagittis risus mollis nisl mollis ac mattis mi volutpat. Vivamus ac rutrum elit. Suspendisse semper orci vitae sapien sollicitudin mattis.</p>
                                                        <p>Integer malesuada molestie dolor sit amet viverra. Mauris nec urna lorem. Integer commodo feugiat ligula eget fermentum. In in tellus a risus convallis pellentesque. Cras non faucibus est. Morbi sagittis risus mollis nisl mollis ac mattis mi volutpat. Vivamus ac rutrum elit. Suspendisse semper orci vitae sapien sollicitudin mattis.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit.
                                                        </p>
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
                                            Example for <span class="fw-300"><i>width and color</i></span>
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
                                                The example below we use <code>color: color.primary._700</code>, <code>size: '20px'</code>, <code>height: '300px'</code>, <code>alwaysVisible: true</code>
                                            </div>
                                            <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                                <div class="demo-window-content h-100">
                                                    <div id="slimtest3" class="p-3">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit.</p>
                                                        <p>Integer malesuada molestie dolor sit amet viverra. Mauris nec urna lorem. Integer commodo feugiat ligula eget fermentum. In in tellus a risus convallis pellentesque. Cras non faucibus est. Morbi sagittis risus mollis nisl mollis ac mattis mi volutpat. Vivamus ac rutrum elit. Suspendisse semper orci vitae sapien sollicitudin mattis.</p>
                                                        <p>Integer malesuada molestie dolor sit amet viverra. Mauris nec urna lorem. Integer commodo feugiat ligula eget fermentum. In in tellus a risus convallis pellentesque. Cras non faucibus est. Morbi sagittis risus mollis nisl mollis ac mattis mi volutpat. Vivamus ac rutrum elit. Suspendisse semper orci vitae sapien sollicitudin mattis.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed diam sem, imperdiet at mollis vestibulum, bibendum id purus. Aliquam molestie, leo sed molestie condimentum, massa enim lobortis massa, in vulputate diam lorem quis justo. Nullam nec dignissim mi. In non varius nibh. Proin et eros nisi, eu vulputate libero. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies augue id risus dapibus blandit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Scripts <span class="fw-300"><i>and config</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <h5 class="frame-heading">Config options</h5>
                                            <div class="frame-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered mb-g">
                                                        <thead class="thead-themed">
                                                            <tr>
                                                                <th style="width: 150px;">
                                                                    code
                                                                </th>
                                                                <th>
                                                                    type
                                                                </th>
                                                                <th>
                                                                    what it does
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <code>width</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Width in pixels of the visible scroll area. Stretch-to-parent if not set. Default: none
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>height</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Height in pixels of the visible scroll area. Also supports auto to set the height to same as parent container. Default: 250px
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>size</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Width in pixels of the scrollbar. Default: 7px
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>position</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    left or right. Sets the position of the scrollbar. Default: right
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>color</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Color in hex of the scrollbar. Default: #000000
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>alwaysVisible</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">bool</span>
                                                                </td>
                                                                <td>
                                                                    Disables scrollbar hide. Default: false
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>distance</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Distance in pixels from the edge of the parent element where scrollbar should appear. It is used together with position property. Default:1px
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>start</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    top or bottom or $(selector) - defines initial position of the scrollbar. When set to bottom it automatically scrolls to the bottom of the scrollable container. When HTML element is passed, slimScroll defaults to offsetTop of this element. Default: top.
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>wheelStep</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">integer</span>
                                                                </td>
                                                                <td>
                                                                    Integer value for mouse wheel delta. Default: 20
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>railVisible</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">bool</span>
                                                                </td>
                                                                <td>
                                                                    Enables scrollbar rail. Default: false
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>railColor</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Sets scrollbar rail color, Default: #333333
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>railOpacity</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">integer</span>
                                                                </td>
                                                                <td>
                                                                    Sets scrollbar rail opacity. Default: 0.2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>allowPageScroll</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">bool</span>
                                                                </td>
                                                                <td>
                                                                    Checks if mouse wheel should scroll page when bar reaches top or bottom of the container. When set to true is scrolls the page.Default: false
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>scrollTo</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Jumps to the specified scroll value. Can be called on any element with slimScroll already enabled. Example: $(element).slimScroll({ scrollTo: '50px' });
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>scrollBy</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-success">string</span>
                                                                </td>
                                                                <td>
                                                                    Increases/decreases current scroll value by specified amount (positive or negative). Can be called on any element with slimScroll already enabled. Example: $(element).slimScroll({ scrollBy: '60px' });
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>disableFadeOut</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">bool</span>
                                                                </td>
                                                                <td>
                                                                    Disables scrollbar auto fade. When set to true scrollbar doesn't disappear after some time when mouse is over the slimscroll div.Default: false
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <code>touchScrollStep</code>
                                                                </td>
                                                                <td>
                                                                    <span class="fw-500 text-info">integer</span>
                                                                </td>
                                                                <td>
                                                                    Allows to set different sensitivity for touch scroll events. Negative number inverts scroll direction.Default: 200
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">Initialize manually </h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
$('#slimscroll').slimScroll({
    position: 'left',
    height: '300px',
    railVisible: true,
    alwaysVisible: true
}); </pre>
                                            </div>
                                            <h5 class="frame-heading">Initliza with data attributes </h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
&lt;div id="slimscroll" class="custom-scroll" style="height:300px" 
        data-scrollHeight="300" 
        data-scrollSize="4px" 
        data-scrollPosition="right" 
        data-scrollColor="rgba(0,0,0,0.6)" 
        data-alwaysVisible="false" 
        data-distance="4px" 
        data-railVisible="false" 
        data-railColor="#fafafa" &gt;
  &lt;div class="p-3"&gt;
    ...
    content...
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
                                            </div>
                                            <h5 class="frame-heading">Destroy </h5>
                                            <div class="frame-wrap">
                                                <pre class="prettyprint">
$('#slimscroll').slimScroll({ destroy: true });
$('#slimscroll').attr('style', '');</pre>
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
        <script>
            $(document).ready(function()
            {

                $('#slimtest3').slimScroll(
                {
                    color: color.primary._700,
                    size: '20px',
                    height: '300px',
                    alwaysVisible: true
                });

                $('#slimtest2').slimScroll(
                {
                    position: 'left',
                    height: '300px',
                    railVisible: true,
                    alwaysVisible: true
                });

            });

        </script>
    </body>
</html>
