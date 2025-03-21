<?php

require_once 'init.php';

$_title = 'Color Pallet - Utilities - SmartAdmin v4.6.3';
$_active_nav = 'utilities_color_pallet';
$_head = '';
$_description = 'Comes with 60 unique color pallets, that uses one prime to generate all pallets';

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
                            <li class="breadcrumb-item">Utilities</li>
                            <li class="breadcrumb-item active">Color Pallet</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Color Pallet
                                <small>
                                    Comes with 60 unique color pallets, that uses one prime to generate all pallets
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Impressionistic <span class="fw-300"><i>colors</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <h4>
                                                        Color psychology
                                                        <small>
                                                            Strong pigments from beneath the Earth
                                                        </small>
                                                    </h4>
                                                    <div class="fs-lg fw-300">
                                                        <p>
                                                            Color, rather than shape, is more closely related to emotion. Each color has a strong blend and was selectively hand picked to make your design shine. Each component from SmartAdmin can have any of these colors applied. Try on different combinations to make your project come alive!
                                                        </p>
                                                        <p>
                                                            SmartAdmin focuses on conveying the attention of your users to the important parts of the page and the actions. While keeping a light feel, the colors give the page an extra push.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-clean">
                                                            <thead>
                                                                <tr>
                                                                    <th colspan="2" style="width: 150px">State</th>
                                                                    <th style="width: 150px">Postfix</th>
                                                                    <th>Example usage</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Success</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-success"></span>
                                                                    </td>
                                                                    <td><code>*-success</code></td>
                                                                    <td><code>btn-success</code> <code>color-success</code></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Warning</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-warning"></span>
                                                                    </td>
                                                                    <td><code>*-warning</code></td>
                                                                    <td><code>btn-warning</code> <code>color-warning</code></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Danger</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-danger"></span>
                                                                    </td>
                                                                    <td><code>*-danger</code></td>
                                                                    <td><code>btn-danger</code> <code>color-danger</code></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Info</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-info"></span>
                                                                    </td>
                                                                    <td><code>*-info</code></td>
                                                                    <td><code>btn-info</code> <code>color-info</code></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Primary</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-primary"></span>
                                                                    </td>
                                                                    <td><code>*-primary</code></td>
                                                                    <td><code>btn-primary</code> <code>color-primary</code> <code>bg-primary</code></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Secondary</td>
                                                                    <td>
                                                                        <span class="width-1 height-1 rounded-circle d-block bg-secondary"></span>
                                                                    </td>
                                                                    <td><code>*-secondary</code></td>
                                                                    <td><code>btn-secondary</code> <code>color-secondary</code> <code>bg-secondary</code></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Success <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Success color pallet will be used for positive feedback and user assurance. We have selected teal with a hint of green to stand out and cast the shadow of quality, healing, freshness and peace
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-success-50">color-success-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-50"></span></td>
                                                            <td><code>*-success-50</code></td>
                                                            <td><code>bg-success-50</code> <code>color-success-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-100">color-success-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-100"></span></td>
                                                            <td><code>*-success-100</code></td>
                                                            <td><code>bg-success-100</code> <code>color-success-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-200">color-success-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-200"></span></td>
                                                            <td><code>*-success-200</code></td>
                                                            <td><code>bg-success-200</code> <code>color-success-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-300">color-success-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-300"></span></td>
                                                            <td><code>*-success-300</code></td>
                                                            <td><code>bg-success-300</code> <code>color-success-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-400">color-success-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-400"></span></td>
                                                            <td><code>*-success-400</code></td>
                                                            <td><code>bg-success-400</code> <code>color-success-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-500">color-success-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-500"></span></td>
                                                            <td><code>*-success-500</code></td>
                                                            <td><code>bg-success-500</code> <code>color-success-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-600">color-success-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-600"></span></td>
                                                            <td><code>*-success-600</code></td>
                                                            <td><code>bg-success-600</code> <code>color-success-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-700">color-success-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-700"></span></td>
                                                            <td><code>*-success-700</code></td>
                                                            <td><code>bg-success-700</code> <code>color-success-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-800">color-success-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-800"></span></td>
                                                            <td><code>*-success-800</code></td>
                                                            <td><code>bg-success-800</code> <code>color-success-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-success-900">color-success-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-success-900"></span></td>
                                                            <td><code>*-success-900</code></td>
                                                            <td><code>bg-success-900</code><code>color-success-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Warning <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Warning color pallet lets users know to be catious and careful. It can envoke the feeling of curiosity, confidence, sociability, and bravery
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-warning-50">color-warning-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-50"></span></td>
                                                            <td><code>*-warning-50</code></td>
                                                            <td><code>bg-warning-50</code> <code>color-warning-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-100">color-warning-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-100"></span></td>
                                                            <td><code>*-warning-100</code></td>
                                                            <td><code>bg-warning-100</code> <code>color-warning-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-200">color-warning-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-200"></span></td>
                                                            <td><code>*-warning-200</code></td>
                                                            <td><code>bg-warning-200</code> <code>color-warning-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-300">color-warning-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-300"></span></td>
                                                            <td><code>*-warning-300</code></td>
                                                            <td><code>bg-warning-300</code> <code>color-warning-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-400">color-warning-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-400"></span></td>
                                                            <td><code>*-warning-400</code></td>
                                                            <td><code>bg-warning-400</code> <code>color-warning-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-500">color-warning-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-500"></span></td>
                                                            <td><code>*-warning-500</code></td>
                                                            <td><code>bg-warning-500</code> <code>color-warning-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-600">color-warning-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-600"></span></td>
                                                            <td><code>*-warning-600</code></td>
                                                            <td><code>bg-warning-600</code> <code>color-warning-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-700">color-warning-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-700"></span></td>
                                                            <td><code>*-warning-700</code></td>
                                                            <td><code>bg-warning-700</code> <code>color-warning-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-800">color-warning-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-800"></span></td>
                                                            <td><code>*-warning-800</code></td>
                                                            <td><code>bg-warning-800</code> <code>color-warning-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-warning-900">color-warning-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-warning-900"></span></td>
                                                            <td><code>*-warning-900</code></td>
                                                            <td><code>bg-warning-900</code><code>color-warning-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Danger <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                This color as an attention getter. Use this color as less as possible to have maximum impact. This color is connected to ecitement, love, strength, and energy
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-danger-50">color-danger-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-50"></span></td>
                                                            <td><code>*-danger-50</code></td>
                                                            <td><code>bg-danger-50</code> <code>color-danger-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-100">color-danger-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-100"></span></td>
                                                            <td><code>*-danger-100</code></td>
                                                            <td><code>bg-danger-100</code> <code>color-danger-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-200">color-danger-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-200"></span></td>
                                                            <td><code>*-danger-200</code></td>
                                                            <td><code>bg-danger-200</code> <code>color-danger-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-300">color-danger-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-300"></span></td>
                                                            <td><code>*-danger-300</code></td>
                                                            <td><code>bg-danger-300</code> <code>color-danger-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-400">color-danger-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-400"></span></td>
                                                            <td><code>*-danger-400</code></td>
                                                            <td><code>bg-danger-400</code> <code>color-danger-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-500">color-danger-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-500"></span></td>
                                                            <td><code>*-danger-500</code></td>
                                                            <td><code>bg-danger-500</code> <code>color-danger-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-600">color-danger-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-600"></span></td>
                                                            <td><code>*-danger-600</code></td>
                                                            <td><code>bg-danger-600</code> <code>color-danger-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-700">color-danger-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-700"></span></td>
                                                            <td><code>*-danger-700</code></td>
                                                            <td><code>bg-danger-700</code> <code>color-danger-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-800">color-danger-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-800"></span></td>
                                                            <td><code>*-danger-800</code></td>
                                                            <td><code>bg-danger-800</code> <code>color-danger-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-danger-900">color-danger-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-danger-900"></span></td>
                                                            <td><code>*-danger-900</code></td>
                                                            <td><code>bg-danger-900</code><code>color-danger-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Info <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                This particular pallet helps you build trust, it has the ability to project competence, peace, loyalty and strength to your users
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-info-50">color-info-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-50"></span></td>
                                                            <td><code>*-info-50</code></td>
                                                            <td><code>bg-info-50</code> <code>color-info-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-100">color-info-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-100"></span></td>
                                                            <td><code>*-info-100</code></td>
                                                            <td><code>bg-info-100</code> <code>color-info-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-200">color-info-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-200"></span></td>
                                                            <td><code>*-info-200</code></td>
                                                            <td><code>bg-info-200</code> <code>color-info-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-300">color-info-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-300"></span></td>
                                                            <td><code>*-info-300</code></td>
                                                            <td><code>bg-info-300</code> <code>color-info-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-400">color-info-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-400"></span></td>
                                                            <td><code>*-info-400</code></td>
                                                            <td><code>bg-info-400</code> <code>color-info-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-500">color-info-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-500"></span></td>
                                                            <td><code>*-info-500</code></td>
                                                            <td><code>bg-info-500</code> <code>color-info-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-600">color-info-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-600"></span></td>
                                                            <td><code>*-info-600</code></td>
                                                            <td><code>bg-info-600</code> <code>color-info-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-700">color-info-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-700"></span></td>
                                                            <td><code>*-info-700</code></td>
                                                            <td><code>bg-info-700</code> <code>color-info-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-800">color-info-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-800"></span></td>
                                                            <td><code>*-info-800</code></td>
                                                            <td><code>bg-info-800</code> <code>color-info-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-info-900">color-info-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-info-900"></span></td>
                                                            <td><code>*-info-900</code></td>
                                                            <td><code>bg-info-900</code><code>color-info-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Primary <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                This is the primary color of the app, and is widely used in almost all of the elements. The color shows ambition, sprituality, royalty and luxury
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-primary-50">color-primary-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-50"></span></td>
                                                            <td><code>*-primary-50</code></td>
                                                            <td><code>bg-primary-50</code> <code>color-primary-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-100">color-primary-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-100"></span></td>
                                                            <td><code>*-primary-100</code></td>
                                                            <td><code>bg-primary-100</code> <code>color-primary-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-200">color-primary-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-200"></span></td>
                                                            <td><code>*-primary-200</code></td>
                                                            <td><code>bg-primary-200</code> <code>color-primary-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-300">color-primary-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-300"></span></td>
                                                            <td><code>*-primary-300</code></td>
                                                            <td><code>bg-primary-300</code> <code>color-primary-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-400">color-primary-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-400"></span></td>
                                                            <td><code>*-primary-400</code></td>
                                                            <td><code>bg-primary-400</code> <code>color-primary-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-500">color-primary-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-500"></span></td>
                                                            <td><code>*-primary-500</code></td>
                                                            <td><code>bg-primary-500</code> <code>color-primary-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-600">color-primary-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-600"></span></td>
                                                            <td><code>*-primary-600</code></td>
                                                            <td><code>bg-primary-600</code> <code>color-primary-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-700">color-primary-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-700"></span></td>
                                                            <td><code>*-primary-700</code></td>
                                                            <td><code>bg-primary-700</code> <code>color-primary-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-800">color-primary-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-800"></span></td>
                                                            <td><code>*-primary-800</code></td>
                                                            <td><code>bg-primary-800</code> <code>color-primary-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-primary-900">color-primary-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-primary-900"></span></td>
                                                            <td><code>*-primary-900</code></td>
                                                            <td><code>bg-primary-900</code><code>color-primary-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Fusion <span class="fw-300"><i>pallet</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Fusion is a alternation of primary pallet. It is dramatic and bold. It has class and a sense of formality combined with security.
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover table-clean">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 150px">Text Color</th>
                                                            <th style="width: 100px">Background</th>
                                                            <th style="width: 150px">Postfix</th>
                                                            <th>Example usage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-fusion-50">color-fusion-50</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-50"></span></td>
                                                            <td><code>*-fusion-50</code></td>
                                                            <td><code>bg-fusion-50</code> <code>color-fusion-50</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-100">color-fusion-100</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-100"></span></td>
                                                            <td><code>*-fusion-100</code></td>
                                                            <td><code>bg-fusion-100</code> <code>color-fusion-100</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-200">color-fusion-200</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-200"></span></td>
                                                            <td><code>*-fusion-200</code></td>
                                                            <td><code>bg-fusion-200</code> <code>color-fusion-200</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-300">color-fusion-300</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-300"></span></td>
                                                            <td><code>*-fusion-300</code></td>
                                                            <td><code>bg-fusion-300</code> <code>color-fusion-300</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-400">color-fusion-400</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-400"></span></td>
                                                            <td><code>*-fusion-400</code></td>
                                                            <td><code>bg-fusion-400</code> <code>color-fusion-400</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-500">color-fusion-500</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-500"></span></td>
                                                            <td><code>*-fusion-500</code></td>
                                                            <td><code>bg-fusion-500</code> <code>color-fusion-500</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-600">color-fusion-600</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-600"></span></td>
                                                            <td><code>*-fusion-600</code></td>
                                                            <td><code>bg-fusion-600</code> <code>color-fusion-600</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-700">color-fusion-700</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-700"></span></td>
                                                            <td><code>*-fusion-700</code></td>
                                                            <td><code>bg-fusion-700</code> <code>color-fusion-700</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-800">color-fusion-800</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-800"></span></td>
                                                            <td><code>*-fusion-800</code></td>
                                                            <td><code>bg-fusion-800</code> <code>color-fusion-800</code></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-fusion-900">color-fusion-900</td>
                                                            <td><span style="height:20px; width:20px" class="rounded-circle d-block bg-fusion-900"></span></td>
                                                            <td><code>*-fusion-900</code></td>
                                                            <td><code>bg-fusion-900</code><code>color-fusion-900</code></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        <!-- DEMO Scripts -->
        <script>
            // get hex color value

            var color = '';

            function hexc(colorval)
            {
                var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                delete(parts[0]);
                for (var i = 1; i <= 3; ++i)
                {
                    parts[i] = parseInt(parts[i]).toString(16);
                    if (parts[i].length == 1) parts[i] = '0' + parts[i];
                }
                color = '#' + parts.join('');
            }

            $('.color-disp-demo [class^="bg-"]').each(function()
            {
                var x = $(this).css('backgroundColor');
                hexc(x);
                $(this).find("span").append(color);
                color = null;
            });

        </script>
    </body>
</html>
