<?php

require_once 'init.php';

$_title = 'Input - PHP Components - SmartAdmin v4.6.3';
$_active_nav = 'php_controls_input';
$_head = '';
$_description = 'Bootstrap controls for PHP';

?>
<?php

$input = new \Bootstrap\Components\Input('email', ['required' => true]);
$input
    ->id('user-email')
    ->type('email')
    ->class('bg-success-50')
    ->label('Email')
    ->value('lodev09@smartadmin.lodev09.com')
    ->help('Use <em>Inspect Element</em> to view the generated HTML code');

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
                            <li class="breadcrumb-item">PHP Components</li>
                            <li class="breadcrumb-item">Controls</li>
                            <li class="breadcrumb-item active">Input</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                PHP Controls
                                <small>
                                    Bootstrap controls for PHP
                                </small>
                            </h1>
                        </div>
                        <div id="panel-demo" class="panel">
                            <div class="panel-hdr">
                                <h2>\Bootstrap\Components\Input</h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <h5 class="frame-heading">Code</h5>
                                    <div class="frame-wrap bg-faded mb-5">
                                        <pre><code class="bg-fusion-400 d-block w-100 pt-2 pr-3 pb-2 pl-3 fw-700 js-output">$input = new \Bootstrap\Components\Input('email', ['required' => true]);
$input
    ->id('user-email')
    ->type('email')
    ->class('bg-success-50')
    ->label('Email')
    ->value('lodev09@smartadmin.lodev09.com')
    ->help('Use <em>Inspect Element</em> to view the generated HTML code');

$input->printHtml();</code></pre>
                                    </div>
                                    <h5 class="frame-heading">Result</h5>
                                    <div class="frame-wrap bg-faded mb-5">
                                        <?= $input->printHtml() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Documentation
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <!-- <div class="panel-tag">
                Enter additional information here
            </div> -->
                                    <div class="markdown-body">
                                        <?php

                                        $content = file_get_contents(DOCS_PATH.'/controls_input.md');

                                        $parsedown = new \Common\Markdown();
                                        $parsedown->setBreaksEnabled(true);
                                        echo $parsedown->text($content);

                                        ?>
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
