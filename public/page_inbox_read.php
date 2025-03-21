<?php

require_once 'init.php';

$_title = 'Inbox Read - Page Views - SmartAdmin v4.6.3';
$_active_nav = 'page_inbox_read';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
';

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
    <body class="mod-bg-1 mod-nav-link mod-skin-<?= $_theme ?> nav-function-minify layout-composed">
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
                        <!-- Page heading removed for composed layout -->
                        <div class="d-flex flex-grow-1 p-0">
                            <!-- left slider -->
                            <div id="js-inbox-menu" class="flex-wrap position-relative bg-white slide-on-mobile slide-on-mobile-left">
                                <div class="position-absolute pos-top pos-bottom w-100">
                                    <div class="d-flex h-100 flex-column">
                                        <div class="px-3 px-sm-4 px-lg-5 py-4 align-items-center">
                                            <div class="btn-group btn-block" role="group" aria-label="Button group with nested dropdown ">
                                                <button type="button" class="btn btn-danger btn-block fs-md" data-action="toggle" data-class="d-flex" data-target="#panel-compose" data-focus="message-to">Compose</button>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle px-2 js-waves-off" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu p-0" aria-labelledby="btnGroupDrop1">
                                                        <a class="dropdown-item" href="#">Work group A</a>
                                                        <a class="dropdown-item" href="#">New page</a>
                                                        <a class="dropdown-item" href="#">Edit signature</a>
                                                        <div class="dropdown-divider m-0"></div>
                                                        <a class="dropdown-item" href="#"> <i class="fas fa-plus width-1"></i> Add more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 pr-3">
                                            <a href="<?= APP_URL ?>/page_inbox_general.php" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md font-weight-bold d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0 ">
                                                <div>
                                                    <i class="fas fa-folder-open width-1"></i>Inbox
                                                </div>
                                                <div class="fw-400 fs-xs js-unread-emails-count"></div>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                                                <div>
                                                    <i class="fas fa-star width-1"></i>Starred
                                                </div>
                                                <div class="fw-400 fs-xs">(6)</div>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                                                <div>
                                                    <i class="fas fa-edit width-1"></i>Draft
                                                </div>
                                                <div class="fw-400 fs-xs">(5)</div>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                                                <div>
                                                    <i class="fas fa-paper-plane width-1"></i>Sent
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                                                <div>
                                                    <i class="fas fa-exclamation-triangle width-1"></i>Spam
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item px-3 px-sm-4 pr-lg-3 pl-lg-5 py-2 fs-md font-weight-bold d-flex justify-content-between rounded-pill border-top-left-radius-0 border-bottom-left-radius-0">
                                                <div>
                                                    <i class="fas fa-trash width-1"></i>Trash
                                                </div>
                                            </a>
                                        </div>
                                        <div class="px-5 py-3 fs-nano fw-500">
                                            1.5 GB (10%) of 15 GB used
                                            <div class="progress mt-1" style="height: 7px;">
                                                <div class="progress-bar" role="progressbar" style="width: 11%;" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-backdrop" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-inbox-menu"></div> <!-- end left slider -->
                            <!-- inbox container -->
                            <div class="d-flex flex-column flex-grow-1 bg-white">
                                <!-- inbox header -->
                                <div class="flex-grow-0">
                                    <!-- inbox button shortcut -->
                                    <div class="d-flex flex-wrap align-items-center pl-2 pr-3 py-2 px-sm-4 pr-lg-5 pl-lg-0 border-faded border-top-0 border-left-0 border-right-0">
                                        <div class="flex-1 d-flex align-items-center">
                                            <a href="<?= APP_URL ?>/page_inbox_general.php" class="btn btn-icon rounded-circle mr-2 mr-lg-3">
                                                <i class="fas fa-arrow-left fs-lg"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon rounded-circle mr-1">
                                                <i class="fas fa-redo fs-md"></i>
                                            </a>
                                            <a href="<?= APP_URL ?>/page_inbox_general.php" class="btn btn-icon rounded-circle mr-1">
                                                <i class="fas fa-exclamation-circle fs-md"></i>
                                            </a>
                                            <a href="<?= APP_URL ?>/page_inbox_general.php" id="js-delete-selected" class="btn btn-icon rounded-circle mr-1">
                                                <i class="fas fa-trash fs-md"></i>
                                            </a>
                                        </div>
                                        <div class="text-muted mr-1 mr-lg-3 ml-auto">
                                            <span class="hidden-lg-down"> 1 - 50 of 135 </span>
                                            <div class="btn-group hidden-lg-up" role="group">
                                                <button type="button" class="btn btn-default">Reply</button>
                                                <div class="btn-group" role="group">
                                                    <button id="dropdown-reply" type="button" class="btn btn-default dropdown-toggle px-2 js-waves-off" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu p-0" aria-labelledby="dropdown-reply">
                                                        <a class="dropdown-item" href="#">Reply to all</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <div class="dropdown-divider m-0"></div>
                                                        <a class="dropdown-item" href="#">
                                                            Move to...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap hidden-lg-down">
                                            <button class="btn btn-icon rounded-circle"><i class="fal fa-chevron-left fs-md"></i></button>
                                            <button class="btn btn-icon rounded-circle"><i class="fal fa-chevron-right fs-md"></i></button>
                                        </div>
                                    </div>
                                    <!-- end inbox button shortcut -->
                                </div>
                                <!-- end inbox header -->
                                <!-- inbox message -->
                                <div class="flex-wrap align-items-center flex-grow-1 position-relative bg-white">
                                    <div class=" position-absolute pos-top pos-bottom w-100 custom-scroll">
                                        <div class="d-flex h-100 flex-column">
                                            <!-- inbox title -->
                                            <div class="d-flex align-items-center pl-2 pr-3 py-3 pl-sm-3 pr-sm-4 py-sm-4 px-lg-5 py-lg-3 flex-shrink-0">
                                                <!-- button for mobile -->
                                                <a href="javascript:void(0);" class="pl-3 pr-3 py-2 d-flex d-lg-none align-items-center justify-content-center mr-2 btn" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-inbox-menu">
                                                    <i class="fal fa-ellipsis-v h1 mb-0 "></i>
                                                </a>
                                                <!-- end button for mobile -->
                                                <h1 class="subheader-title mb-0 ml-2 ml-lg-5">
                                                    Re: New security codes
                                                </h1>
                                                <span class="badge badge-primary ml-2 hidden-sm-down">INBOX</span>
                                                <div class="d-flex position-relative ml-auto">
                                                    <a href="#" title="starred" class="btn btn-icon ml-1 fs-lg">
                                                        <i class="fas fa-star color-warning-500"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg" data-toggle="collapse" data-target=".js-collapse">
                                                        <i class="fas fa-arrows-v"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg hidden-lg-down">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end inbox title -->
                                            <!-- message -->
                                            <div id="msg-01" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                                                <div class="d-flex align-items-center flex-row">
                                                    <div class="ml-0 mr-3 mx-lg-3">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="Melissa Ayre">
                                                    </div>
                                                    <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-01 > .js-collapse">
                                                        <div class="fs-lg">
                                                            Melissa Ayre
                                                            <span class="fs-nano fw-400 ml-2">notifications@github.com</span>
                                                        </div>
                                                        <div class="fs-nano">
                                                            to drlantern@gotbootstrap.com
                                                        </div>
                                                    </div>
                                                    <div class="color-fusion-200 fs-sm">
                                                        1:00 AM <span class="hidden-sm-down">(12 hours ago)</span>
                                                    </div>
                                                    <div class="collapsed-reveal">
                                                        <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                                            <i class="fal fa-reply"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="collapse js-collapse">
                                                    <div class="pl-lg-5 ml-lg-5 pt-3 pb-4">
                                                        We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                                        So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end message -->
                                            <!-- message me-->
                                            <div id="msg-02" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                                                <div class="d-flex align-items-center flex-row">
                                                    <div class="ml-0 mr-3 mx-lg-3">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image profile-image-md rounded-circle" alt="Dr. Codex Lantern">
                                                    </div>
                                                    <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-02 > .js-collapse">
                                                        <div class="fs-lg">
                                                            Dr. Codex Lantern
                                                            <span class="fs-nano fw-400 ml-2">me</span>
                                                        </div>
                                                        <div class="fs-nano">
                                                            to melissa.ayre@gotbootstrap.com
                                                        </div>
                                                    </div>
                                                    <div class="color-fusion-200 fs-sm">
                                                        7:00 AM <span class="hidden-sm-down">(6 hours ago)</span>
                                                    </div>
                                                    <div class="collapsed-reveal">
                                                        <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                                            <i class="fal fa-reply"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="collapse js-collapse">
                                                    <div class="pl-lg-5 ml-lg-5 pt-3 pb-4">
                                                        We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                                        So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                                                        <br>
                                                        <br>
                                                        <div class="d-flex d-column align-items-start mb-3">
                                                            <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin for PHP" class="mr-3 mt-1">
                                                            <div class="border-left pl-3">
                                                                <span class="fw-500 fs-lg d-block l-h-n">Dr. Codex Lantern</span>
                                                                <span class="fw-400 fs-nano d-block l-h-n mb-1">Orthopedic Surgeon</span>
                                                                <a href="#" class="mr-1 fs-xl" style="color:#3b5998"><i class="fab fa-facebook-square"></i></a>
                                                                <a href="#" class="mr-1 fs-xl" style="color:#38A1F3"><i class="fab fa-twitter-square"></i></a>
                                                                <a href="#" class="mr-1 fs-xl" style="color:#0077B5"><i class="fab fa-linkedin"></i></a>
                                                                <a href="#" class="mr-1 fs-xl" style="color:#ff0000"><i class="fab fa-youtube-square"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="text-muted fs-nano">
                                                            ​PRIVATE AND CONFIDENTIAL. This e-mail, its contents and attachments are private and confidential and is intended for the recipient only. Any disclosure, copying or unauthorized use of such information is prohibited. If you receive this message in error, please notify us immediately and delete the original and any copies and attachments.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end message me-->
                                            <!-- message -->
                                            <div id="msg-03" class="d-flex flex-column border-faded border-top-0 border-left-0 border-right-0 py-3 px-3 px-sm-4 px-lg-0 mr-0 mr-lg-5 flex-shrink-0">
                                                <div class="d-flex align-items-center flex-row">
                                                    <div class="ml-0 mr-3 mx-lg-3 width-2">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image profile-image-md rounded-circle" alt="Melissa Ayre">
                                                    </div>
                                                    <div class="fw-500 flex-1 d-flex flex-column cursor-pointer" data-toggle="collapse" data-target="#msg-03 > .js-collapse">
                                                        <div class="fs-lg">
                                                            Melissa Ayre
                                                            <span class="fs-nano fw-400 ml-2">notifications@github.com</span>
                                                        </div>
                                                        <div class="fs-nano">
                                                            to drlantern@gotbootstrap.com
                                                        </div>
                                                    </div>
                                                    <div class="color-fusion-200 fs-sm">
                                                        6:00 AM <span class="hidden-sm-down">(5 hours ago)</span>
                                                    </div>
                                                    <div class="collapsed-reveal">
                                                        <a href="javascript:void(0);" class="btn btn-icon ml-1 fs-lg rounded-circle">
                                                            <i class="fal fa-reply"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div id="js-msg-1" class="js-collapse">
                                                    <div class="pl-lg-5 ml-lg-5 pt-3 pb-4 ">
                                                        We've taken customer feedback on board and are pleased to announce that the the industry's most recommended and secure option for Two-Factor Authentication (2FA) is now available to use on our site.
                                                        So, if you've tried our previous 2FA methods and have not been convinced, why not try our new Time-Based One-Time Password (TOTP)? It's super easy to use, and it works with many third-party 2FA apps you might already have on your phone. We're positive you'll love the new improved experience.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end message -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end inbox message -->
                            </div>
                            <!-- end inbox container -->
                            <!-- compose message -->
                            <div id="panel-compose" class="panel w-100 position-fixed pos-bottom pos-right mb-0 z-index-cloud mr-lg-4 shadow-3 border-bottom-left-radius-0 border-bottom-right-radius-0 expand-full-height-on-mobile expand-full-width-on-mobile shadow" style="max-width:40rem; height:35rem; display: none;">
                                <div class="position-relative h-100 w-100 d-flex flex-column">
                                    <!-- desktop view -->
                                    <div class="panel-hdr bg-fusion-600 height-4 d-none d-sm-none d-lg-flex">
                                        <h4 class="flex-1 fs-lg color-white mb-0 pl-3">
                                            New Message
                                        </h4>
                                        <div class="panel-toolbar pr-2">
                                            <a href="javascript:void(0);" class="btn btn-icon btn-icon-light fs-xl mr-1" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen" data-placement="bottom">
                                                <i class="fal fa-expand-alt"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon btn-icon-light fs-xl" data-action="toggle" data-class="d-flex" data-target="#panel-compose" data-toggle="tooltip" data-original-title="Save & Close" data-placement="bottom">
                                                <i class="fal fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end desktop view -->
                                    <!-- mobile view -->
                                    <div class="d-flex d-lg-none align-items-center px-3 py-3 bg-faded  border-faded border-top-0 border-left-0 border-right-0 flex-shrink-0">
                                        <!-- button for mobile -->
                                        <!-- end button for mobile -->
                                        <h3 class="subheader-title">
                                            New message
                                        </h3>
                                        <div class="ml-auto">
                                            <button type="button" class="btn btn-outline-danger" data-action="toggle" data-class="d-flex" data-target="#panel-compose">Cancel</button>
                                        </div>
                                    </div>
                                    <!-- end mobile view -->
                                    <div class="panel-container show rounded-0 flex-1 d-flex flex-column">
                                        <div class="px-3">
                                            <input id="message-to" type="text" placeholder="Recipients" class="form-control border-top-0 border-left-0 border-right-0 px-0 rounded-0 fs-md mt-2 pr-5" tabindex="2">
                                            <a href="javascript:void(0)" class="position-absolute pos-right pos-top mt-3 mr-4" data-action="toggle" data-class="d-block" data-target="#message-to-cc" data-focus="message-to-cc" data-toggle="tooltip" data-original-title="Add Cc recipients" data-placement="bottom">Cc</a>
                                            <input id="message-to-cc" type="text" placeholder="Cc" class="form-control border-top-0 border-left-0 border-right-0 px-0 rounded-0 fs-md mt-2 d-none" tabindex="3">
                                            <input type="text" placeholder="Subject" class="form-control border-top-0 border-left-0 border-right-0 px-0 rounded-0 fs-md mt-2" tabindex="4">
                                        </div>
                                        <div class="flex-1" style="overflow-y: auto;">
                                            <div id='fake_textarea' class="form-control rounded-0 w-100 h-100 border-0 py-3" contenteditable tabindex="5">
                                                <br>
                                                <br>
                                                <div class="d-flex d-column align-items-start mb-3">
                                                    <img src="<?= ASSETS_URL ?>/img/logo.png" alt="SmartAdmin for PHP" class="mr-3 mt-1">
                                                    <div class="border-left pl-3">
                                                        <span class="fw-500 fs-lg d-block l-h-n">Dr. Codex Lantern</span>
                                                        <span class="fw-400 fs-nano d-block l-h-n mb-1">Orthopedic Surgeon</span>
                                                        <a href="#" class="mr-1 fs-xl" style="color:#3b5998"><i class="fab fa-facebook-square"></i></a>
                                                        <a href="#" class="mr-1 fs-xl" style="color:#38A1F3"><i class="fab fa-twitter-square"></i></a>
                                                        <a href="#" class="mr-1 fs-xl" style="color:#0077B5"><i class="fab fa-linkedin"></i></a>
                                                        <a href="#" class="mr-1 fs-xl" style="color:#ff0000"><i class="fab fa-youtube-square"></i></a>
                                                    </div>
                                                </div>
                                                <div class="text-muted fs-nano">
                                                    ​PRIVATE AND CONFIDENTIAL. This e-mail, its contents and attachments are private and confidential and is intended for the recipient only. Any disclosure, copying or unauthorized use of such information is prohibited. If you receive this message in error, please notify us immediately and delete the original and any copies and attachments.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-3 py-4 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                            <a href="javascript:void(0);" class="btn btn-info mr-3">Send</a>
                                            <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Formatting options" data-placement="top">
                                                <i class="fas fa-font color-fusion-300"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                                <i class="fas fa-paperclip color-fusion-300"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                                <i class="fas fa-camera color-fusion-300"></i>
                                            </a>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0);" class="btn btn-icon fs-xl" data-toggle="tooltip" data-original-title="Disregard draft" data-placement="top">
                                                    <i class="fas fa-trash color-fusion-300"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                                    <i class="fas fa-ellipsis-v-alt color-fusion-300"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end compose message -->
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
            // push settings with "false" save to local
            initApp.pushSettings("nav-function-minify layout-composed", false);

        </script>
    </body>
</html>
