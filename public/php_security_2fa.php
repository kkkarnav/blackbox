<?php

require_once 'init.php';
require_once 'init.db.php';
require_once 'init.auth.php';

$_title = 'Logout - SmartAdmin v4.6.3';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
';

?>
<?php

$exception = null;
$verification = null;
$action = get('action');
$defaults = $_GET;

// authenticate the page
// for demo purposes, we're redirecting via javascript. Use the code below to auto redirect to login page
// \App\App::authenticatePage(APP_URL.'/php_auth_login.php');

$authenticated = \App\App::isAuthenticated();
if ($authenticated) {
    $verification = $_user->getVerification(\Models\Verification::TYPE_2FA);
}

try {
    switch ($action) {
        case 'deliver':
            if (is_post()) {
                \App\Content::verifyPost();

                // $to is dependent on the $method
                // $to = $_user->email;
                // or
                // $to = $_user->phone;

                $to = get('email', $_POST);
                $method = \Models\Verification::METHOD_EMAIL;

                $verification = $_user->createVerification(\Models\Verification::TYPE_2FA, $to, $method);

                try {
                    $delivered = $verification->deliver();
                    if ($delivered) {
                        // redirect i.e. refresh the page
                        redirect(APP_URL.'/php_security_2fa.php');
                    } else {
                        throw new Exception('Failed to deliver the code! Note that demo site is not setup with Twilio.');
                    }
                } catch (Exception $ex) {
                    $verification = null;
                    throw $ex;
                }
            }

            break;

        case 'reset':
            // delete the old verification

            if ($verification) {
                $verification->delete();
                $verification = null;
            }

            break;

        case 'validate':
            if (is_post()) {
                \App\Content::verifyPost();

                $code = get('code', $_POST);

                // in production, the following code instead
                // $session = \App\App::getSession();
                // $session->verify2faCode($code);

                if ($code && $verification && $verification->validate($_user)) {
                    $verified = $verification->verify($code);
                    if ($verified) {
                        // redirect to somewhere for a successful verification
                        redirect(APP_URL.'/php_security_2fa.php?verified=1');
                    } else {
                        throw new Exception('Invalid verification code');
                    }
                } else {
                    throw new Exception('Invalid verification code');
                }
            }

            break;
    }
} catch (Exception $ex) {
    $exception = $ex->getMessage();
    $defaults = $_POST;
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
        <input type="hidden" name="authenticated" id="authenticated" value="<?= $authenticated ?>">
        <input type="hidden" name="redirect" id="redirect" value="<?= SERVER_REQUEST ?>">
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
                            <a href="<?= APP_URL ?>/php_security_intro.php" class="btn-link text-white ml-auto">
                                Documentation
                            </a>
                        </div>
                    </div>
                    <div class="flex-1" style="background: url(<?= ASSETS_URL ?>/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <div class="row">
                                <div class="col-xl-6 ml-auto mr-auto">
                                    <?= $exception ? \App\Content::printAlert($exception, 'danger') : null ?>
                                    <?php if ($authenticated) : ?>
                                        <?= get('verified') ? \App\Content::printAlert('<strong>Verification Success!</strong><br>Your verificaton code is valid. Good job!', 'success') : null ?>
                                    <div class="card p-4 rounded-plus bg-faded">
                                        <?php if ($verification) : ?>
                                        <form method="POST" action="<?= APP_URL.'/php_security_2fa.php?action=validate' ?>">
                                            <?= \App\Content::printPostToken(APP_URL.'/php_security_2fa.php?action=validate') ?>
                                            <h4 class="mb-3">Thank you! Please check your inbox.</h4>
                                            <div class="alert alert-primary text-dark" role="alert">
                                                We’ve sent the code to <strong><?= $verification->to ?></strong>.
                                            </div>
                                            <?php

                                            $input = new \Bootstrap\Components\Input('code', ['required' => true]);
                                            $input->label('Enter Code')
                                                ->attr(['autofocus'])
                                                ->printHtml();

                                            ?>
                                            <button type="submit" class="btn btn-default">
                                                Validate Code
                                            </button>
                                            <div class="mt-3">
                                                <a href="<?= APP_URL ?>/php_security_2fa.php?action=reset&email=<?= urlencode($verification->to) ?>">
                                                    <i class="fal fa-chevron-right mr-2"></i> Didn’t get a code?
                                                </a>
                                            </div>
                                        </form>
                                        <?php else : ?>
                                        <form method="POST" action="<?= APP_URL.'/php_security_2fa.php?action=deliver' ?>">
                                            <?= \App\Content::printPostToken(APP_URL.'/php_security_2fa.php?action=deliver') ?>
                                            <h4 class="mb-3">For demo purposes, enter the email you want to receive the 2FA code.</h4>
                                            <div class="alert alert-warning text-dark" role="alert">
                                                Normally, you would immediately deliver the 2FA code right after verifying the session. See <code>\App\App::authenticatePage(...)</code>
                                            </div>
                                            <?php

                                            $input = new \Bootstrap\Components\Input('email', ['required' => true]);
                                            $input->label('Enter Email')
                                                ->value(get('email', $defaults))
                                                ->placeholder('youremail@domain.com')
                                                ->attr(['autofocus'])
                                                ->help('<span class="text-danger">Phone</span> is not supported by this demo')
                                                ->printHtml();

                                            ?>
                                            <button type="submit" class="btn btn-default">
                                                Deliver 2FA Code
                                            </button>
                                        </form>
                                        <?php endif ?>
                                    </div>
                                    <?php else : ?>
                                        <?= \App\Content::printAlert('<strong>Not authenticated</strong><br>Redirecting in <strong id="redirect-timer">5</strong> seconds...', 'danger') ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2020 © SmartAdmin for PHP by&nbsp;<a href='https://smartadmin.lodev09.com' class='text-white opacity-40 fw-500' title='smartadmin.lodev09.com' target='_blank'>@lodev09</a>
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
