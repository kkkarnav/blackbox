<?php

require_once 'init.php';

$_title = 'List filter - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_list_filter';
$_head = '';
$_description = 'Allow any lists to be filtered via the included filter plugin. Very easy to setup, no programming needed!';

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
                            <li class="breadcrumb-item active">List filter</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> List filter
                                <small>
                                    Allow any lists to be filtered via the included filter plugin. Very easy to setup, no programming needed!
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Default list filter-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>List filter</i></span>
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
                                                To create a list filter, you will need to first create an <code>input</code> and an list, assigning ID to each. For each list item you will add related filter tags separated by spaces <code>data-filter-tags="*"</code> which will be used to filter out the list item. Activate the filter tags by initlizing the script <code>initApp.listFilter($('list_id'), $('input_id'));</code>
                                            </div>
                                            <div id="js_default_list">
                                                <div class="input-group mb-g">
                                                    <input type="text" class="form-control form-control-lg shadow-inset-2" id="js_default_list_filter" placeholder="Filter list">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <i class="fal fa-search fs-xl"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="reports file">Reports</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="analytics graphs">Analytics</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="export download">Export</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="storage">Storage</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Filter accordions-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Filter <span class="fw-300"><i>Accordions</i></span>
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
                                                You can arrange your filters like so to filter accordion headings
                                            </div>
                                            <div class="border bg-light rounded-top">
                                                <div class="form-group p-2 m-0 rounded-top">
                                                    <input type="text" class="form-control form-control-lg shadow-inset-2 m-0" id="js_list_accordion_filter" placeholder="Filter accordion">
                                                </div>
                                                <div id="js_list_accordion" class="accordion accordion-hover accordion-clean">
                                                    <div class="card border-top-left-radius-0 border-top-right-radius-0">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_list_accordion-a" aria-expanded="true" data-filter-tags="settings">
                                                                <i class="fal fa-cog width-2 fs-xl"></i>
                                                                Settings
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-chevron-up fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-chevron-down fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_list_accordion-a" class="collapse show" data-parent="#js_list_accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_list_accordion-b" aria-expanded="false" data-filter-tags="merge">
                                                                <i class="fal fa-code-merge width-2 fs-xl"></i>
                                                                Merge reports
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-chevron-up fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-chevron-down fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_list_accordion-b" class="collapse" data-parent="#js_list_accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_list_accordion-c" aria-expanded="false" data-filter-tags="backup">
                                                                <i class="fal fa-cloud-upload-alt width-2 fs-xl"></i>
                                                                Backup reports
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-chevron-up fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-chevron-down fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_list_accordion-c" class="collapse" data-parent="#js_list_accordion">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="filter-message js-filter-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Custom response message-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Custom <span class="fw-300"><i>response message</i></span>
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
                                                To add a response message for the filter input, you can add a container with the class <code>.filter-message.js-filter-message</code> right after the list group
                                            </div>
                                            <div class="frame-heading">
                                                Typing something to see the response message
                                            </div>
                                            <div class="bg-warning-100 border border-warning rounded">
                                                <div class="input-group p-2 mb-0">
                                                    <input type="text" class="form-control form-control-lg shadow-inset-2 bg-warning-50 border-warning" id="js-list-msg-filter" placeholder="Filter list">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text bg-warning-500 border-warning">
                                                            <i class="fal fa-search fs-xl"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul id="js-list-msg" class="list-group px-2 pb-2">
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="reports file">Reports</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="analytics graphs">Analytics</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="export download">Export</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span data-filter-tags="storage">Storage</span>
                                                    </li>
                                                </ul>
                                                <div class="filter-message js-filter-message mt-0 fs-sm"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Nested filter search-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Nested <span class="fw-300"><i>filter</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="bg-success-900 rounded bg-info-gradient">
                                                <div class="d-flex position-relative py-3 px-4">
                                                    <i class="fal fa-search color-success-700 position-absolute pos-left fs-lg px-3 py-2 mt-1 ml-4"></i>
                                                    <input type="text" id="js_nested_list_filter" class="form-control shadow-inset-1 pl-6 border-success" placeholder="Filter nested items (e.g buttons, chart)">
                                                </div>
                                                <!-- nav-menu-reset will reset the font colors -->
                                                <ul id="js_nested_list" class="nav-menu nav-menu-reset nav-menu-compact bg-success-900 bg-info-gradient mb-sm-4 mb-md-0 rounded" data-nav-accordion="true">
                                                    <li class="open active">
                                                        <a href="#" data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                                            <span class="nav-link-text">User Interface </span>
                                                            <strong class="dl-ref bg-primary-500">&nbsp;1.0&nbsp;</strong>
                                                        </a>
                                                        <ul style="display:block;">
                                                            <li class="active">
                                                                <a href="#" data-filter-tags="user interface buttons">
                                                                    <span class="nav-link-text">
                                                                        Buttons
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="user interface compass">
                                                                    <span class="nav-link-text">
                                                                        Compass
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="user interface action dropdown navigation sidebars">
                                                                    <span class="nav-link-text">
                                                                        Action
                                                                    </span>
                                                                    <strong class="dl-ref bg-primary-500">&nbsp;1.3&nbsp;</strong>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" data-filter-tags="user interface action dropdown">
                                                                            <span class="nav-link-text">
                                                                                Dropdown
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" data-filter-tags="user interface action navigation">
                                                                            <span class="nav-link-text">
                                                                                Navigation
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" data-filter-tags="user interface action sidebars">
                                                                            <span class="nav-link-text">
                                                                                Sidebars
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-filter-tags="graphs flot chart pie sythentic graphs polygraphs">
                                                            <span class="nav-link-text">
                                                                Graphs
                                                            </span>
                                                            <strong class="dl-ref bg-primary-500">&nbsp;2.0&nbsp;</strong>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-filter-tags="graphs flot chart">
                                                                    <span class="nav-link-text">
                                                                        Flot chart
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="graphs pie chart">
                                                                    <span class="nav-link-text">
                                                                        Pie charts
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="graphs sythentic">
                                                                    <span class="nav-link-text">
                                                                        Sythentic graphs
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="graphs flot polygraphs">
                                                                    <span class="nav-link-text">
                                                                        Polygraphs
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-filter-tags="forms controls loaders other elements buttons input checkbox">
                                                            <span class="nav-link-text">Forms </span>
                                                            <strong class="dl-ref bg-primary-500">&nbsp;3.0&nbsp;</strong>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-filter-tags="forms controls">
                                                                    <span class="nav-link-text"> Controls</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="forms loaders">
                                                                    <span class="nav-link-text"> Loaders</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-filter-tags="forms other elements buttons input checkbox">
                                                                    <span class="nav-link-text">
                                                                        Other elements
                                                                    </span>
                                                                    <strong class="dl-ref bg-primary-500">&nbsp;3.3&nbsp;</strong>
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#" data-filter-tags="forms other elements buttons">
                                                                            <span class="nav-link-text">
                                                                                Buttons
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" data-filter-tags="forms other elements input">
                                                                            <span class="nav-link-text">
                                                                                Input
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li data-filter-tags="forms other elements checkbox">
                                                                        <a href="#">
                                                                            <span class="nav-link-text">
                                                                                Checkbox
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="filter-message js-filter-message m-0 text-left pl-4 py-3 fw-500"></div>
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
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
            //accordion filter
            initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
            // nested list filter
            initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
            //init navigation 
            initApp.buildNavigation($('#js_nested_list'));

        </script>
    </body>
</html>
