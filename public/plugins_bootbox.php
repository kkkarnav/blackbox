<?php

require_once 'init.php';

$_title = 'BootBox - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_bootbox';
$_head = '';
$_description = 'waves description';

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
                            <li class="breadcrumb-item">Core Plugins</li>
                            <li class="breadcrumb-item active">BootBox</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> BootBox <sup class='badge badge-success fw-500'>EXTENSION</sup>
                                <small>
                                    waves description
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
                                        <span class="h5">About</span>
                                        <p>Bootbox.js is a small JavaScript library which allows you to create programmatic dialog boxes using Bootstrap modals, without having to worry about creating, managing, or removing any of the required DOM elements or JavaScript event handlers.</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on BootBox's <a href="http://bootboxjs.com/documentation.html" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            BootBox <span class="fw-300"><i>Examples</i></span>
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
                                                The examples below attempt to demonstrate the myriad ways in which you can use Bootbox.
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">1</span> Basic usage
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-1">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">2</span>
                                                            Basic usage, with callback
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-2">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">3</span>
                                                            Basic usage, using options object
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-3">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">4</span>
                                                            Small dialog
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-4">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">5</span>
                                                            Large dialog
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-5">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">6</span>
                                                            Basic confirmation
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-6">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">7</span>
                                                            Confirmation with alternate button text and color
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-7">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">8</span>
                                                            Confirmation with icon and button text
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-8">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">9</span>
                                                            Prompt basic
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-9">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">10</span>
                                                            Prompt with checkbox
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-10">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">11</span>
                                                            Prompt with radio buttons and a <code>message</code> value
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-11">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">12</span>
                                                            Prompt with date
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-12">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">13</span>
                                                            Prompt with email
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-13">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">14</span>
                                                            Prompt with number
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-14">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">15</span>
                                                            Prompt with password
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-15">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">16</span>
                                                            Prompt with select
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-16">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">17</span>
                                                            Prompt with select & multiple
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-17">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">18</span>
                                                            Prompt with textarea
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-18">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">19</span>
                                                            Prompt with time
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-19">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">20</span>
                                                            Prompt with range
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-20">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">21</span>
                                                            Custom dialog as "loading" overlay
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-21">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">22</span>
                                                            Custom dialog, using init
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-22">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">23</span>
                                                            Custom dialog, with buttons and callbacks
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-23">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">24</span>
                                                            Custom dialot and message with input controls
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-example-24">Try me!</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            BootBox <span class="fw-300"><i>Custom Class</i></span>
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
                                                Below we use the custom class method <code>className</code> to add the class <code>modal-alert</code> to change the dialog appearance and also add sound by using <code>initApp.playSound</code> function
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">1</span> Basic confirmation
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-alert-1">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">2</span>
                                                            Basic Alert
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-bootbox-alert-2">Try me!</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
        <script>
            $(document).ready(function()
            {
                "use strict";

                //A basic message
                $("#js-bootbox-example-1").on("click", function()
                {
                    bootbox.alert("This is the default alert!");
                });

                $("#js-bootbox-example-2").on("click", function()
                {
                    bootbox.alert("This is an alert with a callback!", function()
                    {
                        console.log('This was logged in the callback!');
                    });
                });

                $("#js-bootbox-example-3").on("click", function()
                {
                    bootbox.alert(
                    {
                        message: "This is an alert with a callback!",
                        callback: function()
                        {
                            console.log('This was logged in the callback!');
                        }
                    })
                });


                $("#js-bootbox-example-4").on("click", function()
                {
                    bootbox.alert(
                    {
                        message: "This is the small alert!",
                        size: 'small'
                    });
                });

                $("#js-bootbox-example-5").on("click", function()
                {
                    bootbox.alert(
                    {
                        message: "This is the large alert!",
                        size: 'large'
                    })
                });

                $("#js-bootbox-example-6").on("click", function()
                {
                    bootbox.alert(
                    {
                        message: "This alert can be dismissed by clicking on the background!",
                        backdrop: true
                    });
                });

                $("#js-bootbox-example-7").on("click", function()
                {
                    bootbox.confirm("This is the default confirm!", function(result)
                    {
                        console.log('This was logged in the callback: ' + result);
                    });
                });

                $("#js-bootbox-example-8").on("click", function()
                {
                    bootbox.confirm(
                    {
                        message: "This is a confirm with custom button text and color! Do you like it?",
                        buttons:
                        {
                            confirm:
                            {
                                label: 'Yes',
                                className: 'btn-success'
                            },
                            cancel:
                            {
                                label: 'No',
                                className: 'btn-danger'
                            }
                        },
                        callback: function(result)
                        {
                            console.log('This was logged in the callback: ' + result);
                        }
                    });
                });

                $("#js-bootbox-example-9").on("click", function()
                {
                    bootbox.confirm(
                    {
                        title: "Destroy planet?",
                        message: "Do you want to activate the Deathstar now? This cannot be undone.",
                        buttons:
                        {
                            cancel:
                            {
                                label: '<i class="fa fa-times"></i> Cancel'
                            },
                            confirm:
                            {
                                label: '<i class="fa fa-check"></i> Confirm'
                            }
                        },
                        callback: function(result)
                        {
                            console.log('This was logged in the callback: ' + result);
                        }
                    });
                });

                $("#js-bootbox-example-10").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a set of checkbox inputs!",
                        value: ['1', '3'],
                        inputType: 'checkbox',
                        inputOptions: [
                        {
                            text: 'Choice One',
                            value: '1',
                        },
                        {
                            text: 'Choice Two',
                            value: '2',
                        },
                        {
                            text: 'Choice Three',
                            value: '3',
                        }],
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-11").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a set of radio inputs!",
                        message: '<p>Please select an option below:</p>',
                        inputType: 'radio',
                        inputOptions: [
                        {
                            text: 'Choice One',
                            value: '1',
                        },
                        {
                            text: 'Choice Two',
                            value: '2',
                        },
                        {
                            text: 'Choice Three',
                            value: '3',
                        }],
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-12").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a date input!",
                        inputType: 'date',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-13").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with an email input!",
                        inputType: 'email',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-14").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a number input!",
                        inputType: 'number',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-15").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a password input!",
                        inputType: 'password',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-16").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with select!",
                        inputType: 'select',
                        inputOptions: [
                        {
                            text: 'Choose one...',
                            value: '',
                        },
                        {
                            text: 'Choice One',
                            value: '1',
                        },
                        {
                            text: 'Choice Two',
                            value: '2',
                        },
                        {
                            text: 'Choice Three',
                            value: '3',
                        }],
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-17").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a multi-select!",
                        inputType: 'select',
                        multiple: true,
                        value: ['1', '3'],
                        inputOptions: [
                        {
                            text: 'Choose one...',
                            value: '',
                        },
                        {
                            text: 'Choice One',
                            value: '1',
                        },
                        {
                            text: 'Choice Two',
                            value: '2',
                        },
                        {
                            text: 'Choice Three',
                            value: '3',
                        }],
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-18").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a textarea!",
                        inputType: 'textarea',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-19").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a time input!",
                        inputType: 'time',
                        callback: function(result)
                        {
                            console.log(result);
                        }
                    });
                });

                $("#js-bootbox-example-20").on("click", function()
                {
                    bootbox.prompt(
                    {
                        title: "This is a prompt with a range input!",
                        inputType: 'range',
                        min: 0,
                        max: 100,
                        step: 5,
                        value: 35,
                        callback: function(result)
                        {
                            console.log('This was logged in the callback: ' + result);
                        }
                    });
                });

                $("#js-bootbox-example-21").on("click", function()
                {
                    var dialog = bootbox.dialog(
                    {
                        message: '<p class="text-center mb-0"><i class="fa fa-spin fa-cog"></i> Please wait while we do something...</p>',
                        centerVertical: true,
                        closeButton: false
                    });

                    // do something in the background


                    dialog.init(function()
                    {
                        setTimeout(function()
                        {
                            dialog.modal('hide');
                        }, 2000);
                    });
                });

                $("#js-bootbox-example-22").on("click", function()
                {
                    var dialog = bootbox.dialog(
                    {
                        title: 'A custom dialog with init',
                        message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                    });

                    dialog.init(function()
                    {
                        setTimeout(function()
                        {
                            dialog.find('.bootbox-body').html('I was loaded after the dialog was shown!');
                        }, 3000);
                    });
                });

                $("#js-bootbox-example-23").on("click", function()
                {
                    var dialog = bootbox.dialog(
                    {
                        title: 'A custom dialog with buttons and callbacks',
                        message: "<p>This dialog has buttons. Each button has it's own callback function.</p>",
                        size: 'large',
                        buttons:
                        {
                            cancel:
                            {
                                label: "I'm a cancel button!",
                                className: 'btn-danger',
                                callback: function()
                                {
                                    console.log('Custom cancel clicked');
                                }
                            },
                            noclose:
                            {
                                label: "I don't close the modal!",
                                className: 'btn-warning',
                                callback: function()
                                {
                                    console.log('Custom button clicked');
                                    return false;
                                }
                            },
                            ok:
                            {
                                label: "I'm an OK button!",
                                className: 'btn-info',
                                callback: function()
                                {
                                    console.log('Custom OK clicked');
                                }
                            }
                        }
                    });
                });


                $("#js-bootbox-example-24").on("click", function()
                {

                    bootbox.dialog(
                    {
                        title: "This is a form in a modal.",
                        message: '<div class="row">  ' +
                            '<div class="col-md-12"> ' +
                            '<form class="form-horizontal"> ' +
                            '<div class="form-group"> ' +
                            '<label class="form-label" for="name">Name</label> ' +
                            '<input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md"> ' +
                            '<span class="help-block">Here goes your name</span> </div> ' +
                            '<div class="form-group"> ' +
                            '<p class="fw-500">How awesome is this?</p> ' +
                            '<div class="form-check radio"> <label class="form-check-label" for="awesomeness-0"> ' +
                            '<input class="form-check-input bootbox-input bootbox-input-radio" type="radio" name="awesomeness" id="awesomeness-0" value="Really awesome"> ' +
                            'Really awesome </label> ' +
                            '</div><div class="form-check radio"> <label for="awesomeness-1" class="form-check-label"> ' +
                            '<input class="form-check-input bootbox-input bootbox-input-radio" type="radio" name="awesomeness" id="awesomeness-1" value="Super awesome"> Super awesome </label> ' +
                            '</div> ' +
                            '</div>' +
                            '</form> </div>  </div>',
                        buttons:
                        {
                            success:
                            {
                                label: "Save",
                                className: "btn-success",
                                callback: function()
                                {
                                    var name = $('#name').val();
                                    var answer = $("input[name='awesomeness']:checked").val()
                                    console.log("Hello " + name + ". You've chosen " + answer + "")
                                }
                            }
                        }
                    });

                });

                $("#js-bootbox-alert-1").on("click", function()
                {

                    initApp.playSound(myapp_config.assetsUrl + '/media/sound', 'bigbox')

                    bootbox.confirm(
                    {
                        title: "<i class='fal fa-times-circle text-danger mr-2'></i> Do you wish to delete this table?",
                        message: "<span><strong>Warning:</strong> This action cannot be undone!</span>",
                        centerVertical: true,
                        swapButtonOrder: true,
                        buttons:
                        {
                            confirm:
                            {
                                label: 'Yes',
                                className: 'btn-danger shadow-0'
                            },
                            cancel:
                            {
                                label: 'No',
                                className: 'btn-default'
                            }
                        },
                        className: "modal-alert",
                        closeButton: false,
                        callback: function(result)
                        {

                            console.log("test")
                        }
                    });
                });

                $("#js-bootbox-alert-2").on("click", function()
                {

                    initApp.playSound(myapp_config.assetsUrl + '/media/sound', 'voice_on')

                    bootbox.alert(
                    {
                        title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>Success!</span>",
                        message: "<span><strong>Great...</strong> all is complete</span>",
                        centerVertical: true,
                        className: "modal-alert",
                        closeButton: false
                    });
                });


            });

        </script>
    </body>
</html>
