<?php

require_once 'init.php';

$_title = 'Basic Inputs - Form Stuff - SmartAdmin v4.6.3';
$_active_nav = 'form_basic_inputs';
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
                            <li class="breadcrumb-item active">Basic Inputs</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Basic Inputs
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
                                            General <span class="fw-300"><i>inputs</i></span>
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
                                                Be sure to use an appropriate type attribute on all inputs (e.g., code <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                                            </div>
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinput">Text</label>
                                                    <input type="text" id="simpleinput" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-email-2">Email</label>
                                                    <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-password">Password</label>
                                                    <input type="password" id="example-password" class="form-control" value="password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-palaceholder">Placeholder</label>
                                                    <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-textarea">Text area</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-static">Static control</label>
                                                    <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="email@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-helping">Helping text</label>
                                                    <input type="text" id="example-helping" class="form-control" placeholder="Helping text">
                                                    <span class="help-block">
                                                        A block of help text that breaks onto a new line and may extend beyond one line.
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-select">Input Select</label>
                                                    <select class="form-control" id="example-select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-multiselect">Multiple Select</label>
                                                    <select id="example-multiselect" multiple="" class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-fileinput">Default file input</label>
                                                    <input type="file" id="example-fileinput" class="form-control-file">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-datetime-local-input">Date and time</label>
                                                    <input class="form-control" type="datetime-local" value="2023-07-23T11:25:00" id="example-datetime-local-input">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-date">Date</label>
                                                    <input class="form-control" id="example-date" type="date" name="date" value="2023-07-23">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-month">Month</label>
                                                    <input class="form-control" id="example-month" type="month" name="month">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-week">Week</label>
                                                    <input class="form-control" id="example-week" type="week" name="week">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-time-2">Time</label>
                                                    <input class="form-control" id="example-time-2" type="time" name="time">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-time-3">Time</label>
                                                    <input class="form-control" id="example-time-3" type="time" name="time">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-number">Number</label>
                                                    <input class="form-control" id="example-number" type="number" name="number" value="839473">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-color">Color</label>
                                                    <input class="form-control" id="example-color" type="color" name="color" value="#727cf5">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="example-range">Range</label>
                                                    <input class="form-control" id="example-range" type="range" name="range" min="0" max="100">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="customRange2">Range (custom)</label>
                                                    <input type="range" class="custom-range" id="customRange2">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Select (custom)</label>
                                                    <select class="custom-select form-control">
                                                        <option selected="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="form-label">File (Browser)</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            General <span class="fw-300"><i>inputs (disabled)</i></span>
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
                                                Add the disabled boolean attribute on an input to prevent user interactions and make it appear lighter. By default, browsers will treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them.
                                            </div>
                                            <form>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="simpleinput-disabled">Text disabled</label>
                                                    <input type="text" id="simpleinput-disabled" class="form-control" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-email-disabled">Email disabled</label>
                                                    <input type="email" id="example-email-disabled" name="example-email-disabled" class="form-control" placeholder="Email" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-password-disabled">Password disabled</label>
                                                    <input type="password" id="example-password-disabled" class="form-control" value="password" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-palaceholder-disabled">Placeholder disabled</label>
                                                    <input type="text" id="example-palaceholder-disabled" class="form-control" placeholder="placeholder" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-textarea-disabled">Text area disabled</label>
                                                    <textarea class="form-control" id="example-textarea-disabled" rows="5" disabled=""></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-static-disabled">Static control disabled</label>
                                                    <input type="text" readonly="" class="form-control-plaintext" id="example-static-disabled" value="email@example.com" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-helping-disabled">Helping text disabled</label>
                                                    <input type="text" id="example-helping-disabled" class="form-control" placeholder="Helping text" disabled="">
                                                    <span class="help-block">
                                                        A block of help text that breaks onto a new line and may extend beyond one line.
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-select-disabled">Input Select disabled</label>
                                                    <select class="form-control" id="example-select-disabled" disabled="">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-multiselect-disabled">Multiple Select disabled</label>
                                                    <select id="example-multiselect-disabled" multiple="" class="form-control" disabled="">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-fileinput-disabled">Default file input disabled</label>
                                                    <input type="file" id="example-fileinput-disabled" class="form-control-file" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-datetime-local-input-disabled">Date and time disabled</label>
                                                    <input class="form-control" type="datetime-local" value="2023-07-23T11:25:00" id="example-datetime-local-input-disabled" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-date-disabled">Date disabled</label>
                                                    <input class="form-control" id="example-date-disabled" type="date" name="date" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-month-disabled">Month disabled</label>
                                                    <input class="form-control" id="example-month-disabled" type="month" name="month" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-week-disabled">Week disabled</label>
                                                    <input class="form-control" id="example-week-disabled" type="week" name="week" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-time-disabled">Time disabled</label>
                                                    <input class="form-control" id="example-time-disabled" type="time" name="time" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-time-disabled-2">Time disabled</label>
                                                    <input class="form-control" id="example-time-disabled-2" type="time" name="time" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-number">Number disabled</label>
                                                    <input class="form-control" id="example-number-disabled" type="number" name="number" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-color">Color disabled</label>
                                                    <input class="form-control" id="example-color-disabled" type="color" name="color" value="#ed1c24" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted" for="example-range-disabled">Range disabled</label>
                                                    <input class="form-control" id="example-range-disabled" type="range" name="range" min="0" max="100" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="customRange1" class="form-label text-muted">Range (disabled)</label>
                                                    <input type="range" class="custom-range" id="customRange1" disabled="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label text-muted">Select (disabled)</label>
                                                    <select class="custom-select form-control" disabled="">
                                                        <option selected="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="form-label text-muted">File Browser (disabled)</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile-2" disabled="">
                                                        <label class="custom-file-label" for="customFile-2">Choose file</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Input <span class="fw-300"><i>Sizes</i></span>
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
                                                Set heights using classes like <code>.input-lg</code>, <code>.input-sm</code> and for custom inputs, you can use <code>.custom-select-sm</code>, <code>.custom-select-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>
                                            </div>
                                            <form>
                                                <div class="form-group">
                                                    <label for="example-input-small" class="form-label">Small</label>
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-input-normal" class="form-label">Normal</label>
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-input-large" class="form-label">Large</label>
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="example-gridsize" class="form-label">Grid Sizes</label>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="<?= APP_URL ?>/utilities_responsive_grid.php" title="Responsive Grid" target="_blank">Check out how it works</a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <input type="text" id="example-gridsize" class="form-control bg-primary-50" placeholder=".col-3">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" id="example-gridsize-2" class="form-control bg-success-50" placeholder=".col">
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mb-0">
                                                                <input class="form-control" id="gridrange" type="range" name="gridrange" min="1" max="12" value="3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Altering <span class="fw-300"><i>with utilities</i></span>
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
                                                You can easily alter the border, boder-radius and padding using the utility classes.
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="example-input-square" class="form-label">Square edges</label>
                                                        <input type="text" id="example-input-square" class="form-control form-control-lg rounded-0" placeholder="Square borders">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="example-input-pill" class="form-label">Rounded pill</label>
                                                        <input type="text" id="example-input-pill" class="form-control form-control-lg rounded-pill" placeholder="Rounded pill">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="example-input-material" class="form-label">Material</label>
                                                        <input type="text" id="example-input-material" class="form-control form-control-lg rounded-0 border-top-0 border-left-0 border-right-0 px-0 bg-transparent" placeholder="Material">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="example-input-border" class="form-label">Border color</label>
                                                        <input type="text" id="example-input-border" class="form-control form-control-lg border-info" placeholder="Border colors">
                                                    </div>
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
        <script type="text/javascript">
            var example_gridsize = $("#example-gridsize");

            $("#gridrange").on("input change", function()
            {
                //do something
                example_gridsize.attr("placeholder", ".col-" + $(this).val());
                example_gridsize.parent().removeClass().addClass("col-" + $(this).val())
                console.log("col-" + $(this).val());
            });

        </script>
    </body>
</html>
