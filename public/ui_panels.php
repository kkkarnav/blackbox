<?php

require_once 'init.php';

$_title = 'Panels - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_panels';
$_head = '';
$_description = 'Panels can be used in almost any situation, helping wrap everything in a slick &amp; lightweight container';

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
                            <li class="breadcrumb-item active">Panels</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Panels
                                <small>
                                    Panels can be used in almost any situation, helping wrap everything in a slick & lightweight container
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fal fa-times"></i>
                                </span>
                            </button>
                            <span class="h5">About panels</span>
                            <br>
                            The <code>.panel</code> containers are a perfect vessle to display your data, tables, forms or pictures. They are extreamly lightweight and clean. They can be expanded to fullscreen, collapsed or closed. They come with varity of options to display your data uniquely and draw focus where it is needed. Print the panel you need by making it fullscreen. You can also uniform the panels by adding the modifier <code>.mod-panel-clean</code> to <code>body</code>
                            <br>
                            <br>
                            Give your users access to create panel settings using localstorage. You can change colors, remember collapse state, lock location, and add drag functions to panels. Be sure to check out the our exclusive <a href="<?= APP_URL ?>/plugins_smartpanels.php" target="_blank">SmartPanels</a> plugin.
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                All panels needs to have an unique ID in order to use the panel funtions. <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a <code>min-height</code> value and default <code>flexbox</code> properties. The <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined padding.
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel panel-collapsed">
                                    <div class="panel-hdr text-success">
                                        <h2>
                                            Collapsed <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container collapse">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                This panel is closed by default. To close a panel we add the class <code>.panel-collapsed</code> to <code>.panel</code> and <code>.collapse</code> to <code>.panel-container</code>
                                            </div>
                                            <p>
                                                Default panel text.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr color-success-600">
                                        <h2>
                                            Collapsable <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Panel is closed by using the attribute <code>data-action="panel-collapse"</code>, and can be placed anywhere inside <code>.panel</code>
                                            </div>
                                            <p>
                                                You can also place the collapse action inside the <code>.panel-content</code> as button or link
                                            </p>
                                            <button data-action="panel-collapse" class="btn btn-success mr-2">collapse button</button>
                                            <a href="javascript:void(0);" data-action="panel-collapse" class="text-success">collapse link</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr color-warning-800">
                                        <h2>
                                            Fullscreen <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Panel is closed by using the attribute <code>data-action="panel-fullscreen"</code>, and can be placed anywhere inside <code>.panel</code>
                                            </div>
                                            <p>
                                                You can also place the fullscreen action inside the <code>.panel-content</code> as button or link
                                            </p>
                                            <button data-action="panel-fullscreen" class="btn btn-warning mr-2">fullscreen button</button>
                                            <a href="javascript:void(0);" data-action="panel-fullscreen" class="text-warning">fullscreen link</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr text-danger">
                                        <h2>
                                            Close <span class="fw-300"><i>Panel</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Panel is closed by using the attribute <code>data-action="panel-close"</code>, and can be placed anywhere inside <code>.panel</code>
                                            </div>
                                            <p>
                                                You can also place the panelclose action inside the <code>.panel-content</code> as button or link
                                            </p>
                                            <button data-action="panel-close" class="btn btn-danger mr-2">close button</button>
                                            <a href="javascript:void(0);" data-action="panel-close" class="text-danger">close link</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr bg-primary-700 bg-success-gradient">
                                        <h2>
                                            Panel <span class="fw-300">Colors</span>
                                        </h2>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                You can mix and match any color styles, below is what we were found to be an interesting match. Please note the colors will not be compatible with the modifier <code>.mod-panel-clean</code>
                                            </div>
                                            <div class="d-flex flex-wrap js-update-hdr-color">
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-primary-700 bg-success-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-primary-700 bg-success-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-primary-500 bg-info-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-primary-500 bg-info-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-primary-600 bg-primary-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-primary-600 bg-primary-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-info-600 bg-primray-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-info-600 bg-primray-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-info-600 bg-info-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-info-600 bg-info-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-info-700 bg-success-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-info-700 bg-success-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-success-900 bg-info-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-success-900 bg-info-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-success-700 bg-primary-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-success-700 bg-primary-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-success-600 bg-success-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-success-600 bg-success-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-danger-900 bg-info-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-danger-900 bg-info-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-fusion-400 bg-fusion-gradient width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-fusion-400 bg-fusion-gradient" style="margin:1px;"></a>
                                                <a href="javascript:void(0);" class="btn d-inline-block bg-faded width-3 height-3 p-0 rounded-0 hover-effect-dot" data-class="bg-faded" style="margin:1px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Panel <span class="fw-300">master button</span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-toolbar-master" data-toggle="dropdown">
                                                <i class="fal fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right">
                                                <button class="dropdown-item" data-action="panel-collapse">
                                                    Collapse
                                                </button>
                                                <button class="dropdown-item" data-action="panel-fullscreen">
                                                    Fullscreen
                                                </button>
                                                <div class="dropdown-divider m-0"></div>
                                                <button class="dropdown-item" data-action="panel-close">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                The <code>.btn-toolbar-master</code> button class is added to a dropdown button inside <code>.panel-toolbar</code>. It is a nice way to add dropdown functions and buttons to your <code>.panel</code>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Label <span class="fw-300"><i>Panel</i></span>
                                            <sup>
                                                <span class="badge badge-warning ml-2">
                                                    sup
                                                </span>
                                            </sup>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <h5 class="m-0">
                                                <span class="badge badge-pill badge-danger fw-400 l-h-n">
                                                    11
                                                </span>
                                            </h5>
                                        </div>
                                        <div class="panel-toolbar ml-2">
                                            <h5 class="m-0">
                                                <span class="badge badge-primary fw-400 l-h-n">
                                                    Panel Badge
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                You may place badge inside <code>.panel-toolbar</code>, <code>.panel-content</code> and <code>.panel-hdr</code>. Check out the <a href="<?= APP_URL ?>/ui_badges.php" target="_blank">badge page</a> to learn more about badges
                                            </div>
                                        </div>
                                        <!-- panel footer with utility classes -->
                                        <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted d-flex">
                                            <span class="badge badge-info fw-400 mr-2">
                                                Footer badge
                                            </span>
                                            <span class="badge badge-pill badge-success fw-400">
                                                Pill badge
                                            </span>
                                            <span class="badge badge-pill rounded-circle badge-secondary fw-400 ml-auto mr-2">
                                                1
                                            </span>
                                            <span class="badge badge-warning fw-400 px-1">
                                                22
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Form <span class="fw-300">elements</span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <div class="custom-control d-flex custom-switch">
                                                <input id="eventlog-switch" type="checkbox" class="custom-control-input" checked="checked">
                                                <label class="custom-control-label fw-500" for="eventlog-switch"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                You can add form elements to <code>.panel-hdr</code> and any other parts of the <code>.panel</code>
                                            </div>
                                        </div>
                                        <!-- panel footer with utility classes -->
                                        <div class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="demoCheck">
                                                <label class="custom-control-label" for="demoCheck">Checkbox</label>
                                            </div>
                                            <div class="form-check-inline ml-auto">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">1</label>
                                                </div>
                                            </div>
                                            <div class="form-check-inline">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">2</label>
                                                </div>
                                            </div>
                                            <div class="form-check-inline mr-0">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled="disabled">
                                                    <label class="custom-control-label" for="customRadio3">Disabled</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Form <span class="fw-300">inputs</span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <select class="custom-select custom-select-sm">
                                                <option selected="">Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="panel-toolbar ml-2">
                                            <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                                                <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                                                <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                You can add form inputs to <code>.panel-hdr</code> with moderation. Adding too many elements may break the design on mobile viewport
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Panel <span class="fw-300">buttons</span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-default btn-sm rounded-pill mr-1 shadow-0">
                                                <i class="fal fa-clock"></i>
                                            </button>
                                            <button class="btn btn-icon btn-sm btn-secondary mr-1 shadow-0">
                                                <i class="fal fa-check"></i>
                                            </button>
                                            <button class="btn btn-icon btn-sm btn-success shadow-0 rounded-circle">
                                                <i class="fal fa-cog"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Add panel buttons to <code>.panel-hdr</code> and footer area. Keep in mind of your panel title size as distortion can occur with too many buttons overflowing.
                                            </div>
                                        </div>
                                        <!-- panel footer with utility classes -->
                                        <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-12" class="panel">
                                    <div class="panel-hdr border-faded border-top-0 border-right-0 border-left-0 shadow-0">
                                        <h2>
                                            Panel <span class="fw-300">tabs</span>
                                        </h2>
                                        <div class="panel-toolbar pr-3 align-self-end">
                                            <ul id="demo_panel-tabs" class="nav nav-tabs border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tab_default-1" role="tab">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab_default-2" role="tab">Set</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" data-toggle="tab" href="#" role="tab">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>You can easily add <code>.nav-tabs</code> to <code>.panel-hdr</code>, consider adding dropdown panel button if you have a lot of panel tabs. Check out the Tabs & pills page for more details</p>
                                                <div id="js_change_tab_direction" class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-info active" data-action="toggle" data-class="nav-tabs-clean" data-target="#demo_panel-tabs">
                                                        <input type="radio" name="radioNameTabDirection" checked="" value="nav nav-tabs"> default
                                                    </label>
                                                    <label class="btn btn-info" data-action="toggle" data-class="nav-tabs-clean" data-target="#demo_panel-tabs">
                                                        <input type="radio" name="radioNameTabDirection" value="nav nav-tabs justify-content-end"> clean
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-13" class="panel">
                                    <div class="panel-hdr border-faded border-top-0 border-right-0 border-left-0 shadow-0">
                                        <h2>
                                            Panel <span class="fw-300">Pill</span>
                                        </h2>
                                        <div class="panel-toolbar pr-3">
                                            <ul class="nav nav-pills border-bottom-0" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#pill_default-1" role="tab">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#pill_default-2" role="tab">Set</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" data-toggle="tab" href="#" role="tab">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                <p>You can easily add <code>.nav-pills</code> to <code>.panel-hdr</code>, consider adding dropdown button if you have a lot of nav-pills. Check out the Tabs & pills page for more details</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-14" class="panel">
                                    <div class="panel-hdr border-faded border-top-0 border-right-0 border-left-0 shadow-0">
                                        <h2>
                                            Panel <span class="fw-300">progress bars</span>
                                        </h2>
                                        <div class="progress progress-lg mr-3 width-sm rounded bg-warning-200">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Progress bars can be added to <code>.panel-hdr</code> and footer area. You can also customize the colors to make it stand out
                                            </div>
                                        </div>
                                        <!-- panel footer with utility classes -->
                                        <div class="panel-content py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                                            <div class="progress progress-sm w-100 shadow-inset-2">
                                                <div class="progress-bar bg-info-300 bg-info-gradient" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-15" class="panel">
                                    <div class="panel-hdr text-primary">
                                        <h2>
                                            <span class="icon-stack fs-xxl mr-2">
                                                <i class="base base-7 icon-stack-3x opacity-100 color-primary-500"></i>
                                                <i class="base base-7 icon-stack-2x opacity-100 color-primary-300"></i>
                                                <i class="fal fa-cog icon-stack-1x opacity-100 color-white fa-spin"></i>
                                            </span>
                                            Icons
                                            <span class="fw-300">
                                                <i>Panel</i>
                                            </span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"><i class="fal fa-window-minimize"></i></button>
                                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"><i class="fal fa-expand"></i></button>
                                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"><i class="fal fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-container collapse show" style="">
                                        <div class="panel-content">
                                            <div class="panel-tag">
                                                Easily replace panel buttons with icons using utility classes. Over 2500 icons to choose from
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
        <script type="text/javascript">
            var userSelectColor = $('.js-update-hdr-color > [data-class]');
            $('.js-update-hdr-color > [data-class]').on('click', function()
            {
                var hdrColor = $(this).attr('data-class')
                $(this).parents('.panel').find('.panel-hdr').removeClass().addClass("panel-hdr " + hdrColor);
            })

        </script>
    </body>
</html>
