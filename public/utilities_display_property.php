<?php

require_once 'init.php';

$_title = 'Display Property - Utilities - SmartAdmin v4.6.3';
$_active_nav = 'utilities_display_property';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Quickly and responsively toggle the display value of components and more with our display utilities.';

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
                            <li class="breadcrumb-item active">Display Property</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Display Property
                                <small>
                                    Quickly and responsively toggle the display value of components and more with our display utilities.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fal fa-times"></i>
                                </span>
                            </button>
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 d-sm-none d-md-block">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">How it works</span>
                                        <br> Change the value of the display property with our responsive display utility classes. We purposely support only a subset of all possible values for display. Classes can be combined for various effects as you need.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Displaying <span class="fw-300"><i>elements</i></span>
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
                                                Display utility classes that apply to all <a href="<?= APP_URL ?>/utilities_responsive_grid.php" target="_blank">breakpoints</a>, from <code>xs</code> to <code>xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0;</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation
                                            </div>
                                            <p>As such, the classes are named using the format:</p>
                                            <ul class="list-spaced">
                                                <li><code>.d-{value}</code> for <code>xs</code></li>
                                                <li><code>.d-{breakpoint}-{value}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, and <code>xl</code>.</li>
                                            </ul>
                                            <p>Where <em>value</em> is one of:</p>
                                            <ul class="list-spaced">
                                                <li><code>none</code></li>
                                                <li><code>inline</code></li>
                                                <li><code>inline-block</code></li>
                                                <li><code>block</code></li>
                                                <li><code>table</code></li>
                                                <li><code>table-cell</code></li>
                                                <li><code>table-row</code></li>
                                                <li><code>flex</code></li>
                                                <li><code>inline-flex</code></li>
                                            </ul>
                                            <p>The media queries effect screen widths with the given breakpoint <em>or larger</em>. For example, <code>.d-lg-none</code> sets <code>display: none;</code> on both <code>lg</code> and <code>xl</code> screens.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Hiding <span class="fw-300"><i>elements (BS3 method)</i></span>
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
                                                This method for hidding elements is from Bootstrap version 3.0, it is a more quicker way of hiding responsive elements. However, the Bootstrap 4 method will give you greater control. <strong>Remember to use either of the method on a single element, otherwise it may not work</strong>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="border-top-0" style="width: 150px"></th>
                                                            <th scope="col">
                                                                Extra small devices
                                                                <small class="d-block fs-sm text-muted">
                                                                    Phones (&lt;0px)
                                                                </small>
                                                            </th>
                                                            <th scope="col">
                                                                Small devices
                                                                <small class="d-block fs-sm text-muted">
                                                                    Tablets (≥576px)
                                                                </small>
                                                            </th>
                                                            <th scope="col">
                                                                Medium devices
                                                                <small class="d-block fs-sm text-muted">
                                                                    Desktops (≥768px)
                                                                </small>
                                                            </th>
                                                            <th scope="col">
                                                                Large devices
                                                                <small class="d-block fs-sm text-muted">
                                                                    Desktops (≥992px)
                                                                </small>
                                                            </th>
                                                            <th scope="col">
                                                                Extra Large devices
                                                                <small class="d-block fs-sm text-muted">
                                                                    Desktops (≥1200px)
                                                                </small>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-xs-down</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-sm-down</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-md-down</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-lg-down</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-success">visible</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-xl-down</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-xs-up</code></th>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-sm-up</code></th>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-md-up</code></th>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-lg-up</code></th>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-danger">hidden</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><code>.hidden-xl-up</code></th>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-success">visible</td>
                                                            <td class="text-danger">hidden</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Display <span class="fw-300"><i>Print</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <p>
                                                Change the <code>display</code> value of elements when printing with our print display utility classes. Includes support for the same <code>display</code> values as our responsive <code>.d-*</code> utilities.
                                            </p>
                                            <ul class="list-spaced">
                                                <li><code>.d-print-none</code></li>
                                                <li><code>.d-print-inline</code></li>
                                                <li><code>.d-print-inline-block</code></li>
                                                <li><code>.d-print-block</code></li>
                                                <li><code>.d-print-table</code></li>
                                                <li><code>.d-print-table-row</code></li>
                                                <li><code>.d-print-table-cell</code></li>
                                                <li><code>.d-print-flex</code></li>
                                                <li><code>.d-print-inline-flex</code></li>
                                            </ul>
                                            <p>The print and display classes can be combined.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Hiding <span class="fw-300"><i>elements (BS4 method)</i></span>
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
                                                <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.</p>
                                                <p>To hide elements simply use the <code>.d-none</code> class or one of the <code>.d-{sm,md,lg,xl}-none</code> classes for any responsive screen variation.</p>
                                                <p>To show an element only on a given interval of screen sizes you can combine one <code>.d-*-none</code> class with a <code>.d-*-*</code> class, for example <code>.d-none .d-md-block .d-xl-none</code> will hide the element for all screen sizes except on medium and large devices.</p>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Screen Size</th>
                                                        <th>Class</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Hidden on all</td>
                                                        <td><code>.d-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hidden only on xs</td>
                                                        <td><code>.d-none .d-sm-block</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hidden only on sm</td>
                                                        <td><code>.d-sm-none .d-md-block</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hidden only on md</td>
                                                        <td><code>.d-md-none .d-lg-block</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hidden only on lg</td>
                                                        <td><code>.d-lg-none .d-xl-block</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hidden only on xl</td>
                                                        <td><code>.d-xl-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible on all</td>
                                                        <td><code>.d-block</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible only on xs</td>
                                                        <td><code>.d-block .d-sm-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible only on sm</td>
                                                        <td><code>.d-none .d-sm-block .d-md-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible only on md</td>
                                                        <td><code>.d-none .d-md-block .d-lg-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible only on lg</td>
                                                        <td><code>.d-none .d-lg-block .d-xl-none</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible only on xl</td>
                                                        <td><code>.d-none .d-xl-block</code></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
