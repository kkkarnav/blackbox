<?php

require_once 'init.php';

$_title = 'Navbars - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_navbars';
$_head = '';
$_description = 'Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.';

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
                            <li class="breadcrumb-item active">Navbars</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Navbars
                                <small>
                                    Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Supported <span class="fw-300"><i>content</i></span>
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
                                                <p>Navbars come with built-in support for a handful of sub-components. Choose from the following as needed:</p>
                                                <ul>
                                                    <li><code>.navbar-brand</code> for your company, product, or project name.</li>
                                                    <li><code>.navbar-nav</code> for a full-height and lightweight navigation (including support for dropdowns).</li>
                                                    <li><code>.navbar-toggler</code> for use with our collapse plugin and other <a href="#responsive-behaviors">navigation toggling</a> behaviors.</li>
                                                    <li><code>.form-inline</code> for any form controls and actions.</li>
                                                    <li><code>.navbar-text</code> for adding vertically centered strings of text.</li>
                                                    <li><code>.collapse.navbar-collapse</code> for grouping and hiding navbar contents by a parent breakpoint.</li>
                                                </ul>
                                            </div>
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <a class="navbar-brand" href="#">Navbar</a>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                        </li>
                                                    </ul>
                                                    <form class="form-inline my-2 my-lg-0">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                                    </form>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Navbar <span class="fw-300"><i>Brand</i></span>
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
                                                The <code>.navbar-brand</code> can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles.
                                            </div>
                                            <nav class="navbar navbar-light bg-light">
                                                <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                    <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Navbar <span class="fw-300"><i>Links</i></span>
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
                                                <p>Navbar navigation links build on our <code>.nav</code> options with their own modifier class and require the use of <a href="#toggler">toggler classes</a> for proper responsive styling. <strong>Navigation in navbars will also grow to occupy as much horizontal space as possible</strong> to keep your navbar contents securely aligned.</p>
                                            </div>
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                    <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                </a>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                    <ul class="navbar-nav">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Features</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Pricing</a>
                                                        </li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown link
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Navbar <span class="fw-300"><i>Links using utilities</i></span>
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
                                                Mix and match with other components and utilities as needed.
                                            </div>
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                    <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                </a>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarText">
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Features</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Pricing</a>
                                                        </li>
                                                    </ul>
                                                    <span class="navbar-text">
                                                        Navbar text with an inline element
                                                    </span>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Navbar <span class="fw-300"><i>Theming</i></span>
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
                                                <p>Theming the navbar has never been easier thanks to the combination of theming classes and <code>background-color</code> utilities. Choose from <code>.navbar-light</code> for use with light background colors, or <code>.navbar-dark</code> for dark background colors. Then, customize with <code>.bg-*</code> utilities.</p>
                                            </div>
                                            <div class="demo">
                                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                                    <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                    </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarColor01">
                                                        <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item active">
                                                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Features</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pricing</a>
                                                            </li>
                                                        </ul>
                                                        <button type="button" class="btn btn-info" data-toggle="popover" data-container="#navbarColor01" data-placement="top" title="" data-html="true" data-content='
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    </form>'>
                                                            <i class="fal fa-search"></i>
                                                        </button>
                                                    </div>
                                                </nav>
                                                <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-primary-gradient">
                                                    <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                    </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarColor02">
                                                        <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item active">
                                                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Features</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pricing</a>
                                                            </li>
                                                        </ul>
                                                        <button type="button" class="btn btn-outline-light" data-toggle="popover" data-container="#navbarColor02" data-placement="top" title="" data-html="true" data-content='
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    </form>'>
                                                            <i class="fal fa-search"></i>
                                                        </button>
                                                    </div>
                                                </nav>
                                                <nav class="navbar navbar-expand-lg navbar-light">
                                                    <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                    </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarColor03">
                                                        <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item active">
                                                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Features</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pricing</a>
                                                            </li>
                                                        </ul>
                                                        <button type="button" class="btn btn-outline-danger" data-toggle="popover" data-container="#navbarColor03" data-placement="top" title="" data-html="true" data-content='
                                    <form class="form-inline">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    </form>'>
                                                            <i class="fal fa-search"></i>
                                                        </button>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-6" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Header <span class="fw-300"><i>position</i></span>
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
                                                <p>Use <a href="#">position utilities</a> to place navbars in non-static positions. Choose from fixed to the top, fixed to the bottom, or stickied to the top (scrolls with the page until it reaches the top, then stays there). Fixed navbars use <code>position: fixed</code>, meaning they’re pulled from the normal flow of the DOM and may require custom CSS (e.g., <code>padding-top</code> on the <code>&lt;body&gt;</code>) to prevent overlap with other elements.</p>
                                                Also note that <strong><code>.sticky-top</code> uses <code>position: sticky</code>, which <a href="https://caniuse.com/#feat=css-sticky" target="_blank">isn’t fully supported in every browser</a></strong>
                                            </div>
                                            <div class="position-relative overflow-auto" style="height: 300px;">
                                                <h2 class="fw-500">
                                                    Sticky Element: Scroll Down to See the Effect
                                                    <small>
                                                        Scroll down this page to see how sticky positioning works
                                                    </small>
                                                </h2>
                                                <nav class="navbar navbar-expand-lg navbar-light bg-warning-500 sticky-top">
                                                    <a class="navbar-brand d-flex align-items-center fw-500" href="#">
                                                        <img src="<?= ASSETS_URL ?>/img/logo.png" class="d-inline-block align-top mr-2" alt="logo"> SmartAdmin
                                                    </a>
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSticky" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarSticky">
                                                        <ul class="navbar-nav mr-auto">
                                                            <li class="nav-item active">
                                                                <a class="nav-link" href="#">Home
                                                                    <span class="sr-only">(current)</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Features</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Pricing</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </nav>
                                                <br>
                                                <p>Some example text..</p>
                                                <h3>Scroll back up again to "remove" the sticky position.</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Mauris ante ligula, facilisis sed ornare eu, lobortis in odio. Praesent convallis urna a lacus interdum ut hendrerit risus congue. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Cras ac leo purus. Mauris quis diam velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Navbar <span class="fw-300"><i>Icons</i></span>
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
                                                Adding profile pictures and dropdowns to nav bars
                                            </div>
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Navbar</a>
                                                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                                        <li class="nav-item active">
                                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Link</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                        </li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h1 mr-1 mb-0">
                                                        <i class="fal fa-bell"></i>
                                                        <span class="badge badge-icon pos-top pos-right">99</span>
                                                    </a>
                                                    <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="d-flex align-items-center justify-content-center ml-2">
                                                        <img src="<?= ASSETS_URL ?>/img/demo/avatars/avatar-admin.png" class="profile-image profile-image-md rounded-circle" alt="drlantern@gotbootstrap.com">
                                                        <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Dr. Codex Lantern</span>
                                                        <i class="ni ni-chevron-down hidden-xs-down"></i>
                                                    </a>
                                                </div>
                                            </nav>
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
