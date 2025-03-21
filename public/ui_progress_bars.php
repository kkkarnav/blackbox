<?php

require_once 'init.php';

$_title = 'Progress Bars - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_progress_bars';
$_head = '';
$_description = 'Progress bars featuring support for stacked bars, animated backgrounds, and text labels';

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
                            <li class="breadcrumb-item">UI Components</li>
                            <li class="breadcrumb-item active">Progress Bars</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Progress Bars
                                <small>
                                    Progress bars featuring support for stacked bars, animated backgrounds, and text labels
                                </small>
                            </h1>
                            <div class="subheader-block">
                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-primary" data-action="toggle" data-class="justify-content-end" data-target=".progress">Reverse polarity</a>
                            </div>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">How it works</span>
                                        <br>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don’t use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress" target="_blank">the HTML5 <code>&lt;progress&gt;</code> element</a>, ensuring you can stack progress bars, animate them, and place text labels over them.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Default-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Progressbar</i></span>
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
                                                The <code>.progress</code> is a wrapper to indicate the max value of the progress bar. We use the inner <code>.progress-bar</code> to indicate the progress so far. The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width. You can add some role and aria attributes to make it accessible.
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Various height-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Various <span class="fw-300"><i>height</i></span>
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
                                                Control the height by adding style <code>height:"value"</code> to <code>.progress</code> element or you could use the prebuilt classes for a more uniform structure, <code>.progress-xs</code>, <code>.progress-sm</code>, <code>.progress-md</code>, <code>.progress-lg</code>, <code>.progress-xl</code>
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-xl">
                                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Label display-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Label <span class="fw-300"><i>display</i></span>
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
                                                Add labels to your progress bars by placing text within the <code>.progress-bar</code>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Solid backgrounds-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Solid <span class="fw-300"><i>backgrounds</i></span>
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
                                                Control the background by adding avaialble <a href="<?= APP_URL ?>/utilities_color_pallet.php" target="_blank">color pallets</a> to <code>.progress</code> class
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div class="progress">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Multiple bars-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Multiple <span class="fw-300"><i>bars</i></span>
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
                                                Include multiple progress bars in a progress component if you need
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gradient backgrounds-->
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Gradient <span class="fw-300"><i>backgrounds</i></span>
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
                                                Control the background by adding avaialble <a href="<?= APP_URL ?>/utilities_color_pallet.php" target="_blank">color pallets</a> to <code>.progress</code> class
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-700 bg-success-gradient" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary-300 bg-primary-gradient" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success-700 bg-primary-gradient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info bg-info-gradient" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger-300 bg-warning-gradient" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success-500 bg-danger-gradient" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Striped backrounds-->
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Striped <span class="fw-300"><i>backrounds</i></span>
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
                                                Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar’s background color
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Animated-->
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Animated <span class="fw-300"><i>bars</i></span>
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
                                                The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.
                                            </div>
                                            <div class="demo js-progress-animated">
                                                <div class="progress progress-xl">
                                                    <div class="progress-bar progress-bar-striped bg-primary-500" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-toggle="button" aria-pressed="false" data-action="toggle" data-class="progress-bar-animated" data-target=".js-progress-animated .progress-bar">
                                                Toggle animation
                                            </button>
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
    </body>
</html>
