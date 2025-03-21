<?php

require_once 'init.php';

$_title = 'Button Group - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_button_group';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Group a series of buttons together on a single line with the button group, and super-power them with JavaScript.';

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
                            <li class="breadcrumb-item active">Button Group</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Button Group
                                <small>
                                    Group a series of buttons together on a single line with the button group, and super-power them with JavaScript.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-primary">
                                    <div class="d-table w-100">
                                        <div class="d-table-cell align-top width-6">
                                            <span class="icon-stack icon-stack-lg">
                                                <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                                <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                                <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                            </span>
                                        </div>
                                        <div class="d-table-cell pl-1">
                                            <span class="h5">Ensure correct <code>role</code> and provide a label</span>
                                            <p class="mb-0">The <code>.btn</code> styles can be applied to other elements, such as <code>&lt;label></code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable toggling in their respective styles. The checked state for these buttons is <strong>only updated via</strong> click <strong>event</strong> on the button. If you use another method to update the input—e.g., with <code>&lt;input type="reset"></code> or by manually applying the input’s checked property—you’ll need to toggle <code>.active</code> on the <code>&lt;label></code> manually.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Sizes-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Sizes <span class="fw-300"><i>example</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="demo demo-v-spacing-lg">
                                                <div class="btn-group btn-group-lg">
                                                    <button type="button" class="btn btn-secondary">Left</button>
                                                    <button type="button" class="btn btn-secondary">Middle</button>
                                                    <button type="button" class="btn btn-secondary">Right</button>
                                                </div>
                                                <br>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary">Left</button>
                                                    <button type="button" class="btn btn-secondary">Middle</button>
                                                    <button type="button" class="btn btn-secondary">Right</button>
                                                </div>
                                                <br>
                                                <div class="btn-group btn-group-sm">
                                                    <button type="button" class="btn btn-secondary">Left</button>
                                                    <button type="button" class="btn btn-secondary">Middle</button>
                                                    <button type="button" class="btn btn-secondary">Right</button>
                                                </div>
                                                <br>
                                                <div class="btn-group btn-group-xs">
                                                    <button type="button" class="btn btn-secondary">Left</button>
                                                    <button type="button" class="btn btn-secondary">Middle</button>
                                                    <button type="button" class="btn btn-secondary">Right</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Toolbar-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Toolbar <span class="fw-300"><i>example</i></span>
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
                                                Fuse button groups into toolbars for a comprehensize component. Utility classes is needed to set margins to groups and buttons.
                                            </div>
                                            <div></div>
                                            <div class="d-flex justify-content-start flex-wrap demo">
                                                <div class="btn-group mr-2" role="group" aria-label="Group A">
                                                    <button type="button" class="btn btn-secondary">1</button>
                                                    <button type="button" class="btn btn-secondary">2</button>
                                                    <button type="button" class="btn btn-secondary">3</button>
                                                    <button type="button" class="btn btn-secondary">4</button>
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="Group B">
                                                    <button type="button" class="btn btn-secondary">5</button>
                                                    <button type="button" class="btn btn-secondary">6</button>
                                                    <button type="button" class="btn btn-secondary">7</button>
                                                    <button type="button" class="btn btn-secondary">8</button>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Group C">
                                                    <button type="button" class="btn btn-secondary">9</button>
                                                    <button type="button" class="btn btn-secondary">10</button>
                                                    <button type="button" class="btn btn-danger">11</button>
                                                    <button type="button" class="btn btn-secondary">12</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Verticle-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Verticle <span class="fw-300"><i>example</i></span>
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
                                                Make a set of buttons appear vertically stacked rather than horizontally using class <code>.btn-group-vertical</code>. <strong>Split button dropdowns are not supported here.</strong>
                                            </div>
                                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <button type="button" class="btn btn-secondary">Button</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropdown
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Nesting-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Nesting <span class="fw-300"><i>example</i></span>
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
                                                Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons
                                            </div>
                                            <div class="btn-group" id="js-demo-nesting" role="group" aria-label="Button group with nested dropdown">
                                                <button type="button" class="btn btn-secondary">1</button>
                                                <button type="button" class="btn btn-secondary">2</button>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Checkbox and radio-->
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Input <span class="fw-300"><i>checkbox & radio</i></span>
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
                                                <code>.button</code> styles can be applied to other elements, such as <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable their toggling behavior via JavaScript and add <code>.btn-group-toggle</code> to style the <code>&lt;input&gt;</code>s within your buttons. <strong>Note that you can create single input-powered buttons or groups of them.</strong>
                                            </div>
                                            <div class="alert alert-info">
                                                The checked state for these buttons is <strong>only updated via <code>click</code> event</strong> on the button. If you use another method to update the input—e.g., with <code>&lt;input type="reset"&gt;</code> or by manually applying the input’s <code>checked</code> property—you’ll need to toggle <code>.active</code> on the <code>&lt;label&gt;</code> manually.
                                            </div>
                                            <h5 class="frame-heading">
                                                Checkbox
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <input type="checkbox" name="options" id="check1" checked="checked"> Checked
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox" name="options" id="check2"> Unchecked
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <input type="checkbox" name="options" id="check3"> Unchecked
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Radio
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-info active">
                                                        <input type="radio" name="options" id="option1" checked="checked"> Active
                                                    </label>
                                                    <label class="btn btn-info">
                                                        <input type="radio" name="options" id="option2"> Radio
                                                    </label>
                                                    <label class="btn btn-info">
                                                        <input type="radio" name="options" id="option3"> Radio
                                                    </label>
                                                </div>
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
