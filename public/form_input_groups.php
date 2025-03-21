<?php

require_once 'init.php';

$_title = 'Input Groups - Form Stuff - SmartAdmin v4.6.3';
$_active_nav = 'form_input_groups';
$_head = '';
$_description = 'Default input elements for forms';

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
                            <li class="breadcrumb-item">Form Stuff</li>
                            <li class="breadcrumb-item active">Input Groups</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Input Groups
                                <small>
                                    Default input elements for forms
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Basic <span class="fw-300"><i>example</i></span>
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
                                                <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon1">Prepend</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">@</span>
                                                    </div>
                                                    <input type="text" id="basic-addon1" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-addon2">Append</label>
                                                <div class="input-group">
                                                    <input id="basic-addon2" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">@example.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-url">Your vanity URL</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-url">Prepend and append</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="basic-url">Text area example</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Comment</span>
                                                    </div>
                                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Wrapping <span class="fw-300"><i>inputs</i></span>
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
                                                Input groups wrap by default via <code>flex-wrap: wrap</code> in order to accommodate custom form field validation within an input group. You may disable this with <code>.flex-nowrap</code>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="addon-wrapping-left">Prepend with flex-nowrap</label>
                                                <div class="input-group flex-nowrap">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>
                                                    </div>
                                                    <input id="addon-wrapping-left" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping-left">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="addon-wrapping-right">Append with flex-nowrap</label>
                                                <div class="input-group flex-nowrap">
                                                    <input id="addon-wrapping-right" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping-right">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fal fa-user fs-xl"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Various <span class="fw-300"><i>sizing</i></span>
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
                                                Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element. <strong>Sizing on the individual input group elements isn’t supported</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="input-group-lg-size">Large Input Group</label>
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text py-1 px-3">
                                                            <span class="icon-stack" style="font-size: 2rem">
                                                                <i class="base-2 icon-stack-3x color-success-500"></i>
                                                                <i class="base-10 text-white icon-stack-1x"></i>
                                                                <i class="ni md-profile color-success-700 icon-stack-2x"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <input id="input-group-lg-size" type="text" class="form-control" placeholder="Large size" aria-describedby="input-group-lg-size">
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="input-group-lg-size-2">Large Input Group</label>
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            0.00
                                                        </span>
                                                        <span class="input-group-text">
                                                            <i class="fal fa-percent"></i>
                                                        </span>
                                                    </div>
                                                    <input id="input-group-lg-size-2" type="text" class="form-control" placeholder="Large size" aria-describedby="input-group-lg-size-2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="input-group-sm-size">Small Input Group</label>
                                                <div class="input-group input-group-sm">
                                                    <input id="input-group-sm-size" type="text" class="form-control" placeholder="Small size" aria-describedby="input-group-sm-size">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fal fa-undo"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="input-group-sm-size-2">Small Input Group</label>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fal fa-undo"></i>
                                                        </span>
                                                    </div>
                                                    <input id="input-group-sm-size-2" type="text" class="form-control" placeholder="Small size" aria-describedby="input-group-sm-size-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Checkboxes <span class="fw-300"><i>and radios</i></span>
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
                                                Place any checkbox or radio option within an input group’s addon instead of text
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="checkbox-group-2">Checkbox</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkmeout1">
                                                                <label class="custom-control-label" for="checkmeout1">I agree</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-text text-success">
                                                            <i class="fal fa-dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" id="checkbox-group-2">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="checkbox-group-3">Checkbox split</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-success">
                                                            <i class="fal fa-dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" id="checkbox-group-3">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="checkmeout2">
                                                                <label class="custom-control-label" for="checkmeout2">I agree</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="checkbox-group-4">Checkbox switch</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox" id="checkbox-group-4" placeholder="Record title">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <div class="custom-control d-flex custom-switch">
                                                                <input id="eventlog-switch-1" type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label fw-500" for="eventlog-switch-1">Debugger Active</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-text">
                                                            <div class="custom-control d-flex custom-switch">
                                                                <input id="eventlog-switch-2" type="checkbox" class="custom-control-input">
                                                                <label class="custom-control-label fw-500" for="eventlog-switch-2">Record Logs</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="radio-group-1">Radio generic</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio1">Yes</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with radio button" id="radio-group-1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="radio-group-2">Radio generic</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio3" name="customRadio2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio3">Yes</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-text text-danger">
                                                            <i class="fal fa-dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with radio button" id="radio-group-2">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio4" name="customRadio2" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadio4">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Multiple <span class="fw-300"><i>inputs</i></span>
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
                                                Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element. You can add <code>.input-group-multi-transition</code> to <code>.input-group</code> to animate focused inputs
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="name-f">Two input fields</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-success">
                                                            <i class="ni ni-user fs-xl"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" aria-label="First name" class="form-control" placeholder="First name" id="name-f">
                                                    <input type="text" aria-label="Last name" class="form-control" placeholder="Last name" id="name-l">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="dollar-1">Three input fields (animated)</label>
                                                <div class="input-group input-group-multi-transition">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="dollar-1" placeholder="Recipient">
                                                    <input type="text" class="form-control" aria-label="Person name" placeholder="Email">
                                                    <input type="text" class="form-control" aria-label="Person name" placeholder="Amount">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">0.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Between two inputs</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-append input-group-prepend">
                                                        <span class="input-group-text"><i class="fal fa-exchange fs-xl"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Segmented <span class="fw-300"><i>buttons</i></span>
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
                                                Dropdown with action buttons
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="drop-w-action-left">Button from left</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-outline-default">Action</button>
                                                        <button type="button" class="btn btn-outline-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" id="drop-w-action-left">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="drop-w-action-left">Button from right</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" id="drop-w-action-right">
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-outline-default">Action</button>
                                                        <button type="button" class="btn btn-outline-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Seamless <span class="fw-300"><i>icon</i></span>
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
                                                Add seamless icons using various utility classes
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Icon on left</label>
                                                <div class="input-group bg-white shadow-inset-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0">
                                                            <i class="fal fa-search"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control border-left-0 bg-transparent pl-0" placeholder="Search...">
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Icon on Right</label>
                                                <div class="input-group bg-white shadow-inset-2">
                                                    <input type="text" class="form-control border-right-0 bg-transparent pr-0" placeholder="Search...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-transparent border-left-0">
                                                            <i class="fal fa-search"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Large icon</label>
                                                <div class="input-group input-group-lg bg-white shadow-inset-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                            <span class="icon-stack fs-xxl">
                                                                <i class="base-7 icon-stack-3x color-primary-500"></i>
                                                                <i class="fal fa-database icon-stack-1x text-white"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control border-left-0 bg-transparent pl-0" placeholder="Search...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Small icon with button</label>
                                                <div class="input-group input-group-sm bg-white shadow-inset-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0 py-1 px-3 text-success">
                                                            <i class="fal fa-search"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control border-left-0 bg-transparent pl-0" placeholder="Type here...">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-default" type="button">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Button <span class="fw-300"><i>addon</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div class="form-group">
                                                <label class="form-label" for="button-addon1">Button on left</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default" type="button" id="button-addon1">Go</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Search anything..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="button-addon2">Button on right</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default" type="button" id="button-addon2">Look up!</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="button-addon3">Button on both sides</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default" type="button">Go</button>
                                                    </div>
                                                    <input id="button-addon3" type="text" class="form-control" placeholder="Search for anything..." aria-label="Example text with two button addons" aria-describedby="button-addon3">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default" type="button">Go</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="button-addon4">Button on left with icon</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-info" type="button"><i class="fal fa-search"></i></button>
                                                    </div>
                                                    <input id="button-addon4" type="text" class="form-control" placeholder="Search anything..." aria-label="Example text with button addon" aria-describedby="button-addon4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="button-addon5">Button on right</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon5">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button" id="button-addon5"><i class="fal fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Buttons <span class="fw-300"><i>with dropdown</i></span>
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
                                                Dropdowns are easily integrated just like buttons, you can have more than one dropdowns
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="dropdown-on-left">Dropdown on left</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" id="dropdown-on-left">
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="dropdown-on-right">Dropdown on right</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" id="dropdown-on-right">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="dropdown-on-both">Dropdown on both</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" id="dropdown-on-both">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Custom <span class="fw-300"><i>forms</i></span>
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
                                                Input groups include support for custom selects and custom file inputs. Browser default versions of these are not supported
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupSelect01">Label & select on left</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect01">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupSelect02">Label & select on right</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <select class="custom-select" id="inputGroupSelect02">
                                                            <option selected>Choose...</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupSelect03">Button & select on left</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default" type="button">Button</button>
                                                    </div>
                                                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupSelect04">Button & select on right</label>
                                                <div class="input-group">
                                                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                                        <option selected>Choose...</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default" type="button">Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-11" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            File <span class="fw-300"><i>upload</i></span>
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
                                                Combine file upload with addon elements
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupFile01">Button & select on right</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupFile01">Button & select on right</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupFile01">Button & select on right</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-default" type="button" id="inputGroupFileAddon03">Button</button>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                    </div>
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="inputGroupFile01">Button & select on right</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-default" type="button" id="inputGroupFileAddon04">Button</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-12" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Kitchen <span class="fw-300"><i>sink</i></span>
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
                                                A combination of elements working in harmony
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="name-f">Label Text</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-success">
                                                            <i class="ni ni-user fs-xl"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" aria-label="First name" class="form-control" placeholder="User" id="user">
                                                    <div class="input-group-append input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fal fa-exchange fs-xl"></i>
                                                        </span>
                                                    </div>
                                                    <select class="custom-select" id="usertype" aria-label="usertype">
                                                        <option selected="">User type</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-success shadow-0">Save</button>
                                                        <button type="button" class="btn btn-success shadow-0 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="help-block">Some help content goes here</span>
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
