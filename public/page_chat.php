<?php

require_once 'init.php';

$_title = 'Chat - Page Views - SmartAdmin v4.6.3';
$_active_nav = 'page_chat';
$_head = '';
$_description = 'A robust and simple chat component that is flexible, intuitive, easy to use and customize';

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
                            <li class="breadcrumb-item">Page Views</li>
                            <li class="breadcrumb-item active">Chat</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Chat
                                <small>
                                    A robust and simple chat component that is flexible, intuitive, easy to use and customize
                                </small>
                            </h1>
                        </div>
                        <div class="d-flex flex-grow-1 p-0 border-faded shadow-4" style="max-height:800px;">
                            <!-- left slider -->
                            <div id="js-chat-contact" class="flex-wrap position-relative slide-on-mobile slide-on-mobile-left border-faded border-left-0 border-top-0 border-bottom-0">
                                <!-- BEGIN msgr-list -->
                                <div class="d-flex flex-column bg-faded position-absolute pos-top pos-bottom w-100">
                                    <div class="px-3 py-4">
                                        <input type="text" class="form-control bg-white" placeholder="Search key words">
                                    </div>
                                    <div class="flex-1 h-100 custom-scrollbar">
                                        <div class="w-100">
                                            <div class="nav-title m-0 px-3 text-muted">Chat History</div>
                                            <ul class="list-unstyled m-0">
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                Tracey Chang
                                                                <small class="d-block text-muted text-truncate text-truncate-md">
                                                                    2020-01-31
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-danger btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-danger-500&quot;></div></div>" data-original-title="Delete">
                                                                <i class="fal fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                Oliver Kopyuv
                                                                <small class="d-block text-muted text-truncate text-truncate-md">
                                                                    2019-03-15
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-danger btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-danger-500&quot;></div></div>" data-original-title="Delete">
                                                                <i class="fal fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                Dr. John Cook PhD
                                                                <small class="d-block text-muted text-truncate text-truncate-md">
                                                                    2023-05-27
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-danger btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-danger-500&quot;></div></div>" data-original-title="Delete">
                                                                <i class="fal fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                Ali Amdaney
                                                                <small class="d-block text-muted text-truncate text-truncate-md">
                                                                    2023-06-11
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-danger btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-danger-500&quot;></div></div>" data-original-title="Delete">
                                                                <i class="fal fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="nav-title px-3 text-muted">Missed calls</div>
                                            <ul class="list-unstyled m-0">
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                +714651347790
                                                                <small class="d-block font-italic fs-xs opacity-50">
                                                                    Missed Call
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-success btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-success-500&quot;></div></div>" data-original-title="Play voicemail">
                                                                <i class="fal fa-play"></i>
                                                            </button>
                                                            <button class="btn btn-info btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-info-500&quot;></div></div>" data-original-title="Call back">
                                                                <i class="fal fa-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                                        <div class="profile-image-md rounded-circle" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png'); background-size: cover;"></div>
                                                        <div class="px-2 flex-1">
                                                            <div class="text-truncate text-truncate-md">
                                                                +13471349199
                                                                <small class="d-block font-italic fs-xs opacity-50">
                                                                    Ended in 32 minutes
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                            <button class="btn btn-info btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-info-500&quot;></div></div>" data-original-title="Call back">
                                                                <i class="fal fa-phone"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END msgr-list -->
                            </div>
                            <div class="slide-backdrop" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-chat-contact"></div> <!-- end left slider -->
                            <!-- inbox container -->
                            <div class="d-flex flex-column flex-grow-1 bg-white">
                                <!-- inbox header -->
                                <div class="flex-grow-0">
                                    <!-- inbox title -->
                                    <div class="d-flex align-items-center p-0 border-faded border-top-0 border-left-0 border-right-0 flex-shrink-0">
                                        <div class="d-flex align-items-center w-100 pl-3 px-lg-4 py-2 position-relative">
                                            <div class="d-flex flex-row align-items-center mt-1 mb-1">
                                                <div class="mr-2 d-inline-block">
                                                    <span class="rounded-circle profile-image d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                </div>
                                                <div class="info-card-text">
                                                    <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg" data-toggle="dropdown" aria-expanded="false">
                                                        Oliver Kopyov
                                                        <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item px-3 py-2" href="#">Send Email</a>
                                                        <a class="dropdown-item px-3 py-2" href="#">Create Appointment</a>
                                                        <a class="dropdown-item px-3 py-2" href="#">Block User</a>
                                                    </div>
                                                    <span class="text-truncate text-truncate-md opacity-80">Online Strategist</span>
                                                </div>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0);" data-toggle="button" class="btn btn-outline-danger btn-icon rounded-circle">
                                                    <i class="fal fa-volume-mute fs-md"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info btn-icon rounded-circle ml-1">
                                                    <i class="fal fa-phone fs-md"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-outline-info btn-icon rounded-circle ml-1">
                                                    <i class="fal fa-video fs-md"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- button for mobile -->
                                        <a href="javascript:void(0);" class="px-3 py-2 d-flex d-lg-none align-items-center justify-content-center mr-2 btn" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-chat-contact">
                                            <i class="fal fa-ellipsis-v h1 mb-0 "></i>
                                        </a>
                                        <!-- end button for mobile -->
                                    </div>
                                    <!-- end inbox title -->
                                </div>
                                <!-- end inbox header -->
                                <!-- inbox message -->
                                <div class="flex-wrap align-items-center flex-grow-1 position-relative bg-gray-50">
                                    <div class="position-absolute pos-top pos-bottom w-100 overflow-hidden">
                                        <div class="d-flex h-100 flex-column">
                                            <!-- message list (the part that scrolls) -->
                                            <!-- BEGIN msgr-list -->
                                            <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                                                <div>
                                                    <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                                        <i class="fal fa-search"></i>
                                                    </div>
                                                    <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                                                </div>
                                                <div class="flex-1 h-100 custom-scroll">
                                                    <div class="w-100">
                                                        <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                                                    <div class="d-table-cell align-middle status status-success status-sm ">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            Tracey Chang
                                                                            <small class="d-block font-italic text-success fs-xs">
                                                                                Online
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="oliver kopyuv online">
                                                                    <div class="d-table-cell align-middle status status-success status-sm ">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            Oliver Kopyuv
                                                                            <small class="d-block font-italic text-success fs-xs">
                                                                                Online
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="dr john cook phd away">
                                                                    <div class="d-table-cell align-middle status status-warning status-sm ">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            Dr. John Cook PhD
                                                                            <small class="d-block font-italic fs-xs">
                                                                                Away
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney online">
                                                                    <div class="d-table-cell align-middle status status-success status-sm ">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            Ali Amdaney
                                                                            <small class="d-block font-italic fs-xs text-success">
                                                                                Online
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="sarah mcbrook online">
                                                                    <div class="d-table-cell align-middle status status-success status-sm">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            Sarah McBrook
                                                                            <small class="d-block font-italic fs-xs text-success">
                                                                                Online
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                                    <div class="d-table-cell align-middle status status-sm">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            oliver.kopyuv@gotbootstrap.com
                                                                            <small class="d-block font-italic fs-xs">
                                                                                Offline
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney busy">
                                                                    <div class="d-table-cell align-middle status status-danger status-sm">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            oliver.kopyuv@gotbootstrap.com
                                                                            <small class="d-block font-italic fs-xs text-danger">
                                                                                Busy
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney offline">
                                                                    <div class="d-table-cell align-middle status status-sm">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            oliver.kopyuv@gotbootstrap.com
                                                                            <small class="d-block font-italic fs-xs">
                                                                                Offline
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">
                                                                    <div class="d-table-cell align-middle">
                                                                        <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                                        <div class="text-truncate text-truncate-md">
                                                                            +714651347790
                                                                            <small class="d-block font-italic fs-xs opacity-50">
                                                                                Missed Call
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="filter-message js-filter-message"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a class="fs-xl d-flex align-items-center p-3">
                                                        <i class="fal fa-cogs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- END msgr-list -->
                                            <!-- BEGIN msgr -->
                                            <div class="msgr d-flex h-100 flex-column bg-white">
                                                <!-- BEGIN custom-scroll -->
                                                <div class="custom-scroll flex-1 h-100">
                                                    <div id="chat_container" class="w-100 p-4">
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment">
                                                            <div class="time-stamp text-center mb-2 fw-400">
                                                                Jun 19
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-sent">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Hey Tracey, did you get my files?
                                                                </p>
                                                            </div>
                                                            <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                                                3:00 pm
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-get">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Hi
                                                                </p>
                                                                <p>
                                                                    Sorry going through a busy time in office. Yes I analyzed the solution.
                                                                </p>
                                                                <p>
                                                                    It will require some resource, which I could not manage.
                                                                </p>
                                                            </div>
                                                            <div class="fw-300 text-muted mt-1 fs-xs">
                                                                3:24 pm
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-sent chat-start">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Okay
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-sent chat-end">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Sending you some dough today, you can allocate the resources to this project.
                                                                </p>
                                                            </div>
                                                            <div class="text-right fw-300 text-muted mt-1 fs-xs">
                                                                3:26 pm
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-get chat-start">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Perfect. Thanks a lot!
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-get">
                                                            <div class="chat-message">
                                                                <p>
                                                                    I will have them ready by tonight.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment -->
                                                        <div class="chat-segment chat-segment-get chat-end">
                                                            <div class="chat-message">
                                                                <p>
                                                                    Cheers
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment -->
                                                        <!-- start .chat-segment for timestamp -->
                                                        <div class="chat-segment">
                                                            <div class="time-stamp text-center mb-2 fw-400">
                                                                Jun 20
                                                            </div>
                                                        </div>
                                                        <!--  end .chat-segment for timestamp -->
                                                    </div>
                                                </div>
                                                <!-- END custom-scroll  -->
                                                <!-- BEGIN msgr__chatinput -->
                                                <div class="d-flex flex-column">
                                                    <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                                        <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                                            <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                                        </div>
                                                    </div>
                                                    <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                                        <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">
                                                            <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">
                                                            <i class="fal fa-paperclip color-fusion-300"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">
                                                            <i class="fal fa-camera color-fusion-300"></i>
                                                        </a>
                                                        <div class="ml-auto">
                                                            <a href="javascript:void(0);" class="btn btn-info">Send</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END msgr__chatinput -->
                                            </div>
                                            <!-- END msgr -->
                                            <!-- end message list -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end inbox message -->
                            </div>
                            <!-- end inbox container -->
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
            initApp.pushSettings("layout-composed-mobile", false);

        </script>
    </body>
</html>
