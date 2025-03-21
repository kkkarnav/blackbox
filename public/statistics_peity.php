<?php

require_once 'init.php';

$_title = 'Peity - Statistics - SmartAdmin v4.6.3';
$_active_nav = 'statistics_peity';
$_head = '';
$_description = 'Simple and lightweight miniature chart.';

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
                            <li class="breadcrumb-item active">Peity</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-pie'></i> Peity <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Simple and lightweight miniature chart.
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
                                <span class="peity-bar" data-peity='{ "fill": ["#0d8aee"], "height": 32, "width": 100 }'>1,4,3,6,5,3,9,6,5,9,7</span>
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
                                <span class="peity-line" data-peity='{ "fill": "#fe6bb0", "stroke": "#fd3995", "height": 32, "width": 100 }'>1,4,3,6,5,3,9,6,5,9,7</span>
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
                                        <p>Peity (sounds like deity) is a jQuery plugin that converts an element's content into a <code>svg</code> mini pie donut line or bar chart and is compatible with any browser that supports <code>svg</code>. Peity chart is only 4kb, which makes it great to create fast lightweight charts with minimum effort.</p>
                                        <p class="m-0">
                                            Find tutorials, guidelines and more on Peity's <a href="http://benpickles.github.io/peity/" target="_blank">official documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-0" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Line <span class="fw-300"><i>Chart</i></span>
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
                                                        You can specify the width of the strokes using <code>strokeWidth</code> inside <code>data-peity</code> attribute
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": false, "stroke": "#1dc9b7", "height": 40, "width": "110", "strokeWidth": 1 }'>5,3,9,6,5,9,7,3,5,2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": false, "stroke": "#fd3995", "height": 40, "width": "110", "strokeWidth": 2 }'>0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": false, "stroke": "#ffc241", "height": 40, "width": "110", "strokeWidth": 3 }'>0,1,7,6,4,2,3,5,3,4</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": false, "stroke": "#886ab5", "height": 40, "width": "110", "strokeWidth": 4 }'>5,3,9,6,5,3,1,7,6,4</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-1a" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Area <span class="fw-300"><i>Chart</i></span>
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
                                                        Example of line with filling. You can add fill by using inserting <code>data-peity='{ "fill": "#1dc9b7" }'</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": "#1dc9b7", "stroke": "#179c8e", "height": 40, "width": "110" }'>5,3,2,-1,-3,-2,2,3,5,2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": "#fe6bb0", "stroke": "#fd3995", "height": 40, "width": "110" }'>1,4,4,7,5,9,10,4,4,7,5,9,10</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": "#886ab5", "stroke": "#6e4e9e", "height": 40, "width": "110" }'>5,3,9,6,5,3,1,7,6,4,4,1,5</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-line" data-peity='{ "fill": "#ffc241", "stroke": "#ffc241", "height": 40, "width": "110" }'>0,1,7,6,4,2,3,5,3,4,3,1,4,6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-1" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Bar <span class="fw-300"><i>Chart</i></span>
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
                                                        Bar charts can have positive or negative integers. You can change the bar colors via the following <code> data-peity='{ "fill": ["#7a59ad","#886ab5","#967bbd","#a38cc6"] }'</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#7a59ad","#886ab5","#967bbd","#a38cc6"], "height": 40, "width": "110" }'>5,3,9,6,5,9,7,3,5,2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#7a59ad","#1dc9b7"], "height": 40, "width": "110" }'>4,-3,-6,-4,-5,-4,7,-3,-5,2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#7a59ad","#1dc9b7"], "height": 40, "width": "110" }'>0,1,7,6,4,2,3,5,3,4</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-bar" data-peity='{ "fill": ["#1dc9b7"], "height": 40, "width": "110" }'>0,-1,-7,-6,-4,-2,-3,-5,-3,-4</span>
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
                                                    Pie <span class="fw-300"><i>Chart</i></span>
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
                                                        Pie charts can have any values. You can change the colors via the following <code> data-peity='{ "fill": ["#7a59ad","#886ab5","#967bbd","#a38cc6"] }'</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-pie" data-peity='{ "fill": ["#7a59ad","#ffc241","#967bbd","#ffdb8e"], "height": 40, "width": "50" }'>1/4</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-pie" data-peity='{ "fill": ["#7a59ad","#ffc241","#37e2d0","#51adf6"], "height": 40, "width": "50" }'>7,6,3,4</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-pie" data-peity='{ "fill": ["#21dfcb","#fd3995"], "height": 40, "width": "50" }'>5/10</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-pie" data-peity='{ "fill": ["#886ab5","#1dc9b7","#2196F3","#ffc241","#fd52a3","#6e4e9e","#6ab8f7","#fe85be"], "height": 40, "width": "50" }'>2,3,4,7,9,10,5,6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-3" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Donut <span class="fw-300"><i>Chart</i></span>
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
                                                        Donut charts can have any values. You can change the colors via the following <code> data-peity='{ "fill": ["#7a59ad","#886ab5","#967bbd","#a38cc6"] }'</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-donut" data-peity='{ "fill": ["#7a59ad","#ffc241","#967bbd","#ffdb8e"], "height": 40, "width": "50" }'>1/3</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-donut" data-peity='{ "fill": ["#7a59ad","#ffc241","#967bbd","#ffdb8e"], "height": 40, "width": "50" }'>10,4,4,6</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-donut" data-peity='{ "fill": ["#21dfcb","#fd3995"], "height": 40, "width": "50" }'>5/10</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="peity-donut" data-peity='{ "fill": ["#886ab5","#1dc9b7","#2196F3","#ffc241","#fd52a3","#6e4e9e","#6ab8f7","#fe85be"], "height": 40, "width": "50" }'>2,3,4,7,9,10,5,6</span>
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
                                                    Updating <span class="fw-300"><i>Chart</i></span>
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
                                                        The following chart is updated using a small jquery snippet where it generates a random number and then is pushed into the following chart below every 1/2 second
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-5" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Dynamic <span class="fw-300"><i>Colors</i></span>
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
                                                        Colors, sizes and different settings of the chart can be generated dynamically <code>$(".bar-colours-2").peity("bar", {       fill: [value], height: value, ect... }</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="bar-colours-2" data-peity='{ "height": 40, "width": "110" }'>5,3,2,-1,-3,-2,2,3,5,2</span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="bar-colours-3" data-peity='{ "height": 40, "width": "110" }'>5,3,9,6,5,9,7,3,5,2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-6" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Chart <span class="fw-300"><i>Sizes</i></span>
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
                                                        Since the chart is just a generated SVG file, you can potentially generate the chart to any sizes using the values <code>innerRadius</code> and <code>radius</code> for pie and donut charts, and <code>width</code> and <code>height</code> for other charts
                                                    </div>
                                                    <div class="js-data-attributes demo demo-h-spacing d-flex justify-content-center flex-wrap d-sm-block">
                                                        <span data-peity='{ "fill": ["#fd3995", "#f2f2f2"], "innerRadius": 13, "radius": 37 }'>1/7</span>
                                                        <span data-peity='{ "fill": ["#ffc241", "#f2f2f2"], "innerRadius": 10, "radius": 30 }'>2/7</span>
                                                        <span data-peity='{ "fill": ["#ffdb8e", "#f2f2f2"], "innerRadius": 20, "radius": 28 }'>3/7</span>
                                                        <span data-peity='{ "fill": ["#1dc9b7", "#f2f2f2"], "innerRadius": 20, "radius": 25 }'>4/7</span>
                                                        <span data-peity='{ "fill": ["#2196F3", "#f2f2f2"], "innerRadius": 17, "radius": 21 }'>5/7</span>
                                                        <span data-peity='{ "fill": ["#886ab5", "#f2f2f2"], "innerRadius": 15, "radius": 18 }'>6/7</span>
                                                        <span data-peity='{ "fill": ["#5d5d5d", "#f2f2f2"], "innerRadius": 13, "radius": 15 }'>7/7</span>
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
        <!-- peity bundle: 
        + jquery.peity.js (core)
        + src/../jquery.peity.config.js (config) -->
        <script src="<?= ASSETS_URL ?>/js/statistics/peity/peity.bundle.js"></script>
        <script>
            $(document).ready(function()
            {

                // multiple donut sizes
                $(".js-data-attributes span").peity("donut")

                //auto update chart
                var updatingChart = $(".updating-chart").peity("line",
                {
                    fill: color.info._500,
                    stroke: color.info._700,
                    width: "210",
                    height: 40
                })
                setInterval(function()
                {
                    var random = Math.round(Math.random() * 10)
                    var values = updatingChart.text().split(",")
                    values.shift()
                    values.push(random)

                    updatingChart
                        .text(values.join(","))
                        .change()
                }, 500);

                $(".bar-colours-2").peity("bar",
                {
                    fill: function(value)
                    {
                        return value > 0 ? color.success._500 : color.danger._500
                    }
                })

                $(".bar-colours-3").peity("bar",
                {
                    fill: function(_, i, all)
                    {
                        var g = parseInt((i / all.length) * 255)
                        return "rgb(255, " + g + ", " + g + ")"
                    }
                })

            });

        </script>
    </body>
</html>
