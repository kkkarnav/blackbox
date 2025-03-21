<?php

require_once 'init.php';

$_title = 'Easy Pie Chart - Statistics - SmartAdmin v4.6.3';
$_active_nav = 'statistics_easypiechart';
$_head = '';
$_description = 'Lightweight plugin to render simple, animated and retina optimized pie charts.';

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
                            <li class="breadcrumb-item">Statistics</li>
                            <li class="breadcrumb-item active">Easy Pie Chart</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-pie'></i> Easy Pie Chart <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Lightweight plugin to render simple, animated and retina optimized pie charts.
                                </small>
                            </h1>
                            <div class="subheader-block d-none d-sm-flex align-items-center">
                                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>EXPENSES</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-info-500">
                                        $47,000
                                    </span>
                                </div>
                                <span class="js-easy-pie-chart color-primary-500 position-relative d-flex align-items-center justify-content-center" data-percent="45" data-scalelength="2">
                                    <span class="js-percent d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom"></span>
                                </span>
                            </div>
                            <div class="subheader-block d-none d-sm-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>MY PROFITS</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-danger-500">
                                        $38,500
                                    </span>
                                </div>
                                <span class="js-easy-pie-chart color-danger-500 position-relative d-flex align-items-center justify-content-center" data-percent="86" data-scalelength="2">
                                    <span class="js-percent d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom"></span>
                                </span>
                            </div>
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
                                        <p>Easy Pie Charts are highly customizable, very easy to implement, and resolution independent (retina optimized). It uses <code>requestAnimationFrame</code> for smooth animations on modern devices and works in all modern browsers. Since it is a SVG file output, it can be resized to any width and height.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Easy Pie Chart's <a href="https://github.com/rendro/easy-pie-chart" target="_blank">GitHub Page</a>
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
                                            Color <span class="fw-300"><i>Change</i></span>
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
                                                Colors are inherited from the parent font color, so you could literally change the any of the font colors available within this WebApp <code>.js-easy-pie-chart.color-danger-500</code>
                                            </div>
                                            <div class="demo">
                                                <div class="js-easy-pie-chart color-danger-500 d-inline-flex" data-percent="30" data-piesize="95" data-scalelength="3"></div>
                                                <div class="js-easy-pie-chart color-success-500 d-inline-flex" data-percent="60" data-piesize="95" data-scalelength="3"></div>
                                                <div class="js-easy-pie-chart color-primary-500 d-inline-flex" data-percent="90" data-piesize="95" data-scalelength="3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Scale <span class="fw-300"><i>& Color</i></span>
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
                                                Change the size of the chart using <code>data-piesize</code> and the line width by using <code>data-linewidth</code>
                                            </div>
                                            <div class="demo">
                                                <div class="js-easy-pie-chart color-danger-500 d-inline-flex" data-percent="30" data-piesize="95" data-linewidth="40" data-scalelength="2"></div>
                                                <div class="js-easy-pie-chart color-success-500 d-inline-flex" data-percent="60" data-piesize="80" data-linewidth="20" data-scalelength="2"></div>
                                                <div class="js-easy-pie-chart color-primary-500 d-inline-flex" data-percent="75" data-piesize="50" data-linewidth="5" data-scalelength="2"></div>
                                                <div class="js-easy-pie-chart color-info-500 d-inline-flex" data-percent="95" data-piesize="30" data-linewidth="3" data-scalelength="2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Data <span class="fw-300"><i>Percentage</i></span>
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
                                                Data percentage is displayed by using various class utilities and a container with the class <code>.js-percent</code>
                                            </div>
                                            <div class="demo">
                                                <div class="js-easy-pie-chart color-primary-300 position-relative d-inline-flex align-items-center justify-content-center" data-percent="86" data-piesize="95" data-linewidth="5" data-linecap="round" data-scalelength="7">
                                                    <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                        <span class="js-percent d-block text-dark"></span>
                                                        <div class="d-block fs-xs text-dark opacity-70">
                                                            <small>Memory</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-primary-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="46" data-piesize="80" data-linewidth="5" data-linecap="round" data-scalelength="5">
                                                    <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-lg">
                                                        <span class="js-percent d-block text-dark"></span>
                                                        <div class="d-block fs-xs text-dark opacity-70">
                                                            <small>CPU</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-primary-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="56" data-piesize="70" data-linewidth="5" data-linecap="round" data-scalelength="4">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fs-md">
                                                        <span class="js-percent d-block"></span>
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-primary-600 position-relative d-inline-flex align-items-center justify-content-center" data-percent="36" data-piesize="60" data-linewidth="5" data-linecap="round" data-scalelength="3">
                                                    <span class="js-percent d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xs"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Avatar <span class="fw-300"><i>Usage</i></span>
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
                                                Here we nested the image using various class utilities to center it within the graph. The graph is also using <code>data-scalelength</code> to change the scales to various sizes
                                            </div>
                                            <div class="demo">
                                                <div class="js-easy-pie-chart color-danger-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="75" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle" alt="Dr. Codex Lantern">
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-success-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="86" data-piesize="80" data-linewidth="7" data-scalelength="4">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image-md rounded-circle" alt="Dr. Codex Lantern">
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-info-500 position-relative d-inline-flex align-items-center justify-content-center" data-percent="65" data-piesize="50" data-linewidth="3" data-scalelength="1" data-scalecolor="#fff">
                                                    <div class="d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image-sm rounded-circle" alt="Dr. Codex Lantern">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Nested <span class="fw-300"><i>Charts</i></span>
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
                                                Just as the example above, we can create nested charts by using the <code>position-absolute</code> utility
                                            </div>
                                            <div class="demo">
                                                <div class="js-easy-pie-chart color-danger-400 position-relative d-inline-flex align-items-center justify-content-center" data-percent="35" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                                    <div class="js-easy-pie-chart color-info-500 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="65" data-piesize="60" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                        <div class="js-easy-pie-chart color-success-500 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="35" data-piesize="40" data-linewidth="3" data-scalelength="1" data-scalecolor="#fff">
                                                            <span class="js-percent d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xs"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="js-easy-pie-chart color-primary-600 position-relative d-inline-flex align-items-center justify-content-center" data-percent="35" data-piesize="95" data-linewidth="10" data-scalelength="5">
                                                    <div class="js-easy-pie-chart color-primary-500 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="65" data-piesize="60" data-linewidth="5" data-scalelength="1" data-scalecolor="#fff">
                                                        <div class="js-easy-pie-chart color-primary-400 position-relative position-absolute pos-left pos-right pos-top pos-bottom d-flex align-items-center justify-content-center" data-percent="35" data-piesize="40" data-linewidth="3" data-scalelength="1" data-scalecolor="#fff">
                                                            <span class="js-percent d-flex align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xs text-primary"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Dynamic <span class="fw-300"><i>Usage</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div id="update-chart" class="d-flex flex-column align-items-center">
                                                <div class="js-easy-pie-chart color-primary-900 position-relative d-flex align-items-center justify-content-center" data-percent="50" data-piesize="145" data-linewidth="20" data-trackcolor="#ccbfdf" data-scalelength="8">
                                                    <div class="d-flex flex-column align-items-center justify-content-center position-absolute pos-left pos-right pos-top pos-bottom fw-300 fs-xl">
                                                        <span class="js-percent d-block text-dark"></span>
                                                        <div class="d-block fs-xs text-dark opacity-70">
                                                            <small>Random</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="js-update btn btn-outline-primary mt-3">Update Chart</button>
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
        <!-- easypiechart bundle: 
        + jquery.easypiechart.js (core)
        + src/../jquery.easypiechart.config.js (config) -->
        <script src="<?= ASSETS_URL ?>/js/statistics/easypiechart/easypiechart.bundle.js"></script>
        <script>
            $(document).ready(function()
            {

                /* update chart */
                var chart = window.chart = $('#update-chart .js-easy-pie-chart').data('easyPieChart');

                $('.js-update').on('click', function()
                {
                    chart.update(Math.random() * 200 - 100);
                });

            });

        </script>
    </body>
</html>
