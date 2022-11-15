<?php

require_once 'init.php';

$_title = 'Templates - Mailer - SmartAdmin v4.6.3';
$_active_nav = 'php_mailer_templates';
$_head = '';
$_description = 'SmartAdmin PHP&#x27;s built-in Mailer templates';

?>
<?php

$exception = null;

$templates = [
    \Common\Mailer::TEMPLATE_DEFAULT => [
        'height' => '400px',
        'params' => [
            'message' => ['Message', '<p>Hello there. This is a sample email body.</p>'],
            'color' => ['State', 'success']
        ]
    ],
    \Common\Mailer::TEMPLATE_VERIFY_EMAIL => [
        'height' => '550px',
        'params' => [
            'url' => ['Verification URL', APP_URL.'/php_verifications_verify.php?action=validate&key='.hash('sha256', token())],
            'name' => ['Name', 'Someone']
        ]
    ],
    \Common\Mailer::TEMPLATE_2FA_CODE => [
        'height' => '500px',
        'params' => [
            'code' => ['Code', random_int('111111', '999999')],
            'name' => ['Name', 'Someone']
        ]
    ]
];

if (is_post()) {
    try {
        $template = get('template', $_POST);
        $email = get('email', $_POST);

        $body = \Common\Mailer::formatBody($_POST, $template);

        $mailer = new \Common\Mailer;
        $result = $mailer->submit($email, 'Test email template: '.$template, $body);

        if ($result) {
            $query = http_build_query($_POST);
            redirect(APP_URL.'/php_mailer_templates.php?success=1&'.$query.'#mailer-template-'.$template);
        } else {
            throw new \Exception('Failed to deliver message. Please make sure your <code>.env</code> file is configured correctly');
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
                            <li class="breadcrumb-item">Mailer</li>
                            <li class="breadcrumb-item active">Templates</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Templates
                                <small>
                                    SmartAdmin PHP's built-in Mailer templates
                                </small>
                            </h1>
                        </div>
                        <?php if ($exception) {
                            \App\Content::printAlert($exception, 'danger');
                        } ?>
                        <?php foreach ($templates as $template => $config) : ?>
                            <?php

                            $params = get('params', $config);
                            $height = get('height', $config) ?: '400px';

                            $param_controls = [];
                            $current_values = [];

                            $defaults = ['template' => $template];
                            foreach (get('params', $config) as $param => $info) {
                                $default = $info[1];
                                $defaults[$param] = $default;

                                $label = $info[0];
                                $value = get($param, $_GET, $default);

                                $input = new \Bootstrap\Components\Input($param, ['group_class' => 'col mb-4']);
                                $input->label($label)
                                    ->placeholder('Enter your '.$param)
                                    ->value(escape($value));

                                $param_controls[] = $input->printHtml(true);
                                $current_values[$param] = $value;
                            }

                            if (get('template') === $template) {
                                $query = http_build_query($_GET);
                            } else {
                                $query = http_build_query($defaults);
                            }

                            $iframe_src = APP_URL.'/mail_preview.php?'.$query;

                            ?>
                        <div id="mailer-template-<?= $template ?>" class="panel">
                            <div class="panel-hdr">
                                <h2><?= strtoupper($template) ?></h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <form method="GET" action="<?= APP_URL ?>/php_mailer_templates.php#mailer-template-<?= $template ?>" class="panel-content">
                                    <input type="hidden" name="template" value="<?= $template ?>">
                                    <div class="form-row">
                                        <?= implode(PHP_EOL, $param_controls) ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Preview</button>
                                </form>
                                <hr class="m-0">
                                <div class="panel-content">
                                    <?php if (get('template') === $template && get('success')) {
                                        \App\Content::printAlert('The demo preview message has been successfully sent', 'success');
                                    } ?>
                                    <h5 class="frame-heading">Preview</h5>
                                    <div class="d-flex flex-grow-1 p-0" style="height: <?= $height ?>">
                                        <iframe src="<?= $iframe_src ?>" class="w-100 border-0" allowtransparency="true"></iframe>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <form method="POST" action="<?= APP_URL.'/php_mailer_templates.php' ?>" class="panel-content">
                                    <input type="hidden" name="template" value="<?= $template ?>">
                                    <?php foreach ($current_values as $param => $value) : ?>
                                    <input type="hidden" name="<?= $param ?>" value="<?= escape($value) ?>">
                                    <?php endforeach ?>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <label class="form-label" for="button-addon2">Send preview to</label>
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" placeholder="someone@email.com" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-themed" type="button">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php endforeach ?>
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
