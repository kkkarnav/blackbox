<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';

$_title = 'Logout - SmartAdmin v4.6.3';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
';

?>
<?php

// authenticate this page, redirects to login when not authorized
\App\App::authenticatePage();

$exception = null;

if (is_post()) {
    try {
        \App\Content::verifyPost();

        $result = \App\App::webLogout();
        if ($result) {
            redirect(APP_URL.'/php_auth_login.php');
        } else {
            throw new Exception('Failed to log-out user');
        }
    } catch (Exception $ex) {
        $exception = $ex->getMessage();
    }
}

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
    <body class="mod-skin-<?= $_theme ?>">
        <div class="page-wrapper auth">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                                <a href="<?= APP_URL ?>" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                                    <span class="page-logo-text mr-1">SmartAdmin for PHP</span>
                                </a>
                            </div>
                            <a href="<?= APP_URL ?>/php_auth_docs.php" class="btn-link text-white ml-auto">
                                Documentation
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-1" style="background: url(<?= ASSETS_URL ?>/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
                            <form method="post" action="<?= APP_URL ?>/php_auth_logout.php" role="form" class="text-center text-white mb-5 pb-5">
                                <?= \App\Content::printPostToken(APP_URL.'/php_auth_logout.php') ?>
                                <?= $exception ? \App\Content::printAlert($exception, 'danger') : null ?>
                                <div class="py-3">
                                    <img src="<?= $_user->getAvatarUrl(120) ?>" class="img-responsive rounded-circle img-thumbnail" alt="thumbnail">
                                </div>
                                <h3>
                                    <?= $_user->getName() ?> <span class="small text-muted ml-1">@<?= $_user->username ?></span>
                                    <small>
                                        <?= $_user->email ?>
                                    </small>
                                </h3>
                                <p class="text-white opacity-50">Are you sure you want to logout?</p>
                                <a href="<?= APP_URL ?>/php_auth_page.php" class="btn btn-default btn-lg mr-2"><i class="fal fa-arrow-left mr-2"></i> Back</a>
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fal fa-unlock mr-2"></i> Yes, Log me out</button>
                            </form>
                            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                                2020 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-white opacity-40 fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN Colors -->
        <!-- BEGIN Color profile -->
        <!-- this area is hidden and will not be seen on screens or screen readers -->
        <!-- we use this only for CSS color refernce for JS stuff -->
        <p id="js-color-profile" class="d-none">
            <span class="color-primary-50"></span>
            <span class="color-primary-100"></span>
            <span class="color-primary-200"></span>
            <span class="color-primary-300"></span>
            <span class="color-primary-400"></span>
            <span class="color-primary-500"></span>
            <span class="color-primary-600"></span>
            <span class="color-primary-700"></span>
            <span class="color-primary-800"></span>
            <span class="color-primary-900"></span>
            <span class="color-info-50"></span>
            <span class="color-info-100"></span>
            <span class="color-info-200"></span>
            <span class="color-info-300"></span>
            <span class="color-info-400"></span>
            <span class="color-info-500"></span>
            <span class="color-info-600"></span>
            <span class="color-info-700"></span>
            <span class="color-info-800"></span>
            <span class="color-info-900"></span>
            <span class="color-danger-50"></span>
            <span class="color-danger-100"></span>
            <span class="color-danger-200"></span>
            <span class="color-danger-300"></span>
            <span class="color-danger-400"></span>
            <span class="color-danger-500"></span>
            <span class="color-danger-600"></span>
            <span class="color-danger-700"></span>
            <span class="color-danger-800"></span>
            <span class="color-danger-900"></span>
            <span class="color-warning-50"></span>
            <span class="color-warning-100"></span>
            <span class="color-warning-200"></span>
            <span class="color-warning-300"></span>
            <span class="color-warning-400"></span>
            <span class="color-warning-500"></span>
            <span class="color-warning-600"></span>
            <span class="color-warning-700"></span>
            <span class="color-warning-800"></span>
            <span class="color-warning-900"></span>
            <span class="color-success-50"></span>
            <span class="color-success-100"></span>
            <span class="color-success-200"></span>
            <span class="color-success-300"></span>
            <span class="color-success-400"></span>
            <span class="color-success-500"></span>
            <span class="color-success-600"></span>
            <span class="color-success-700"></span>
            <span class="color-success-800"></span>
            <span class="color-success-900"></span>
            <span class="color-fusion-50"></span>
            <span class="color-fusion-100"></span>
            <span class="color-fusion-200"></span>
            <span class="color-fusion-300"></span>
            <span class="color-fusion-400"></span>
            <span class="color-fusion-500"></span>
            <span class="color-fusion-600"></span>
            <span class="color-fusion-700"></span>
            <span class="color-fusion-800"></span>
            <span class="color-fusion-900"></span>
        </p>
        <!-- END Color profile -->
        <!-- END Colors -->
        <?php include_once APP_PATH.'/includes/js.php'; ?>
    </body>
</html>
