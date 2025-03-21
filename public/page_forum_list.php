<?php

require_once 'init.php';

$_title = 'List - Page Views - SmartAdmin v4.6.3';
$_active_nav = 'page_forum_list';
$_head = '';
$_description = 'Forum list page';

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
                            <li class="breadcrumb-item">Forum</li>
                            <li class="breadcrumb-item active">List</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Forum: <span class='fw-300'>List</span>
                                <small>
                                    Forum list page
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-group input-group-lg mb-g">
                                    <input type="text" class="form-control shadow-inset-2" placeholder="Search topics">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fal fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <span class="h6 font-weight-bold text-uppercase">General</span>
                                            </div>
                                            <div class="col d-flex">
                                                <a href="javascript:void(0);" class="btn btn-outline-success btn-sm ml-auto mr-2 flex-shrink-0">Add</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm flex-shrink-0">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header p-0">
                                        <div class="row no-gutters row-grid align-items-stretch">
                                            <div class="col-12 col-md">
                                                <div class="text-uppercase text-muted py-2 px-3">Title</div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
                                            </div>
                                            <div class="col-sm-6 col-md-3 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Last posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row no-gutters row-grid">
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base-2 icon-stack-3x color-primary-400"></i>
                                                                    <i class="base-10 text-white icon-stack-1x"></i>
                                                                    <i class="ni md-profile color-primary-800 icon-stack-2x"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Account information & Security <span class="badge badge-warning rounded">Sticky</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Fusce at velit viverra, luctus augue nec, dapibus urna
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">243 <i>Topics</i></span>
                                                            <span class="d-block text-muted">407 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Duis vitae sapien urna. Proin pellentesque laoreet ligula pharetra semper.
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 12:12 <a href="javascript:void(0)" class="text-info">katty60</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base-7 icon-stack-3x color-primary-500"></i>
                                                                    <i class="base-7 icon-stack-2x color-primary-700"></i>
                                                                    <i class="ni ni-graph icon-stack-1x text-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Global Stats
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Sed felis eros, facilisis eu cursus at, efficitur et felis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">64 <i>Topics</i></span>
                                                            <span class="d-block text-muted">102 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Nunc id varius nisl, a feugiat eros
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 05:01 <a href="javascript:void(0)" class="text-info">gsnoopy520</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base-19 icon-stack-3x color-primary-400"></i>
                                                                    <i class="base-7 icon-stack-2x color-primary-300"></i>
                                                                    <i class="base-7 icon-stack-1x fs-xxl color-primary-200"></i>
                                                                    <i class="base-7 icon-stack-1x color-primary-500"></i>
                                                                    <i class="fal fa-globe icon-stack-1x text-white opacity-85"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Global Accouncements
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Curabitur scelerisque ipsum nec dui lacinia bibendum
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">124 <i>Topics</i></span>
                                                            <span class="d-block text-muted">314 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Integer id eros vitae leo semper sodales vel a est.
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 02:25 <a href="javascript:void(0)" class="text-info">lerem03</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <span class="h6 font-weight-bold text-uppercase">Hospital Policy</span>
                                            </div>
                                            <div class="col d-flex">
                                                <a href="javascript:void(0);" class="btn btn-outline-success btn-sm ml-auto mr-2 flex-shrink-0">Add</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm flex-shrink-0">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header p-0">
                                        <div class="row no-gutters row-grid align-items-stretch">
                                            <div class="col-12 col-md">
                                                <div class="text-uppercase text-muted py-2 px-3">Title</div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
                                            </div>
                                            <div class="col-sm-6 col-md-3 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Last posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row no-gutters row-grid">
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-2 icon-stack-3x opacity-100 color-info-800"></i>
                                                                    <i class="base base-3 icon-stack-2x opacity-100 color-info-500"></i>
                                                                    <i class="fal fa-user-md icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Patients & Staff
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Fusce at velit viverra, luctus augue nec, dapibus urna
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">72 <i>Topics</i></span>
                                                            <span class="d-block text-muted">89 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Nam at justo magna. Aenean facilisis ultricies turpis
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 08:13 <a href="javascript:void(0)" class="text-info">erakalambert</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-7 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-4 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-medkit icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Pharmacy & Medical Equipments
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Nulla laoreet dignissim justo, id viverra nibh suscipit in.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">99 <i>Topics</i></span>
                                                            <span class="d-block text-muted">72 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-f.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Integer felis justo, condimentum vitae pharetra vel, hendrerit eget orci.
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 06:01 <a href="javascript:void(0)" class="text-info">elisamury</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-15 icon-stack-3x opacity-100 color-success-800"></i>
                                                                    <i class="base base-10 icon-stack-2x opacity-100 color-success-600"></i>
                                                                    <i class="fal fa-dollar-sign icon-stack-1x opacity-100 color-white"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Billing Department
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Curabitur scelerisque ipsum nec dui lacinia bibendum
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">88 <i>Topics</i></span>
                                                            <span class="d-block text-muted">109 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Duis placerat in sapien et placerat. Duis quis feugiat leo. Curabitur laoreet ex nec odio interdum
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 12:25 <a href="javascript:void(0)" class="text-info">josekras_alma</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <span class="icon-stack display-4 mr-3 flex-shrink-0">
                                                                    <i class="base base-3 icon-stack-3x opacity-100 color-warning-800"></i>
                                                                    <i class="base base-3 icon-stack-2x opacity-100 color-warning-400"></i>
                                                                    <i class="fal fa-question icon-stack-1x opacity-100 color-fusion-800"></i>
                                                                </span>
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Miscellaneous, Lost & Found
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Phasellus pharetra felis et leo malesuada
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">50 <i>Topics</i></span>
                                                            <span class="d-block text-muted">66 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Nunc id varius nisl, a feugiat eros. Nulla laoreet dignissim justo, id viverra nibh suscipit in. Curabitur scelerisque ipsum nec dui lacinia bibendum
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 05:25 <a href="javascript:void(0)" class="text-info">kraluakosh</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-g border shadow-0">
                                    <div class="card-header">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <span class="h6 font-weight-bold text-uppercase">Hospital Staff (password protected)</span>
                                            </div>
                                            <div class="col d-flex">
                                                <a href="javascript:void(0);" class="btn btn-outline-success btn-sm ml-auto mr-2 flex-shrink-0">Add</a>
                                                <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm flex-shrink-0">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header p-0">
                                        <div class="row no-gutters row-grid align-items-stretch">
                                            <div class="col-12 col-md">
                                                <div class="text-uppercase text-muted py-2 px-3">Title</div>
                                            </div>
                                            <div class="col-sm-6 col-md-2 col-xl-1 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Status</div>
                                            </div>
                                            <div class="col-sm-6 col-md-3 hidden-md-down">
                                                <div class="text-uppercase text-muted py-2 px-3">Last posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row no-gutters row-grid">
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Physician (ER doctors, surgeons, hospitalists) <span class="badge badge-success">Has Access</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Proin pellentesque laoreet ligula pharetra semper
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">1024 <i>Topics</i></span>
                                                            <span class="d-block text-muted">5431 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Nam at justo magna. Aenean facilisis ultricies turpis
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 12:13 <a href="javascript:void(0)" class="text-info">c_lantern</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Nurse (CRNA, RN, LPN/LVN, CNS) <span class="badge badge-success">Has Access</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Nulla laoreet dignissim justo, id viverra nibh suscipit in.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">1205 <i>Topics</i></span>
                                                            <span class="d-block text-muted">4314 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Morbi id enim a ex gravida dignissim nec eu massa
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 06:01 <a href="javascript:void(0)" class="text-info">jamie</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Therapist (Physical Therapist, Radiation Therapist) <span class="badge badge-danger">Password</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Curabitur scelerisque ipsum nec dui lacinia bibendum
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">764 <i>Topics</i></span>
                                                            <span class="d-block text-muted">534 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate text-blur">
                                                                        Duis placerat in sapien et placerat. Duis quis feugiat leo. Curabitur laoreet ex nec odio interdum
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 12:25 <a href="javascript:void(0)" class="text-info">josekras_alma</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Pharmacists <span class="badge badge-danger">Password</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Duis placerat in sapien et placerat
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">87 <i>Topics</i></span>
                                                            <span class="d-block text-muted">674 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate text-blur">
                                                                        Praesent mollis congue bibendum. Etiam ipsum augue, sodales id metus a, molestie hendrerit felis.
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 05:25 <a href="javascript:void(0)" class="text-info">lambert</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Surgery & Labworks <span class="badge badge-success">Has Access</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Duis placerat in sapien et placerat
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">731<i>Topics</i></span>
                                                            <span class="d-block text-muted">1246 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Proin non felis lobortis, porta arcu a, iaculis arcu. Morbi tincidunt non ante et fermentum
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 05:25 <a href="javascript:void(0)" class="text-info">elmo</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
                                            <!-- thread -->
                                            <div class="col-12">
                                                <div class="row no-gutters row-grid align-items-stretch">
                                                    <div class="col-md">
                                                        <div class="p-3">
                                                            <div class="d-flex">
                                                                <div class="d-inline-flex flex-column">
                                                                    <a href="javascript:void(0)" class="fs-lg fw-500 d-block">
                                                                        Dietitian <span class="badge badge-success">Has Access</span>
                                                                    </a>
                                                                    <div class="d-block text-muted fs-sm">
                                                                        Sit amet luctus nulla suscipit. Phasellus pharetra felis
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 col-md-2 col-xl-1 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <span class="d-block text-muted">3943<i>Topics</i></span>
                                                            <span class="d-block text-muted">9843 <i>Posts</i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-md-3 hidden-md-down">
                                                        <div class="p-3 p-md-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="d-inline-block align-middle status status-success status-sm mr-2">
                                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png'); background-size: cover;"></span>
                                                                </div>
                                                                <div class="flex-1 min-width-0">
                                                                    <a href="javascript:void(0)" class="d-block text-truncate">
                                                                        Sed felis eros, facilisis eu cursus at, efficitur et felis
                                                                    </a>
                                                                    <div class="text-muted small text-truncate">
                                                                        Today, 05:25 <a href="javascript:void(0)" class="text-info">katty60</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- thread -end -->
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
            $(document).ready(function() {

            });

        </script>
    </body>
</html>
