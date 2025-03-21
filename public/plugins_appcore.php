<?php

require_once 'init.php';

$_title = 'App.Core - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_appcore';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'The heart and soul of SmartAdmin - Responsive WebApp';

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
                            <li class="breadcrumb-item">Core Plugins</li>
                            <li class="breadcrumb-item active">App.Core</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> App.core.js <sup class='badge badge-danger fw-500'>CORE</sup>
                                <small>
                                    The heart and soul of SmartAdmin - Responsive WebApp
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Debugging console.log-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Debugging <span class="fw-300"><i>console.log</i></span>
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
                                                view the app.core.js debugger in realtime; assists in the detection and correction of errors
                                            </div>
                                            <div id="app-eventlog" class="alert alert-primary p-1 h-auto mb-3"></div>
                                            <div class="d-flex">
                                                <div>
                                                    <div class="custom-control d-flex custom-switch">
                                                        <input id="eventlog-switch" type="checkbox" class="custom-control-input" checked="checked">
                                                        <label class="custom-control-label fw-500" for="eventlog-switch">Debugger Active</label>
                                                    </div>
                                                </div>
                                                <div class="flex-1 text-right">
                                                    <a href="#" class="btn btn-sm btn-outline-primary mr-1 ml-0" data-toggle="modal" data-target=".js-modal-settings">
                                                        Toggle Settings
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-danger" onclick="clearlogText(); return false;">
                                                        Clear Log
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--App api-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            App <span class="fw-300"><i>API</i></span>
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
                                                Control options for the app API
                                            </div>
                                            <table class="table table-hover table-bordered m-0">
                                                <thead class="thead-themed">
                                                    <tr>
                                                        <th>
                                                            Usage
                                                        </th>
                                                        <th>
                                                            Returns
                                                        </th>
                                                        <th>
                                                            Description
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.saveSettings()">initApp.saveSettings()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">null</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Pushes selected classes from the <code>body</code> tag to localstorage/database
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.resetSettings()">initApp.resetSettings()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Remove classes from <code>body</code> & saves to localstorage/database
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.factoryReset()">initApp.factoryReset()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Clears your localStorage effectively removing all settings and panel configs
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.accessIndicator()">initApp.accessIndicator()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Indicator for Save Settings (mostly aesthetics)
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.pushSettings()">initApp.pushSettings()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Push array to <code>body</code> tag. See <a href="<?= APP_URL ?>/settings_saving_db.php">saving to database</a> for more details
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.getSettings()">initApp.getSettings()</button>
                                                        </td>
                                                        <td>
                                                            <i class="fw-500 text-primary">string</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Fetch class names from <code>body</code> and convert them to JSON string. See <a href="<?= APP_URL ?>/settings_saving_db.php">saving to database</a> for more details
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.detectBrowserType()">initApp.detectBrowserType()</button>
                                                        </td>
                                                        <td>
                                                            <i class="fw-500 text-primary">string</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Detects webkit and chrome browsers
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.addDeviceType()">initApp.addDeviceType()</button>
                                                        </td>
                                                        <td>
                                                            <i class="fw-500 text-primary">string</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Detects whether device is desktop or mobile
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.windowScrollEvents()">initApp.windowScrollEvents()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Saves app settings to localstorage
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.checkNavigationOrientation()">initApp.checkNavigationOrientation()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Saves app settings to localstorage
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.buildNavigation(id)">initApp.buildNavigation(id)</button>
                                                        </td>
                                                        <td>
                                                            <i class="fw-500 text-primary">string</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Saves app settings to localstorage
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.mobileCheckActivation()">initApp.mobileCheckActivation()</button>
                                                        </td>
                                                        <td>
                                                            <i class="fw-500 text-danger">bool</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Saves app settings to localstorage
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.toggleVisibility()">initApp.toggleVisibility()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Saves app settings to localstorage
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <button class="btn btn-outline-dark btn-sm mr-2" onclick="initApp.domReadyMisc()">initApp.domReadyMisc()</button>
                                                        </td>
                                                        <td>
                                                            <i class="text-muted">-</i>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Fires a series of events, see "Initialization shell" to your left, for more details.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--Action buttons-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Action <span class="fw-300"><i>buttons</i></span>
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
                                                Allows you to add action to any HTML element on 'mouseUp' event
                                            </div>
                                            <table class="table table-hover table-bordered m-0">
                                                <thead class="thead-themed">
                                                    <tr>
                                                        <th style="width:150px">
                                                            Action Type
                                                        </th>
                                                        <th>
                                                            Description
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <code>toggle</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Push data-class to <code>body</code> element
                                                            <br>
                                                            <code>data-action="toggle" data-class="class-a class-b" data-target="#ID"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>toggle-swap</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            <code>data-action="toggle-swap" data-class="class-a class-b" data-target="#ID"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>toggle-replace</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            <code>data-action="toggle-replace" data-replaceclass="classesToReplace" data-class="replaceWithClass" data-target="body"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>data-panel-*</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Push array to <code>body</code> tag. See <a href="<?= APP_URL ?>/settings_saving_db.php">saving to database</a> for more details
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>theme-update</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            <code>data-action="theme-update" data-theme="path_to_css/css.css"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>app-reset</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            <code>data-action="app-reset"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>factory-reset</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            <code>data-action="factory-reset"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>app-print</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Print page (similar to pressing CTRL/CMD + P)
                                                            <code>data-action="app-print"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>app-fullscreen</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Activates broswer's fullscreen command (may not work in all browsers)
                                                            <code>data-action="app-fullscreen"</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>app-loadscript</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Load scripts on demand
                                                            <code>data-action="app-fullscreen" data-loadurl="script.js" data-loadfunction="functionName()"</code> or you can also use <code>initApp.loadScript("js/my_lovely_script.js", myFunction)</code>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>playsound</code>
                                                        </td>
                                                        <td class="fs-sm">
                                                            Play sounds using <code>data-action="playsound" data-soundpath="<?= ASSETS_URL ?>/media/sound/" data-soundfile="filename" (no file extensions)</code>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Config settings-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Config <span class="fw-300"><i>settings</i></span>
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
                                                Define preferred application behaviors or configuration options; can modify some functionality of the app
                                            </div>
                                            <pre class="prettyprint mb-0">
var myapp_config = {
    root_: $('body'),
    root_logo: $('.page-sidebar > .page-logo')
    throttleDelay: 450,
    filterDelay: 150,
    thisDevice: null, 
    isMobile: (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase())), 
    mobileMenuTrigger: null,
    mobileResolutionTrigger: 992,
    isWebkit: ((!!window.chrome && !!window.chrome.webstore) === true || Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0 === true),
    isChrome: (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())),
    isIE: ( (window.navigator.userAgent.indexOf('Trident/') ) > 0 === true ),
    debugState: true, 
    rippleEffect: true, 
    mythemeAnchor: '#mytheme',
    navAnchor: '#js-primary-nav',
    navHooks: '#js-primary-nav > ul.navigation'
    navClosedSign: 'ni ni-chevron-down',
    navOpenedSign: 'ni ni-chevron-up',
    navAccordion: true,
    navInitalized: 'js-nav-built',
    navFilterInput: $('#nav_filter_input'),
    navHorizontalWrapperId: 'js-nav-menu-wrapper',
    navSpeed: 500, 
    navClosedSign: 'fal fa-angle-down',
    navOpenedSign: 'fal fa-angle-up',
    appDateHook: $('.js-get-date'),
    storeLocally: true,
    jsArray : []
};</pre>
                                        </div>
                                    </div>
                                </div>
                                <!--Initilization shell-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Initilization <span class="fw-300"><i>shell</i></span>
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
                                                Showcasing app JS skeleton
                                            </div>
                                            <pre class="prettyprint mb-0">
/* App initialize */
var initApp = (function(app) {
    app.saveSettings = function () { ... }
    app.resetSettings = function () { ... }
    app.accessIndicator = function () { ... }
    app.pushSettings = function (DB_string) { ... }
    app.getSettings = function () { ... }
    app.detectBrowserType = function () { ... }
    app.addDeviceType = function() { ... }
    app.windowScrollEvents = function () { ... }
    app.checkNavigationOrientation = function() { ... }
    app.buildNavigation = function() { ... }
    app.mobileCheckActivation = function(){ ... }
    app.toggleVisibility = function (id) { ... }
    app.domReadyMisc = function() { 
       /* get app date */
       /* activate last tab used */
       /* activate/destroy slimscroll */
       /* activates tooltip */
       /* activates image lazyload mechanic */
       /* enable dropdown */
       /* enable ripple effect */
       /* attach action buttons */
       /* menu tap actions (for mobile) */
       /* initialize windows mobile 8 fix for BS4 */
       ...
    }
    return app;
})({});

/* Bind the throttled handler to the resize event */
$(window).resize(
    $.throttle( myapp_config.throttleDelay, function (e) {
        /* (1a) ADD CLASS WHEN BELOW CERTAIN WIDTH (MOBILE MENU) */
        initApp.mobileCheckActivation(); 
    })
); 

/* Bind the throttled handler to the scroll event */
$(window).scroll(
    $.throttle( myapp_config.throttleDelay, function (e) {
        /* EVENTS */
        ...
    })
);

/* Initiate scroll events */
$(window).on('scroll', initApp.windowScrollEvents);

/* Document loaded event */
jQuery(document).ready(function() {
    /* detect desktop or mobile */
    initApp.addDeviceType();
    /* detect Webkit Browser */
    initApp.detectBrowserType();
    /* a. check for mobile view width and add class .mobile-view-activated */
    initApp.mobileCheckActivation();
    /* b. build navigation */
    initApp.buildNavigation(myapp_config.navHooks);
    /* c. run DOM misc functions */
    initApp.domReadyMisc();
});</pre>
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
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
        <script>
            /* state debug state for debug msg */
            myapp_config.debugState = true;

            /* variables */
            var lastMsg = "",
                repeatCount = 0,
                /* get new time date on page load */
                getTime = function()
                {
                    var dt = new Date(),
                        time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                    return time;
                };

            /* define type */
            if (typeof console != "undefined")
                if (typeof console.log != 'undefined')
                {
                    console.nglog = console.log;
                }
            else
            {
                console.nglog = function() {};
            }

            /* push console messages to #div */
            console.log = function(message)
            {
                console.nglog(message);
                if (lastMsg != message)
                {
                    $('#app-eventlog').append('<div class="highlight p-1"><span class="d-flex align-items-center">' + '<span class="badge badge-primary mr-2 p-1 width-6">' + getTime() + '</span>' + message + '</span></div>');
                    lastMsg = message;
                    repeatCount = 0;
                    $('#app-eventlog').animate(
                    {
                        scrollTop: $('#app-eventlog').prop("scrollHeight")
                    }, 200);
                }
                else
                {
                    lastMsg = message;
                    repeatCount = repeatCount + 1;
                    $('#app-eventlog >:last-child').remove();
                    $('#app-eventlog').append('<div class="highlight p-1"><span class="d-flex align-items-center">' + '<span class="badge badge-primary mr-2 p-1 width-6">' + getTime() + '</span>' + '<span class="badge badge-success mr-1">' + repeatCount + '</span>' + message + '</span></div>');
                    $('#app-eventlog').animate(
                    {
                        scrollTop: $('#app-eventlog').prop("scrollHeight")
                    }, 200);
                }
            };

            /* compile messages to one log */
            console.error = console.debug = console.info = console.log


            $('#eventlog-switch').click(function()
            {
                if ($('input[type=checkbox]').prop('checked'))
                {
                    console.log("debugState ON")
                    myapp_config.debugState = true;
                }
                else
                {
                    console.log("debugState OFF");
                    myapp_config.debugState = false;
                }
            });

            var clearlogText = function()
            {
                $('#app-eventlog').empty();
            };

        </script>
    </body>
</html>
