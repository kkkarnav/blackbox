<?php

require_once 'init.php';

$_title = 'Generate Stack - Font Icons - SmartAdmin v4.6.3';
$_active_nav = 'icons_stack_generate';
$_head = '<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-regular.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-brands.css">
<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/fa-duotone.css">
';
$_description = 'Generate your unique stack Icon';

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
                            <li class="breadcrumb-item">Font Icons</li>
                            <li class="breadcrumb-item">Stack Icons</li>
                            <li class="breadcrumb-item active">Generate Stack</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Stack Icons: <span class='fw-300'>Generate Stack</span> <sup class='badge badge-success fw-500'>ADDON</sup>
                                <small>
                                    Generate your unique stack Icon
                                </small>
                            </h1>
                        </div>
                        <div class="container">
                            <div id="panel-1" class="panel">
                                <div class="panel-hdr">
                                    <h2>
                                        Unique <span class="fw-300"><i>Icon</i></span>
                                    </h2>
                                    <div class="panel-toolbar mr-2">
                                        <select id="js-select-layers" class="custom-select form-control custom-select-sm" style="width:8rem">
                                            <option value="2">Two layers</option>
                                            <option value="3">Three layers </option>
                                            <option value="4">Four layers</option>
                                            <option value="5">Five layers</option>
                                            <option value="6">Six layers</option>
                                            <option value="7">Seven layers</option>
                                        </select>
                                    </div>
                                    <div class="panel-toolbar">
                                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                    </div>
                                </div>
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-12 col-xl-auto">
                                                <div class="d-flex align-items-center justify-content-center position-relative w-100 mb-g mb-xl-0" style="font-size: 250px; min-width: 301px; height: 351px; background: url(<?= ASSETS_URL ?>/img/backgrounds/bg-5.png); border-left:0; border-top:0; ">
                                                    <h6 class="fw-300 position-absolute pos-top pos-left m-2 bg-fusion-100 p-2 rounded fs-sm opacity-70">Preview</h6>
                                                    <div id="icon-construct" class="icon-stack m-0 p-0"></div>
                                                </div>
                                            </div>
                                            <div class="flex-1 col-12 col-xl-auto">
                                                <ul class="mb-2 p-0 list-unstyled" id="construct-wrap"></ul>
                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <button class="btn btn-success" onclick="copyIcon();">
                                                            Copy Icon
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <textarea id="js-icon-class" class="position-absolute" style="height:0px; width:0px; opacity:0;"></textarea>
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
            var fa_icon,
                fa_brand,
                ni_icon,
                ni_base,
                ng_textColors,
                fa_icon_URL = myapp_config.assetsUrl + "/media/data/fa-icon-list.json",
                fa_brand_URL = myapp_config.assetsUrl + "/media/data/fa-brand-list.json",
                ni_icon_URL = myapp_config.assetsUrl + "/media/data/ng-icon-list.json",
                ni_base_URL = myapp_config.assetsUrl + "/media/data/ng-icon-base.json",
                ng_textColors_URL = myapp_config.assetsUrl + "/media/data/ng-text-colors.json",
                prefix = ["base", "fal", "fas", "far", "fad", "fab", "ni"],
                iconSize = ["icon-stack-3x", "icon-stack-2x", "icon-stack-1x"],
                layers = getUrlParameter('layers') || 3,
                formatedDOMElms = [],
                formattedDOMIcon = [],
                formatPrefix = [],
                formatOpacityValue = [],
                formatIconSize = [],
                formatTextColors = [],
                format_fa_icon = [],
                format_fa_brand = [],
                format_ni_icon = [],
                format_ni_base = [];

            $.when(
                $.getJSON(fa_icon_URL, function(data)
                {
                    fa_icon = data;
                }),
                $.getJSON(fa_brand_URL, function(data)
                {
                    fa_brand = data;
                }),
                $.getJSON(ni_icon_URL, function(data)
                {
                    ni_icon = data;
                }),
                $.getJSON(ni_base_URL, function(data)
                {
                    ni_base = data;
                }),
                $.getJSON(ng_textColors_URL, function(data)
                {
                    ng_textColors = data;
                })
            ).then(function()
            {
                if (fa_icon && fa_brand && ni_icon && ni_base && ng_textColors)
                {

                    //formatPrefix
                    jQuery.each(prefix, function(index, item)
                    {
                        formatPrefix.push($('<option></option>').attr("value", item).text(item))
                    });
                    //formatIconSize
                    jQuery.each(iconSize, function(index, item)
                    {
                        formatIconSize.push($('<option></option>').attr("value", item).text("size-" + item.slice(11)))
                    });
                    //formatTextColors
                    jQuery.each(ng_textColors, function(index, item)
                    {
                        formatTextColors.push($('<option></option>').attr("value", item).addClass("bg" + item.slice(5)).text(item.slice(6)))
                    });
                    //format_fa_icon
                    jQuery.each(fa_icon, function(index, item)
                    {
                        format_fa_icon.push('<option value="fa' + item + '" data-icon-class="' + item + '">' + item.slice(1) + '</option>')
                    });
                    //fa_brand
                    jQuery.each(fa_brand, function(index, item)
                    {
                        format_fa_brand.push('<option value="fa' + item + '" data-icon-class="' + item + '">' + item.slice(1) + '</option>')
                    });
                    //format_ni_icon
                    jQuery.each(ni_icon, function(index, item)
                    {
                        format_ni_icon.push('<option value="ni' + item + '" data-icon-class="' + item + '">' + item.slice(1) + '</option>')
                    });
                    //format_ni_base
                    jQuery.each(ni_base, function(index, item)
                    {
                        format_ni_base.push('<option value="' + item + '" data-icon-class="' + item + '">' + item + '</option>')
                    });

                    // create layers
                    for (var i = 0; i < layers; i++)
                    {

                        /* pushing icons */
                        formattedDOMIcon.push('<i data-icon-select="' + i + '" class=""></i>')

                        /* pushing controls */
                        formatedDOMElms.push('<li id="' + i + '" class="pl-4 pr-0 bg-subtlelight-fade mb-3 rounded border-faded shadow-1" data-layer-target="' + i + '">\
                                    <div class="d-flex flex-row position-relative">\
                                        <div class="badge badge-icon" style="left: -33px; top: -5px; background: #fff; color: #333; border-color: #c9d9e0;">' + i + '</div>\
                                        <div class="flex-1 row no-gutters pb-2 pt-2">\
                                            <div class="col-sm-6 col-md-4 col-lg-2">\
                                                <div class="form-group mr-2 mb-md-2">\
                                                    <label>Icon prefix</label>\
                                                    <select class="js-icon-prefix js-select-trigger custom-select w-100"></select>\
                                                </div>\
                                            </div>\
                                            <div class="col-sm-6 col-md-4 col-lg-3">\
                                                <div class="form-group mr-2 mb-md-2">\
                                                    <label>Choose Icon</label>\
                                                    <select data-icon-target="' + i + '" class="js-icon-class js-select-trigger custom-select w-100"></select>\
                                                </div>\
                                            </div>\
                                            <div class="col-sm-6 col-md-4 col-lg-3">\
                                                <div class="form-group mr-2 mb-md-2">\
                                                    <label>Select Color</label>\
                                                    <select class="js-icon-color js-select-trigger custom-select w-100"></select>\
                                                </div>\
                                            </div>\
                                            <div class="col-sm-6 col-md-6 col-lg-2">\
                                                <div class="form-group mr-2 mb-md-2">\
                                                    <label>Stack Size</label>\
                                                    <select class="js-icon-size js-select-trigger custom-select w-100"></select>\
                                                </div>\
                                            </div>\
                                            <div class="col-sm-12 col-md-6 col-lg-2">\
                                                <div class="form-group mb-md-2">\
                                                    <label>Opacity</label>\
                                                    <input type="range" min="5" max="100" step="5" value="100" class="w-100 js-icon-opacity js-select-trigger">\
                                                </div>\
                                            </div>\
                                            <div class="col-12 position-relative">\
                                                <a class="fs-nano" data-toggle="collapse" href="#advance-' + i + '" role="button" aria-expanded="false" aria-controls="advance-' + i + '">\
                                                    More Options\
                                                </a>\
                                            </div>\
                                            <div class="collapse col-12" id="advance-' + i + '">\
                                                <div class="row no-gutters">\
                                                    <div class="col-sm-3">\
                                                        <div class="form-group mr-2 mb-0">\
                                                             <select class="js-icon-animate js-select-trigger custom-select w-100">\
                                                                <option value="">Un-animated</option>\
                                                                <option value="fa-spin">Animated</option>\
                                                             </select>\
                                                        </div>\
                                                    </div>\
                                                    <div class="col-sm-3">\
                                                        <div class="form-group mr-2 mb-0">\
                                                             <select class="js-icon-rotate js-select-trigger custom-select w-100">\
                                                                <option value="">No rotation</option>\
                                                                <option value="fa-rotate-90">Rotate 90</option>\
                                                                <option value="fa-rotate-180">Rotate 180</option>\
                                                                <option value="fa-rotate-270">Rotate 270</option>\
                                                                <option value="fa-flip-horizontal">Flip horizontal</option>\
                                                                <option value="fa-flip-vertical">Flip vertical</option>\
                                                             </select>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                        <div class="width-5 js-move-trigger ml-2">\
                                            <a href="#" class="h-100 w-100 d-flex align-items-center justify-content-center text-dark cursor-move bg-faded">\
                                                <i class="fal fa-ellipsis-v fs-lg btn-m-s mb-2"></i>\
                                                <i class="fal fa-ellipsis-v fs-lg btn-m-s mb-2"></i>\
                                                <i class="fal fa-ellipsis-v fs-lg btn-m-s mb-2"></i>\
                                            </a>\
                                        </div>\
                                    </div>\
                                </li>');

                    }

                    $('#construct-wrap').append(formatedDOMElms.reverse().join(" "));
                    $('#icon-construct').append(formattedDOMIcon.join(" "));
                    $("select.js-icon-prefix").append(formatPrefix);
                    $("select.js-icon-size").empty().append(formatIconSize.reverse());
                    $("select.js-icon-class").empty().append(format_ni_base.reverse());
                    $("select.js-icon-color").empty().append(formatTextColors);

                    //pre-select
                    $('[data-layer-target="0"] .js-icon-size').val('icon-stack-3x');
                    $('[data-layer-target="1"] .js-icon-size').val('icon-stack-2x');
                    $('[data-layer-target="0"] .js-icon-color').val('color-primary-500');
                    $('[data-layer-target="1"] .js-icon-color').val('color-primary-300');

                    //on prefix change update icon select
                    $(document).on('change', '.js-icon-prefix', function()
                    {
                        var selectValue = $(this).val();
                        if (selectValue == 'fal' || selectValue == 'fas' || selectValue == 'far')
                        {
                            $(this).closest('[data-layer-target]').find('.js-icon-class').empty().append(format_fa_icon);
                        }
                        else if (selectValue == 'ni')
                        {
                            $(this).closest('[data-layer-target]').find('.js-icon-class').empty().append(format_ni_icon);
                        }
                        else if (selectValue == 'base')
                        {
                            $(this).closest('[data-layer-target]').find('.js-icon-class').empty().append(format_ni_base);
                        }
                        else if (selectValue == 'fab')
                        {
                            $(this).closest('[data-layer-target]').find('.js-icon-class').empty().append(format_fa_brand);
                        }
                    })

                    // runIconGenerator
                    var runIconGenerator = function(id)
                    {
                        var uID = $('[data-layer-target="' + id + '"]');
                        var iconPrefix = uID.find('select.js-icon-prefix').val();
                        var iconClass = uID.find('select.js-icon-class').val();
                        var iconSize = uID.find('select.js-icon-size').val();
                        var iconOpacity = uID.find('input.js-icon-opacity').val();
                        var iconColor = uID.find('select.js-icon-color').val();
                        var iconAnimate = uID.find('select.js-icon-animate').val();
                        var iconRotate = uID.find('select.js-icon-rotate').val();


                        //console.log(iconAnimate)

                        $('#icon-construct').find('[data-icon-select="' + id + '"]').removeClass().addClass(iconPrefix + " " + iconClass + " " + iconSize + " " + "opacity-" + iconOpacity + " " + iconColor + " " + iconAnimate + " " + iconRotate);

                        uID.find('select.js-icon-color').removeClassPrefix('bg-').addClass('bg' + iconColor.slice(5));
                    };

                    //select trigger function
                    $(document).on('change', '.js-select-trigger', function()
                    {
                        var uniqueID = $(this).closest('[data-layer-target]').attr('data-layer-target');
                        runIconGenerator(uniqueID);
                    })


                    //sample
                    $('[data-layer-target="0"] .js-icon-class').val('base-7').trigger('change');
                    $('[data-layer-target="1"] .js-icon-class').val('base-7').trigger('change');
                    $('[data-layer-target="2"] .js-icon-prefix').val('fal').trigger('change');
                    $('[data-layer-target="2"] .js-icon-class').val('fa-car').trigger('change');


                    var changeOrder = function()
                    {

                        var bundleNewElms = [];

                        $('#construct-wrap li').each(function()
                        {
                            $this = $(this)
                            var uID = $this.attr('data-layer-target');
                            var iconPrefix = $this.find('select.js-icon-prefix').val();
                            var iconClass = $this.find('select.js-icon-class').val();
                            var iconSize = $this.find('select.js-icon-size').val();
                            var iconOpacity = $this.find('input.js-icon-opacity').val();
                            var iconColor = $this.find('select.js-icon-color').val();
                            var iconAnimate = $this.find('select.js-icon-animate').val();
                            var iconRotate = $this.find('select.js-icon-rotate').val();

                            bundleNewElms.push('<i data-icon-select="' + uID + '" class="' + iconPrefix + " " + iconClass + " " + iconSize + " " + "opacity-" + iconOpacity + " " + iconColor + " " + iconAnimate + " " + iconRotate + '"></i>')

                        });

                        //console.log(bundleNewElms);

                        $('#icon-construct').empty().append(bundleNewElms.reverse().join(" "));

                    };

                    $('#construct-wrap').sortable(
                    {
                        handle: '.js-move-trigger',
                        update: changeOrder
                    }).disableSelection();



                }
                else
                {
                    console.log("somethign went wrong!")
                }
            });

            var copyIcon = function()
            {
                $('#js-icon-class').text("<div class='icon-stack'>\n" + $('#icon-construct').html().replace(/data-icon-select="[^]"/g, ' ').replace(/\s\s+/g, ' ') + "\n</div>");
                $('#js-icon-class').select();
                document.execCommand('copy');
            };




            $('#js-select-layers').on('change', function()
            {
                var url = $(this).val(); // get selected value
                if (url)
                { // require a URL

                    var params = new URLSearchParams(location.search);
                    params.set('layers', url);
                    window.location.search = params.toString();

                }
                return false;
            });

            $('#js-select-layers').val(layers);

        </script>
    </body>
</html>
