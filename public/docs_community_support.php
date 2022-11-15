<?php

require_once 'init.php';

$_title = 'Flavors &amp; Editions - Documentation - SmartAdmin v4.6.3';
$_active_nav = 'docs_community_support';
$_head = '';

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
    <body class="mod-bg-1 mod-nav-link mod-skin-<?= $_theme ?> layout-composed nav-function-fixed">
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
                        <div class="alert alert-info m-0 p-0 border-left-0 border-right-0 rounded-0 px-5 py-2">
                            <div class="container">
                                <div class="px-3 d-flex pr-5">
                                    <strong>SmartAdmin Support Forum is a public support forum hosted on <a href="https://support.gotbootstrap.com" target="_blank">https://support.gotbootstrap.com</a></strong>
                                    <div class="ml-auto">
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs btn-icon rounded-circle" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-grow-1 p-0 iframe-wrapper">
                            <iframe src="https://support.gotbootstrap.com/" id="iframe" class="w-100 border-0" allowtransparency="true"></iframe>
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
            initApp.pushSettings("layout-composed nav-function-fixed", false);


            //
            /*$('#iframe').load( function() {
    $('#iframe').contents().find("head")
      .append($("<style type='text/css'>  .Header-title{display:none;}  </style>"));
    });*/

            /*$('#iframe').on("load", function() {
    var iframe = $(window.top.document).find("#iframe");
    iframe.height(iframe[0].ownerDocument.body.scrollHeight+'px' );
});*/


            /*var framefenster = document.getElementsByTagName("iframe");
             var auto_resize_timer = window.setInterval("autoresize_frames()", 1000);
             function autoresize_frames() {
               for (var i = 0; i < framefenster.length; ++i) {
                   if(framefenster[i].contentWindow.document.body){
                     var framefenster_size = framefenster[i].contentWindow.document.body.offsetHeight;
                     if(document.all && !window.opera) {
                       framefenster_size = framefenster[i].contentWindow.document.body.scrollHeight;
                     }
                     framefenster[i].style.height = framefenster_size + 'px';
                   }
               }
             }*/

        </script>
    </body>
</html>
