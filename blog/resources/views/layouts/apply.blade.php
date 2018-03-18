<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>人事管理系统-云锐集团</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet" type="text/css"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{--<link href="{{ asset('global/fonts/Open_Sans_400_300_600_700_subset_all.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{ asset('global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    {{--<link href="{{ asset('global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset('global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset('global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>--}}
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    {{--<link href="{{ asset('admin/pages/css/tasks.css') }}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{ asset('global/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css"/>--}}
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{ asset('global/css/components-rounded.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/layout4/css/layout.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/layout4/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ asset('admin/layout4/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/layout4/css/themes/light.css') }}" rel="stylesheet" type="text/css" id="style_color"/>


    <script src="{{ asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<div class="page-container">
    <div class="page-content-wrapper">
        @yield('content')
    </div>
</div>
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('global/plugins/excanvas.min.js') }}"></script>
<![endif]-->

<script src="{{ asset('global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('global/plugins/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/daterangepicker.js') }}"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>--}}
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
{{--<script src="{{ asset('global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>--}}


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--<script src="{{ asset('global/scripts/metronic.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('admin/layout4/scripts/layout.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('admin/layout4/scripts/demo.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('admin/pages/scripts/index.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('admin/pages/scripts/tasks.js') }}" type="text/javascript"></script>--}}
{{--<script src="{{ asset('admin/pages/scripts/form-icheck.js') }}"></script>--}}
{{--<script src="{{ asset('admin/pages/scripts/search.js') }}"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
</html>

