<?php

require_once 'init.php';

$_title = 'FullCalendar - Miscellaneous - SmartAdmin v4.6.3';
$_active_nav = 'miscellaneous_fullcalendar';
$_head = '	<link rel="stylesheet" media="screen, print" href="'.ASSETS_URL.'/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
';
$_description = 'Display a full-size drag-n-drop event calendar.';

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
                            <li class="breadcrumb-item">Miscellaneous</li>
                            <li class="breadcrumb-item active">FullCalendar</li>
                            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                        </ol>
                        <div class="subheader">
                            <h1 class="subheader-title">
                                <i class='subheader-icon fal fa-globe'></i> FullCalendar<sup class='badge badge-primary fw-500'>ADDON</sup>
                                <small>
                                    Display a full-size drag-n-drop event calendar.
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
                                        <span class="h5">About FullCalendar v4+</span>
                                        <p>FullCalendar is a fully responsive event display callendar that can display events directly from your database or from your google calendar. The events can be dragged, changed, edited (which requires implimentation). This is the latest version of FullCalendar which lacks IE10 support. FullCalendar is great for displaying events, but it isn't a complete solution for event content-management. Beyond dragging an event to a different time/day, you cannot change an event's name or other associated data. It is up to you to add this functionality through FullCalendar's event hooks.
                                        </p>
                                        <p class="m-0">
                                            Find in-depth, guidelines, tutorials and more on FullCalendar's <a href="https://fullcalendar.io/docs#toc" target="_blank">Official Documentation</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div id="panel-1" class="panel">
                                    <div class="panel-hdr">
                                        <h2>
                                            Advanced <span class="fw-300"><i>Example</i></span>
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                                        </div>
                                    </div>
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <div id="calendar"></div>
                                            <!-- Modal : TODO -->
                                            <!-- Modal end -->
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
        <!-- moment.js (dependency for the demo only); you do not have to use it unless you need it 
    DOC: Parse, validate, manipulate, and display dates and times in JavaScript. (https://momentjs.com/) -->
        <script src="<?= ASSETS_URL ?>/js/dependency/moment/moment.js"></script>
        <!-- fullcalendar bundle: 
     DOC: you may remove the extensions if you do not plan on using them. Learn more about these extensions at https://fullcalendar.io
                + core/main.js (core)
                + daygrid/main.js (extension)
                + list/main.js (extension)
                + timegrid/main.js (extension)
                + interaction/main.js (extension)
                + src/../bootstrap-main-cust.js (core) -->
        <script src="<?= ASSETS_URL ?>/js/miscellaneous/fullcalendar/fullcalendar.bundle.js"></script>
        <script>
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            document.addEventListener('DOMContentLoaded', function()
            {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl,
                {
                    plugins: ['dayGrid', 'list', 'timeGrid', 'interaction', 'bootstrap'],
                    themeSystem: 'bootstrap',
                    timeZone: 'UTC',
                    //dateAlignment: "month", //week, month
                    buttonText:
                    {
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day',
                        list: 'list'
                    },
                    eventTimeFormat:
                    {
                        hour: 'numeric',
                        minute: '2-digit',
                        meridiem: 'short'
                    },
                    navLinks: true,
                    header:
                    {
                        left: 'prev,next today addEventButton',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                    },
                    footer:
                    {
                        left: '',
                        center: '',
                        right: ''
                    },
                    customButtons:
                    {
                        addEventButton:
                        {
                            text: '+',
                            click: function()
                            {
                                var dateStr = prompt('Enter a date in YYYY-MM-DD format');
                                var date = new Date(dateStr + 'T00:00:00'); // will be in local time

                                if (!isNaN(date.valueOf()))
                                { // valid?
                                    calendar.addEvent(
                                    {
                                        title: 'dynamic event',
                                        start: date,
                                        allDay: true
                                    });
                                    alert('Great. Now, update your database...');
                                }
                                else
                                {
                                    alert('Invalid date.');
                                }
                            }
                        }
                    },
                    //height: 700,
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    views:
                    {
                        sevenDays:
                        {
                            type: 'agenda',
                            buttonText: '7 Days',
                            visibleRange: function(currentDate)
                            {
                                return {
                                    start: currentDate.clone().subtract(2, 'days'),
                                    end: currentDate.clone().add(5, 'days'),
                                };
                            },
                            duration:
                            {
                                days: 7
                            },
                            dateIncrement:
                            {
                                days: 1
                            },
                        },
                    },
                    events: [
                    {
                        title: 'All Day Event',
                        start: YM + '-01',
                        description: 'This is a test description', //this is currently bugged: https://github.com/fullcalendar/fullcalendar/issues/1795
                        className: "border-warning bg-warning text-dark"
                    },
                    {
                        title: 'Reporting',
                        start: YM + '-14T13:30:00',
                        end: YM + '-14',
                        className: "bg-white border-primary text-primary"
                    },
                    {
                        title: 'Company Trip',
                        start: YM + '-02',
                        end: YM + '-03',
                        className: "bg-primary border-primary text-white"
                    },
                    {
                        title: 'NextGen Expo 2019 - Product Release',
                        start: YM + '-03',
                        end: YM + '-05',
                        className: "bg-info border-info text-white"
                    },
                    {
                        title: 'Dinner',
                        start: YM + '-12',
                        end: YM + '-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: YM + '-09T16:00:00',
                        className: "bg-danger border-danger text-white"
                    },
                    {
                        id: 1000,
                        title: 'Repeating Event',
                        start: YM + '-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: YESTERDAY,
                        end: TOMORROW,
                        className: "bg-success border-success text-white"
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T10:30:00',
                        end: TODAY + 'T12:30:00',
                        className: "bg-primary text-white border-primary"
                    },
                    {
                        title: 'Lunch',
                        start: TODAY + 'T12:00:00',
                        className: "bg-info border-info"
                    },
                    {
                        title: 'Meeting',
                        start: TODAY + 'T14:30:00',
                        className: "bg-warning text-dark border-warning"
                    },
                    {
                        title: 'Happy Hour',
                        start: TODAY + 'T17:30:00',
                        className: "bg-success border-success text-white"
                    },
                    {
                        title: 'Dinner',
                        start: TODAY + 'T20:00:00',
                        className: "bg-danger border-danger text-white"
                    },
                    {
                        title: 'Birthday Party',
                        start: TOMORROW + 'T07:00:00',
                        className: "bg-primary text-white border-primary text-white"
                    },
                    {
                        title: 'Gotbootstrap Meeting',
                        url: 'http://gotbootstrap.com/',
                        start: YM + '-28',
                        className: "bg-info border-info text-white"
                    }],
                    /*eventClick:  function(info) {
                        $('#calendarModal .modal-title .js-event-title').text(info.event.title);
                        $('#calendarModal .js-event-description').text(info.event.description);
                        $('#calendarModal .js-event-url').attr('href',info.event.url);
                        $('#calendarModal').modal();
                        console.log(info.event.className);
                        console.log(info.event.title);
                        console.log(info.event.description);
                        console.log(info.event.url);
                    },*/
                    /*viewRender: function(view) {
                        localStorage.setItem('calendarDefaultView',view.name);
                        $('.fc-toolbar .btn-primary').removeClass('btn-primary').addClass('btn-outline-secondary');
                    },*/

                });

                calendar.render();
            });

        </script>
    </body>
</html>
