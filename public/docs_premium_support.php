<?php

require_once 'init.php';

$_title = 'Premium Support - Documentation - SmartAdmin v4.6.3';
$_active_nav = 'docs_premium_support';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Paid support for extra help and direction';

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
                            <li class="breadcrumb-item">Documentation</li>
                            <li class="breadcrumb-item active">Premium Support</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-book'></i> Documentation: <span class='fw-300'>Premium Support</span>
                                <small>
                                    Paid support for extra help and direction
                                </small>
                            </h1>
                        </div>
                        <div class="card mb-g p-2">
                            <div class="card-body">
                                <h2>
                                    Support
                                </h2>
                                <p class="mb-g">
                                    SmartAdmin is designed and documented to be easy to develop with and to use. Inevitably, as with any complex Theme library, you might have a question about how to perform a certain action, or wish to support the project to ensure that any issues in the Theme are found and dealt with quickly.
                                </p>
                                <h3>
                                    Maintenance and support
                                </h3>
                                <p>
                                    When integrating SmartAdmin in a large project, core to your project or company, you want to be assured that SmartAdmin and its extensions will be actively maintained with enhanced features being added to the core library, new plugins/extensions developed and any issues that are found being resolved quickly and efficiently.
                                </p>
                                <p>
                                    Maintenance and support contracts have a duration of <strong>6 months</strong>, at which point it can be renewed to maintain the support level you require.
                                </p>
                                <p class="mb-g">
                                    <strong>For more information on premium support and purchasing support credits, please find our <a href="<?= APP_URL ?>/intel_introduction.php">contact details here</a>.</strong>
                                </p>
                                <h3>
                                    Free community support
                                </h3>
                                <p>
                                    Free support is available for SmartAdmin through the <a href="https://support.gotbootstrap.com/" target="_blank">SmartAdmin's Community forums</a>. Answers are provided freely by the community whenever possible. The forums are a busy place and it is not always possible to ensure that every question will receive an answer from the community. To increase the likelihood of receiving a reply, when posting a question please ensure that you provide a link to a test case, screenshot or formatted codes, showing the problem so it can be debugged.
                                </p>
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
