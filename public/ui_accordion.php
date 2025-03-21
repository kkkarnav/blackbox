<?php

require_once 'init.php';

$_title = 'Accordion - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_accordion';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Using the card component, you can extend the default collapse behavior to create an accordion. To properly achieve the accordion style, be sure to use .accordion as a wrapper.';

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
                            <li class="breadcrumb-item active">Accordion</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Accordion
                                <small>
                                    Using the card component, you can extend the default collapse behavior to create an accordion. To properly achieve the accordion style, be sure to use .accordion as a wrapper.
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
                                        <br>
                                        Be sure to add <code>aria-expanded</code> to the control element. This attribute explicitly conveys the current state of the collapsible element tied to the control to screen readers and similar assistive technologies. If the collapsible element is closed by default, the attribute on the control element should have a value of <code>aria-expanded="false"</code>. If you’ve set the collapsible element to be open by default using the <code>show</code> class, set <code>aria-expanded="true"</code> on the control instead.
                                        <br>
                                        <br>
                                        Learn more about this plugin on bootstrap's <a href="https://getbootstrap.com/docs/4.4/components/collapse/#accordion-example" target="_blank">official documentation</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Default <span class="fw-300"><i>Accordion</i></span>
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
                                                Just add <code>data-toggle="collapse"</code> and a <code>data-target</code> to the element to automatically assign control of one or more collapsible elements. The <code>data-target</code> attribute accepts a CSS selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you’d like it to default open, add the additional class <code>show</code>.
                                                <br>
                                                <br>
                                                To add accordion-like group management to a collapsible area, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.
                                            </div>
                                            <div class="accordion" id="js_demo_accordion-2">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-2a" aria-expanded="true">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-2a" class="collapse show" data-parent="#js_demo_accordion-2">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-2b" aria-expanded="false">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-2b" class="collapse" data-parent="#js_demo_accordion-2">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-2c" aria-expanded="false">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-2c" class="collapse" data-parent="#js_demo_accordion-2">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Accordion <span class="fw-300"><i>Outline</i></span>
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
                                                Change the style of your accordion by adding class <code>.accordion-outline</code> to <code>.accordion</code>
                                            </div>
                                            <div class="accordion accordion-outline" id="js_demo_accordion-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-3a" aria-expanded="true">
                                                            <i class="fal fa-file-medical-alt width-2 fs-xl"></i>
                                                            Medical Records
                                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-3a" class="collapse show" data-parent="#js_demo_accordion-3">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-3b" aria-expanded="false">
                                                            <i class="fal fa-video width-2 fs-xl"></i>
                                                            Video logs
                                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-3b" class="collapse" data-parent="#js_demo_accordion-3">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-3c" aria-expanded="false">
                                                            <i class="fal fa-first-aid width-2 fs-xl"></i>
                                                            Medical history
                                                            <span class="ml-auto">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-3c" class="collapse" data-parent="#js_demo_accordion-3">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Accordion <span class="fw-300"><i>Clean layout</i></span>
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
                                                Give your accordion a clean look by adding class <code>.accordion-clean</code> to <code>.accordion</code>
                                            </div>
                                            <div class="accordion accordion-clean" id="js_demo_accordion-1">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-1a" aria-expanded="true">
                                                            <span class="mr-2">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                            Application settings
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-1a" class="collapse show" data-parent="#js_demo_accordion-1">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-1b" aria-expanded="false">
                                                            <span class="mr-2">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                            User management
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-1b" class="collapse" data-parent="#js_demo_accordion-1">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-1c" aria-expanded="false">
                                                            <span class="mr-2">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                </span>
                                                            </span>
                                                            User groups
                                                        </a>
                                                    </div>
                                                    <div id="js_demo_accordion-1c" class="collapse" data-parent="#js_demo_accordion-1">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
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
                                            Accordion <span class="fw-300"><i>active state icons</i></span>
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
                                                Add some navigation to a card’s header (or block) with built-in nav components. You can reveal or hide elements during <code>.collapse</code> state using the classes <code>.collapsed-reveal</code> and <code>.collapsed-hidden</code>
                                                <br><br>
                                                <strong>Make sure the <code>.collapsed-*</code> classes are inside the <code>data-toggle="collapse"</code> element or adjacent to it</strong>
                                            </div>
                                            <div class="frame-wrap w-100">
                                                <div class="accordion" id="js_demo_accordion-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-4a" aria-expanded="true">
                                                                Email marketing
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-minus-circle text-danger fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-plus-circle text-success fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_demo_accordion-4a" class="collapse show" data-parent="#js_demo_accordion-4">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-4b" aria-expanded="false">
                                                                Online compaign
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-minus-circle text-danger fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-plus-circle text-success fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_demo_accordion-4b" class="collapse" data-parent="#js_demo_accordion-4">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-4c" aria-expanded="false">
                                                                Electronic Data Management
                                                                <span class="ml-auto">
                                                                    <span class="collapsed-reveal">
                                                                        <i class="fal fa-minus-circle text-danger fs-xl"></i>
                                                                    </span>
                                                                    <span class="collapsed-hidden">
                                                                        <i class="fal fa-plus-circle text-success fs-xl"></i>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div id="js_demo_accordion-4c" class="collapse" data-parent="#js_demo_accordion-4">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Accordion <span class="fw-300"><i>hover</i></span>
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
                                                Adding a hover effect adds nice element to your accordion. Achieve this by adding class <code>.accordion-hover</code> to <code>.accordion</code>
                                            </div>
                                            <div class="accordion accordion-hover" id="js_demo_accordion-5">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-5a" aria-expanded="true">
                                                            <i class="fal fa-cog width-2 fs-xl"></i>
                                                            Report settings
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
                                                    <div id="js_demo_accordion-5a" class="collapse show" data-parent="#js_demo_accordion-5">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5b" aria-expanded="false">
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
                                                    <div id="js_demo_accordion-5b" class="collapse" data-parent="#js_demo_accordion-5">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-5c" aria-expanded="false">
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
                                                    <div id="js_demo_accordion-5c" class="collapse" data-parent="#js_demo_accordion-5">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                                            Nested <span class="fw-300"><i>accordions</i></span>
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
                                                <strong>Caution!</strong> Nested accordions will inherit the properties of its parent. In the example below we use the default accordion for parent and a different style for children.
                                            </div>
                                            <div class="accordion" id="js_demo_accordion-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title" data-toggle="collapse" data-target="#js_demo_accordion-6a" aria-expanded="true">
                                                            <div class="d-flex flex-row align-items-center">
                                                                <span class="mr-2">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                                                                </span>
                                                                <div class="info-card-text">
                                                                    <div class="text-truncate text-truncate-lg">Dr. Codex Lantern</div>
                                                                    <span class="text-truncate text-truncate-md">drlantern@gotbootstrap.com</span>
                                                                </div>
                                                            </div>
                                                            <span class="ml-auto align-self-start">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="js_demo_accordion-6a" class="collapse show" data-parent="#js_demo_accordion-6">
                                                        <div class="card-body">
                                                            <!-- nested -->
                                                            <div class="accordion" id="js_demo_accordion-7">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <a href="javascript:void(0);" class="card-title px-3 py-2 bg-success-600 text-white" data-toggle="collapse" data-target="#js_demo_accordion-7a" aria-expanded="true">
                                                                            Bloodworks
                                                                            <span class="ml-auto">
                                                                                <span class="collapsed-reveal">
                                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                                </span>
                                                                                <span class="collapsed-hidden">
                                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div id="js_demo_accordion-7a" class="collapse show" data-parent="#js_demo_accordion-7">
                                                                        <div class="card-body bg-success-50 p-3">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <a href="javascript:void(0);" class="card-title px-3 py-2 collapsed bg-warning-500 text-dark" data-toggle="collapse" data-target="#js_demo_accordion-7b" aria-expanded="false">
                                                                            Xray reports
                                                                            <span class="ml-auto">
                                                                                <span class="collapsed-reveal">
                                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                                </span>
                                                                                <span class="collapsed-hidden">
                                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div id="js_demo_accordion-7b" class="collapse" data-parent="#js_demo_accordion-7">
                                                                        <div class="card-body bg-warning-50 p-3">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <a href="javascript:void(0);" class="card-title px-3 py-2 collapsed bg-info-700 text-white" data-toggle="collapse" data-target="#js_demo_accordion-7c" aria-expanded="false">
                                                                            ECG
                                                                            <span class="ml-auto">
                                                                                <span class="collapsed-reveal">
                                                                                    <i class="fal fa-minus fs-xl"></i>
                                                                                </span>
                                                                                <span class="collapsed-hidden">
                                                                                    <i class="fal fa-plus fs-xl"></i>
                                                                                </span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div id="js_demo_accordion-7c" class="collapse" data-parent="#js_demo_accordion-7">
                                                                        <div class="card-body bg-info-50 p-3">
                                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title collapsed" data-toggle="collapse" data-target="#js_demo_accordion-6b" aria-expanded="false">
                                                            <div class="d-flex flex-row align-items-center">
                                                                <span class="mr-2">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="rounded-circle profile-image" alt="Jessica Milano">
                                                                </span>
                                                                <div class="info-card-text">
                                                                    <div class="text-truncate text-truncate-lg">Jessica Milano</div>
                                                                    <span class="text-truncate text-truncate-md">jmilano@gotbootstrap.com</span>
                                                                </div>
                                                            </div>
                                                            <span class="ml-auto align-self-start">
                                                                <span class="collapsed-reveal">
                                                                    <i class="fal fa-chevron-up fs-xl"></i>
                                                                </span>
                                                                <span class="collapsed-hidden">
                                                                    <i class="fal fa-chevron-down fs-xl"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="js_demo_accordion-6b" class="collapse" data-parent="#js_demo_accordion-6">
                                                        <div class="card-body">
                                                            <div class="alert alert-danger mb-0">
                                                                <strong>
                                                                    Oops!
                                                                </strong>
                                                                Looks like there are no reports available for this user
                                                            </div>
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
    </body>
</html>
