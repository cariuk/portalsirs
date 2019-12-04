<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ENV("APP_NAME")}} | LOGIN</title>
    <base href="{{asset('/')}}">
    <!-- Global stylesheets -->
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">-->
    <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    {{--<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    {{--<!-- /core JS files -->--}}
    <script type="text/javascript" src="{{asset('assets/js/plugins/ui/nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/pnotify.min.js')}}"></script>
    {{--<!-- Theme JS files -->--}}
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/general.js')}}?_{{time()}}"></script>
    <!-- /theme JS files -->
</head>
<body class="layout-boxed">
<!-- Page container -->
<div class="page-container login-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content">
                <!-- Simple login form -->
            @yield('content')
            <!-- Footer -->
                <div class="footer text-black">
                    © {{date("Y")}}. <span class="text-success">SIRS PRO</span> With <span class="text-success">Laravel {{\Illuminate\Support\Facades\App::version()}}</span>
                </div>
                <!-- /footer -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
</body>
</html>
