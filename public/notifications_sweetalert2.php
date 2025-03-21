<?php

require_once 'init.php';

$_title = 'SweetAlert2 - Notifications - SmartAdmin v4.6.3';
$_active_nav = 'notifications_sweetalert2';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/notifications/sweetalert2/sweetalert2.bundle.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = ' A beautiful, responsive customizable, accessible (wai-aria) replacement for javascript&#x27;s popup boxes with no dependencies';

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
                            <li class="breadcrumb-item">Notifications</li>
                            <li class="breadcrumb-item active">SweetAlert2</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-exclamation-circle'></i> SweetAlert2 <sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    A beautiful, responsive customizable, accessible (wai-aria) replacement for javascript's popup boxes with no dependencies
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
                                        <p>SweetAlert2 is a JavaScript library that helps us create alerts in our web applications. SweetAlert2 is a replacement for default JavaScript pop up boxes. It needs zero dependencies, is customizable, well structured, accessible (wai-aria) and responsive. It needs promise.js for IE11 support. It is currently not supported in IE10</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on sweetalert2's <a href="https://sweetalert2.github.io/#usage" target="_blank">Official Documentation</a>
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
                                            SweetAlert2 <span class="fw-300"><i>Examples</i></span>
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
                                                SweetAlert2 automatically centers itself on the page and looks great no matter if you're using a desktop computer, mobile or tablet. It's even highly customizeable, as you can see below!
                                            </div>
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">1</span> A basic message
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-1">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">2</span>
                                                            A title with a text under
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-2">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">3</span>
                                                            A modal with a title, an error icon, a text, and a footer
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-3">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">4</span>
                                                            A modal window with a long content inside:
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-4">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">5</span>
                                                            Custom HTML description and buttons with ARIA labels
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-5">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">6</span>
                                                            A custom positioned dialog
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-6">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">7</span>
                                                            A confirm dialog, with a function attached to the "Confirm"-button...
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-7">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">8</span>
                                                            ... and by passing a parameter, you can execute something else for "Cancel".
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-8">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">9</span>
                                                            A message with a custom image and CSS animation disabled
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-9">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">10</span>
                                                            A message with custom width, padding, background and animated Nyan Cat
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-10">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">11</span>
                                                            A message with auto close timer
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-11">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">12</span>
                                                            Right-to-left support for Arabic, Hebrew, and other RTL languages
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-12">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">13</span>
                                                            AJAX request example
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-13">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">14</span>
                                                            Chaining modals (queue) example
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-14">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">15</span>
                                                            Dynamic queue example
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-15">Try me!</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 40%; vertical-align: middle;">
                                                            <span class="d-inline-flex border border-primary text-primary width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center">16</span>
                                                            Timer functions example
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary" id="js-sweetalert2-example-16">Try me!</a>
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
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
        <script src="<?= ASSETS_URL ?>/js/notifications/sweetalert2/sweetalert2.bundle.js"></script>
        <script>
            $(document).ready(function()
            {

                "use strict";

                //A basic message
                $("#js-sweetalert2-example-1").on("click", function()
                {
                    Swal.fire("Any fool can use a computer");
                }); //A title with a text under

                $("#js-sweetalert2-example-2").on("click", function()
                {
                    Swal.fire("The Internet?", "That thing is still around?", "question");
                }); //A modal with a title, an error icon, a text, and a footer

                $("#js-sweetalert2-example-3").on("click", function()
                {
                    Swal.fire(
                    {
                        type: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "<a href>Why do I have this issue?</a>"
                    });
                }); //A modal window with a long content inside:

                $("#js-sweetalert2-example-4").on("click", function()
                {
                    Swal.fire(
                    {
                        imageUrl: "https://placeholder.pics/svg/300x1500",
                        imageHeight: 1500,
                        imageAlt: "A tall image"
                    });
                }); //Custom HTML description and buttons with ARIA labels

                $("#js-sweetalert2-example-5").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "<strong>HTML <u>example</u></strong>",
                        type: "info",
                        html: "You can use <b>bold text</b>, " +
                            '<a href="//github.com">links</a> ' +
                            "and other HTML tags",
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText: '<i class="fal fa-thumbs-up"></i> Great!',
                        confirmButtonAriaLabel: "Thumbs up, great!",
                        cancelButtonText: '<i class="fal fa-thumbs-down"></i>',
                        cancelButtonAriaLabel: "Thumbs down"
                    });
                }); //A custom positioned dialog

                $("#js-sweetalert2-example-6").on("click", function()
                {
                    Swal.fire(
                    {
                        position: "top-end",
                        type: "success",
                        title: "Your work has been saved",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }); //A confirm dialog, with a function attached to the "Confirm"-button...

                $("#js-sweetalert2-example-7").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!"
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                            Swal.fire("Deleted!", "Your file has been deleted.", "success");
                        }
                    });
                }); // ... and by passing a parameter, you can execute something else for "Cancel".

                $("#js-sweetalert2-example-8").on("click", function()
                {
                    var swalWithBootstrapButtons = Swal.mixin(
                    {
                        customClass:
                        {
                            confirmButton: "btn btn-primary",
                            cancelButton: "btn btn-danger mr-2"
                        },
                        buttonsStyling: false
                    });
                    swalWithBootstrapButtons
                        .fire(
                        {
                            title: "Are you sure?",
                            text: "You won't be able to revert this!",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, delete it!",
                            cancelButtonText: "No, cancel!",
                            reverseButtons: true
                        })
                        .then(function(result)
                        {
                            if (result.value)
                            {
                                swalWithBootstrapButtons.fire(
                                    "Deleted!",
                                    "Your file has been deleted.",
                                    "success"
                                );
                            }
                            else if (
                                // Read more about handling dismissals
                                result.dismiss === Swal.DismissReason.cancel
                            )
                            {
                                swalWithBootstrapButtons.fire(
                                    "Cancelled",
                                    "Your imaginary file is safe :)",
                                    "error"
                                );
                            }
                        });
                }); // A message with a custom image and CSS animation disabled

                $("#js-sweetalert2-example-9").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "Sweet!",
                        text: "Modal with a custom image.",
                        imageUrl: "https://unsplash.it/400/200",
                        imageWidth: 400,
                        imageHeight: 200,
                        imageAlt: "Custom image",
                        animation: false
                    });
                }); //A message with custom width, padding, background and animated Nyan Cat

                $("#js-sweetalert2-example-10").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "Custom width, padding, background.",
                        width: 600,
                        padding: "3em",
                        background: "#fff url(/images/trees.png)",
                        backdrop: '\n\t\t\t    rgba(0,0,123,0.4)\n\t\t\t    url("/images/nyan-cat.gif")\n\t\t\t    center left\n\t\t\t    no-repeat\n\t\t\t  '
                    });
                }); // A message with auto close timer

                $("#js-sweetalert2-example-11").on("click", function()
                {
                    var timerInterval;
                    Swal.fire(
                    {
                        title: "Auto close alert!",
                        html: "I will close in <strong></strong> seconds.",
                        timer: 2000,
                        onBeforeOpen: function onBeforeOpen()
                        {
                            Swal.showLoading();
                            timerInterval = setInterval(function()
                            {
                                Swal.getContent().querySelector(
                                    "strong"
                                ).textContent = Swal.getTimerLeft();
                            }, 100);
                        },
                        onClose: function onClose()
                        {
                            clearInterval(timerInterval);
                        }
                    }).then(function(result)
                    {
                        if (
                            // Read more about handling dismissals
                            result.dismiss === Swal.DismissReason.timer
                        )
                        {
                            console.log("I was closed by the timer");
                        }
                    });
                }); //Right-to-left support for Arabic, Hebrew, and other RTL languages

                $("#js-sweetalert2-example-12").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "هل تريد الاستمرار؟",
                        type: "question",
                        customClass:
                        {
                            icon: "swal2-arabic-question-mark"
                        },
                        confirmButtonText: "نعم",
                        cancelButtonText: "لا",
                        showCancelButton: true,
                        showCloseButton: true
                    });
                }); //AJAX request example

                $("#js-sweetalert2-example-13").on("click", function()
                {
                    Swal.fire(
                    {
                        title: "Submit your Github username",
                        input: "text",
                        inputAttributes:
                        {
                            autocapitalize: "off"
                        },
                        showCancelButton: true,
                        confirmButtonText: "Look up",
                        showLoaderOnConfirm: true,
                        preConfirm: function preConfirm(login)
                        {
                            return fetch("//api.github.com/users/".concat(login))
                                .then(function(response)
                                {
                                    if (!response.ok)
                                    {
                                        throw new Error(response.statusText);
                                    }

                                    return response.json();
                                })
                                .catch(function(error)
                                {
                                    Swal.showValidationMessage("Request failed: ".concat(error));
                                });
                        },
                        allowOutsideClick: function allowOutsideClick()
                        {
                            return !Swal.isLoading();
                        }
                    }).then(function(result)
                    {
                        if (result.value)
                        {
                            Swal.fire(
                            {
                                title: "".concat(result.value.login, "'s avatar"),
                                imageUrl: result.value.avatar_url
                            });
                        }
                    });
                }); //Dynamic queue example

                $("#js-sweetalert2-example-14").on("click", function()
                {
                    var ipAPI = "https://api.ipify.org?format=json";
                    Swal.queue([
                    {
                        title: "Your public IP",
                        confirmButtonText: "Show my public IP",
                        text: "Your public IP will be received " + "via AJAX request",
                        showLoaderOnConfirm: true,
                        preConfirm: function preConfirm()
                        {
                            return fetch(ipAPI)
                                .then(function(response)
                                {
                                    return response.json();
                                })
                                .then(function(data)
                                {
                                    return Swal.insertQueueStep(data.ip);
                                })
                                .catch(function()
                                {
                                    Swal.insertQueueStep(
                                    {
                                        type: "error",
                                        title: "Unable to get your public IP"
                                    });
                                });
                        }
                    }]);
                }); //Timer functions example

                $("#js-sweetalert2-example-15").on("click", function()
                {
                    Swal.mixin(
                        {
                            input: "text",
                            confirmButtonText: 'Next <i class="fal fa-chevron-right"></i>',
                            showCancelButton: true,
                            progressSteps: ["1", "2", "3"]
                        })
                        .queue([
                            {
                                title: "Question 1",
                                text: "Chaining swal2 modals is easy"
                            },
                            "Question 2",
                            "Question 3"
                        ])
                        .then(function(result)
                        {
                            if (result.value)
                            {
                                Swal.fire(
                                {
                                    title: "All done!",
                                    html: "Your answers: <pre><code>" +
                                        JSON.stringify(result.value) +
                                        "</code></pre>",
                                    confirmButtonText: "Lovely!"
                                });
                            }
                        });
                }); //Chaining modals (queue) example

                $("#js-sweetalert2-example-16").on("click", function()
                {
                    var timerInterval;
                    Swal.fire(
                    {
                        title: "Auto close alert!",
                        html: "I will close in <strong></strong> seconds.<br/><br/>" +
                            '<button id="increase" class="btn btn-warning">' +
                            "I need 5 more seconds!" +
                            "</button><br/>" +
                            '<button id="stop" class="btn btn-danger">' +
                            "Please stop the timer!!" +
                            "</button><br/>" +
                            '<button id="resume" class="btn btn-success" disabled>' +
                            "Phew... you can restart now!" +
                            "</button><br/>" +
                            '<button id="toggle" class="btn btn-primary">' +
                            "Toggle" +
                            "</button>",
                        timer: 10000,
                        onBeforeOpen: function onBeforeOpen()
                        {
                            var content = Swal.getContent();
                            var $ = content.querySelector.bind(content);
                            var stop = $("#stop");
                            var resume = $("#resume");
                            var toggle = $("#toggle");
                            var increase = $("#increase");
                            Swal.showLoading();

                            function toggleButtons()
                            {
                                stop.disabled = !Swal.isTimerRunning();
                                resume.disabled = Swal.isTimerRunning();
                            }

                            stop.addEventListener("click", function()
                            {
                                Swal.stopTimer();
                                toggleButtons();
                            });
                            resume.addEventListener("click", function()
                            {
                                Swal.resumeTimer();
                                toggleButtons();
                            });
                            toggle.addEventListener("click", function()
                            {
                                Swal.toggleTimer();
                                toggleButtons();
                            });
                            increase.addEventListener("click", function()
                            {
                                Swal.increaseTimer(5000);
                            });
                            timerInterval = setInterval(function()
                            {
                                Swal.getContent().querySelector("strong").textContent = (
                                    Swal.getTimerLeft() / 1000
                                ).toFixed(0);
                            }, 100);
                        },
                        onClose: function onClose()
                        {
                            clearInterval(timerInterval);
                        }
                    });
                });



            });

        </script>
    </body>
</html>
