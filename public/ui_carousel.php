<?php

require_once 'init.php';

$_title = 'Carousel - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_carousel';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'A slideshow component for cycling through elements—images or slides of text—like a carousel.';

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
                            <li class="breadcrumb-item active">Carousel</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Carousel
                                <small>
                                    A slideshow component for cycling through elements—images or slides of text—like a carousel.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-primary alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="fal fa-times"></i>
                                        </span>
                                    </button>
                                    <div class="d-flex flex-start w-100">
                                        <div class="mr-2">
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
                                                The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <!--Kitchen sink example-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Kitchen <span class="fw-300"><i>sink example</i></span>
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
                                                Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.
                                                <br>
                                                <br>
                                                <strong>The <code>.active</code> class needs to be added to one of the slides</strong> otherwise the carousel will not be visible. Also be sure to set a unique id on the <code>.carousel</code> for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a <code>data-target</code> attribute (or <code>href</code> for links) that matches the id of the <code>.carousel</code> element.
                                            </div>
                                            <div id="carouselExampleKitchenSink" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleKitchenSink" data-slide-to="0" class=""></li>
                                                    <li data-target="#carouselExampleKitchenSink" data-slide-to="1" class="active"></li>
                                                    <li data-target="#carouselExampleKitchenSink" data-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/relax-full.jpg" alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/peace-full.jpg" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/sea-full.jpg" alt="Third slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleKitchenSink" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleKitchenSink" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Slides only-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Slides <span class="fw-300"><i>only</i></span>
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
                                                Notice presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images
                                            </div>
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=51adf6&fg=ffffff&text=First slide" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=39a1f4&fg=ffffff&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=2196F3&fg=ffffff&text=Third slide" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Controls-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Control <span class="fw-300"><i>example</i></span>
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
                                                Adding in previous and next controls
                                            </div>
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=fe85be&fg=ffffff&text=First slide" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=fe6bb0&fg=ffffff&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=fd52a3&fg=ffffff&text=Third slide" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Controls-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Interval <span class="fw-300"><i>example</i></span>
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
                                                Add <code>data-interval=""</code> to a <code>.carousel-item</code> to change the amount of time to delay between automatically cycling to the next item. E.g The first image will change after 10 seconds, the second one will change after 2 seconds, and the following will change as default settings.
                                            </div>
                                            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active" data-interval="10000">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=ffd274&fg=333333&text=First slide" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item" data-interval="2000">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=ffca5b&fg=000000&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=ffc241&fg=000000&text=Third slide" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Indicators-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Indicators <span class="fw-300"><i>example</i></span>
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
                                                You can also add the indicators to the carousel, alongside the controls, too
                                            </div>
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=37e2d0&fg=ffffff&text=First slide" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=21dfcb&fg=ffffff&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=1dc9b7&fg=ffffff&text=Third slide" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Crossfade-->
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Crossfade <span class="fw-300"><i>example</i></span>
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
                                                Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide
                                            </div>
                                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=a38cc6&fg=ffffff&text=First slide" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=967bbd&fg=ffffff&text=Second slide" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=886ab5&fg=ffffff&text=Third slide" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Add captions-->
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Add <span class="fw-300"><i>captions</i></span>
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
                                                Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional <a href="#" target="_blank">display utilities</a>. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>
                                            </div>
                                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=5a636d&fg=7f8995&text=First slide" alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=5a636d&fg=7f8995&text=Second slide" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="about:blank" data-src="holder.js/800x400?auto=yes&bg=5a636d&fg=7f8995&text=Third slide" alt="Third slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fullscreen Carousel -->
                            <div class="modal fade modal-fullscreen example-carousel-fullscreen" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content h-100 border-0 shadow-0 bg-fusion-800">
                                        <button type="button" class="close p-sm-2 p-md-4 text-white fs-xxl position-absolute pos-right mr-sm-2 mt-sm-1 z-index-space" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </button>
                                        <div class="modal-body p-0">
                                            <div id="example-carousel-fullscreen" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="0" class=""></li>
                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="1" class="active"></li>
                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/relax-full.jpg" alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">First slide label</h5>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/peace-full.jpg" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">Second slide label</h5>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/sea-full.jpg" alt="Third slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="color-white opacity-70">Third slide label</h5>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#example-carousel-fullscreen" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#example-carousel-fullscreen" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>
    </body>
</html>
