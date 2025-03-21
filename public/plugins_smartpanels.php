<?php

require_once 'init.php';

$_title = 'SmartPanels - Core Plugins - SmartAdmin v4.6.3';
$_active_nav = 'plugins_smartpanels';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/theme-demo.css">
';
$_description = 'Panels can be used in almost any situation, helping wrap everything in a slick &amp; lightweight container';

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
                            <li class="breadcrumb-item active">SmartPanels</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-shield-alt'></i> SmartPanels <sup class='badge badge-success fw-500'>EXTENSION</sup>
                                <small>
                                    Panels can be used in almost any situation, helping wrap everything in a slick & lightweight container
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
                                <div class="mr-2">
                                    <span class="icon-stack icon-stack-lg">
                                        <i class="base-2 icon-stack-3x color-primary-400"></i>
                                        <i class="base-3 icon-stack-2x color-primary-600 opacity-70"></i>
                                        <i class="fal fa-lightbulb icon-stack-1x text-white opacity-90"></i>
                                    </span>
                                </div>
                                <div class="d-flex flex-fill">
                                    <div class="flex-fill">
                                        <span class="h5">Important information</span>
                                        <p>
                                            Turn your ordinary panels to SmartPanel. Smartpanels lets you add buttons dynamically to panel header using data attributes. All panels are Sortable across all bootstrap col-spans and uses <code>localStorage</code> to store position, color, collapse state and various other panel settings. Use built in hooks to detect state change of panels and execute your script.</p>
                                        <p class="mb-0">
                                            This plugin is exclusive and is built in house to compliment SmartAdmin for PHP. The current version of this plugin does not allow to generate dynamic widgets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="js-page-content-demopanels" class="card mb-g">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="m-0">
                                    Options
                                    <small>See all available options</small>
                                </h4>
                                <div class="ml-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mr-2" id="deletesettingskey-options">Clear settings key</a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary mr-2" id="deletepositionkey-options">Clear position key</a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger mr-2" data-action="factory-reset">Clear all storage keys</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- panel with everything disabled -->
                                        <div id="panel-1" class="panel" data-panel-collapsed data-panel-fullscreen data-panel-close data-panel-locked data-panel-refresh data-panel-reset data-panel-color data-panel-custombutton>
                                            <div class="panel-hdr">
                                                <h2>
                                                    <i class="fal fa-check text-success mr-2"></i> Disable <span class="fw-300">Features</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        This panel features are disabled by adding data attributes to <code>.panel</code>. To disable all, we add the following: <code>data-panel-sortable</code>, <code>data-panel-collapsed</code>, <code>data-panel-fullscreen</code>, <code>data-panel-close</code>, <code>data-panel-locked</code>, <code>data-panel-refresh</code>, <code>data-panel-reset</code>, <code>data-panel-color</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel with refresh only -->
                                        <div id="panel-2" class="panel" data-panel-fullscreen data-panel-close data-panel-collapsed data-panel-locked data-panel-reset data-panel-color data-panel-custombutton data-refresh-timer="3000">
                                            <div class="panel-hdr bg-info-500">
                                                <h2>
                                                    Refresh <span class="fw-300">Panel</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        Refresh panels allows you to hook your own script to refresh ajax calls. You can also set the refresh timer by using the attribute <code>data-refresh-timer="1000"</code>. You can disable refresh button by adding the attribute <code>data-panel-refresh</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel with color change -->
                                        <div id="panel-3" class="panel" data-panel-fullscreen data-panel-close data-panel-collapsed data-panel-locked data-panel-refresh data-panel-custombutton data-panel-reset>
                                            <div class="panel-hdr bg-danger-900 bg-info-gradient">
                                                <h2>
                                                    Color <span class="fw-300">Change</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        Change panel header colors using the built in color changer. The feature can be turned off by using the data attribute <code>data-panel-color</code>. You can also add your own colors to the pallet setting the <code>panelColors</code> option
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- with reset panel -->
                                        <div id="panel-4" class="panel" data-panel-sortable data-panel-collapsed data-panel-fullscreen data-panel-close data-panel-locked data-panel-refresh data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-success-700 bg-primary-gradient">
                                                <h2>
                                                    Reset <span class="fw-300">Settings</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        You can reset any changes you make to a panel using the reset button. It will reset panel styles, collapse state, and any panel colors. You can disable the reset button by adding the data-attribute <code>data-panel-reset</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel with toolbar -->
                                        <div id="panel-5" class="panel">
                                            <div class="panel-hdr">
                                                <h2>
                                                    Panel <span class="fw-300">toolbar</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content border-faded border-top-0 border-right-0 border-left-0">
                                                    <div class="panel-tag m-0 rounded-0">
                                                        You can place any visual elements to the content area, and have multiple <code>.panel-content</code>. Check out the <a href="<?= APP_URL ?>/ui_panels.php">general panels</a> page for more examples of what you can add to panel headers and panel footer
                                                    </div>
                                                </div>
                                                <!-- panel toolbar extended -->
                                                <div class="panel-content py-2 bg-faded border-faded border-top-0 border-left-0 border-right-0">
                                                    <div class="btn-group mr-2" role="group" aria-label="Group A">
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-bold"></i></button>
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-italic"></i></button>
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-underline"></i></button>
                                                    </div>
                                                    <div class="btn-group mr-2" role="group" aria-label="Group A">
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-align-left"></i></button>
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-align-center"></i></button>
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-align-right"></i></button>
                                                        <button type="button" class="btn btn-light btn-sm bg-white"><i class="fas fa-align-justify"></i></button>
                                                    </div>
                                                </div>
                                                <!-- panel content -->
                                                <div class="panel-content p-0">
                                                    <textarea class="form-control border-0 px-4 py-3" rows="10" placeholder="insert your text here...">This is a textarea - below me is panel footer and above is the a utility made toolbar!</textarea>
                                                </div>
                                                <!-- panel footer with utility classes -->
                                                <div class="d-flex align-items-center panel-content py-2 rounded-bottom bg-faded border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="demo-auto-save" checked="checked">
                                                        <label class="custom-control-label" for="demo-auto-save">Auto save</label>
                                                    </div>
                                                    <button class="btn btn-outline-danger ml-auto">Disregard</button>
                                                    <button class="btn btn-success ml-2">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- panel collapsable -->
                                        <div id="panel-6" class="panel" data-panel-fullscreen data-panel-close data-panel-locked data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-warning-50">
                                                <h2>
                                                    <i class="fas fa-arrows-v mr-2"></i> Collapsable <span class="fw-300">Panel</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        This panel is collapsable, and it is using the bootstrap's collapse function. You can disable the collapse button by using <code>data-panel-collapsed</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel collapsed -->
                                        <div id="panel-7" class="panel" data-panel-fullscreen data-panel-close data-panel-locked data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-warning-100">
                                                <h2>
                                                    <i class="fas fa-arrows-v mr-2"></i> Collapsed <span class="fw-300">State</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container collapse">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        This panel was collapse on page load. To collapse a panel on page load, simply add the class <code>.collapse</code> to your <code>.panel-container</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel fullscreen -->
                                        <div id="panel-8" class="panel" data-panel-collapsed data-panel-close data-panel-locked data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-fusion-100">
                                                <h2>
                                                    Fullscreen <span class="fw-300">Panel</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        This panel was collapse on page load. To collapse a panel on page load, simply add the class <code>.collapse</code> to your <code>.panel-container</code>
                                                    </div>
                                                    <p>Usefull when viewing images, gallery, tables with large data and maps. There are much useful applications to this method. When a panel is on fullscreen, printing a page will only print the fullscreen panel content.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel close or delete -->
                                        <div id="panel-9" class="panel" data-panel-fullscreen data-panel-collapsed data-panel-locked data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-success-50">
                                                <h2>
                                                    Close <span class="fw-300">Panels</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        By deleting a panel you will remove the panel from the page and will need to connect the backend with the onevent handler to delete it from database. You can disable the delete button by adding the attribute <code>data-panel-close</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel locked -->
                                        <div id="panel-10" class="panel panel-locked" data-panel-fullscreen data-panel-close data-panel-collapsed data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-danger-50">
                                                <h2>
                                                    Locked <span class="fw-300">Panels</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        Locked panels cannot be dragged, but you can change all other settings. All locked panels will display a red lock icon on the panel header, indicating that it is locked. You can disable the lock button by adding the attribute <code>data-panel-locked</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel locked -->
                                        <div id="panel-11" class="panel" data-panel-sortable data-panel-fullscreen data-panel-close data-panel-collapsed data-panel-refresh data-panel-reset data-panel-custombutton data-panel-color>
                                            <div class="panel-hdr bg-fusion-400">
                                                <h2>
                                                    <i class="fas fa-lock mr-2"></i> Sortable <span class="fw-300">Disabled</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        Similar to panel lock, the panel sortable uses data attribute to lock the position of the panel to the grid. This is hardcoded and users do not have control over unlocking it. To enable this feature, add the data attribute <code>data-panel-sortable</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- panel custom button -->
                                        <div id="panel-12" class="panel" data-panel-fullscreen data-panel-close data-panel-collapsed data-panel-refresh data-panel-reset data-panel-locked data-panel-color>
                                            <div class="panel-hdr bg-primary-300">
                                                <h2>
                                                    <i class="fas fa-mouse-pointer mr-2"></i> Custom <span class="fw-300">Button</span>
                                                </h2>
                                            </div>
                                            <div class="panel-container show">
                                                <div class="panel-content">
                                                    <div class="panel-tag">
                                                        Add custom buttons globally via the panel configuration options. You can add your own custom labels and functions. You can disable the custom button also through the use of attribute <code>data-panel-custombutton</code>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                <h4 class="m-0">
                                    Documentation
                                    <small>SmartPanel information and how to use them</small>
                                </h4>
                            </div>
                            <div class="card-body">
                                <h5 class="frame-heading">Usage Data Atributes</h5>
                                <div class="frame-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered mb-g table-dark">
                                            <thead class="thead-themed">
                                                <tr>
                                                    <th style="width: 250px;">
                                                        HTML5 data attributes
                                                    </th>
                                                    <th style="width: 150px;">
                                                        Example value(s)
                                                    </th>
                                                    <th>
                                                        Desctription
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        data-panel-collapsed
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a toggle button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-fullscreen
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a fullscreen button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-close
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a delete button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-locked
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a lock button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-refresh
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a refresh button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-refresh-timer
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-info">int</span>
                                                    </td>
                                                    <td>
                                                        Set timer for refresh panel. See <code>data-panel-refresh</code>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-reset
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a reset button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-color
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having color selection option (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-custombutton
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Prevent a panel from having a custom button (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        data-panel-sortable
                                                    </td>
                                                    <td>
                                                        <span class="fw-500 text-warning">false</span> or <span class="fw-500 text-success">blank</span>
                                                    </td>
                                                    <td>
                                                        Restrict a panel's sorting feature (can only be used with the value 'false').
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="fw-500">
                                                        These HTML5 attributes are used as individual panel options. Main options can be changed in the panel plugin it self. Notice: data attributes can only have 1 boolan value or none!
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <h5 class="frame-heading">SmartPanel's HTML structure (this will change when the widget is intialized)</h5>
                                <div class="frame-wrap">
                                    <pre class="prettyprint">
&lt;div id="panel-id" class="panel"&gt;
  &lt;div class="panel-hdr"&gt; 
    &lt;h2&gt;
      Panel Title
    &lt;/h2&gt;
  &lt;/div&gt;
  &lt;div class="panel-container show"&gt;
    &lt;div class="panel-content"&gt;
      Content
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
      </pre>
                                </div>
                                <h5 class="frame-heading">Initialization Options </h5>
                                <div class="frame-wrap">
                                    <pre class="prettyprint">
$('#js-page-content-demopanels').smartPanel({
    localStorage: true,
    onChange: function () {},
    onSave: function () {},
    opacity: 1,
    deleteSettingsKey: '#deletesettingskey-options',
    settingsKeyLabel: 'Reset settings?',
    deletePositionKey: '#deletepositionkey-options',
    positionKeyLabel: 'Reset position?',    
    sortable: true,
    buttonOrder: '%collapse% %fullscreen% %close%',
    buttonOrderDropdown: '%refresh% %locked% %color% %custom% %reset%',
    customButton: true,
    customButtonLabel: "Custom Button",
    onCustom: function () {},
    closeButton: true,
    onClosepanel: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onClosepanel")
    },
    fullscreenButton: true,
    onFullscreen: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onFullscreen")
    },
    collapseButton: true,
    onCollapse: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onCollapse")
    },
    lockedButton: true,
    lockedButtonLabel: "Lock Position",
    onLocked: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onLocked")
    },
    refreshButton: true,
    refreshButtonLabel: "Refresh Content",
    onRefresh: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onRefresh")
    },
    colorButton: true,
    colorButtonLabel: "Panel Style",
    onColor: function() {
      if (myapp_config.debugState)
        console.log($(this).closest(".panel").attr('id') + " onColor")
    },
    panelColors: ['bg-primary-700 bg-success-gradient',
            'bg-primary-500 bg-info-gradient',
            'bg-primary-600 bg-primary-gradient',
            'bg-info-600 bg-primray-gradient',                      
            'bg-info-600 bg-info-gradient',
            'bg-info-700 bg-success-gradient',
            'bg-success-900 bg-info-gradient',
            'bg-success-700 bg-primary-gradient', 
            'bg-success-600 bg-success-gradient',                                 
            'bg-danger-900 bg-info-gradient',
            'bg-fusion-400 bg-fusion-gradient', 
            'bg-faded'],
    resetButton: true,
    resetButtonLabel: "Reset Panel",
    onReset: function() {
      if (myapp_config.debugState)
        console.log( $(this).closest(".panel").attr('id') + " onReset callback" )
    }
});
      </pre>
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
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
        <script>
            /* Activate smart panels */
            /* These are the default settings, you can customize it per page as you need 
               Notice how we do not insert the init function inside DOM ready. Making it faster executed.
            */
            $('#js-page-content-demopanels').smartPanel(
            {
                localStorage: true,
                onChange: function() {},
                onSave: function() {},
                opacity: 1,
                deleteSettingsKey: '#deletesettingskey-options',
                settingsKeyLabel: 'Reset settings?',
                deletePositionKey: '#deletepositionkey-options',
                positionKeyLabel: 'Reset position?',
                sortable: true,
                buttonOrder: '%collapse% %fullscreen% %close%',
                buttonOrderDropdown: '%refresh% %locked% %color% %custom% %reset%',
                customButton: true,
                customButtonLabel: "Custom Button",
                onCustom: function() {},
                closeButton: true,
                onClosepanel: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onClosepanel")
                },
                fullscreenButton: true,
                onFullscreen: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onFullscreen")
                },
                collapseButton: true,
                onCollapse: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onCollapse")
                },
                lockedButton: true,
                lockedButtonLabel: "Lock Position",
                onLocked: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onLocked")
                },
                refreshButton: true,
                refreshButtonLabel: "Refresh Content",
                onRefresh: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onRefresh")
                },
                colorButton: true,
                colorButtonLabel: "Panel Style",
                onColor: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onColor")
                },
                panelColors: ['bg-primary-700 bg-success-gradient',
                    'bg-primary-500 bg-info-gradient',
                    'bg-primary-600 bg-primary-gradient',
                    'bg-info-600 bg-primray-gradient',
                    'bg-info-600 bg-info-gradient',
                    'bg-info-700 bg-success-gradient',
                    'bg-success-900 bg-info-gradient',
                    'bg-success-700 bg-primary-gradient',
                    'bg-success-600 bg-success-gradient',
                    'bg-danger-900 bg-info-gradient',
                    'bg-fusion-400 bg-fusion-gradient',
                    'bg-faded'
                ],
                resetButton: true,
                resetButtonLabel: "Reset Panel",
                onReset: function()
                {
                    if (myapp_config.debugState)
                        console.log($(this).closest(".panel").attr('id') + " onReset callback")
                }
            });


            $(document).ready(function()
            {
                //clear localstorage

            });

        </script>
    </body>
</html>
