<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';

$_title = 'Authenticated Page - Authentication - SmartAdmin v4.6.3';
$_active_nav = 'php_auth_page';
$_head = '';
$_description = 'Secured and authenticated page demo';

?>
<?php

// authenticate the page
// for demo purposes, we're redirecting via javascript. Use the code below to auto redirect to login page
// \App\App::authenticatePage(APP_URL.'/php_auth_login.php');

$authenticated = \App\App::isAuthenticated();

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
                            <li class="breadcrumb-item">Authentication</li>
                            <li class="breadcrumb-item active">Authenticated Page</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Authenticated Page <a href="<?= APP_URL ?>/php_auth_logout.php" class="btn btn-danger float-right">Logout</a>
                                <small>
                                    Secured and authenticated page demo
                                </small>
                            </h1>
                        </div>
                        <?= !$authenticated ? \App\Content::printAlert('<strong>Not authenticated</strong><br>Redirecting in <strong id="redirect-timer">5</strong> seconds...', 'danger') : null ?>
                        <?= get('src') === 'login' ? \App\Content::printAlert('You were redirected to this page because you are already authenticated.', 'success') : null ?>
                        <input type="hidden" name="authenticated" id="authenticated" value="<?= $authenticated ?>">
                        <input type="hidden" name="redirect" id="redirect" value="<?= SERVER_REQUEST ?>">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Logged in user - <?= get('src') === 'social' ? 'Social Auth' : 'Basic' ?>
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
                                        <p>Authenticated page uses the global <code>$_user</code> variable after requiring the <code>init.auth.php</code>. Visit the <a href="<?= APP_URL ?>/php_auth_docs.php#secured-pages">Authentication Docs</a> to learn more.<br>You can change password by running the command below.</p>
                                        <pre><code class="bg-primary text-white d-block w-100 pt-2 pr-3 pb-2 pl-3">php <?= ROOT_PATH ?>/utils/set_password.php --username=<em class="text-warning"><?= $user->username ?? 'USERNAME' ?></em> --password=<em class="text-warning">NEW_PASSWORD</em></code></pre>
                                    </div>
                                    <?php if (get('src') === 'social') : ?>
                                    <div class="alert alert-warning">
                                        <strong>Social Login</strong><br>
                                        You're authenticated through social login. We are <strong class="text-danger">NOT</strong> storing your information for this demo. The user below is a placeholder after confirming your identity.
                                    </div>
                                    <?php endif ?>
                                    <?php if (!empty($_user)) : ?>
                                    <h4 class="text-primary mb-3">
                                        <img src="<?= $_user->getAvatarUrl(24) ?>" class="img-responsive rounded-circle border mr-1" alt="thumbnail">
                                        <?= $_user->getName() ?>
                                    </h4>
                                    <div>
                                        <span class="fs-sm fw-400"><i class="fal fa-hashtag text-muted mr-1"></i> <?= $_user->id ?></span>
                                    </div>
                                    <div>
                                        <span class="fs-sm fw-400"><i class="fal fa-at text-muted mr-1"></i> <?= $_user->username ?></span>
                                    </div>
                                    <div>
                                        <a href="mailto:<?= $_user->email ?>" class="fs-sm fw-400"><i class="fal fa-envelope text-muted mr-1"></i> <?= $_user->email ?></a>
                                    </div>
                                    <?php endif ?>
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
        <script>
            $(document).ready(function()
            {
                // for demo purposes only!
                var authenticated = $('#authenticated').val();
                var r = $('#redirect').val();

                if (!authenticated)
                {
                    var seconds = 5;

                    function countdown()
                    {
                        if (seconds < 1)
                        {
                            window.location = myapp_config.appUrl + '/php_auth_login.php?r=' + encodeURIComponent(r);
                        }
                        else
                        {
                            $('#redirect-timer').html(seconds);
                            window.setTimeout(countdown, 1000);
                        }

                        seconds = seconds - 1;
                    }

                    countdown();
                }
            });

        </script>
    </body>
</html>
