<?php

require_once 'init.php';

$_title = 'Projects - Page Views - SmartAdmin v4.6.3';
$_active_nav = 'page_projects';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/datagrid/datatables/datatables.bundle.css">
';
$_description = 'A generic project page displaying project names and progression';

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
                            <li class="breadcrumb-item active">Projects</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-plus-circle'></i> Projects
                                <small>
                                    A generic project page displaying project names and progression
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Example <span class="fw-300"><i>Table</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <!-- datatable start -->
                                            <table id="dt-basic-example" class="table table-bordered table-hover w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="width-10">ProjectID</th>
                                                        <th>Projects</th>
                                                        <th>EST</th>
                                                        <th>Status</th>
                                                        <th class="text-right">Contacts</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>A1001</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Frontend Design & Framework</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.08.2019</small>
                                                        </td>
                                                        <td>56</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
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
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1002</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Database Revamp</a>
                                                            <br>
                                                            <small class="text-muted">Created 18.08.2019</small>
                                                        </td>
                                                        <td>88</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-i.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1003</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">AngularJS UI design and development</a>
                                                            <br>
                                                            <small class="text-muted">Created 03.07.2020</small>
                                                        </td>
                                                        <td>36</td>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1004</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Brick factory</a>
                                                            <br>
                                                            <small class="text-muted">Created 22.11.2020</small>
                                                        </td>
                                                        <td>64</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-f.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1005</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Car Industry Studies</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.01.2020</small>
                                                        </td>
                                                        <td>74</td>
                                                        <td>8</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1006</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Create filters and directives</a>
                                                            <br>
                                                            <small class="text-muted">Created 18.03.2020</small>
                                                        </td>
                                                        <td>38</td>
                                                        <td>8</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1007</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">IT Room Renovation</a>
                                                            <br>
                                                            <small class="text-muted">Created 27.03.2020</small>
                                                        </td>
                                                        <td>95</td>
                                                        <td>4</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1008</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark"><strong>Phase 1:</strong> Modual implimentations</a>
                                                            <br>
                                                            <small class="text-muted">Created 31.07.2020</small>
                                                        </td>
                                                        <td>15</td>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-i.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1009</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark"><strong>Phase 2:</strong> Beta testing</a>
                                                            <br>
                                                            <small class="text-muted">Created 07.04.2020</small>
                                                        </td>
                                                        <td>88</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-i.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1010</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark"><strong>Phase 3:</strong> Deploy to management</a>
                                                            <br>
                                                            <small class="text-muted">Created 11.04.2020</small>
                                                        </td>
                                                        <td>65</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1011</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Preliminary studies of client intel</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.05.2020</small>
                                                        </td>
                                                        <td>96</td>
                                                        <td>8</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1012</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Prepare property management contracts</a>
                                                            <br>
                                                            <small class="text-muted">Created 22.04.2020</small>
                                                        </td>
                                                        <td>100</td>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-b.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1013</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Publish to Wrapbootstrap</a>
                                                            <br>
                                                            <small class="text-muted">Created 29.03.2020</small>
                                                        </td>
                                                        <td>34</td>
                                                        <td>7</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1014</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">IE Bugs</a>
                                                            <br>
                                                            <small class="text-muted">Created 15.01.2020</small>
                                                        </td>
                                                        <td>67</td>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-c.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1015</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Refurbish Architecture</a>
                                                            <br>
                                                            <small class="text-muted">Created 10.08.2020</small>
                                                        </td>
                                                        <td>23</td>
                                                        <td>8</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-g.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1016</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Sharepoint Upgrade</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.08.2020</small>
                                                        </td>
                                                        <td>76</td>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-f.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1017</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Update all forms</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.08.2020</small>
                                                        </td>
                                                        <td>37</td>
                                                        <td>5</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-d.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1018</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">Upgrade to windows 8.1</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.08.2020</small>
                                                        </td>
                                                        <td>75</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-k.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-h.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-e.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-a.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-m.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                                <a href="#" class="btn-m-s fs-xs">
                                                                    <span data-hasmore="+7" class="rounded-circle profile-image-sm">
                                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-j.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>A1010</td>
                                                        <td>
                                                            <a href="<?= APP_URL ?>/page_projects.php" class="fs-lg text-dark">IOA Caption Formation</a>
                                                            <br>
                                                            <small class="text-muted">Created 14.08.2020</small>
                                                        </td>
                                                        <td>93</td>
                                                        <td>6</td>
                                                        <td>
                                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">
                                                                <a href="#" class="btn-m-s">
                                                                    <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image-sm rounded-circle" alt="aa">
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="width-10">ProjectID</th>
                                                        <th>Projects</th>
                                                        <th>EST</th>
                                                        <th>Status</th>
                                                        <th class="text-right">Contacts</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- datatable end -->
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
        <!-- datatble responsive bundle contains: 
    + jquery.dataTables.js
    + dataTables.bootstrap4.js
    + dataTables.autofill.js                            
    + dataTables.buttons.js
    + buttons.bootstrap4.js
    + buttons.html5.js
    + buttons.print.js
    + buttons.colVis.js
    + dataTables.colreorder.js                          
    + dataTables.fixedcolumns.js                            
    + dataTables.fixedheader.js                     
    + dataTables.keytable.js                        
    + dataTables.responsive.js                          
    + dataTables.rowgroup.js                            
    + dataTables.rowreorder.js                          
    + dataTables.scroller.js                            
    + dataTables.select.js                          
    + datatables.styles.app.js
    + datatables.styles.buttons.app.js -->
        <script src="<?= ASSETS_URL ?>/js/datagrid/datatables/datatables.bundle.js"></script>
        <script>
            $(document).ready(function()
            {
                // initialize datatable
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    columnDefs: [
                    {
                        targets: 2,
                        render: function(data, type, full, meta)
                        {
                            return '<small class="mb-1 d-block">Completion with: ' + data + '%</small> <div class="progress progress-sm"><div class="progress-bar" role="progressbar" style="width:' + data + '%;" aria-valuenow="' + data + '" aria-valuemin="0" aria-valuemax="100"></div></div>';
                        },
                    },
                    {
                        targets: 3,
                        /*  The `data` parameter refers to the data for the cell (defined by the
                            `data` option, which defaults to the column being worked with, in this case `data: 16`.*/
                        render: function(data, type, full, meta)
                        {
                            var badge = {
                                1:
                                {
                                    'title': 'Pending',
                                    'class': 'badge-warning'
                                },
                                2:
                                {
                                    'title': 'Delivered',
                                    'class': 'badge-success'
                                },
                                3:
                                {
                                    'title': 'Canceled',
                                    'class': 'badge-secondary'
                                },
                                4:
                                {
                                    'title': 'Attempt #1',
                                    'class': 'bg-danger-100 text-white'
                                },
                                5:
                                {
                                    'title': 'Attempt #2',
                                    'class': 'bg-danger-300 text-white'
                                },
                                6:
                                {
                                    'title': 'Overdue',
                                    'class': 'badge-danger'
                                },
                                7:
                                {
                                    'title': 'Attention!',
                                    'class': 'badge-primary'
                                },
                                8:
                                {
                                    'title': 'In Progress',
                                    'class': 'badge-success'
                                },
                            };
                            if (typeof badge[data] === 'undefined')
                            {
                                return data;
                            }
                            return '<span class="badge ' + badge[data].class + ' badge-pill">' + badge[data].title + '</span>';
                        },
                    }],
                });
            });

        </script>
    </body>
</html>
