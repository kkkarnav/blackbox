<?php

require_once 'init.php';

$_title = 'Skin Options - Theme Settings - SmartAdmin v4.6.3';
$_active_nav = 'settings_skin_options';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'A true automated system for generating unlimited skins. Change your skins in a flash...';

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
                            <li class="breadcrumb-item active">Skin Options</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Theme Settings: <span class='fw-300'>Skin Options</span>
                                <small>
                                    A true automated system for generating unlimited skins. Change your skins in a flash...
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
                                <div class="mr-2 hidden-sm-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base-14 icon-stack-3x color-primary-400"></i>
                                        <i class="base-14 icon-stack-2x color-primary-600 opacity-70"></i>
                                        <i class="fal fa-cog icon-stack-1x text-white opacity-90"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">Even more layout options!</span>
                                        <p>
                                            Simply change 5 varibles to completely alter the theme colors. You can come up with unlimited possibilities. Find your varibles in <code>src/scss/_modules/_varibles.scss</code> - once done editing, run your <code>gulp build</code> command to generate the related assets and css. Learn more on how to run gulp on this <a href="https://www.youtube.com/watch?v=LwD-kYlZXtw" target="_blank">video turorial</a>.
                                        </p>
                                        <p class="mb-0 text-muted notes">
                                            <strong>Impotant information:</strong> Assets to generate new skins are only available with the purchase of HTML flavor. Since all the flavors of SmartAdmin has identical CSS assets, you can generate your unique skin and place them inside your specific flavor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Skin "<strong>Hematite</strong>" <br>
                                            <small>
                                                Change your variables to following: <code>$color-primary: #868e96;</code>, <code>$color-success: #1dc9b7;</code>, <code>$color-info: #2196F3;</code>, <code>$color-warning: #ffc241;</code>, and <code>$color-danger: #b57d6a;</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <img src="<?= ASSETS_URL ?>/img/demo/skins/black.png" alt="dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Skin "<strong>Sapphire</strong>" <br>
                                            <small>
                                                Change your variables to following: <code>$color-primary: #2198F3;</code>, <code>$color-success: #69FB13;</code>, <code>$color-info: #BB1BF4;</code>, <code>$color-warning: #FF9A13;</code>, and <code>$color-danger: #FC1349;</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <img src="<?= ASSETS_URL ?>/img/demo/skins/blue.png" alt="dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Skin "<strong>Aquamarine</strong>" <br>
                                            <small>
                                                Change your variables to following: <code>$color-primary: #6ab5b4;</code>, <code>$color-success: #85b86c;</code>, <code>$color-info: #8f6ab5;</code>, <code>$color-warning: #e0d07e;</code>, and <code>$color-danger: #b57d6a;</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <img src="<?= ASSETS_URL ?>/img/demo/skins/green.png" alt="dark">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Skin "<strong>Ruby</strong>" <br>
                                            <small>
                                                Change your variables to following: <code>$color-primary: #ff58a6;</code>, <code>$color-success: #1dc9b7;</code>, <code>$color-info: #2196F3;</code>, <code>$color-warning: #ffc241;</code>, and <code>$color-danger: #fd3995;</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:550px">
                                            <div class="demo-window-content">
                                                <img src="<?= ASSETS_URL ?>/img/demo/skins/pink.png" alt="dark">
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
