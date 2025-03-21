<?php

require_once 'init.php';

$_title = 'Badges - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_badges';
$_head = '';
$_description = 'Small and adaptive tag for adding context to just about any content.';

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
                            <li class="breadcrumb-item">UI Components</li>
                            <li class="breadcrumb-item active">Badges</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Badges
                                <small>
                                    Small and adaptive tag for adding context to just about any content.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary">
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">Conveying meaning to assistive technologies</span>
                                        <br> Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.sr-only</code> class.
                                        <br>
                                        <br> Learn more about this component on bootstrap's
                                        <a href="https://getbootstrap.com/docs/4.4/components/badge/" target="_blank">official documentation</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Badge <span class="fw-300"><i>scaling</i></span>
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
                                                Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units
                                            </div>
                                            <div class="demo-v-spacing">
                                                <h1>Example heading <span class="badge badge-primary">New</span></h1>
                                                <h2>Example heading <span class="badge badge-success">New</span></h2>
                                                <h3>Example heading <span class="badge badge-info">New</span></h3>
                                                <h4>Example heading <span class="badge badge-danger">New</span></h4>
                                                <h5>Example heading <span class="badge badge-warning">New</span></h5>
                                                <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Badge <span class="fw-300"><i>in buttons</i></span>
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
                                                Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units
                                            </div>
                                            <h5 class="frame-heading">
                                                Regular buttons
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-lg btn-primary">Messages
                                                        <span class="badge bg-primary-300 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-secondary">Messages
                                                        <span class="badge bg-fusion-500 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-default">Messages
                                                        <span class="badge bg-primary-500 ml-2">4</span>
                                                    </button>
                                                </div>
                                                <div class="demo">
                                                    <button type="button" class="btn btn-default">Messages
                                                        <span class="badge bg-primary-500 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-success">Messages
                                                        <span class="badge bg-success-700 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-warning">Messages
                                                        <span class="badge bg-warning-200 ml-2">4</span>
                                                    </button>
                                                </div>
                                                <div class="demo">
                                                    <button type="button" class="btn btn-sm btn-info">Messages
                                                        <span class="badge bg-info-700 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger">Messages
                                                        <span class="badge bg-danger-800 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-dark">Messages
                                                        <span class="badge bg-fusion-300 ml-2">4</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Outline buttons
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-lg btn-outline-primary">Messages
                                                        <span class="badge bg-primary-300 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-outline-secondary">Messages
                                                        <span class="badge bg-fusion-500 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-outline-default">Messages
                                                        <span class="badge bg-primary-500 ml-2">4</span>
                                                    </button>
                                                </div>
                                                <div class="demo">
                                                    <button type="button" class="btn btn-outline-default">Messages
                                                        <span class="badge bg-primary-500 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-success">Messages
                                                        <span class="badge bg-success-700 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-warning">Messages
                                                        <span class="badge bg-warning-200 ml-2">4</span>
                                                    </button>
                                                </div>
                                                <div class="demo">
                                                    <button type="button" class="btn btn-sm btn-outline-info">Messages
                                                        <span class="badge bg-info-700 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger">Messages
                                                        <span class="badge bg-danger-800 ml-2">4</span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-dark">Messages
                                                        <span class="badge bg-fusion-300 ml-2">4</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Icon <span class="fw-300"><i>badges</i></span>
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
                                                Use utility classes with <code>.btn-icon</code> to place the badge
                                            </div>
                                            <div class="demo demo-h-spacing mb-4">
                                                <a href="javascript:void(0);" class="btn btn-lg btn-primary btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-print"></i>
                                                    <span class="badge border border-light rounded-pill bg-danger-500 position-absolute pos-top pos-right">9</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-secondary btn-lg btn-icon position-relative js-waves-off">
                                                    <i class="fal fa-volume-mute fs-md"></i>
                                                    <span class="badge border border-light rounded-pill bg-success-700 position-absolute pos-bottom pos-right">18</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-default btn-lg btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-envelope"></i>
                                                    <span class="badge border border-light bg-warning-700 position-absolute pos-top pos-left">99</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-outline-success btn-lg btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-download"></i>
                                                    <span class="badge border border-success rounded-pill bg-primary-500 position-absolute pos-bottom pos-right">100..</span>
                                                </a>
                                            </div>
                                            <div class="demo demo-h-spacing mb-4">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-print"></i>
                                                    <span class="badge border border-light rounded-pill bg-danger-500 position-absolute pos-top pos-right">16</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-secondary btn-icon position-relative js-waves-off">
                                                    <i class="fal fa-volume-mute fs-md"></i>
                                                    <span class="badge border border-light rounded-pill bg-success-700 position-absolute pos-bottom pos-right">4</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-default btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-envelope"></i>
                                                    <span class="badge border border-light bg-warning-700 position-absolute pos-top pos-left">4</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-outline-success btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-download"></i>
                                                    <span class="badge border border-success rounded-pill bg-primary-500 position-absolute pos-bottom pos-right">99+</span>
                                                </a>
                                            </div>
                                            <div class="demo demo-h-spacing mb-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-print"></i>
                                                    <span class="badge border border-light rounded-pill bg-danger-500 position-absolute pos-top pos-right">4</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-secondary btn-icon position-relative js-waves-off">
                                                    <i class="fal fa-volume-mute fs-md"></i>
                                                    <span class="badge border border-light rounded-pill bg-success-700 position-absolute pos-bottom pos-right">0</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-default btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-envelope"></i>
                                                    <span class="badge border border-light bg-warning-700 position-absolute pos-top pos-left">7</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success btn-icon rounded-circle position-relative js-waves-off">
                                                    <i class="fal fa-download"></i>
                                                    <span class="badge border border-success rounded-pill bg-primary-500 position-absolute pos-bottom pos-right">4</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Status <span class="fw-300"><i>badges</i></span>
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
                                                These badges are unique and triggered by wrapping an element with <code>.status</code> class. Comes with two badge sizes <code>.status-sm</code> and the default <code>.status</code>. Comes in 3 colors, <code>.status-danger</code>, <code>.status-warning</code>, and <code>.status-success</code>
                                            </div>
                                            <div class="demo">
                                                <span class="status d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-danger d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-success d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-warning d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle" alt="...">
                                                </span>
                                            </div>
                                            <div class="demo">
                                                <span class="status status-sm d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-sm status-danger d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-sm status-success d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="...">
                                                </span>
                                                <span class="status status-sm status-warning d-inline-block">
                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="...">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Contextual <span class="fw-300"><i>variations</i></span>
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
                                                Add any of the below mentioned modifier classes to change the appearance of a badge.
                                            </div>
                                            <div class="frame-heading">
                                                Default
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <span class="badge badge-primary">Primary</span>
                                                    <span class="badge badge-secondary">Secondary</span>
                                                    <span class="badge badge-success">Success</span>
                                                    <span class="badge badge-danger">Danger</span>
                                                    <span class="badge badge-warning">Warning</span>
                                                    <span class="badge badge-info">Info</span>
                                                    <span class="badge badge-light">Light</span>
                                                    <span class="badge badge-dark">Dark</span>
                                                </div>
                                            </div>
                                            <div class="frame-heading">
                                                Border utility
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <span class="badge border border-primary text-primary">Primary</span>
                                                    <span class="badge border border-secondary text-secondary">Secondary</span>
                                                    <span class="badge border border-success text-success">Success</span>
                                                    <span class="badge border border-danger text-danger">Danger</span>
                                                    <span class="badge border border-warning text-warning">Warning</span>
                                                    <span class="badge border border-info text-info">Info</span>
                                                    <span class="badge border border-light text-light">Light</span>
                                                    <span class="badge border border-dark text-dark">Dark</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Pill <span class="fw-300"><i>badges</i></span>
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
                                                Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger border-radius and additional horizontal padding).
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <span class="badge badge-primary badge-pill">Primary</span>
                                                    <span class="badge badge-secondary badge-pill">Secondary</span>
                                                    <span class="badge badge-success badge-pill">Success</span>
                                                    <span class="badge badge-danger badge-pill">Danger</span>
                                                    <span class="badge badge-warning badge-pill">Warning</span>
                                                    <span class="badge badge-info badge-pill">Info</span>
                                                    <span class="badge badge-light badge-pill">Light</span>
                                                    <span class="badge badge-dark badge-pill">Dark</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Links <span class="fw-300"><i>example</i></span>
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
                                                Add <code>.badge-*</code> class on a hyperlink element to convert it to actionable badges with hover and focus states
                                            </div>
                                            <div class="demo">
                                                <a href="#" class="badge badge-primary">Link Badge - Primary</a>
                                                <a href="#" class="badge badge-secondary">Link Badge - Secondary</a>
                                                <a href="#" class="badge badge-success">Link Badge - Success</a>
                                                <a href="#" class="badge badge-danger">Link Badge - Danger</a>
                                                <a href="#" class="badge badge-warning">Link Badge - Warning</a>
                                                <a href="#" class="badge badge-info">Link Badge - Info</a>
                                                <a href="#" class="badge badge-light">Link Badge - Light</a>
                                                <a href="#" class="badge badge-dark">Link Badge - Dark</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Nested <span class="fw-300"><i>badge</i></span>
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
                                                Use the included <a href="<?= APP_URL ?>/utilities_color_pallet.php" target="_blank">color utilities</a> to change background and text colors. Below are examples of nested badge with different background colors
                                            </div>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <span class="badge bg-primary-100">
                                                        <span class="badge bg-primary-200">
                                                            <span class="badge bg-primary-300">
                                                                <span class="badge bg-primary-400">
                                                                    <span class="badge bg-primary-500">
                                                                        <span class="fs-xl fw-300">Nested Badge 1</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="badge bg-primary-400">
                                                        <span class="badge bg-info-500">
                                                            <span class="badge bg-success-500">
                                                                <span class="badge bg-warning-500">
                                                                    <span class="badge bg-danger-500">
                                                                        <span class="fs-xl fw-300">Nested Badge 2</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="badge bg-danger-400 badge-pill">
                                                        <span class="badge bg-warning-500 badge-pill">
                                                            <span class="badge bg-info-500 badge-pill">
                                                                <span class="badge bg-success-500 badge-pill">
                                                                    <span class="badge bg-primary-500 badge-pill">
                                                                        <span class="fs-xl fw-300">99+</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Badge <span class="fw-300"><i>header</i></span>
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
                                                We use <code>.badge-icon</code> with a combination of other utility classes to create a link badge. This class will auto turncate overflow giving you a nice clean look without any hassle
                                            </div>
                                            <div class="demo">
                                                <a href="javascript:void(0);" class="height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 text-primary h2">
                                                    I am a large text
                                                    <span class="badge badge-icon position-relative ml-2">9999</span>
                                                </a>
                                                <br>
                                                <a href="javascript:void(0);" class="width-auto height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 h4 text-primary">
                                                    I am smaller text
                                                    <span class="badge badge-icon position-relative ml-2">9999</span>
                                                </a>
                                                <br>
                                                <a href="javascript:void(0);" class="width-auto height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 text-primary">
                                                    I am normal text
                                                    <span class="badge badge-icon position-relative ml-2">9999</span>
                                                </a>
                                            </div>
                                            <div class="demo">
                                                <a href="javascript:void(0);" class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h1 text-primary">
                                                    <i class="fal fa-bell"></i>
                                                    <span class="badge badge-icon pos-top pos-right">11</span>
                                                </a>
                                                <a href="javascript:void(0);" class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h1 text-primary">
                                                    <i class="fal fa-envelope"></i>
                                                    <span class="badge badge-icon pos-top pos-right">17</span>
                                                </a>
                                                <a href="javascript:void(0);" class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h3 text-primary">
                                                    <i class="fal fa-bell"></i>
                                                    <span class="badge badge-icon pos-top pos-right">11</span>
                                                </a>
                                                <a href="javascript:void(0);" class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h3 text-primary">
                                                    <i class="fal fa-envelope"></i>
                                                    <span class="badge badge-icon pos-top pos-right">17</span>
                                                </a>
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
