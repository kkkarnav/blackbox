<?php

require_once 'init.php';

$_title = 'Chart.js - Statistics - SmartAdmin v4.6.3';
$_active_nav = 'statistics_chartjs';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/statistics/chartjs/chartjs.css">
';
$_description = 'Simple yet flexible JavaScript charting for designers &amp; developers';

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
                            <li class="breadcrumb-item active">Chart.js</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-pie'></i> Chart.js <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Simple yet flexible JavaScript charting for designers & developers
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
                                        <p>Chart.js is a JavaScript library that allows you to draw different types of charts by using the HTML5 <code>canvas</code> element.</p>
                                        <p>
                                            The library doesn’t have dependencies and its weight is very low as it’s ~11kb in size when minified, concatenated, and served gzipped. However, you’re able to reduce the size even further, if you don’t use all six of the core chart types, by including only the modules you need.
                                        </p>
                                        <p class="m-0">
                                            Find tutorials, guidelines and more on Chart.js's <a href="https://www.chartjs.org/docs/latest/" target="_blank">official documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-1" class="panel">
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
                                                        The line chart requires an array of labels for each of the data points. This is shown on the X axis. It has a colour for the fill, a colour for the line and colours for the points and strokes of the points
                                                    </div>
                                                    <div id="lineChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-7" class="panel">
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
                                                        An area chart or area graph displays graphically quantitative data. It is based on the line chart. The area between axis and line are commonly emphasized with colors, textures and hatchings
                                                    </div>
                                                    <div id="areaChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
                                        <div id="panel-2" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Horizontal <span class="fw-300"><i>Bar Chart</i></span>
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
                                                        A horizontal bar chart provides a way of showing data values represented as horizontal bars. It is sometimes used to show trend data, and the comparison of multiple data sets on top of another
                                                    </div>
                                                    <div id="horizontalBarChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-8" class="panel">
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
                                                        A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets side by side
                                                    </div>
                                                    <div id="barChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
                                                    Bar <span class="fw-300"><i>Stacked</i></span>
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
                                                        A stacked bar chart, is a graph that is used to break down and compare parts of a whole. Each bar in the chart represents a whole, and segments in the bar represent different parts or categories of that whole
                                                    </div>
                                                    <div id="barStacked">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-9" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Bar <span class="fw-300"><i>Stacked (horizontal)</i></span>
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
                                                        A stacked horizontal bar chart, shows you a breakdown and compare parts of a whole. Each segment displays a whole brown down into different parts or categories - displayed on top of another
                                                    </div>
                                                    <div id="barHorizontalStacked">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
                                        <div id="panel-4" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Bubble <span class="fw-300"><i>Chart</i></span>
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
                                                        A bubble chart is used to display three dimensions of data. The location of the bubble is determined by the first two dimensions and the third dimension is represented by the size of the individual bubbles
                                                    </div>
                                                    <div id="bubbleChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-10" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Combination <span class="fw-300"><i>Chart (Bar & Line)</i></span>
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
                                                        This is a combination of different charts presented together to show how easy it is to built complex charts. Here we use similar data sets to combine a linechart with bar chart
                                                    </div>
                                                    <div id="barlineCombine">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
                                                    Polar <span class="fw-300"><i>Area</i></span>
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
                                                        Polar charts are similar to pie charts, but each segment has the same angle - the radius of the segment differs depending on the value. Polar charts is often useful when we want to show a comparison data similar to a pie chart, but also show a scale of values for context
                                                    </div>
                                                    <div id="polarArea">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-11" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Radar <span class="fw-300"><i>Chart</i></span>
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
                                                        For a radar chart, to provide context of what each point means, we include an array of strings that show around each point in the chart. For the radar chart data, we have an array of datasets as objects, with a fill, stroke, and line color for each point. We also have an array of data values
                                                    </div>
                                                    <div id="radarChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
                                        <div id="panel-6" class="panel">
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
                                                        Pie charts are probably the most commonly used chart there are. They are divided into segments, the arc of each segment shows the proportional value of each piece of data
                                                    </div>
                                                    <div id="pieChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-12" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Doughnut <span class="fw-300"><i>Chart</i></span>
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
                                                        Doughnut charts are probably the most commonly used chart there are. They are divided into segments, the arc of each segment shows the proportional value of each piece of data
                                                    </div>
                                                    <div id="doughnutChart">
                                                        <canvas style="width:100%; height:300px;"></canvas>
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
        <!-- plugin Chart.js : MIT license -->
        <script src="<?= ASSETS_URL ?>/js/statistics/chartjs/chartjs.bundle.js"></script>
        <script>
            /* line chart */
            var lineChart = function()
            {
                var config = {
                    type: 'line',
                    data:
                    {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                        {
                            label: "Success",
                            borderColor: color.success._500,
                            pointBackgroundColor: color.success._700,
                            pointBorderColor: 'rgba(0, 0, 0, 0)',
                            pointBorderWidth: 1,
                            borderWidth: 1,
                            pointRadius: 3,
                            pointHoverRadius: 4,
                            data: [
                                23,
                                75,
                                60, -48, -9,
                                26,
                                45
                            ],
                            fill: false
                        }]
                    },
                    options:
                    {
                        responsive: true,
                        title:
                        {
                            display: false,
                            text: 'Line Chart'
                        },
                        tooltips:
                        {
                            mode: 'index',
                            intersect: false,
                        },
                        hover:
                        {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: '6 months forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                };
                new Chart($("#lineChart > canvas").get(0).getContext("2d"), config);
            }
            /* line chart -- end */

            /* area chart */
            var areaChart = function()
            {
                var config = {
                    type: 'line',
                    data:
                    {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [
                        {
                            label: "Primary",
                            backgroundColor: 'rgba(136,106,181, 0.2)',
                            borderColor: color.primary._500,
                            pointBackgroundColor: color.primary._700,
                            pointBorderColor: 'rgba(0, 0, 0, 0)',
                            pointBorderWidth: 1,
                            borderWidth: 1,
                            pointRadius: 3,
                            pointHoverRadius: 4,
                            data: [
                                45,
                                75,
                                26,
                                23,
                                60, -48, -9
                            ],
                            fill: true
                        },
                        {
                            label: "Success",
                            backgroundColor: 'rgba(29,201,183, 0.2)',
                            borderColor: color.success._500,
                            pointBackgroundColor: color.success._700,
                            pointBorderColor: 'rgba(0, 0, 0, 0)',
                            pointBorderWidth: 1,
                            borderWidth: 1,
                            pointRadius: 3,
                            pointHoverRadius: 4,
                            data: [-10,
                                16,
                                72,
                                93,
                                29, -74,
                                64
                            ],
                            fill: true
                        }]
                    },
                    options:
                    {
                        responsive: true,
                        title:
                        {
                            display: false,
                            text: 'Area Chart'
                        },
                        tooltips:
                        {
                            mode: 'index',
                            intersect: false,
                        },
                        hover:
                        {
                            mode: 'nearest',
                            intersect: true
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: '6 months forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                };
                new Chart($("#areaChart > canvas").get(0).getContext("2d"), config);
            }
            /* area chart -- end */

            /* horizontal bar chart */
            var horizontalBarChart = function()
            {
                var horizontalBarChart = {
                    labels: ["January", "February", "March", "April"],
                    datasets: [
                    {
                        label: "Red",
                        backgroundColor: color.success._300,
                        borderColor: color.success._500,
                        borderWidth: 1,
                        data: [
                            45,
                            60, -28, -9
                        ]
                    },
                    {
                        label: "Blue",
                        backgroundColor: color.primary._300,
                        borderColor: color.primary._500,
                        borderWidth: 1,
                        data: [-10,
                            29, -34,
                            64
                        ]
                    }]

                };
                var config = {
                    type: 'horizontalBar',
                    data: horizontalBarChart,
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            position: 'top',
                        },
                        title:
                        {
                            display: false,
                            text: 'Horizontal Bar Chart'
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Quarterly forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#horizontalBarChart > canvas").get(0).getContext("2d"), config);
            }
            /* horizontal bar chart -- end */

            /* bar chart */
            var barChart = function()
            {
                var barChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                    {
                        label: "Red",
                        backgroundColor: color.success._300,
                        borderColor: color.success._500,
                        borderWidth: 1,
                        data: [
                            45,
                            75,
                            26,
                            23,
                            60, -48, -9
                        ]
                    },
                    {
                        label: "Blue",
                        backgroundColor: color.primary._300,
                        borderColor: color.primary._500,
                        borderWidth: 1,
                        data: [-10,
                            16,
                            72,
                            93,
                            29, -74,
                            64
                        ]
                    }]

                };
                var config = {
                    type: 'bar',
                    data: barChartData,
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            position: 'top',
                        },
                        title:
                        {
                            display: false,
                            text: 'Bar Chart'
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: '6 months forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#barChart > canvas").get(0).getContext("2d"), config);
            }
            /* bar chart -- end */

            /* bar stacked */
            var barStacked = function()
            {
                var barStackedData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                    {
                        label: "Red",
                        backgroundColor: color.primary._300,
                        borderColor: color.primary._500,
                        borderWidth: 1,
                        data: [
                            45,
                            75,
                            26,
                            23,
                            60, -48, -9
                        ]
                    },
                    {
                        label: "Blue",
                        backgroundColor: color.success._300,
                        borderColor: color.success._500,
                        borderWidth: 1,
                        data: [-10,
                            16,
                            72,
                            93,
                            29, -74,
                            64
                        ]
                    }]

                };
                var config = {
                    type: 'bar',
                    data: barStackedData,
                    options:
                    {
                        legend:
                        {
                            display: false,
                            labels:
                            {
                                display: false
                            }
                        },
                        scales:
                        {
                            yAxes: [
                            {
                                stacked: true,
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            xAxes: [
                            {
                                stacked: true,
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#barStacked > canvas").get(0).getContext("2d"), config);
            }
            /* bar stacked -- end */

            /* bar horizontal stacked */
            var barHorizontalStacked = function()
            {
                var barHorizontalStackedData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                    {
                        label: "Red",
                        backgroundColor: color.primary._300,
                        borderColor: color.primary._500,
                        borderWidth: 1,
                        data: [
                            45,
                            75,
                            26,
                            23,
                            60, -48, -9
                        ]
                    },
                    {
                        label: "Blue",
                        backgroundColor: color.success._300,
                        borderColor: color.success._500,
                        borderWidth: 1,
                        data: [-10,
                            16,
                            72,
                            93,
                            29, -74,
                            64
                        ]
                    }]

                };
                var config = {
                    type: 'horizontalBar',
                    data: barHorizontalStackedData,
                    options:
                    {
                        legend:
                        {
                            display: false,
                            labels:
                            {
                                display: false
                            }
                        },
                        scales:
                        {
                            yAxes: [
                            {
                                stacked: true,
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            xAxes: [
                            {
                                stacked: true,
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#barHorizontalStacked > canvas").get(0).getContext("2d"), config);
            }
            /* bar horizontal stacked -- end */

            /* grid color */
            var gridColor = function()
            {
                var config = {
                    type: 'line',
                    data:
                    {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [
                        {
                            data: [10, 24, 20, 25, 35, 50],
                            backgroundColor: 'rgba(0,0,0, 0.07)',
                            borderColor: color.fusion._300,
                            borderWidth: 1,
                            fill: true
                        },
                        {
                            data: [20, 30, 28, 33, 45, 65],
                            backgroundColor: 'rgba(0,0,0, 0.03)',
                            borderColor: color.fusion._100,
                            borderWidth: 1,
                            fill: true
                        }]
                    },
                    options:
                    {
                        legend:
                        {
                            display: false,
                            labels:
                            {
                                display: false
                            }
                        },
                        scales:
                        {
                            yAxes: [
                            {
                                gridLines:
                                {
                                    drawBorder: false,
                                    color: ['', color.danger._500, color.success._500]
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11,
                                    max: 80
                                }
                            }],
                            xAxes: [
                            {
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#gridColor > canvas").get(0).getContext("2d"), config);
            }
            /* grid color -- end */

            /* bar & line combine */
            var barlineCombine = function()
            {
                var barlineCombineData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                    {
                        type: 'line',
                        label: 'Dataset 1',
                        borderColor: color.danger._300,
                        pointBackgroundColor: color.danger._500,
                        pointBorderColor: color.danger._500,
                        pointBorderWidth: 1,
                        borderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 5,
                        fill: false,
                        data: [
                            -10,
                            16,
                            72,
                            93,
                            29,
                            -74,
                            64
                        ]
                    },
                    {
                        type: 'bar',
                        label: 'Dataset 2',
                        backgroundColor: color.primary._300,
                        borderColor: color.primary._500,
                        data: [
                            45,
                            75,
                            26,
                            23,
                            60,
                            -48,
                            -9
                        ],
                        borderWidth: 1
                    },
                    {
                        type: 'bar',
                        label: 'Dataset 3',
                        backgroundColor: color.success._300,
                        borderColor: color.success._500,
                        data: [
                            -10,
                            16,
                            72,
                            93,
                            29,
                            -74,
                            64
                        ],
                        borderWidth: 1
                    }]

                };
                var config = {
                    type: 'bar',
                    data: barlineCombineData,
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            position: 'top',
                        },
                        title:
                        {
                            display: true,
                            text: 'Chart.js Bar Chart'
                        },
                        scales:
                        {
                            xAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: '6 months forecast'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }],
                            yAxes: [
                            {
                                display: true,
                                scaleLabel:
                                {
                                    display: false,
                                    labelString: 'Profit margin (approx)'
                                },
                                gridLines:
                                {
                                    display: true,
                                    color: "#f2f2f2"
                                },
                                ticks:
                                {
                                    beginAtZero: true,
                                    fontSize: 11
                                }
                            }]
                        }
                    }
                }
                new Chart($("#barlineCombine > canvas").get(0).getContext("2d"), config);
            }
            /* bar & line combine -- end */

            /* polar area */
            var polarArea = function()
            {
                var config = {
                    type: 'polarArea',
                    data:
                    {
                        datasets: [
                        {
                            data: [
                                11,
                                16,
                                7,
                                3,
                                14
                            ],
                            backgroundColor: [
                                color.primary._200,
                                color.primary._400,
                                color.success._100,
                                color.success._400,
                                color.success._600
                            ],
                            label: 'My dataset' // for legend
                        }],
                        labels: [
                            "USA",
                            "Germany",
                            "Austalia",
                            "Canada",
                            "France"
                        ]
                    },
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            display: true,
                            position: 'bottom',
                        }
                    }
                };
                new Chart($("#polarArea > canvas").get(0).getContext("2d"), config);
            }
            /* polar area -- end */

            /* radar chart */
            var radarChart = function()
            {
                var config = {
                    type: "radar",
                    data:
                    {
                        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Partying", "Running"],
                        datasets: [
                        {
                            label: "First",
                            pointRadius: 4,
                            borderDashOffset: 2,
                            backgroundColor: "rgba(136,106,181, 0.2)",
                            borderColor: "rgba(0,0,0,0)",
                            pointBackgroundColor: color.primary._500,
                            pointBorderColor: color.primary._500,
                            pointHoverBackgroundColor: color.primary._500,
                            pointHoverBorderColor: color.primary._500,
                            data: [65, 59, 90, 81, 56, 55, 40]
                        },
                        {
                            label: "Second",
                            pointRadius: 4,
                            borderDashOffset: 2,
                            backgroundColor: "rgba(29,201,183, 0.2)",
                            borderColor: "rgba(0,0,0,0)",
                            pointBackgroundColor: color.success._500,
                            pointBorderColor: color.success._500,
                            pointHoverBackgroundColor: color.success._500,
                            pointHoverBorderColor: color.success._500,
                            data: [28, 48, 40, 19, 96, 27, 100]
                        }]
                    },
                    options:
                    {
                        responsive: true,
                    }
                }

                new Chart($("#radarChart > canvas").get(0).getContext("2d"), config);

            }
            /* radar chart -- end */

            /* bubble chart */
            var bubbleChart = function()
            {
                var config = {
                    type: 'bubble',
                    data:
                    {
                        labels: "Africa",
                        datasets: [
                        {
                            label: ["China"],
                            backgroundColor: color.primary._300,
                            borderColor: color.primary._500,
                            data: [
                            {
                                x: 21269017,
                                y: 5.245,
                                r: 15
                            }]
                        },
                        {
                            label: ["Denmark"],
                            backgroundColor: color.success._300,
                            borderColor: color.success._500,
                            data: [
                            {
                                x: 258702,
                                y: 7.526,
                                r: 10
                            }]
                        },
                        {
                            label: ["Germany"],
                            backgroundColor: color.info._300,
                            borderColor: color.info._500,
                            data: [
                            {
                                x: 3979083,
                                y: 6.994,
                                r: 15
                            }]
                        },
                        {
                            label: ["Japan"],
                            backgroundColor: color.danger._300,
                            borderColor: color.danger._500,
                            data: [
                            {
                                x: 4931877,
                                y: 5.921,
                                r: 15
                            }]
                        }]
                    },
                    options:
                    {
                        title:
                        {
                            display: true,
                            text: 'Predicted world population (millions) in 2050'
                        },
                        scales:
                        {
                            yAxes: [
                            {
                                scaleLabel:
                                {
                                    display: true,
                                    labelString: "Happiness"
                                }
                            }],
                            xAxes: [
                            {
                                scaleLabel:
                                {
                                    display: true,
                                    labelString: "GDP (PPP)"
                                }
                            }]
                        }
                    }
                }
                new Chart($("#bubbleChart > canvas").get(0).getContext("2d"), config);
            }
            /* bubble chart -- end*/

            /* pie chart */
            var pieChart = function()
            {
                var config = {
                    type: 'pie',
                    data:
                    {
                        datasets: [
                        {
                            data: [
                                11,
                                16,
                                7,
                                3,
                                14
                            ],
                            backgroundColor: [
                                color.primary._200,
                                color.primary._400,
                                color.success._50,
                                color.success._300,
                                color.success._500
                            ],
                            label: 'My dataset' // for legend
                        }],
                        labels: [
                            "USA",
                            "Germany",
                            "Austalia",
                            "Canada",
                            "France"
                        ]
                    },
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            display: true,
                            position: 'bottom',
                        }
                    }
                };
                new Chart($("#pieChart > canvas").get(0).getContext("2d"), config);
            }
            /* pie chart -- end */

            /* doughnut chart */
            var doughnutChart = function()
            {
                var config = {
                    type: 'doughnut',
                    data:
                    {
                        datasets: [
                        {
                            data: [
                                11,
                                16,
                                7,
                                3,
                                14
                            ],
                            backgroundColor: [
                                color.success._200,
                                color.success._400,
                                color.primary._50,
                                color.primary._300,
                                color.primary._500
                            ],
                            label: 'My dataset' // for legend


                        }],
                        labels: [
                            "USA",
                            "Germany",
                            "Austalia",
                            "Canada",
                            "France"
                        ]
                    },
                    options:
                    {
                        responsive: true,
                        legend:
                        {
                            display: true,
                            position: 'bottom',
                        }
                    }
                };
                new Chart($("#doughnutChart > canvas").get(0).getContext("2d"), config);
            }
            /* doughnut chart -- end */

            /* initialize all charts */
            $(document).ready(function()
            {
                lineChart();
                areaChart();
                horizontalBarChart();
                barChart();
                barStacked();
                barHorizontalStacked();
                bubbleChart();
                barlineCombine();
                polarArea();
                radarChart();
                pieChart();
                doughnutChart();
            });

        </script>
    </body>
</html>
