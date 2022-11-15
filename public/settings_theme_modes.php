<?php

require_once 'init.php';

$_title = 'Layout Options - Theme Modes - SmartAdmin v4.6.3';
$_active_nav = 'settings_theme_modes';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Mix and match modes with &lt;span class&#x3D;&#x27;fw-500 color-info-700&#x27;&gt;skins&lt;/span&gt; to create an unique look';

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
                            <li class="breadcrumb-item">Theme Modes</li>
                            <li class="breadcrumb-item active">Layout Options</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Theme Settings: <span class='fw-300'>Theme Modes (beta)</span>
                                <small>
                                    Mix and match modes with <span class='fw-500 color-info-700'>skins</span> to create an unique look
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
                                        <span class="h5">Why beta?</span>
                                        <p>
                                            This is a brand new technique we are introducing which uses CSS variables to infiltrate color options. While this has been working nicely on modern browsers without much issues, some users <strong>may still face issues on Internet Explorer </strong>. Until these issues are resolved or Internet Explorer improves, this feature will remain in Beta.
                                        </p>
                                        If you are migrating from version 4+ to 4.5, there will be some DOM changes in the <code>head</code> section of the template, in order to get this new feature working.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout <strong>"Light Mode"</strong> <br>
                                            <small>
                                                Change overlay CSS to light mode, enabling lots of whitespace color
                                                <code>.mod-skin-light</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:650px">
                                            <div class="demo-window-content">
                                                <!-- content -->
                                                <img src="<?= ASSETS_URL ?>/img/demo/modes/mode-light-lg.png" class="img-fluid" alt="Light Mode">
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            Set mode by JavaScript <code>setlayout.mode('light')</code>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout <strong>"Dark Mode"</strong> <br>
                                            <small>
                                                Dark Mode blocks blue light from the screen, making it easier on the eye
                                                <code>.mod-skin-dark</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:650px">
                                            <div class="demo-window-content">
                                                <!-- content -->
                                                <img src="<?= ASSETS_URL ?>/img/demo/modes/mode-dark-lg.png" class="img-fluid" alt="Dark Mode">
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            Set mode by JavaScript <code>setlayout.mode('dark')</code>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout <strong>"Default Mode"</strong> <br>
                                            <small>
                                                Default color mode comes prepackged as a standard color pattern
                                                <code>.mod-skin-default</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:650px">
                                            <div class="demo-window-content">
                                                <!-- content -->
                                                <img src="<?= ASSETS_URL ?>/img/demo/modes/mode-default-lg.png" class="img-fluid" alt="Default Mode">
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            Set mode by JavaScript <code>setlayout.mode('default')</code>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-6">
                                <div class="card mb-g">
                                    <div class="card-body">
                                        <h4 class="mb-g mt-2 text-center">
                                            Layout <strong>"Glass Mode" (coming soon)</strong> <br>
                                            <small>
                                                An optical illusion to shocase elements over a glass
                                                <code>.mod-skin-glass</code>
                                            </small>
                                        </h4>
                                        <div class="demo-window rounded mb-g shadow-1 m-auto" style="max-width:650px">
                                            <div class="demo-window-content">
                                                <!-- content -->
                                                <img src="<?= ASSETS_URL ?>/img/demo/modes/mode-glass-lg.png" class="img-fluid" alt="Glass Mode (coming soon)">
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            Set mode by JavaScript <code>setlayout.mode('glass')</code>
                                        </p>
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
