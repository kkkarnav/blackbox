<?php

require_once 'init.php';

$_title = 'Color Picker - Form Plugins - SmartAdmin v4.6.3';
$_active_nav = 'form_plugins_colorpicker';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.css">
';
$_description = 'Bootstrap Colorpicker is a modular color picker plugin for Bootstrap';

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
                            <li class="breadcrumb-item">Form Plugins</li>
                            <li class="breadcrumb-item active">Color Picker</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-credit-card-front'></i> Color Picker<sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Bootstrap Colorpicker is a modular color picker plugin for Bootstrap
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
                                        <p>A nifty plugin that lets you select colors on the fly. The color pallet is auto generated or can be configured manually. The selection tool is loaded inside bootstrap's popover component, allowing you to load it from any direction, even on bootstrap modals</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Bootstrap Colorpicker's <a href="https://farbelous.io/bootstrap-colorpicker/" target="_blank">Official Documentation</a>
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
                                            Simple <span class="fw-300"><i>usage</i></span>
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
                                                Most simple example, with any options or color information.
                                            </div>
                                            <input id="cp1" type="text" class="form-control input-lg" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Setting <span class="fw-300"><i>initial color</i></span>
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
                                                <p>
                                                    The initial color can be specified in 3 ways: input value, <var>data-color</var> attribute
                                                    and programmatically with the <var>color</var> constructor option.<br>
                                                    This demo is also showing how to use the input addon component to display the color.
                                                </p>
                                                <p>
                                                    The used initial color has this precedence order when present and not empty:
                                                    <var>color</var> option, input value, input <var>data-color</var> attribute,
                                                    colopicker element <var>data-color</var> attribute.
                                                </p>
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div id="cp2" class="input-group" title="Using input value">
                                                    <input type="text" class="form-control input-lg" value="#DD0F20FF" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                                <div id="cp3a" class="input-group" data-color="rgb(241, 138, 49)" title="Using data-color attribute in the colorpicker element">
                                                    <input type="text" class="form-control input-lg" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                                <div id="cp3b" class="input-group" title="Using data-color attribute in the input">
                                                    <input type="text" class="form-control input-lg" data-color="hsl(56, 93%, 63%)" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                                <div id="cp4" class="input-group" title="Using color option">
                                                    <input type="text" class="form-control input-lg" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Automatic <span class="fw-300"><i>format detection</i></span>
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
                                                Whenever the <code>format</code> option is <var>'auto'</var>, the first parsed color format will be detected and used as default, but when the option equals <var>null</var> (default), the format is recalculated every time. You can see the differences here, one of them allowing you to adjust the alpha channel:
                                            </div>
                                            <div class="demo-v-spacing">
                                                <div id="cp5a" class="input-group" title="Using format option">
                                                    <input type="text" class="form-control input-lg" value="#305AA2" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                                <div id="cp5b" class="input-group" title="Using format option">
                                                    <input type="text" class="form-control input-lg" value="#305AA2" />
                                                    <span class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Force <span class="fw-300"><i>format </i></span>
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
                                                If defined, the format option forces an specific format, ignoring the original one.
                                            </div>
                                            <div id="cp5c" class="input-group" title="Using format option">
                                                <input type="text" class="form-control input-lg" value="#305AA2" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Disabled / Enabled <span class="fw-300"><i>states</i></span>
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
                                                When the input is disabled, the colorpicker also gets disabled.
                                            </div>
                                            <div id="cp5d" title="Using format option" class="mb-g">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-lg" value="rgb(203, 38, 192)" disabled />
                                                </div>
                                            </div>
                                            <button id="cp5d_toggle" class="btn btn-info">Toggle Enable/Disable</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Horizontal <span class="fw-300"><i>mode</i></span>
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
                                                In this mode the hue and alpha bars are horizontal instead of vertical.
                                            </div>
                                            <div id="cp6" class="input-group" title="Using horizontal option">
                                                <input type="text" class="form-control input-lg" value="#6D2781" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Disable <span class="fw-300"><i>alpha channel</i></span>
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
                                                When the alpha channel is disabled with the <code>useAlpha</code> option, the alpha bar will be hidden and the color object will be restricted to opaque (alpha = 1).
                                            </div>
                                            <div id="cp9" class="input-group">
                                                <input type="text" class="form-control input-lg" value="rgba(248, 235, 72, 0.5)" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7a" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Add <span class="fw-300"><i>complementary color swatches</i></span>
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
                                                The colorpicker ColorItem class uses and comes bundled with Qix Color, a great color parsing library with a friendly API that allows you to manipulate and convert the color. ColorItem is just an abstraction layer on top of the library, which is more convenient for Bootstrap Colorpicker. In this example we use the ColorItem API to add color swatches based on a tetrad of the selected color
                                            </div>
                                            <div id="cp16" data-color="#886ab5">
                                                <input type="text" class="form-control" style="width:auto" /> <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Inline <span class="fw-300"><i>containerized mode </i></span>
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
                                                In this mode the colorpicker widget is an inline element and it is also placed inside the element (otherwise it is placed in the body). This example also shows the two ways of using the container option.
                                            </div>
                                            <div id="cp7" style="border:1px dashed #DD0F20;">Inner inline &rightarrow;</div>
                                            <hr>
                                            <div id="cp8_container">
                                                <span id="cp8" style="border:1px dashed #F18A31;">Sibling inline &rightarrow;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Disable <span class="fw-300"><i>hexadecimal hash</i></span>
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
                                                This example shows how to avoid the input to have the hexadecimal hash prefix, using the useHashPrefix option
                                            </div>
                                            <div id="cp10" class="input-group">
                                                <input type="text" class="form-control input-lg" value="#16813d" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Transparent <span class="fw-300"><i>Support</i></span>
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
                                                Example showing the <code>transparent</code> named color support
                                            </div>
                                            <div id="cp12" class="input-group">
                                                <input type="text" class="form-control input-lg" value="transparent" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Use <span class="fw-300"><i>a custom fallback color</i></span>
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
                                                Use a predefined fallback color with the <code>fallbackColor</code> option, whenever the given one is invalid
                                            </div>
                                            <div id="cp11" class="input-group">
                                                <input type="text" class="form-control input-lg" value="invalid color" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-12" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Panel <span class="fw-300"><i>Title</i></span>
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
                                                Panel tag <code>code</code>
                                            </div>
                                            Text
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-13" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Disable <span class="fw-300"><i>invalid color auto replacement </i></span>
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
                                                By default, the <code>autoInputFallback</code> option is enabled, meaning that
                                                whenever there is an invalid color typed in the input, it will be automatically
                                                replaced by a valid color or the fallback one
                                            </div>
                                            <div id="cp13" class="input-group">
                                                <input type="text" class="form-control input-lg" value="I am an invalid color" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-14" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Adjust <span class="fw-300"><i>popover options</i></span>
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
                                                You can use any Bootstrap Popover options (except: trigger, content and html) using the "popover" property in the colorpicker options
                                            </div>
                                            <div id="cp14" class="input-group">
                                                <input type="text" class="form-control input-lg" value="hsl(103, 70%, 64%)" />
                                                <span class="input-group-append">
                                                    <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-15" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Modal <span class="fw-300"><i>Example</i></span>
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
                                                You can use any Bootstrap Popover options (except: trigger, content and html) using the "popover" property in the colorpicker options
                                            </div>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Launch demo modal
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input id="cp15" type="text" class="form-control input-lg" value="rgb(130, 44, 29)" />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-15a" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Customize <span class="fw-300"><i>template</i></span>
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
                                                You can use any Bootstrap Popover options (except: trigger, content and html) using the "popover" property in the colorpicker options
                                            </div>
                                            <div id="cp17" data-color="#305AA2"></div>
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
        <script src="<?= ASSETS_URL ?>/js/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.js"></script>
        <script>
            $(document).ready(function()
            {
                $('#cp1').colorpicker();

                $('#cp2, #cp3a, #cp3b').colorpicker();
                $('#cp4').colorpicker(
                {
                    "color": "#16813D"
                });

                $('#cp5a').colorpicker(
                {
                    format: 'auto'
                });

                $('#cp5b').colorpicker(
                {
                    format: null
                });

                $('#cp5c').colorpicker(
                {
                    format: "rgb"
                });

                //Disabled / Enabled states
                $('#cp5d').colorpicker(
                {
                    inline: true
                });
                $('#cp5d_toggle').on('click', function()
                {
                    var cp = $('#cp5d').colorpicker('colorpicker');
                    if (cp.isEnabled())
                    {
                        cp.disable();
                    }
                    else
                    {
                        cp.enable();
                    }
                });

                //Horizontal mode
                $('#cp6').colorpicker(
                {
                    horizontal: true
                });

                //
                $('#cp7').colorpicker(
                {
                    color: '#DD0F20',
                    inline: true,
                    container: true
                });
                $('#cp8').colorpicker(
                {
                    color: '#F18A31',
                    inline: true,
                    container: '#cp8_container'
                });
                $('#cp9').colorpicker(
                {
                    useAlpha: false
                });
                $('#cp10').colorpicker(
                {
                    useHashPrefix: false
                });
                $('#cp11').colorpicker(
                {
                    fallbackColor: 'rgb(48, 90, 162)'
                });
                $('#cp12').colorpicker();
                $('#cp13').colorpicker(
                {
                    autoInputFallback: false
                });
                $('#cp14').colorpicker(
                {
                    popover:
                    {
                        title: 'Adjust the color',
                        placement: 'top'
                    }
                });
                $('#cp15').colorpicker();
                //add complimentary swatchers
                $('#cp16')
                    .colorpicker(
                    {
                        inline: true,
                        container: true,
                        extensions: [
                        {
                            name: 'swatches',
                            options:
                            {
                                colors:
                                {
                                    'tetrad1': '#000',
                                    'tetrad2': '#000',
                                    'tetrad3': '#000',
                                    'tetrad4': '#000'
                                },
                                namesAsValues: false
                            }
                        }]
                    })
                    .on('colorpickerChange colorpickerCreate', function(e)
                    {
                        var colors = e.color.generate('tetrad');

                        colors.forEach(function(color, i)
                        {
                            var colorStr = color.string(),
                                swatch = e.colorpicker.picker
                                .find('.colorpicker-swatch[data-name="tetrad' + (i + 1) + '"]');

                            swatch
                                .attr('data-value', colorStr)
                                .attr('title', colorStr)
                                .find('> i')
                                .css('background-color', colorStr);
                        });
                    });

                //
                $('#cp17').colorpicker(
                {
                    inline: true,
                    container: true,
                    template: '<div class="colorpicker">' +
                        '<div class="colorpicker-saturation"><i class="colorpicker-guide"></i></div>' +
                        '<div class="colorpicker-hue"><i class="colorpicker-guide"></i></div>' +
                        '<div class="colorpicker-alpha">' +
                        '   <div class="colorpicker-alpha-color"></div>' +
                        '   <i class="colorpicker-guide"></i>' +
                        '</div>' +
                        '<div class="colorpicker-bar"><button class="btn btn-danger">Button</button></div>' +
                        '</div>'
                });

            });

        </script>
    </body>
</html>
