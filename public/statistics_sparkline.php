<?php

require_once 'init.php';

$_title = 'Sparkline - Statistics - SmartAdmin v4.6.3';
$_active_nav = 'statistics_sparkline';
$_head = '';
$_description = 'Sparkline chart is a tiny chart in a worksheet cell that provides a visual representation of data.';

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
                            <li class="breadcrumb-item active">Sparkline</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-chart-pie'></i> Sparkline <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Sparkline chart is a tiny chart in a worksheet cell that provides a visual representation of data.
                                </small>
                            </h1>
                            <div class="subheader-block hidden-lg-down d-lg-flex align-items-center">
                                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>EXPENSES</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-info-500">
                                        $47,000
                                    </span>
                                </div>
                                <span class="sparklines" sparkType="bar" sparkBarColor="#0d8aee" sparkHeight="32px" values="1,4,3,6,5,3,9,6,5,9,7"></span>
                            </div>
                            <div class="subheader-block hidden-lg-down d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>MY PROFITS</small>
                                    </span>
                                    <span class="fw-500 fs-xl d-block color-danger-500">
                                        $38,500
                                    </span>
                                </div>
                                <span class="sparklines" sparkType="bar" sparkBarColor="#fe6bb0" sparkHeight="32px" values="1,4,3,6,5,3,9,6,5,9,7"></span>
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
                                        <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript. Use sparklines to show trends in a series of values, such as seasonal increases or decreases, economic cycles, or to highlight maximum and minimum values.</p>
                                        <p class="m-0">
                                            Find tutorials, guidelines and more on Sparkline's <a href="https://omnipotent.net/jquery.sparkline/#s-docs" target="_blank">official documentation</a>
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
                                                        Line charts are the default chart type, but to specify the type explicitly set an option called <code>type</code> to <code>line</code>
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#1dc9b7" sparkFillColor="false" sparkLineWidth="2" values="5,3,9,6,5,9,7,3,5,2"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#fd3995" sparkFillColor="false" sparkLineWidth="2" values="0,-3,-6,-4,-5,-4,-7,-3,-5,-2"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#ffba28" sparkFillColor="false" sparkLineWidth="2" values="-4,5,4,7,-3,-5,-2,0,3,-6,"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#2196F3" sparkFillColor="false" sparkLineWidth="2" values="-4,5,4,6,5,9,7,3,5,3,-6"></span>
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
                                                        We take the line example to your right and add <code>fillColor</code> to fill the area
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#ffba28" sparkFillColor="#ffd274" sparkLineWidth="1" values="5,3,2,-1,-3,-2,2,3,5,2"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#886ab5" sparkFillColor="#a38cc6" sparkLineWidth="1" values="1,4,4,7,5,9,10,4,4,7,5,9,10"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#fd52a3" sparkFillColor="#fe85be" sparkLineWidth="1" values="-2,2,3,5,9,10,4,4,-7,-5,9,10"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="line" sparkHeight="40" sparkWidth="110" sparkLineColor="#2196F3" sparkFillColor="#9acffa" sparkLineWidth="1" values="4,5,4,6,5,9,7,3,5,3,6"></span>
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
                                                        Set the <code>type</code> option to <code>bar</code> to generate bar charts. Values can be omitted by using the <code>null</code> value instead of a number.
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" sparkBarColor="#886ab5" values="5,3,9,6,5,9,7,5,2,6,2,1,5,3,6,7,5,7"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" sparkHeight="40" sparkBarColor="#21dfcb" sparkNegBarColor="#fd3995" values="4,-3,-6,-4,-5,7,-3,-5,2,3,1,-3,4,3,-6,-4,-7"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" sparkBarColor="#21dfcb" sparkNegBarColor="#fd3995" values="4,3,6,4,-5,4,3,5,-2,3,1,3,4,3,6,4,5"></span>
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
                                                    Composite <span class="fw-300"><i>Bar</i></span>
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
                                                        Composite charts are re-drawn on top of each other to display multiple data points stacked in a single row or column
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" values="4:7,5:8,-6:10,7:7,-5:-9,8:10,-7:-6,6:9,-6:4,7:7,4:5,5:9,4:4,3:5,7:10,1:3"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" values="4:7,5:8,6:10,4:5,5:9,8:10,7:6,6:9,6:4,-5:9,8:10,7:6,9:2,4:8,5:6,8:9"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bar" values="-4:7,-5:8,-7:7,-4:5,-5:9,-8:10,-7:6,-6:9,-6:-4,-5:-9,-8:-10,-7:-6,-6:-4,-5:-9,-3:-4,-5:-8"></span>
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
                                                    Tristate <span class="fw-300"><i>Chart</i></span>
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
                                                        Tri-state charts are useful to show win-lose-draw information. You can also use the colorMap for different arbitrary positions
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="tristate" sparkPosBarColor="#51adf6" sparkNegBarColor="#ffc241" sparkBarSpacing="2px" sparkBarWidth="5px" values="1,1,0,1,-1,-1,1,-1,0,0,-1,1,-1,0,0,1,1,0,1,-1,-1,1,-1,0,0,1,1,0,1,-1"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="tristate" sparkPosBarColor="#13867a" sparkNegBarColor="#ce0262" sparkBarSpacing="2px" sparkBarWidth="5px" values="-1,1,-1,0,0,1,1,0,1,-1,1,1,0,1,-1,-1,1,-1,0,0,1,1,0,1,-1,-1,1,-1,0,0"></span>
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
                                                    Discrete <span class="fw-300"><i>Chart</i></span>
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
                                                        Discrete charts provide a separated thin vertical line for each value. Set the "type" option to "discrete" to generate discrete charts
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="discrete" sparkLineColor="#fd3995" values="4,6,7,7,4,3,2,1,4,-4,5,6,7,6,6,-2,"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="discrete" sparkLineColor="#0d8aee" values="4,6,7,-7,4,3,2,1,4,4,5,6,-7,6,6,2,"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="discrete" sparkLineColor="#ffba28" values="-4,-6,-7,-5,4,3,-2,-1,4,3,4,6,7,7,4,3,2"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="discrete" sparkLineColor="#886ab5" values="-4,-7,6,3,7,6,-2,-8,4,6,2,6,4,-2,-4,-5"></span>
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
                                        <div id="panel-7" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Bullet <span class="fw-300"><i>Graph</i></span>
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
                                                        A bullet graph is inspired by a traditional thermometer charts, it serves as a replacement for dashboard gauges and meters.
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bullet" sparkHeight="50" values="10,12,12,9,7"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="bullet" sparkHeight="50" values="1,3,3,9,7"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-8" class="panel">
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
                                                        Set the "type" option to "pie" to generate pie charts. These little pie charts tend only to be useful with 2 or 3 values at most
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="pie" sparkHeight="50" sparkWidth="auto" values="4,6,7,7,4"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="pie" sparkHeight="50" sparkWidth="auto" values="4,6,7"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="pie" sparkHeight="50" sparkWidth="auto" values="1,3"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="pie" sparkHeight="50" sparkWidth="auto" values="1,7,3,7,9,3,5"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="pie" sparkHeight="50" sparkWidth="auto" values="7,10,33,50,100"></span>
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
                                        <div id="panel-9" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Refresh <span class="fw-300"><i>Graph</i></span>
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
                                                        The demo below uses jquery snippet to draw values from mouse movement and plots it intravenously into the graph
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span id="mousespeed-line"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span id="mousespeed-bar"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-10" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Box <span class="fw-300"><i>Plots</i></span>
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
                                                        Boxplot is a method for graphically depicting groups of numerical data through their quartiles. Outliers may be plotted as individual points
                                                    </div>
                                                    <div class="demo d-flex justify-content-center flex-wrap d-sm-block">
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="box" values="4,27,34,52,54,59,61,68,78,82,85,87,91,93,100"></span>
                                                        </div>
                                                        <div class="p-3 w-auto text-center d-inline-flex border-faded">
                                                            <span class="sparklines" sparkType="box" sparkRaw="true" sparkShowOutliers="true" sparkTarget="6" , sparkBoxFillColor="#ffebc1" sparkBoxLineColor="#563d7c" sparkWhiskerColor="#563d7c" sparkMedianColor="#886ab5" sparkTargetColor="#fd3995" values="1, 3, 5, 8, 10, 15, 18"></span>
                                                        </div>
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
        <!-- sparkline bundle: 
        + jquery.sparkline.js (core)
        + src/../jquery.sparkline.config.js (config) -->
        <script src="<?= ASSETS_URL ?>/js/statistics/sparkline/sparkline.bundle.js"></script>
        <script>
            /* 
             * draw the little mouse speed animated graph this just attaches a handler to the mousemove event to see
             * (roughly) how far the mouse has moved and then updates the display a couple of times a second via
             * setTimeout()
             */
            var drawMouseSpeedDemo = function()
            {
                var mrefreshinterval = 500, // update display every 500ms
                    lastmousex = -1,
                    lastmousey = -1,
                    lastmousetime,
                    mousetravel = 0,
                    mpoints = [],
                    mpoints_max = 30;

                $('html').mousemove(function(e)
                {
                    var mousex = e.pageX,
                        mousey = e.pageY;

                    if (lastmousex > -1)
                    {
                        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
                    }
                    lastmousex = mousex;
                    lastmousey = mousey;
                });

                var mdraw = function()
                {
                    var md = new Date();
                    var timenow = md.getTime();
                    if (lastmousetime && lastmousetime != timenow)
                    {
                        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                        mpoints.push(pps);
                        if (mpoints.length > mpoints_max)
                            mpoints.splice(0, 1);
                        mousetravel = 0;
                        $('#mousespeed-line').sparkline(mpoints,
                        {
                            type: 'line',
                            width: 210,
                            height: 40,
                            lineColor: color.info._500,
                            fillColor: color.info._50,
                            tooltipSuffix: ' pixels per second'
                        });
                        $('#mousespeed-bar').sparkline(mpoints,
                        {
                            type: 'bar',
                            height: 40,
                            tooltipSuffix: ' pixels per second'
                        });
                    }
                    lastmousetime = timenow;
                    setTimeout(mdraw, mrefreshinterval);
                }
                // we could use setInterval instead, but I prefer to do it this way
                setTimeout(mdraw, mrefreshinterval);
            };

            $(document).ready(function()
            {
                //start refresh chart
                drawMouseSpeedDemo();
            });

        </script>
    </body>
</html>
