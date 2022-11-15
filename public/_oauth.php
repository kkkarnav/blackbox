<?php

chdir(__DIR__);
require_once '../const.php';

$_title = 'Installation - SmartAdmin v4.6.3';
$_head = '';

?>
<?php

// default demo user
$config = \App\App::getOauthConfig($provider);

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
    <body class="mod-skin-<?= defined('APP_THEME') ? APP_THEME : 'dark' ?>">
        <!-- BEGIN Page Wrapper -->
        <div class="page-wrapper alt">
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <div class="h-alt-f d-flex flex-column align-items-center justify-content-center text-center">
                    <h1 class="page-error color-fusion-500">
                        SmartAdmin for PHP
                        <small class="fw-500">
                            Version 4.6.3
                        </small>
                    </h1>
                    <h3 class="fw-500 mb-5">
                        <span class="text-danger"><?= $provider_name ?> Login</span> Configuration
                    </h3>
                    <?php if (!empty($_oauth_error)) : ?>
                    <div class="alert alert-danger alert-dismissible p-2 mb-4">
                        <?= $_oauth_error ?>
                    </div>
                    <?php endif ?>
                    <h5>Social Login requires you to configure your provider's credentials. <br>Please review the following and update your <code>.env</code> file accordingly.</h5>
                    <h5>Learn more about the list of supported providers <a href="https://hybridauth.github.io/providers.html" target="_blank">here</a></h5>
                    <div class="text-left h4 w-50">
                        <div class="mt-4">Your credentials (<code>.env</code>)</div>
                        <?php

                        $app_id_constant = 'OAUTH_'.strtoupper($provider).'_ID';
                        $app_secret_constant = 'OAUTH_'.strtoupper($provider).'_SECRET';
                        $constants = get_defined_constants(true)['user'];

                        $command = $app_id_constant.'=<span class="text-danger">'.get($app_id_constant, $constants).'</span>'.EOL;
                        $command .= $app_secret_constant.'=<span class="text-danger">'.get($app_secret_constant, $constants).'</span>'.EOL;
                        $command .= EOL.'<em class="text-muted">#...</em>';

                        ?>
                        <div class="markdown-body p-0 mt-2">
                            <pre><code><?= $command ?></code></pre>
                        </div>
                        <div class="mt-4">Redirect URI<br><span class="small">Make sure the following redirect URI is configured in <span class="text-danger"><?= $provider_name ?></span>'s developer portal.</span></div>
                        <div class="markdown-body p-0 mt-2">
                            <pre><code><?= $config['callback'] ?></code></pre>
                        </div>
                    </div>
                    <h6 class="mt-4">If you're having issues installing SmartAdmin, visit our <a href="https://support.gotbootstrap.com/t/php" target="_blank">Support Forum</a> to get help.</h6>
                </div>
            </main>
            <!-- END Page Content -->
            <!-- BEGIN Page Footer -->
            <footer class="page-footer" role="contentinfo">
                <div class="d-flex align-items-center flex-1 text-muted">
                    <span class="hidden-md-down fw-700">2020 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-primary fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a></span>
                </div>
            </footer>
            <!-- END Page Footer -->
        </div>
        <!-- END Page Wrapper -->
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
