<?php

require_once 'init.php';

$_title = 'Introduction - Application Intel - SmartAdmin v4.6.3';
$_active_nav = 'intel_introduction';
$_head = '';
$_description = 'A brief introduction to this WebApp';

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
                            <li class="breadcrumb-item">Application Intel</li>
                            <li class="breadcrumb-item active">Introduction</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='fal fa-info-circle'></i> Introduction
                                <small>
                                    A brief introduction to this WebApp
                                </small>
                            </h1>
                        </div>
                        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                            <h3 class="mb-g">
                                Hi Everyone,
                            </h3>
                            <p>
                                Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking around the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey, we have taken each piece of praise and criticism to heart to scope out our plans for SmartAdmin. All feedback will be used to make your favorite theme that much better, but these were some of the highlights.
                            </p>
                            <p>
                                A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a revolutionary view on what a good bootstrap based template should be, having something new to look at can make anyone feel invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While most you are still happy with the current variations, around 50% of you have asked for vue.js support. With this framework rapidly gaining popularity it is surely one to include in the family of frameworks! And, last, but certainly not least, a very large majority of a staggering 90% wanted more plugins and regular updates.
                            </p>
                            <p>
                                SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as possible on a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your favorite admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to support the look and feel of SmartAdmin.
                            </p>
                            <p>
                                But how you ask? Well in order to make the next version of SmartAdmin the best ever and to re-deliver on our promise of continued support and quality, we wrote the theme from the ground-up using the latest Bootstrap practises. As a result we are better able to support new frameworks as they come up and ensure that plugin support is quick and reliable. In addition we have partnered up with some of the communities best developers to ensure that our tailor made variations are of top-notch quality and follow the principles that we at SmartAdmin take to heart.
                            </p>
                            <p>
                                We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still keeping the familiarity that you have grown used to. It's a brand new theme, but with all the things you love and then some. And to ensure that you our loyal customers get this experience first-hand, we will be publishing the HTML update free-of-charge as an update to your current SmartAdmin license!
                            </p>
                            <p>
                                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience and continued support in SmartAdmin. Without you this would not have been possible!
                            </p>
                            <p>
                                Sincerely,<br>
                                The SmartAdmin Team<br>
                            </p>
                        </div>
                        <h3>
                            SmartAdmin Team
                            <small class="mb-0">We build cool things...</small>
                        </h3>
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?= ASSETS_URL ?>/img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Sunny A. (UI/UX Expert)
                                        <small class="m-0 fw-300">
                                            Lead Author
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a> -
                                    <a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?= ASSETS_URL ?>/img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jos K. (ASP.NET Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?= ASSETS_URL ?>/img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?= ASSETS_URL ?>/img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <p class="fs-lg">
                            <a href="#" class="fw-500 fs-xl">> Ready to join our dedicated team?</a><br>
                            We are always on the lookout to expand and add unique app flavors to SmartAdmin. If you think you can contribute and create your very own flavors, get in touch with us or <a href="#" target="_blank">click here to learn more</a> about our partnership program.
                        </p>
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
