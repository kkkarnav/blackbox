<?php

require_once 'init.php';

$_title = 'How it works - Theme Settings - SmartAdmin v4.6.3';
$_active_nav = 'settings_how_it_works';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = '&lt;span class&#x3D;&#x27;fw-500 color-info-700&#x27;&gt;Mix and match&lt;/span&gt; layout options to create over &lt;span class&#x3D;&#x27;fw-500 color-info-700&#x27;&gt;36 layout possibilities&lt;/span&gt;. Get the perfect layout to suite your business needs';

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
                            <li class="breadcrumb-item">Theme Settings</li>
                            <li class="breadcrumb-item active">How it works</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Theme Settings: <span class='fw-300'>How it works</span>
                                <small>
                                    <span class='fw-500 color-info-700'>Mix and match</span> layout options to create over <span class='fw-500 color-info-700'>36 layout possibilities</span>. Get the perfect layout to suite your business needs
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Fixed Header"</strong> <br>
                                            <small>
                                                Header is in a fixed position at all times
                                                <code>.header-function-fixed</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="d-flex app-body-demo">
                                                    <div class="app-nav-demo bg-fusion-200">
                                                        <div class="p-1 pt-0 bg-primary-300 pattern-0 app-header-demo"></div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-1">
                                                        <div class="app-header-demo bg-primary-300 pattern-0">
                                                            &nbsp;
                                                        </div>
                                                        <div class="app-container-demo flex-1 p-3">
                                                            <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Fixed Navigation"</strong> <br>
                                            <small>
                                                Increase accessibility by locking navigation
                                                <code>.nav-function-fixed</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="d-flex app-body-demo">
                                                    <div class="app-nav-demo bg-primary-300 pattern-0 p-1 pt-0"></div>
                                                    <div class="d-flex flex-column flex-1">
                                                        <div class="app-header-demo bg-fusion-200"></div>
                                                        <div class="app-container-demo flex-1 p-3">
                                                            <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Minify Navigation"</strong> <br>
                                            <small>
                                                Minify navigation space to only icons
                                                <code>.nav-function-minified</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="d-flex app-body-demo">
                                                    <div class="app-nav-demo-minify bg-primary-300 pattern-0"></div>
                                                    <div class="d-flex flex-column flex-1">
                                                        <div class="app-header-demo bg-fusion-200"></div>
                                                        <div class="app-container-demo flex-1 p-3">
                                                            <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Hide Navigation"</strong> <br>
                                            <small>
                                                Maximize workspace by hiding navigation
                                                <code>.nav-function-hidden</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="d-flex app-body-demo">
                                                    <div class="app-nav-demo-hidden bg-primary-300 pattern-0">&nbsp;</div>
                                                    <div class="d-flex flex-column flex-1">
                                                        <div class="app-header-demo bg-fusion-200"></div>
                                                        <div class="app-container-demo flex-1 p-3">
                                                            <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Top Navigation"</strong> <br>
                                            <small>
                                                Add the following class(s) to body tag
                                                <code>.nav-function-top</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="d-flex flex-column app-body-demo">
                                                    <div class="app-header-demo bg-fusion-200"></div>
                                                    <div class="app-nav-demo-top bg-primary-300 pattern-0 p-1"></div>
                                                    <div class="app-container-demo flex-1 p-3" style="overflow:hidden;">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout type <strong>"Boxed Layout"</strong> <br>
                                            <small>
                                                Add the following class(s) to body tag
                                                <code>.mod-main-boxed</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <div class="app-body-demo d-flex pl-5 pr-5 bg-primary-100 mod-main-boxed mod-bg-3">
                                                    <div class="app-nav-demo bg-fusion-300 p-1 pt-0"></div>
                                                    <div class="d-flex flex-column flex-1">
                                                        <div class="app-header-demo bg-fusion-200"></div>
                                                        <div class="app-container-demo bg-white flex-1 p-3">
                                                            <img src="<?= ASSETS_URL ?>/img/demo/s-1.png" class="w-100" alt="">
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
