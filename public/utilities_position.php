<?php

require_once 'init.php';

$_title = 'Position - Utilities - SmartAdmin v4.6.3';
$_active_nav = 'utilities_position';
$_head = '';
$_description = 'Use these shorthand utilities for quickly configuring the position of an element.';

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
                            <li class="breadcrumb-item active">Position</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Position
                                <small>
                                    Use these shorthand utilities for quickly configuring the position of an element.
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
                                        <span class="h5">Mobile friendly classes</span>
                                        <br>
                                        Positions can also be changed for mobile viewports by adding the following classes, <code>.position-on-mobile-absolute</code>, <code>.position-on-mobile-relative</code>, and <code>.position-on-mobile-static</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Position <span class="fw-300"><i>Fixed</i></span>
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
                                                An element with <code>.position-fixed</code>; is positioned relative to the viewport, which means it always stays in the same place even if the page is scrolled. The <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties are used to position the element
                                            </div>
                                            <button type="button" class="btn btn-outline-danger hidden-sm-down" data-toggle="popover" data-template='<div class="popover max-width-reset" role="tooltip"><div class="arrow"></div><div class="popover-body p-3"></div></div>' data-placement="top" data-trigger="hover" title="" data-html="true" data-content='<img src="<?= ASSETS_URL ?>/img/demo/position-fixed.gif" alt="" style="width:360px">'><i class="fal fa-play mr-2"></i>Live example</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Position <span class="fw-300"><i>Relative</i></span>
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
                                                In <code>.position-relative</code>, the element is positioned relative to itself. However, an absolute positioned element is relative to its parent. An element with <code>position: absolute</code> is removed from the normal document flow. ... If it doesn't have any parent elements, then the initial document <code>html</code> will be its parent
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="demo-window rounded shadow-1 mb-4 mb-sm-0">
                                                        <div class="demo-window-content">
                                                            <div class="d-flex flex-row" style="height:15rem">
                                                                <div class="flex-grow-1 w-100 bg-info-50 p-3 position-relative d-flex flex-column">
                                                                    <div class="border border-danger flex-grow-1 p-2 position-relative">
                                                                        .position-relative
                                                                        <p class="position-absolute pos-right pos-bottom p-2 bg-fusion-500 m-0">.position-absolute</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="demo-window rounded shadow-1">
                                                        <div class="demo-window-content">
                                                            <div class="d-flex flex-row" style="height:15rem">
                                                                <div class="w-100 flex-grow-1 bg-success-50 p-3 position-relative d-flex flex-column">
                                                                    <div class="border border-danger flex-grow-1 p-6 position-relative d-flex flex-column">
                                                                        <div class="position-absolute pos-top pos-left p-2">.position-relative</div>
                                                                        <div class="border border-danger flex-grow-1 p-2 position-relative">
                                                                            .position-relative
                                                                            <p class="position-absolute pos-right pos-bottom p-2 bg-fusion-500 m-0">.position-absolute</p>
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
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Position <span class="fw-300"><i>Absolute</i></span>
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
                                                An element with <code>.position-absolute</code>; is positioned relative to the nearest positioned ancestor (instead of positioned relative to the viewport, like fixed). However; if an absolute positioned element has no positioned ancestors, it uses the document body, and moves along with page scrolling. You can use <code>.pos-top</code>, <code>.pos-right</code>, <code>.pos-bottom</code>, and <code>.pos-left</code> to position relavant to its closest relative positioned ancenstor
                                            </div>
                                            <div class="demo-window rounded mb-g shadow-1">
                                                <div class="demo-window-content">
                                                    <div class="position-relative" style="height:15rem">
                                                        <div class="bg-primary-50 p-2 position-absolute w-100 pos-top">
                                                            .position-absolute .pos-top
                                                        </div>
                                                        <div class="bg-info-50 p-2 position-absolute w-100 pos-bottom">
                                                            .position-absolute .pos-bottom
                                                        </div>
                                                        <div class="bg-danger-50 p-2 position-absolute h-100 pos-right d-flex align-items-center" style="width:120px;">
                                                            <span class="rotate-270 text-nowrap">.position-absolute .pos-right</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-danger hidden-sm-down" data-toggle="popover" data-template='<div class="popover max-width-reset" role="tooltip"><div class="arrow"></div><div class="popover-body p-3"></div></div>' data-placement="top" data-trigger="hover" title="" data-html="true" data-content='<img src="<?= ASSETS_URL ?>/img/demo/position-absolute.gif" alt="" style="width:360px">'><i class="fal fa-play mr-2"></i>Live example</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Position <span class="fw-300"><i>Sticky</i></span>
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
                                                <p>Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The <code>.sticky-top</code> utility uses CSS’s <code>position: sticky</code>, which isn’t fully supported in all browsers.</p>
                                                <p><strong>IE11 and IE10 will render <code>position: sticky</code> as <code>position: relative</code>.</strong> As such, we wrap the styles in a <code>@supports</code> query, limiting the stickiness to only browsers that can render it properly.</p>
                                            </div>
                                            <div class="demo-window rounded shadow-1 mb-g">
                                                <div class="demo-window-content">
                                                    <div class="d-flex flex-row">
                                                        <div class="position-relative overflow-auto p-3" style="height: 300px;">
                                                            <h5 class="fw-500 opacity-70">
                                                                Sticky Element: Scroll Down to See the Effect
                                                                <small>
                                                                    Scroll down this page to see how sticky positioning works
                                                                </small>
                                                            </h5>
                                                            <nav class="navbar navbar-expand-lg sticky-top bg-faded">
                                                                <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                                    SmartAdmin for PHP
                                                                </a>
                                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSticky" aria-expanded="false" aria-label="Toggle navigation">
                                                                    <span class="navbar-toggler-icon"></span>
                                                                </button>
                                                                This will be sticky
                                                            </nav>
                                                            <br>
                                                            <p class="opacity-70">Some example text..</p>
                                                            <h5 class="opacity-70">Scroll back up again to "remove" the sticky position.</h5>
                                                            <p class="opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices</p>
                                                            <p>1..</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>4..</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>8..</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>12.</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>16.</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>20.</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>...</p>
                                                            <p>24.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-danger hidden-sm-down" data-toggle="popover" data-template='<div class="popover max-width-reset" role="tooltip"><div class="arrow"></div><div class="popover-body p-3"></div></div>' data-placement="top" data-trigger="hover" title="" data-html="true" data-content='<img src="<?= ASSETS_URL ?>/img/demo/position-sticky.gif" alt="" style="width:360px">'><i class="fal fa-play mr-2"></i>Live example</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Position <span class="fw-300"><i>Static</i></span>
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
                                                Every element has a static position by default, so the element will stick to the normal page flow. So if there is a left/right/top/bottom/z-index set then there will be no effect on that element. Adding <code>.position-static</code> will generally 'reset' these properties
                                            </div>
                                            <div class="demo-window rounded shadow-1 mb-g">
                                                <div class="demo-window-content">
                                                    <div class="d-flex flex-row" style="height:15rem">
                                                        <div class="w-100 flex-grow-1 bg-highlight p-3 position-relative d-flex flex-column">
                                                            <div class="border border-danger flex-grow-1 p-6 position-relative d-flex flex-column">
                                                                <div class="position-absolute pos-top pos-left p-2">.position-relative</div>
                                                                <div class="border border-danger flex-grow-1 p-2" id="js-position-change">
                                                                    <strong class="text-danger" id="js-position-text">.position-static</strong>
                                                                    <p class="position-absolute pos-right pos-bottom p-2 bg-fusion-500 m-0">.position-absolute</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-success" onclick="swapPositions();" id="js-position-btn">Change to RELATIVE</button>
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
            var swapPositions = function()
            {
                console.log("test2")
                $('#js-position-change').toggleClass('position-relative');
                $('#js-position-text').toggleText('.position-static', '.position-relative');
                $('#js-position-btn').toggleText('Change to RELATIVE', 'Change to STATIC');
            };

        </script>
    </body>
</html>
