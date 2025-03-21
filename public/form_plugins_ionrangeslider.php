<?php

require_once 'init.php';

$_title = 'Ion.RangeSlider - Form Plugins - SmartAdmin v4.6.3';
$_active_nav = 'form_plugins_ionrangeslider';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/formplugins/ion-rangeslider/ion-rangeslider.css">
';
$_description = 'Easy to use, flexible and responsive range slider with skin support';

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
                            <li class="breadcrumb-item active">Ion.RangeSlider</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-credit-card-front'></i> Ion.RangeSlider<sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Easy to use, flexible and responsive range slider with skin support
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
                                        <p>Easy to use, flexible and responsive range slider comes with skin support (6 skins included). Features include two types of sliders (1 or double), support for negative and fractional values. Ability to setup custom step and snap to grid option. Customizable grid values and the ability to add port & prefixes. Slider writes its value right into input value field, making it easy to use in any HTML form. You can have many sliders in one page without any conflict.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Ion.RangeSlider's <a href="http://ionden.com/a/plugins/ion.rangeSlider/index.html" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-g text-center">
                            <h5>Skin Options</h5>
                            <div class="js-toggle-skin btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-default active">
                                    <input type="radio" name="skinchange" id="skin-1" checked="" value="irs--flat">
                                    <span class="hidden-sm-down">Flat</span><span class="hidden-sm-up">Opt 1</span>
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="skinchange" id="skin-2" value="irs--big">
                                    <span class="hidden-sm-down">Big</span><span class="hidden-sm-up">Opt 2</span>
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="skinchange" id="skin-3" value="irs--modern">
                                    <span class="hidden-sm-down">Modern</span><span class="hidden-sm-up">Opt 3</span>
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="skinchange" id="skin-4" value="irs--sharp">
                                    <span class="hidden-sm-down">Sharp</span><span class="hidden-sm-up">Opt 4</span>
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="skinchange" id="skin-5" value="irs--round">
                                    <span class="hidden-sm-down">Round</span><span class="hidden-sm-up">Opt 5</span>
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="skinchange" id="skin-6" value="irs--square">
                                    <span class="hidden-sm-down">Square</span><span class="hidden-sm-up">Opt 6</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-1" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Simple start <span class="fw-300"><i>basic params</i></span>
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
                                                        Set type to double, specify range, show grid and add a prefix <code>"$"</code>
                                                    </div>
                                                    <input id="demo_1" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-2" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Set up <span class="fw-300"><i>range and step</i></span>
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
                                                        Force fractional values, using fractional step 0.1
                                                    </div>
                                                    <input id="demo_2" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-3" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Using <span class="fw-300"><i>array of custom values</i></span>
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
                                                        Values array could be anything, even strings
                                                    </div>
                                                    <input id="demo_3" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-4" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Change <span class="fw-300"><i>visual look of numbers (prettify)</i></span>
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
                                                        Use your own prettify function to transform numbers whatever you like
                                                    </div>
                                                    <input id="demo_4" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-5" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Decorating <span class="fw-300"><i>with prefixes, postfixes</i></span>
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
                                                        Using prefix and postfix at the same time, taking care of labels collision
                                                    </div>
                                                    <input id="demo_5" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-6" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Manipulating <span class="fw-300"><i>UI</i></span>
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
                                                        Disable enable any UI elements
                                                    </div>
                                                    <input id="demo_6" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-7" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Customising <span class="fw-300"><i>Grid</i></span>
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
                                                        Manipulate the grid using build in parameters
                                                    </div>
                                                    <input id="demo_7" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-8" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Lock <span class="fw-300"><i>and restrict handles</i></span>
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
                                                        Limit movement of a handle
                                                    </div>
                                                    <input id="demo_8" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div id="panel-9" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Manipulating <span class="fw-300"><i>interval</i></span>
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
                                                        Restrict interval size and/or drag it
                                                    </div>
                                                    <input id="demo_9" type="text" value="" class="d-none" tabindex="-1" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div id="panel-10" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Working <span class="fw-300"><i>with dates</i></span>
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
                                                        Restrict interval size and/or drag it
                                                    </div>
                                                    <input id="demo_10" type="text" value="" class="d-none" tabindex="-1" readonly="">
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
        <script src="<?= ASSETS_URL ?>/js/formplugins/ion-rangeslider/ion-rangeslider.js"></script>
        <script>
            $(document).ready(function()
            {

                $('input[type=radio][name=skinchange]').change(function()
                {
                    $('.irs').removeClassPrefix('irs--').addClass(this.value);
                });

                var ionskin = "flat";

                $("#demo_1").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    grid: true,
                    min: 0,
                    max: 1000,
                    from: 200,
                    to: 800,
                    prefix: "$"
                });

                $("#demo_2").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    grid: true,
                    min: -12.8,
                    max: 12.8,
                    from: -3.2,
                    to: 3.2,
                    step: 0.1
                });

                $("#demo_3").ionRangeSlider(
                {
                    skin: ionskin,
                    grid: true,
                    from: new Date().getMonth(),
                    values: [
                        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                    ]
                });

                function my_prettify(n)
                {
                    var num = Math.log2(n);
                    return n + " → " + (+num.toFixed(3));
                }

                $("#demo_4").ionRangeSlider(
                {
                    skin: ionskin,
                    grid: true,
                    min: 1,
                    max: 1000,
                    from: 100,
                    prettify: my_prettify
                });

                $("#demo_5").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    grid: true,
                    min: 0,
                    max: 100,
                    from: 47,
                    to: 53,
                    prefix: "Weight: ",
                    postfix: " lbs",
                    decorate_both: true // false,
                    // values_separator: " to "
                });

                $("#demo_6").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    min: -100000,
                    max: 100000,
                    from: -100000,
                    to: 100000,
                    step: 10000,
                    grid: true, // show/hide grid
                    force_edges: false, // force UI in the box
                    hide_min_max: false, // show/hide MIN and MAX labels
                    hide_from_to: false, // show/hide FROM and TO labels
                    block: false // block instance from changing
                })

                //Customising Grid
                $("#demo_7").ionRangeSlider(
                {
                    skin: ionskin,
                    min: 0,
                    max: 10000,
                    from: 777,
                    step: 1, // default 1 (set step)
                    grid: true, // default false (enable grid)
                    grid_num: 4, // default 4 (set number of grid cells)
                    grid_snap: false // default false (snap grid to step)
                });

                //Lock and restrict handles
                $("#demo_8").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "single",
                    min: 0,
                    max: 1000,
                    from: 500,
                    grid: true,
                    from_min: 250, // set min position for FROM handle (replace FROM to TO to change handle)
                    from_max: 750, // set max position for FROM handle
                    from_shadow: true // highlight restriction for FROM handle
                });

                //Manipulating interval
                $("#demo_9").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    min: 0,
                    max: 1000,
                    from: 400,
                    to: 600,
                    drag_interval: true,
                    min_interval: 100,
                    max_interval: 700
                });

                //Working with dates
                var lang = "en-US";
                var year = 2018;

                function dateToTS(date)
                {
                    return date.valueOf();
                }

                function tsToDate(ts)
                {
                    var d = new Date(ts);

                    return d.toLocaleDateString(lang,
                    {
                        year: 'numeric',
                        month: 'numeric',
                        day: 'numeric'
                    });
                }

                //Working with dates
                $("#demo_10").ionRangeSlider(
                {
                    skin: ionskin,
                    type: "double",
                    grid: true,
                    min: dateToTS(new Date(year, 10, 1)),
                    max: dateToTS(new Date(year, 11, 1)),
                    from: dateToTS(new Date(year, 10, 8)),
                    to: dateToTS(new Date(year, 10, 23)),
                    prettify: tsToDate
                });



            });

        </script>
    </body>
</html>
