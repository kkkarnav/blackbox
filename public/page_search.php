<?php

require_once 'init.php';

$_title = 'Search - Page Views - SmartAdmin v4.6.3';
$_active_nav = 'page_search';
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
    <body class="mod-bg-1 mod-nav-link mod-skin-<?= $_theme ?> layout-composed">
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
                        <div class="px-3 px-sm-5 pt-4">
                            <h1 class="mb-4">
                                160 Results for "SmartAdmin for PHP"
                                <small class="mb-3">
                                    Request time (0.23 seconds)
                                </small>
                            </h1>
                            <div class="input-group input-group-lg mb-5 shadow-1 rounded">
                                <input type="text" class="form-control shadow-inset-2" id="filter-icon" aria-label="type 2 or more letters" placeholder="Search anything..." value="SmartAdmin for PHP responsive webapp">
                                <div class="input-group-append">
                                    <button class="btn btn-primary hidden-sm-down" type="button"><i class="fal fa-search mr-lg-2"></i><span class="hidden-md-down">Search</span></button>
                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Data</a>
                                        <a class="dropdown-item" href="#">Images</a>
                                        <a class="dropdown-item" href="#">Users</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item active" href="#">Everything</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-clean px-3 px-sm-5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active bg-transparent fs-lg fw-400" data-toggle="tab" href="#tab-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent fs-lg fw-400" data-toggle="tab" href="#tab-images" role="tab">Image</a>
                            </li>
                        </ul>
                        <div class="d-flex px-3 px-sm-5 py-4">
                            <div class="custom-control custom-switch d-inline-flex">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                                <label class="custom-control-label fw-500 text-dark" for="customSwitch1"><span class="hidden-sm-down">Activate</span> Location</label>
                            </div>
                            <div class="d-inline-block">
                                <a href="javascript:void(0);" class="text-dark fw-500 dropdown-toggle ml-4" data-toggle="dropdown">Safe Search: Moderate</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item px-3 py-2" href="#">
                                        <p class="m-0">Strict</p>
                                        <p class="m-0 opacity-50">No Adult Content</p>
                                    </a>
                                    <a class="dropdown-item active px-3 py-2" href="#">
                                        <p class="m-0">Moderate</p>
                                        <p class="m-0 opacity-50">No explicit video or images</p>
                                    </a>
                                    <a class="dropdown-item px-3 py-2" href="#">
                                        <p class="m-0">Off</p>
                                        <p class="m-0 opacity-50">Don't filter adult content</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <a href="javascript:void(0);" class="text-dark fw-500 dropdown-toggle ml-4" data-toggle="dropdown">All Types</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item px-3 py-2" href="#">Data</a>
                                    <a class="dropdown-item px-3 py-2" href="#">Images</a>
                                    <a class="dropdown-item px-3 py-2" href="#">Media</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item px-3 py-2 active" href="#">All</a>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 px-sm-5 pb-4">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="tab-all" role="tabpanel" aria-labelledby="tab-all">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">SmartAdmin - Responsive Dashboard Template</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    <span class="text-muted">Dec 12, 2013</span> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
                                                </div>
                                                <div class="d-flex flex-row mt-3">
                                                    <div class="d-block text-truncate text-truncate-lg border-faded p-2">
                                                        <a href="javascript:void(0)" class="fs-md fw-500">Support us - SmartAdmin WebApp</a>
                                                        <details>
                                                            <summary class="d-block text-truncate text-truncate-lg text-muted fs-xs">He consider is to vows, focuses </summary>
                                                            <p class="d-block text-truncate text-truncate-lg fs-md">Sufficiently the secure our represent on eagerly magazine where expl</p>
                                                        </details>
                                                    </div>
                                                    <div class="d-block text-truncate text-truncate-lg border-faded p-2 ml-2">
                                                        <a href="javascript:void(0)" class="fs-md fw-500">Contact - SmartAdmin WebApp</a>
                                                        <details>
                                                            <summary class="d-block text-truncate text-truncate-lg text-muted fs-xs">Sufficiently the secure our represent on eagerly magazine where expl</summary>
                                                            <p class="d-block text-truncate text-truncate-lg fs-md">Sufficiently the secure our represent on eagerly magazine where expl</p>
                                                        </details>
                                                    </div>
                                                    <div class="d-block text-truncate text-truncate-lg border-faded p-2 ml-2">
                                                        <a href="javascript:void(0)" class="fs-md fw-500">About us</a>
                                                        <details>
                                                            <summary class="d-block text-truncate text-truncate-lg text-muted fs-xs">Which been italic, his based due and yet was hazar</summary>
                                                            <p class="d-block text-truncate text-truncate-lg fs-md">Sufficiently the secure our represent on eagerly magazine where expl</p>
                                                        </details>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">Develop your webapp with ease using SmartAdmin for PHP</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Acquired concept to however, lots have it human its after suspicious good clock, line tall and writing be he are was increased technology be client would, and in top children peacefully. The consider is to vows, focuses completely I to proposal room. Joke. That particularly problem uniforms, burden military the to ill road, people.
                                                </div>
                                                <span class="fs-sm d-flex align-items-center mt-3">
                                                    <a href="#" class="mr-2 mt-1" title="SmartAdmin for PHP Colors">
                                                        <span class="d-block img-share" style="background-image:url('<?= ASSETS_URL ?>/img/thumbs/ng-thumb-2.png'); background-size: cover;"></span>
                                                    </a>
                                                    <a href="#" class="mr-2 mt-1" title="SmartAdmin for PHP Alerts">
                                                        <span class="d-block img-share" style="background-image:url('<?= ASSETS_URL ?>/img/thumbs/ng-thumb-3.png'); background-size: cover;"></span>
                                                    </a>
                                                    <a href="#" class="mr-2 mt-1" title="SmartAdmin for PHP Progress">
                                                        <span class="d-block img-share" style="background-image:url('<?= ASSETS_URL ?>/img/thumbs/ng-thumb-4.png'); background-size: cover;"></span>
                                                    </a>
                                                </span>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">45,000 downloads for SmartAdmin.</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Greatest both welcoming the turn spineless, to which been italic, his based due and yet was hazardous necessary pros blind a okay. Written missions of and remedies. Have prior though point economics, real he please.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">Company project Timeline Stock SmartAdmin for PHP</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Once freshlybrewed of it as and big behind he sufficiently the secure our represent on eagerly magazine where explanation every he they should a go presentations.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-6 px-4">
                                                <h3 class="fw-400" role="heading">Videos</h3>
                                                <div class="scrolling-wrapper">
                                                    <div class="card shadow-0 d-inline-flex mr-2" style="width: 200px;">
                                                        <div class="card-img-top position-relative" style="background-image:url('<?= ASSETS_URL ?>/img/thumbs/ng-thumb-video-1.png');display: block;height: 110px;width: 200px;">
                                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                                <i class="fas fa-play-circle display-3 m-0 opacity-50"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-body py-3 px-2">
                                                            <a href="#" class="stretched-link fs-lg fw-500">SmartAdmin Introduction</a>
                                                            <p class="fs-xs mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                            <span class="text-success fs-xs">YouTube</span> <span class="text-muted fs-xs opacity-50">- Jul 18, 2023 </span>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow-0 d-inline-flex mr-2" style="width: 200px;">
                                                        <div class="card-img-top position-relative" style="background-image:url('<?= ASSETS_URL ?>/img/thumbs/ng-thumb-video-2.png');display: block;height: 110px;width: 200px;">
                                                            <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                                                                <i class="fas fa-play-circle display-3 m-0 opacity-50"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-body py-3 px-2">
                                                            <a href="#" class="stretched-link fs-lg fw-500">Advanced layouts</a>
                                                            <p class="fs-xs mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                            <span class="text-success fs-xs">YouTube</span> <span class="text-muted fs-xs opacity-50">- Jan 15, 2023 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">Online software and management toolkit using SmartAdmin UI</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam laoreet turpis sed leo gravida interdum. Aliquam efficitur tempor enim ac pretium. Integer scelerisque dui sed ex laoreet congue.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">Bootstrap Templates & Themes from WrapBootstrap</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Been the as I have stairs familiarity he everything our except with now, there's he literature stage all the himself bed and skyline overhauls at how may maintain didn't depend train tone, sign he reassuring complete reached chance.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">It impenetrable hazardous best.</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://wrapbootstrap.com/themes/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Must and agency is she something sentences that italic, to would trust, a the far was for small quarter following thought, any at something over there of being me. Frequency; And cheerful, tone the at their lobby, are was the between touch have play suppliers, eye stash too the that.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">Temple of appeared a somewhere, hands</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://fakewebsites.com/web-app/peoples-theme</a>
                                                </div>
                                                <div class="mt-2">
                                                    Time. Reason that staple in her many a do comments less recommended. Easier just dull two harmonics. Strenuous much back to over career here. Let's of with business the completely for anger get that up software god mostly my in phase he on knowing posterity drew he or each any that brown said in and have he nonsense, evils then first wait neuter.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">You did to and bed seen, documents violin to groundtem</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://gotbootstrap.com/templates/kiwik-rickshaw-admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    The wrong findings. Only into the considerations, stuffed puzzles was enough and how queen, and sooner person, different in to pass not. Able mellower to having as easier at live of process anger more, such, what avarice attention from warned congress, you the his o'clock enterprises then, an velocity a belong, samples copy and occasion films and day secure that dissolute by her ever the headline take what two as example, it is about but employed one in sleeping eyes the like.
                                                </div>
                                            </li>
                                            <li class="list-group-item py-4 px-4">
                                                <a href="javascript:void(0)" class="fs-lg fw-500">To she enjoying world could to</a>
                                                <div class="fs-xs mt-1">
                                                    <a href="javascript:void(0)" class="text-success">http://sundaytimesnyc.com/business/admin</a>
                                                </div>
                                                <div class="mt-2">
                                                    Decades the and the of deceleration been from with key a the pass in such safe motors it abused years temple a she have rush one a yes, it hesitated of he refinements. Day into of was concise principles, those with but from behind most ideas been their explain text to their and spots present events do was, a best odd one is one in some we explains way one attempt.
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-images" role="tabpanel" aria-labelledby="tab-images">
                                    <div class="py-2">
                                        <div class="scrolling-wrapper demo-h-spacing">
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                chart
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                theme
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                layout
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                admin dashboard
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                bootstrap
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                app
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                header
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                awesome
                                            </a>
                                            <a href="#" class="btn btn-pills btn-outline-secondary d-inline-block js-waves-off">
                                                responsive
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/1.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/2.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/3.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/5.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/6.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/10.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/14.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/12.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/4.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/1.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/2.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/3.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/5.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/6.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/10.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/14.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/12.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/4.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/15.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/13.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/11.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/1.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/2.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/3.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 py-2 px-2">
                                            <a href="#" class="position-relative show-child-on-hover d-block shadow-hover">
                                                <div class="position-absolute pos-top pos-left pos-right pos-bottom show-on-hover-parent">
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right opacity-20 bg-primary-500 rounded"></div>
                                                    <div class="position-absolute py-1 px-2 m-2 pos-bottom pos-right bg-primary text-white rounded opacity-90">
                                                        <small>394x222</small>
                                                    </div>
                                                    <div class="position-absolute pos-top pos-bottom pos-left pos-right d-flex align-items-center justify-content-center text-white">
                                                        <i class="fal fa-plus-circle display-2 m-0 opacity-90"></i>
                                                    </div>
                                                </div>
                                                <img src="<?= ASSETS_URL ?>/img/demo/search/4.png" alt="Search SmartAdmin Thumbnail" class="img-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination my-4">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">6</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
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
            initApp.pushSettings("layout-composed", false);

        </script>
    </body>
</html>
