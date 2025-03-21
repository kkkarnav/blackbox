<?php

require_once 'init.php';

$_title = 'Modal - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_modal';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Modal dialogs for lightboxes, user notifications, or completely custom content';

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
                            <li class="breadcrumb-item active">Modal</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Modal
                                <small>
                                    Modal dialogs for lightboxes, user notifications, or completely custom content
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
                                        <p>Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <code>body</code> so that modal content scrolls instead. Bootstrap only supports one modal window at a time. Nested modals aren’t supported as it is believed to be poor user experiences. Modals use <code>position: fixed</code>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a .modal within another fixed element</p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on Bootstrap Modals's at the <a href="https://getbootstrap.com/docs/4.4/components/modal" class="fw-500" target="_blank">official bootstrap site</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Basic Modals-->
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Basic <span class="fw-300"><i>Modals</i></span>
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
                                                Below is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.
                                            </div>
                                            <h5 class="frame-heading">
                                                Default
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <!-- Small modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal-sm">Default Modal Small</button>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal">Default Modal</button>
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal-lg">Default Modal Large</button>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="default-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">
                                                                Basic Modals
                                                                <small class="m-0 text-muted">
                                                                    Below is a static modal example
                                                                </small>
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Large -->
                                            <div class="modal fade" id="default-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Small -->
                                            <div class="modal fade" id="default-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Centered
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <div class="demo">
                                                    <!-- Small modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal-sm-center">Centered Small</button>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal-center">Centered Normal</button>
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#default-example-modal-lg-center">Centered Large</button>
                                                </div>
                                            </div>
                                            <!-- Modal center -->
                                            <div class="modal fade" id="default-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">
                                                                Basic Modals
                                                                <small class="m-0 text-muted">
                                                                    Below is a static modal example
                                                                </small>
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal center Large -->
                                            <div class="modal fade" id="default-example-modal-lg-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal center Small -->
                                            <div class="modal fade" id="default-example-modal-sm-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Side Modals-->
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Side <span class="fw-300"><i>Modals</i></span>
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
                                                Modals can also be positioned to the side of the page. Therefore the modifier classes <code>.modal-dialog-left</code>, <code>.modal-dialog-right</code>, <code>.modal-dialog-bottom</code>, <code>.modal-dialog-top</code> can be placed on a <code>.modal-dialog</code>. These side modals are compatible with the sizes classes.
                                            </div>
                                            <h5 class="frame-heading">
                                                Right
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-right-sm">Right Small</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-right">Right Normal</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-right-lg">Right Large</button>
                                                </div>
                                            </div>
                                            <!-- Modal Right -->
                                            <div class="modal fade default-example-modal-right" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-right">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card mb-5">
                                                                <div class="card-body p-3">
                                                                    <h5>
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300">
                                                                        <div class="col text-left">
                                                                            Progress
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            90%
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-0">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                $1,325,987.30
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-g">
                                                                <div class="card-body p-3">
                                                                    <h5 class="text-danger">
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-danger fw-n position-absolute pos-top pos-right mt-3 mr-3">Delayed</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300">
                                                                        <div class="col text-left">
                                                                            Progress
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            26%
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-danger-500 progress-bar-striped" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right text-danger">
                                                                                -$155,473.70
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fs-xs mb-3 fw-300">
                                                                        <ul class="list-unstyled mb-1">
                                                                            <li>
                                                                                <i class="fal fa-circle text-muted"></i> <span class="text-muted"><s> Heated maps generated</s></span>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-circle text-danger"></i> Turncated syndicate rated
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-dot-circle text-danger"></i> ADP forms needs approval and review
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-exclamation-triangle text-danger"></i> Bug review
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="text-left fw-400 ">
                                                                        <div class="text-secondary mb-1">Project Owners</div>
                                                                        <div class="fs-sm d-flex align-items-center">
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s fs-xs">
                                                                                <span data-hasmore="+7" class="rounded-circle profile-image-sm">
                                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-g">
                                                                <div class="card-body p-3">
                                                                    <h5 class="text-success">
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-success fw-n position-absolute pos-top pos-right mt-3 mr-3">D</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300 text-secondar">
                                                                        <div class="col text-left">
                                                                            COMPLETE
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-success-500 progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                $134
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col text-right">
                                                                            <a href="#" class="btn btn-default btn-sm">APPROVE</a>
                                                                            <a href="#" class="btn btn-default btn-sm">DECLINE</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Right Small -->
                                            <div class="modal fade default-example-modal-right-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-right modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card mb-g">
                                                                <div class="card-body p-3">
                                                                    <h5>
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-primary fw-n position-absolute pos-top pos-right mt-3 mr-3">A</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300">
                                                                        <div class="col text-left">
                                                                            Progress
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            90%
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-primary-500 progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-0">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                $1,325,987.30
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-g">
                                                                <div class="card-body p-3">
                                                                    <h5 class="text-danger">
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-danger fw-n position-absolute pos-top pos-right mt-3 mr-3">Delayed</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300">
                                                                        <div class="col text-left">
                                                                            Progress
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            26%
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-danger-500 progress-bar-striped" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right text-danger">
                                                                                -$155,473.70
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fs-xs mb-3 fw-300">
                                                                        <ul class="list-unstyled mb-1">
                                                                            <li>
                                                                                <i class="fal fa-circle text-muted"></i> <span class="text-muted"><s> Heated maps generated</s></span>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-circle text-danger"></i> Turncated syndicate rated
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-dot-circle text-danger"></i> ADP forms needs approval and review
                                                                            </li>
                                                                            <li>
                                                                                <i class="fal fa-exclamation-triangle text-danger"></i> Bug review
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="text-left fw-400 ">
                                                                        <div class="text-secondary mb-1">Project Owners</div>
                                                                        <div class="fs-sm d-flex align-items-center">
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s">
                                                                                <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                            </a>
                                                                            <a href="#" class="btn-m-s fs-xs">
                                                                                <span data-hasmore="+7" class="rounded-circle profile-image-sm">
                                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card mb-g">
                                                                <div class="card-body p-3">
                                                                    <h5 class="text-success">
                                                                        ADP System Migration
                                                                        <small class="mt-0 mb-3 text-muted">
                                                                            Migration of new API to local servers
                                                                        </small>
                                                                        <span class="badge badge-success fw-n position-absolute pos-top pos-right mt-3 mr-3">D</span>
                                                                    </h5>
                                                                    <div class="row fs-b fw-300 text-secondar">
                                                                        <div class="col text-left">
                                                                            COMPLETE
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress progress-xs d-flex mb-2 mt-1">
                                                                        <span class="progress-bar bg-success-500 progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></span>
                                                                    </div>
                                                                    <div class="fw-300 mb-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                Budget
                                                                            </div>
                                                                            <div class="col text-right">
                                                                                $134
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col text-right">
                                                                            <a href="#" class="btn btn-default btn-sm">APPROVE</a>
                                                                            <a href="#" class="btn btn-default btn-sm">DECLINE</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Right Large -->
                                            <div class="modal fade default-example-modal-right-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-right modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Left
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-left-sm">Left Small</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-left">Left Normal</button>
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-left-lg">Left Large</button>
                                                </div>
                                            </div>
                                            <!-- Modal Left -->
                                            <div class="modal fade default-example-modal-left" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-left">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Left Small -->
                                            <div class="modal fade default-example-modal-left-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-left modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Left Large -->
                                            <div class="modal fade default-example-modal-left-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-left modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4">Large right side modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Top
                                            </h5>
                                            <div class="frame-wrap">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-top">Top Side</button>
                                            </div>
                                            <!-- Modal Top -->
                                            <div class="modal fade default-example-modal-top" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-top">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                                <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                                <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                                <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                                <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                                <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                                <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                                <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                                <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-7 icon-stack-3x color-info-500"></i>
                                                                <i class="base-7 icon-stack-2x color-info-700"></i>
                                                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-9 icon-stack-3x color-success-400"></i>
                                                                <i class="base-2 icon-stack-2x color-success-500"></i>
                                                                <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Bottom
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target=".default-example-modal-bottom">Bottom Side</button>
                                            </div>
                                            <!-- Modal Bottom -->
                                            <div class="modal fade default-example-modal-bottom" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-bottom">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                                <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                                <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                                <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                                <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                                <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                                <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                                <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                                <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-7 icon-stack-3x color-info-500"></i>
                                                                <i class="base-7 icon-stack-2x color-info-700"></i>
                                                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-9 icon-stack-3x color-success-400"></i>
                                                                <i class="base-2 icon-stack-2x color-success-500"></i>
                                                                <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--Modifications-->
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Modifications <span class="fw-300"><i>for modals</i></span>
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
                                                Modal fullscreen uses combination of utility classes and the modifier class <code>.modal-fullscreen</code>. Using the modifer class <code>.modal-backdrop-transparent</code> makes the backdrop transparent. You can also translate the modals to cast as an alert by using the modifier class <code>.modal-alert</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Fullscreen
                                            </h5>
                                            <div class="frame-wrap">
                                                <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target=".example-modal-fullscreen">Modal Fullscreen</button>
                                            </div>
                                            <!-- Fullscreen Modal -->
                                            <div class="modal fade modal-fullscreen example-modal-fullscreen" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content h-100 border-0 shadow-0 bg-fusion-800">
                                                        <button type="button" class="close p-sm-2 p-md-4 text-white fs-xxl position-absolute pos-right mr-sm-2 mt-sm-1 z-index-space" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                        </button>
                                                        <div class="modal-body p-0">
                                                            <div id="example-carousel-fullscreen" class="carousel slide" data-ride="carousel">
                                                                <ol class="carousel-indicators">
                                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="0" class=""></li>
                                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="1" class="active"></li>
                                                                    <li data-target="#example-carousel-fullscreen" data-slide-to="2" class=""></li>
                                                                </ol>
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item">
                                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/relax-full.jpg" alt="First slide">
                                                                        <div class="carousel-caption d-none d-md-block">
                                                                            <h5 class="color-white opacity-70">First slide label</h5>
                                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item active">
                                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/peace-full.jpg" alt="Second slide">
                                                                        <div class="carousel-caption d-none d-md-block">
                                                                            <h5 class="color-white opacity-70">Second slide label</h5>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img class="d-block w-100" src="<?= ASSETS_URL ?>/img/demo/sea-full.jpg" alt="Third slide">
                                                                        <div class="carousel-caption d-none d-md-block">
                                                                            <h5 class="color-white opacity-70">Third slide label</h5>
                                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="carousel-control-prev" href="#example-carousel-fullscreen" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#example-carousel-fullscreen" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Alert
                                            </h5>
                                            <div class="frame-wrap">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#example-modal-alert">Modal Alert</button>
                                            </div>
                                            <!-- modal alert -->
                                            <div class="modal modal-alert fade" id="example-modal-alert" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Modal text description...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                No backdrops
                                            </h5>
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#example-modal-backdrop-transparent">Modal Transparent Backdrop</button>
                                            <!-- Modal center Large no backdrop -->
                                            <div class="modal fade modal-backdrop-transparent" id="example-modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-danger">
                                                                Notice how there is no backdrop to this modal.
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Transparent-->
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Transparent <span class="fw-300"><i>Modal (Tinted)</i></span>
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
                                                Give modals a 'transparent tinted glass' feel. It increases focus to the UI elements by creating contrast. We add the modifier class <code>.modal-transparent</code>. These modals are compatible with their respected size classes.
                                            </div>
                                            <h5 class="frame-heading">
                                                Default
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-default-transparent">Transparent Default</button>
                                                    <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-centered-transparent">Transparent Centered</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Left & Right
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-left-transparent">Transparent Left</button>
                                                    <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-right-transparent">Transparent Right</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Top
                                            </h5>
                                            <div class="frame-wrap">
                                                <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-top-transparent">Transparent Top</button>
                                            </div>
                                            <h5 class="frame-heading">
                                                Bottom
                                            </h5>
                                            <div class="frame-wrap mb-0">
                                                <button type="button" class="btn btn btn-dark" data-toggle="modal" data-target=".example-modal-bottom-transparent">Transparent Bottom</button>
                                            </div>
                                            <!-- Modal Top Transparent -->
                                            <div class="modal fade example-modal-top-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-top modal-transparent">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                                <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                                <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                                <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                                <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                                <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                                <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                                <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                                <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-7 icon-stack-3x color-info-500"></i>
                                                                <i class="base-7 icon-stack-2x color-info-700"></i>
                                                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-9 icon-stack-3x color-success-400"></i>
                                                                <i class="base-2 icon-stack-2x color-success-500"></i>
                                                                <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Bottom Transparent -->
                                            <div class="modal fade example-modal-bottom-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-bottom modal-transparent">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-4 icon-stack-3x color-danger-500"></i>
                                                                <i class="base-4 icon-stack-1x color-danger-400"></i>
                                                                <i class="ni ni-envelope icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                                <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                                <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                                <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                                <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-16 icon-stack-3x color-fusion-500"></i>
                                                                <i class="base-10 icon-stack-1x color-primary-50 opacity-30"></i>
                                                                <i class="base-10 icon-stack-1x fs-xl color-primary-50 opacity-20"></i>
                                                                <i class="fal fa-dot-circle icon-stack-1x text-white opacity-85"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-7 icon-stack-3x color-info-500"></i>
                                                                <i class="base-7 icon-stack-2x color-info-700"></i>
                                                                <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                            </div>
                                                            <div class="icon-stack fa-6x mr-4 mb-0">
                                                                <i class="base-9 icon-stack-3x color-success-400"></i>
                                                                <i class="base-2 icon-stack-2x color-success-500"></i>
                                                                <i class="ni ni-shield icon-stack-1x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Right Transparent-->
                                            <div class="modal fade example-modal-right-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-right modal-sm modal-transparent">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4 text-white">Large right side modal</h5>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Left Transparent-->
                                            <div class="modal fade example-modal-left-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-left modal-sm modal-transparent">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4 text-white">Large right side modal</h5>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Center Transparent -->
                                            <div class="modal fade example-modal-centered-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-transparent" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-white">
                                                                Basic Modals
                                                                <small class="m-0 text-white opacity-70">
                                                                    Below is a static modal example
                                                                </small>
                                                            </h4>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Default Transparent -->
                                            <div class="modal fade example-modal-default-transparent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-transparent" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-white">
                                                                Basic Modals
                                                                <small class="m-0 text-white opacity-70">
                                                                    Below is a static modal example
                                                                </small>
                                                            </h4>
                                                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
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
    </body>
</html>
