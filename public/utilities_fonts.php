<?php

require_once 'init.php';

$_title = 'Fonts - Utilities - SmartAdmin v4.6.3';
$_active_nav = 'utilities_fonts';
$_head = '';
$_description = 'Typography description';

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
                            <li class="breadcrumb-item">Utilities</li>
                            <li class="breadcrumb-item active">Fonts</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                Fonts: <span class='fw-300'>Roboto <sup class='fw-400 fs-sm'>(by google)</sup></span>
                                <small>
                                    Typography description
                                </small>
                            </h1>
                        </div>
                        <div class="container">
                            <div class="card p-4">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <h3>
                                            Glyph
                                        </h3>
                                        <div class="text-primary" style="font-size: 1500%; line-height: 165px;">
                                            <span class="fw-300">
                                                Rr
                                            </span>
                                            <br>
                                            <span class="fw-900">
                                                Ar
                                            </span>
                                        </div>
                                        <p class="mt-1 fw-300 fs-sm text-muted">
                                            This is the regular family, which can be used alongside the Roboto Condensed family and the Roboto Slab family.
                                        </p>
                                    </div>
                                    <div class="col-xl-9">
                                        <h3>
                                            About 'Roboto' Font
                                        </h3>
                                        <p>Roboto has a dual nature. It has a mechanical skeleton and the forms are largely geometric. At the same time, the font features friendly and open curves. While some grotesks distort their letterforms to force a rigid rhythm, Roboto doesn’t compromise, allowing letters to be settled into their natural width. This makes for a more natural reading rhythm more commonly found in humanist and serif types.</p>
                                        <h5 class="frame-heading">
                                            @import to <code>variables.scss</code>
                                        </h5>
                                        <div class="card bg-faded p-1 pr-2 pl-2 fs-md">
                                            <code>$font-import: https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900 !default</code>
                                        </div>
                                        <p class="fs-xs text-muted mt-2">Approximate load time for this font is 0.3 seconds</p>
                                        <hr class="mt-4 mb-4">
                                        <h3>
                                            Characters
                                        </h3>
                                        <div class="fs-xxl text-dark" style="letter-spacing: 4px;">
                                            &#8203;&zwnj;A&#8203;&zwnj;B&#8203;&zwnj;C&#8203;&zwnj;Ć&#8203;&zwnj;Č&#8203;&zwnj;D&#8203;&zwnj;Đ&#8203;&zwnj;E&#8203;&zwnj;F&#8203;&zwnj;G&#8203;&zwnj;H&#8203;&zwnj;I&#8203;&zwnj;J&#8203;&zwnj;K&#8203;&zwnj;L&#8203;&zwnj;M&#8203;&zwnj;N&#8203;&zwnj;O&#8203;&zwnj;P&#8203;&zwnj;Q&#8203;&zwnj;R&#8203;&zwnj;S&#8203;&zwnj;Š&#8203;&zwnj;T&#8203;&zwnj;U&#8203;&zwnj;V&#8203;&zwnj;W&#8203;&zwnj;X&#8203;&zwnj;Y&#8203;&zwnj;Z&#8203;&zwnj;Ž&#8203;&zwnj;a&#8203;&zwnj;b&#8203;&zwnj;c&#8203;&zwnj;č&#8203;&zwnj;ć&#8203;&zwnj;d&#8203;&zwnj;đ&#8203;&zwnj;e&#8203;&zwnj;f&#8203;&zwnj;g&#8203;&zwnj;h&#8203;&zwnj;i&#8203;&zwnj;j&#8203;&zwnj;k&#8203;&zwnj;l&#8203;&zwnj;m&#8203;&zwnj;n&#8203;&zwnj;o&#8203;&zwnj;p&#8203;&zwnj;q&#8203;&zwnj;r&#8203;&zwnj;s&#8203;&zwnj;š&#8203;&zwnj;t&#8203;&zwnj;u&#8203;&zwnj;v&#8203;&zwnj;w&#8203;&zwnj;x&#8203;&zwnj;y&#8203;&zwnj;z&#8203;&zwnj;ž&#8203;&zwnj;А&#8203;&zwnj;Б&#8203;&zwnj;В&#8203;&zwnj;Г&#8203;&zwnj;Ґ&#8203;&zwnj;Д&#8203;&zwnj;Ђ&#8203;&zwnj;Е&#8203;&zwnj;Ё&#8203;&zwnj;Є&#8203;&zwnj;Ж&#8203;&zwnj;З&#8203;&zwnj;Ѕ&#8203;&zwnj;И&#8203;&zwnj;І&#8203;&zwnj;Ї&#8203;&zwnj;Й&#8203;&zwnj;Ј&#8203;&zwnj;К&#8203;&zwnj;Л&#8203;&zwnj;Љ&#8203;&zwnj;М&#8203;&zwnj;Н&#8203;&zwnj;Њ&#8203;&zwnj;О&#8203;&zwnj;П&#8203;&zwnj;Р&#8203;&zwnj;С&#8203;&zwnj;Т&#8203;&zwnj;Ћ&#8203;&zwnj;У&#8203;&zwnj;Ў&#8203;&zwnj;Ф&#8203;&zwnj;Х&#8203;&zwnj;Ц&#8203;&zwnj;Ч&#8203;&zwnj;Џ&#8203;&zwnj;Ш&#8203;&zwnj;Щ&#8203;&zwnj;Ъ&#8203;&zwnj;Ы&#8203;&zwnj;Ь&#8203;&zwnj;Э&#8203;&zwnj;Ю&#8203;&zwnj;Я&#8203;&zwnj;а&#8203;&zwnj;б&#8203;&zwnj;в&#8203;&zwnj;г&#8203;&zwnj;ґ&#8203;&zwnj;д&#8203;&zwnj;ђ&#8203;&zwnj;е&#8203;&zwnj;ё&#8203;&zwnj;є&#8203;&zwnj;ж&#8203;&zwnj;з&#8203;&zwnj;ѕ&#8203;&zwnj;и&#8203;&zwnj;і&#8203;&zwnj;ї&#8203;&zwnj;й&#8203;&zwnj;ј&#8203;&zwnj;к&#8203;&zwnj;л&#8203;&zwnj;љ&#8203;&zwnj;м&#8203;&zwnj;н&#8203;&zwnj;њ&#8203;&zwnj;о&#8203;&zwnj;п&#8203;&zwnj;р&#8203;&zwnj;с&#8203;&zwnj;т&#8203;&zwnj;ћ&#8203;&zwnj;у&#8203;&zwnj;ў&#8203;&zwnj;ф&#8203;&zwnj;х&#8203;&zwnj;ц&#8203;&zwnj;ч&#8203;&zwnj;џ&#8203;&zwnj;ш&#8203;&zwnj;щ&#8203;&zwnj;ъ&#8203;&zwnj;ы&#8203;&zwnj;ь&#8203;&zwnj;э&#8203;&zwnj;ю&#8203;&zwnj;я&#8203;&zwnj;Α&#8203;&zwnj;Β&#8203;&zwnj;Γ&#8203;&zwnj;Δ&#8203;&zwnj;Ε&#8203;&zwnj;Ζ&#8203;&zwnj;Η&#8203;&zwnj;Θ&#8203;&zwnj;Ι&#8203;&zwnj;Κ&#8203;&zwnj;Λ&#8203;&zwnj;Μ&#8203;&zwnj;Ν&#8203;&zwnj;Ξ&#8203;&zwnj;Ο&#8203;&zwnj;Π&#8203;&zwnj;Ρ&#8203;&zwnj;Σ&#8203;&zwnj;Τ&#8203;&zwnj;Υ&#8203;&zwnj;Φ&#8203;&zwnj;Χ&#8203;&zwnj;Ψ&#8203;&zwnj;Ω&#8203;&zwnj;α&#8203;&zwnj;β&#8203;&zwnj;γ&#8203;&zwnj;δ&#8203;&zwnj;ε&#8203;&zwnj;ζ&#8203;&zwnj;η&#8203;&zwnj;θ&#8203;&zwnj;ι&#8203;&zwnj;κ&#8203;&zwnj;λ&#8203;&zwnj;μ&#8203;&zwnj;ν&#8203;&zwnj;ξ&#8203;&zwnj;ο&#8203;&zwnj;π&#8203;&zwnj;ρ&#8203;&zwnj;σ&#8203;&zwnj;τ&#8203;&zwnj;υ&#8203;&zwnj;φ&#8203;&zwnj;χ&#8203;&zwnj;ψ&#8203;&zwnj;ω&#8203;&zwnj;ά&#8203;&zwnj;Ά&#8203;&zwnj;έ&#8203;&zwnj;Έ&#8203;&zwnj;έ&#8203;&zwnj;Ή&#8203;&zwnj;ί&#8203;&zwnj;ϊ&#8203;&zwnj;ΐ&#8203;&zwnj;Ί&#8203;&zwnj;ό&#8203;&zwnj;Ό&#8203;&zwnj;ύ&#8203;&zwnj;ΰ&#8203;&zwnj;ϋ&#8203;&zwnj;Ύ&#8203;&zwnj;Ϋ&#8203;&zwnj;Ώ&#8203;&zwnj;Ă&#8203;&zwnj;Â&#8203;&zwnj;Ê&#8203;&zwnj;Ô&#8203;&zwnj;Ơ&#8203;&zwnj;Ư&#8203;&zwnj;ă&#8203;&zwnj;â&#8203;&zwnj;ê&#8203;&zwnj;ô&#8203;&zwnj;ơ&#8203;&zwnj;ư&#8203;&zwnj;1&#8203;&zwnj;2&#8203;&zwnj;3&#8203;&zwnj;4&#8203;&zwnj;5&#8203;&zwnj;6&#8203;&zwnj;7&#8203;&zwnj;8&#8203;&zwnj;9&#8203;&zwnj;0&#8203;&zwnj;‘&#8203;&zwnj;?&#8203;&zwnj;’&#8203;&zwnj;“&#8203;&zwnj;!&#8203;&zwnj;”&#8203;&zwnj;(&#8203;&zwnj;%&#8203;&zwnj;)&#8203;&zwnj;[&#8203;&zwnj;#&#8203;&zwnj;]&#8203;&zwnj;{&#8203;&zwnj;@&#8203;&zwnj;}&#8203;&zwnj;/&#8203;&zwnj;&amp;&#8203;&zwnj;&lt;&#8203;&zwnj;-&#8203;&zwnj;+&#8203;&zwnj;÷&#8203;&zwnj;×&#8203;&zwnj;=&#8203;&zwnj;&gt;&#8203;&zwnj;®&#8203;&zwnj;©&#8203;&zwnj;$&#8203;&zwnj;€&#8203;&zwnj;£&#8203;&zwnj;¥&#8203;&zwnj;¢&#8203;&zwnj;:&#8203;&zwnj;;&#8203;&zwnj;,&#8203;&zwnj;.&#8203;&zwnj;*
                                        </div>
                                        <hr class="mt-4 mb-4">
                                        <h3>
                                            Style
                                        </h3>
                                        <div class="m-0 fw-300 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                Light
                                            </div>
                                            <div class="fs-xl d-flex align-items-center">
                                                <code>fw-300</code>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-300 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                <i>Light Italic </i>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-400 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                Regular
                                            </div>
                                            <div class="fs-xl d-flex align-items-center">
                                                <code>fw-400</code>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-400 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                <i>Regular Italic</i>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-500 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                Medium
                                            </div>
                                            <div class="fs-xl d-flex align-items-center">
                                                <code>fw-500</code>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-500 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                <i>Medium Italic</i>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-700 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                Bold
                                            </div>
                                            <div class="fs-xl d-flex align-items-center">
                                                <code>fw-700</code>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-700 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                <i>Bold Italic </i>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-900 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                Black
                                            </div>
                                            <div class="fs-xl d-flex align-items-center">
                                                <code>fw-900</code>
                                            </div>
                                        </div>
                                        <div class="m-0 fw-900 d-flex">
                                            <div class="flex-1 fs-xxl text-contrast">
                                                <i>Black Italic </i>
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
