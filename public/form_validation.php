<?php

require_once 'init.php';

$_title = 'Validation - Form Stuff - SmartAdmin v4.6.3';
$_active_nav = 'form_validation';
$_head = '';
$_description = 'Provide valuable, actionable feedback to your users with HTML5 form validation. Choose from the browser default validation feedback, or implement custom messages with our built-in classes and starter JavaScript.';

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
                            <li class="breadcrumb-item active">Validation</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-edit'></i> Validation
                                <small>
                                    Provide valuable, actionable feedback to your users with HTML5 form validation. Choose from the browser default validation feedback, or implement custom messages with our built-in classes and starter JavaScript.
                                </small>
                            </h1>
                        </div>
                        <div class="alert alert-primary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fal fa-times"></i>
                                </span>
                            </button>
                            <div class="d-flex flex-start w-100">
                                <div class="mr-2 hidden-md-down">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                                        <i class="fal fa-info icon-stack-1x opacity-100 color-white"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <p class="h6">How it works</p>
                                        <p>Validation styles are available for the following form controls and components: <code>&lt;input&gt;</code> and <code>&lt;textarea&gt;</code> with <code>.form-control</code> (including up to one <code>.form-control</code> in input groups), <code>&lt;select&gt;</code> with <code>.form-select</code> or <code>.custom-select</code>, <code>.form-check</code>, <code>.custom-checkbox</code> and <code>.custom-radio</code>, <code>.custom-file</code></p>
                                        Learn more about forms on bootstrap's <a href="https://getbootstrap.com/docs/4.4/components/forms/#how-it-works" target="_blank">official documentation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Invalid <span class="fw-300"><i>form styles</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form class="was-validated">
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinputInvalid">Text input</label>
                                                    <input type="text" class="form-control is-invalid" id="simpleinputInvalid" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a message in the textarea.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="validationTextarea3">Textarea</label>
                                                    <textarea class="form-control is-invalid" id="validationTextarea3" placeholder="Required example textarea" required rows="4"></textarea>
                                                    <div class="invalid-feedback">
                                                        Please enter a message in the textarea.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox & Radio</label>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-2">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                                        <div class="invalid-feedback">More example invalid feedback text</div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Switch elements</label>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input is-invalid" id="customControlValidation4" required>
                                                        <label class="custom-control-label" for="customControlValidation4">Toggle this switch element </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="customControlValidation5">Custom select</label>
                                                    <select class="custom-select" required id="customControlValidation5">
                                                        <option value="">Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label is-invalid" for="customControlValidation6">Multiple Select</label>
                                                    <select id="customControlValidation6" multiple="" class="form-control" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Custom file input</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customControlValidation7" required>
                                                        <label class="custom-file-label" for="customControlValidation7">Choose file...</label>
                                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Custom <span class="fw-300"><i>Styles</i></span>
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
                                                <p>For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you. When attempting to submit, you’ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form controls.</p>
                                                <p>Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. Background icons for <code>&lt;select&gt;</code>s are only available with <code>.custom-select</code>, and not <code>.form-control</code>.</p>
                                            </div>
                                        </div>
                                        <div class="panel-content p-0">
                                            <form class="needs-validation" novalidate>
                                                <div class="panel-content">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom01">First name <span class="text-danger">*</span> </label>
                                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Codex" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustom02">Last name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Lantern" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationCustomUsername">Username <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                                <div class="invalid-feedback">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom03">City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationCustom03">State <span class="text-danger">*</span></label>
                                                            <select class="custom-select" required="">
                                                                <option value="">State</option>
                                                                <option value="1">Michigan</option>
                                                                <option value="2">New York</option>
                                                                <option value="3">Oklahoma</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationCustom05">Zip <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label class="form-label" for="validationTextarea2">Comment <span class="text-danger">*</span></label>
                                                            <textarea class="form-control" id="validationTextarea2" placeholder="Required example textarea" required=""></textarea>
                                                            <div class="invalid-feedback">
                                                                Please enter a message in the textarea.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label mb-2">Please disclose your gender profile <span class="text-danger">*</span></label>
                                                            <div class="custom-control custom-radio mb-2">
                                                                <input type="radio" class="custom-control-input" id="GenderMale" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="GenderMale">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mb-2">
                                                                <input type="radio" class="custom-control-input" id="GenderFemale" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="GenderFemale">Female</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="genderPrivate" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="genderPrivate">Prefer not to say</label>
                                                                <div class="invalid-feedback">Please select at least one</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                        <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions <span class="text-danger">*</span></label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary ml-auto" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                            <script>
                                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                (function()
                                                {
                                                    'use strict';
                                                    window.addEventListener('load', function()
                                                    {
                                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                        var forms = document.getElementsByClassName('needs-validation');
                                                        // Loop over them and prevent submission
                                                        var validation = Array.prototype.filter.call(forms, function(form)
                                                        {
                                                            form.addEventListener('submit', function(event)
                                                            {
                                                                if (form.checkValidity() === false)
                                                                {
                                                                    event.preventDefault();
                                                                    event.stopPropagation();
                                                                }
                                                                form.classList.add('was-validated');
                                                            }, false);
                                                        });
                                                    }, false);
                                                })();

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Server <span class="fw-300"><i>side</i></span>
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
                                                We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes
                                            </div>
                                            <form>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label" for="validationServer01">First name</label>
                                                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label" for="validationServer02">Last name</label>
                                                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label class="form-label" for="validationServerUsername">Username</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                            </div>
                                                            <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label" for="validationServer03">City</label>
                                                        <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label class="form-label" for="validationServer04">State</label>
                                                        <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label class="form-label" for="validationServer05">Zip</label>
                                                        <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                                        <label class="form-check-label" for="invalidCheck3">
                                                            Agree to terms and conditions
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Valid <span class="fw-300"><i>form styles</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <form class="was-validated">
                                                <div class="form-group">
                                                    <label class="form-label" for="simpleinputInvalid2">Text input</label>
                                                    <input type="text" class="form-control is-valid" id="simpleinputInvalid2" required value="test">
                                                    <div class="valid-feedback">
                                                        Please enter a message in the textarea.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="validationTextarea">Textarea</label>
                                                    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Required example textarea" required rows="4">test</textarea>
                                                    <div class="valid-feedback">
                                                        Please enter a message in the textarea.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Checkbox & Radio</label>
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="customControlValidationSuccess1" required checked="">
                                                        <label class="custom-control-label" for="customControlValidationSuccess1">Check this custom checkbox</label>
                                                        <div class="valid-feedback">Example valid feedback text</div>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-2">
                                                        <input type="radio" class="custom-control-input" id="customControlValidationSuccess2" name="radio-stacked" required checked="">
                                                        <label class="custom-control-label" for="customControlValidationSuccess2">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidationSuccess3" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidationSuccess3">Or toggle this other custom radio</label>
                                                        <div class="valid-feedback">More example valid feedback text</div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Switch elements</label>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input is-valid" id="customControlValidationSuccess4" required checked="">
                                                        <label class="custom-control-label" for="customControlValidationSuccess4">Toggle this switch element </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="customControlValidationSuccess5">Custom select</label>
                                                    <select class="custom-select" required id="customControlValidationSuccess5">
                                                        <option value="">Open this select menu</option>
                                                        <option value="1" selected="">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="customControlValidationSuccess6">Multiple Select</label>
                                                    <select id="customControlValidationSuccess6" multiple="" class="form-control is-valid" required>
                                                        <option selected="">1</option>
                                                        <option selected="">2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Custom file input</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input is-valid" id="customControlValidationSuccess7">
                                                        <label class="custom-file-label" for="customControlValidationSuccess7">Choose file...</label>
                                                        <div class="valid-feedback">Example valid custom file feedback</div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>Styles</i></span>
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
                                                <p>If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</p>
                                            </div>
                                        </div>
                                        <div class="panel-content p-0">
                                            <form class="needs-validation" novalidate>
                                                <div class="panel-content">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationTooltip01">First name <span class="text-danger">*</span> </label>
                                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Codex" required>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationTooltip02">Last name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Lantern" required>
                                                            <div class="valid-tooltip">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationTooltip03">Username <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                                                <div class="invalid-tooltip">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row form-group">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationTooltip04">City <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="City" required>
                                                            <div class="invalid-tooltip">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationTooltip05">State <span class="text-danger">*</span></label>
                                                            <select class="custom-select" required="" id="validationTooltip05">
                                                                <option value="">State</option>
                                                                <option value="1">Michigan</option>
                                                                <option value="2">New York</option>
                                                                <option value="3">Oklahoma</option>
                                                            </select>
                                                            <div class="invalid-tooltip">
                                                                Please provide a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationTooltip06">Zip <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="validationTooltip06" placeholder="Zip" required>
                                                            <div class="invalid-tooltip">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label class="form-label" for="validationTooltip07">Comment <span class="text-danger">*</span></label>
                                                            <textarea class="form-control" id="validationTooltip07" placeholder="Required example textarea" required=""></textarea>
                                                            <div class="invalid-tooltip">
                                                                Please enter a message in the textarea.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label mb-2">Please disclose your gender profile <span class="text-danger">*</span></label>
                                                            <div class="custom-control custom-radio mb-2">
                                                                <input type="radio" class="custom-control-input" id="validationTooltipGenderMale" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="validationTooltipGenderMale">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mb-2">
                                                                <input type="radio" class="custom-control-input" id="validationTooltipGenderFemale" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="validationTooltipGenderFemale">Female</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="validationTooltipgenderPrivate" name="radio-stacked" required="">
                                                                <label class="custom-control-label" for="validationTooltipgenderPrivate">Prefer not to say</label>
                                                                <div class="invalid-tooltip">Please select at least one</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="validationTooltipAgreement" required>
                                                        <label class="custom-control-label" for="validationTooltipAgreement">Agree to terms and conditions <span class="text-danger">*</span></label>
                                                        <div class="invalid-tooltip">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary ml-auto" type="submit">Submit form</button>
                                                </div>
                                            </form>
                                            <script>
                                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                                (function()
                                                {
                                                    'use strict';
                                                    window.addEventListener('load', function()
                                                    {
                                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                        var forms = document.getElementsByClassName('needs-validation');
                                                        // Loop over them and prevent submission
                                                        var validation = Array.prototype.filter.call(forms, function(form)
                                                        {
                                                            form.addEventListener('submit', function(event)
                                                            {
                                                                if (form.checkValidity() === false)
                                                                {
                                                                    event.preventDefault();
                                                                    event.stopPropagation();
                                                                }
                                                                form.classList.add('was-validated');
                                                            }, false);
                                                        });
                                                    }, false);
                                                })();

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Browser <span class="fw-300"><i>defaults</i></span>
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
                                                <p>
                                                    Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.
                                                </p>
                                                <p>
                                                    While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-content p-0">
                                            <form>
                                                <div class="panel-content">
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationDefault01">First name</label>
                                                            <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Mark" required>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationDefault02">Last name</label>
                                                            <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Otto" required>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label" for="validationDefaultUsername">Username</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="inputGroupPrepend4">@</span>
                                                                </div>
                                                                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend4" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mb-2">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationDefault03">City</label>
                                                            <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationDefault04">State</label>
                                                            <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label class="form-label" for="validationDefault05">Zip</label>
                                                            <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="invalidCheck2" required="">
                                                            <label class="custom-control-label" for="invalidCheck2">Agree to terms and conditions</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row">
                                                    <button class="btn btn-primary ml-auto" type="submit">Submit form</button>
                                                </div>
                                            </form>
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
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            /*  (function() {
                  'use strict';
                  window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                  }, false);
                })();*/

        </script>
    </body>
</html>
