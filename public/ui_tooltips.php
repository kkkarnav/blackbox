<?php

require_once 'init.php';

$_title = 'Tooltips - UI Components - SmartAdmin v4.6.3';
$_active_nav = 'ui_tooltips';
$_head = '';
$_description = 'Examples for showing pagination to indicate a series of related content exists across multiple pages.';

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
                            <li class="breadcrumb-item active">Tooltips</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-window'></i> Tooltips
                                <small>
                                    Examples for showing pagination to indicate a series of related content exists across multiple pages.
                                </small>
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>basics</i></span>
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
                                                Hover over the links below to see tooltips:
                                            </div>
                                            <p class="text-muted">Tight pants next level keffiyeh <a href="#" class="text-info fw-500" data-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" class="text-info fw-500" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="#" class="text-info fw-500" data-toggle="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="#" class="text-info fw-500" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-2" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>Placement</i></span>
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
                                                <p>How to position the tooltip - auto | top | bottom | left | right. When <code>auto</code> is specified, it will dynamically reorient the tooltip.</p>
                                                <p class="m-0">When a function is used to determine the placement, it is called with the tooltip DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the tooltip instance.</p>
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-placement="auto" title="" data-original-title="Tooltip on auto">Auto</button>
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                                    Top</button>
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-3" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>animation</i></span>
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
                                                Disable the CSS fade transition to the tooltip by using <code>data-animation="false"</code>
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Animated">Animated</button>
                                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" data-animation="false" title="" data-original-title="Not Animated">
                                                    Not Animated</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-4" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>Container</i></span>
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
                                                Appends the tooltip to a specific element. Example: container: 'body'. This option is particularly useful in that it allows you to position the tooltip in the flow of the document near the triggering element - which will prevent the tooltip from floating away from the triggering element during a window resize.
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="mr-auto fs-md fw-500" data-container="#test-container" data-toggle="tooltip" data-placement="top" title="" data-original-title="I am not really here...">
                                                    >> Hover to display tooltip
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs ml-auto" data-action="toggle" data-class="d-none" data-target="#test-container">
                                                    hide container
                                                </a>
                                            </div>
                                            <div id="test-container" class="p-3 rounded bg-primary-300 mt-3">
                                                Toolip is nested in this container but displayed on the hovered element above. Once this container is hidden the tooltip will not be visible. Try hiding the container by pressing the "hide" button above
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-5" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Delayed <span class="fw-300"><i>Tooltip</i></span>
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
                                                Delay showing and hiding the tooltip (ms) - does not apply to manual trigger type. If a number is supplied, delay is applied to both hide/show. Object structure is: <code>delay: { "show": 500, "hide": 100 }</code>
                                            </div>
                                            <div class="demo demo-h-spacing d-flex align-items-end">
                                                <a href="#" class="btn btn-lg btn-outline-default" data-toggle="tooltip" data-delay='{ "show": 1000, "hide": 1000 }' data-original-title='{ "show": 1000, "hide": 1000 }'>1s delay</a>
                                                <a href="#" class="btn btn-outline-default" data-toggle="tooltip" data-delay='{ "show": 500, "hide": 500 }' data-original-title='{ "show": 500, "hide": 500 }'>0.5sec delay</a>
                                                <a href="#" class="btn btn-sm btn-outline-default" data-toggle="tooltip" data-delay='{ "show": 0, "hide": 0 }' data-original-title='{ "show": 0, "hide": 0 }'>No delay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div id="panel-7" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Adding <span class="fw-300"><i>dynamic objects</i></span>
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
                                                If a selector is provided, tooltip objects will be delegated to the specified targets. In practice, this is used to also apply tooltips to dynamically added DOM elements (jQuery.on support).
                                            </div>
                                            <p>Toggle the checkbox below and click the 'add new tooltip' button to observe the behavioral differences between using the selector option, and not using it.</p>
                                            <hr>
                                            <label id="use-selector-label" class="d-flex align-items-center mb-3">
                                                <input id="use-selector" type="checkbox">
                                                <span class="ml-2" data-title="you must re-run this page to change the selector option once you've started the demo">Use selector option</span>
                                            </label>
                                            <pre id="with-selector-code">
$('body').tooltip({
  selector: '.has-tooltip'
});
</pre>
                                            <pre id="without-selector-code">
$('.has-tooltip').tooltip();
</pre>
                                            <button class="btn btn-primary" id="add-button">Add new tooltip</button>
                                            <div id="js_buttons_tooltip_demo" style="display:none">
                                                <hr>
                                                <button class="btn btn-block btn-success has-tooltip" data-title="Static" data-content="This button was specified in the initial HTML document" data-placement="top">
                                                    Working tooltip
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-8" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>Templating</i></span>
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
                                                Base HTML to use when creating the tooltip. The tooltip's title will be injected into the <code>.tooltip-inner</code>. The outermost wrapper element should have the <code>.tooltip</code> class and <code>role="tooltip"</code>
                                            </div>
                                            <h5 class="frame-heading">
                                                Backgrounds
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo">
                                                    <button type="button" class="btn btn-outline-primary" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-primary-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip primary background">
                                                        Primary</button>
                                                    <button type="button" class="btn btn-outline-secondary" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-fusion-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip secondary background">
                                                        Fusion</button>
                                                    <button type="button" class="btn btn-outline-success" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-success-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip success background">
                                                        Success</button>
                                                    <button type="button" class="btn btn-outline-info" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-info-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip info background">
                                                        Info</button>
                                                    <button type="button" class="btn btn-outline-warning" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-warning-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip warning background">
                                                        Wraning</button>
                                                    <button type="button" class="btn btn-outline-danger" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-danger-500"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip danger background">
                                                        Danger</button>
                                                    <button type="button" class="btn btn-outline-dark" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-dark"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip dark background">
                                                        Dark</button>
                                                    <button type="button" class="btn btn-outline-light" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner bg-light text-dark"></div></div>' data-toggle="tooltip" title="" data-original-title="Tooltip light background">
                                                        Light</button>
                                                </div>
                                            </div>
                                            <h5 class="frame-heading">
                                                Sizing
                                            </h5>
                                            <div class="frame-wrap">
                                                <div class="demo demo-h-spacing d-flex align-items-end">
                                                    <button type="button" class="btn btn-outline-default btn-lg" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner fs-xl"></div></div>' data-toggle="tooltip" title="" data-original-title="Large font">
                                                        Large font</button>
                                                    <button type="button" class="btn btn-outline-default btn-xs" data-template='<div class="tooltip" role="tooltip"><div class="tooltip-inner small fw-400"></div></div>' data-toggle="tooltip" title="" data-original-title="Small font">
                                                        Small font</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-9" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltip <span class="fw-300"><i>Triggers</i></span>
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
                                                <p>How tooltip is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space.</p>
                                                <p><code>'manual'</code> indicates that the tooltip will be triggered programmatically via the <code>.tooltip('show')</code>, <code>.tooltip('hide')</code> and <code>.tooltip('toggle')</code> methods; this value cannot be combined with any other trigger.</p>
                                                <p><code>'hover'</code> on its own will result in tooltips that cannot be triggered via the keyboard, and should only be used if alternative methods for conveying the same information for keyboard users is present.</p>
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-trigger="click" data-original-title="Displayed on click">Click event</button>
                                                <button type="button" class="btn btn-outline-default" data-toggle="tooltip" data-trigger="focus" data-original-title="Displayed on focus">Focus event</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-10" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Tooltips <span class="fw-300"><i>Offset</i></span>
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
                                                Offset of the tooltip relative to its target. When a function is used to determine the offset, it is called with an object containing the offset data as its first argument. The function must return an object with the same structure. The triggering element DOM node is passed as the second argument.
                                            </div>
                                            <div class="demo">
                                                <button type="button" class="btn btn-outline-default" data-offset="0,25" data-toggle="tooltip" data-placement="top" data-original-title="Offset by x=0, y=25">
                                                    Top placement (0,25)</button>
                                                <button type="button" class="btn btn-outline-default" data-offset="0,25" data-toggle="tooltip" data-placement="bottom" data-original-title="Offset by x=0, y=25">
                                                    Bottom placement (0,25)</button>
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
        <script type="text/javascript">
            function usingSelectorOption()
            {
                return $('#use-selector').is(':checked');
            }

            function updateCodeView()
            {
                $('#with-selector-code').toggle(usingSelectorOption());
                $('#without-selector-code').toggle(!usingSelectorOption());
            }

            $(function()
            {
                // Update code view when checkbox is toggled
                updateCodeView();
                $('#use-selector').click(function()
                {
                    updateCodeView();
                });

                var startedDemo = false;
                $('#add-button').click(function()
                {
                    // One-time initialization
                    if (!startedDemo)
                    {
                        if (usingSelectorOption())
                        {
                            $('body').tooltip(
                            {
                                selector: '.has-tooltip'
                            });
                        }
                        else
                        {
                            $('.has-tooltip').tooltip();
                        }

                        startedDemo = true;
                    }

                    // Disable selector checkbox, put a tooltip on it, and show the buttons panel
                    $('#use-selector').attr('disabled', 'disabled');
                    $('#use-selector-label span').tooltip();
                    $('#js_buttons_tooltip_demo').show();

                    // Add a new button that triggers (or doesn't) a tooltip, with the appropriate message
                    var button = null;
                    if (usingSelectorOption())
                    {
                        button = $('<button class="btn btn-block btn-success has-tooltip" data-title="Dynamic" data-content="This button was added dynamically by JavaScript" data-placement="top">Working dynamically added button</button>');
                    }
                    else
                    {
                        button = $('<button class="btn btn-block btn-default has-tooltip" data-title="Dynamic" data-content="This button was added dynamically by JavaScript" data-placement="top">Non-working dynamically added button</button>');
                    }

                    button.appendTo('#js_buttons_tooltip_demo');
                });
            });

        </script>
    </body>
</html>
