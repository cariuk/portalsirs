<!DOCTYPE HTML>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ENV("APP_NAME")}}</title>
    <!-- Global stylesheets -->
    <link href="{{asset('assets/css/font/font.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/medical-icon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/extras/animate.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/datetimepicker.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/js/plugins/pickers/clockpicker/dist/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/js/plugins/alert/jquery.alerts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/js/plugins/editors/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/scrollbar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/js/plugins/contextmenu/jquery.contextmenu.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/general.css')}}" rel="stylesheet" type="text/css">
    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/core.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/effects.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/ui/dialogextend/jquery.dialogextend.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pagination/twbs-pagination/jquery.twbsPagination.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/ui/jquery.nicescroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/floatThead/jquery.floatThead.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/clipboard/dist/clipboard.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/plugins/editors/js-lib/jquery.signature.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/editors/js-lib/jquery.ui.touch-punch.min.js')}}"></script>
    <!--[if IE]>
    <script type="text/javascript" src="{{asset('assets/js/plugins/editors/js-lib/excanvas.js')}}"></script>
    <![endif]-->

    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/bootbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/pnotify.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/media/fancybox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/alert/jquery.alerts.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/inputs/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/validation/jquery-validate.bootstrap-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/inputs/autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/inputs/formatter.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/anytime.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/clockpicker/dist/bootstrap-clockpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/legacy.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/datetimepicker/datetimepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/datetimepicker/locale_id.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/trees/fancytree_all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/trees/fancytree_childcounter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/treegrid/jquery.treegrid.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/media/fancybox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/contextmenu/BootstrapMenu.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/contextmenu/jquery.contextmenu.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/layout_fixed_custom.js')}}"></script>
    {{-- Custom Script --}}
    <script type="text/javascript" src="{{asset('assets/js/general.js')}}?_{{time()}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/digitalarsip.js')}}?_{{time()}}"></script>
    {{-- END Custom Script --}}
</head>
<body class="navbar-top sidebar-xs" style="overflow:hidden;">
<!-- Main navbar -->
<div class="navbar navbar-default navbar-fixed-top header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand text-success text-center"><i class="icon-file-zip"></i></a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>
    <div class="navbar-collapse collapse" id="navbar-mobile">
        <div class="col-sm-3 col-lg-3 text-center" style="margin-top:4px;">
            <img src="{{route('images','Logo_Digital_Arsip_.png')}}" class="img-sm" style="width: 60% !important;" alt="Logo">
        </div>
        <div class="col-sm-5 col-lg-5 no-padding" style="margin-top:6px;">
            {{--<div class="input-group has-feedback no-margin">--}}
                {{--<input name="pencarianPegawai" autocomplete="off" autocorrect="off" autocapitalize="on"--}}
                       {{--spellcheck="false"--}}
                       {{--type="text" class="form-control input-xs" placeholder="Cari Pegawai dgn Memasukkan NIP / Nama">--}}
                {{--<span class="input-group-btn"><button id="main-pencarian" class="btn btn-xs btn-default" type="button"--}}
                                    {{--data-toggle="tooltip" title="Nomor RM Atau Nama Pegawai"><i--}}
                                        {{--class="icon-search4 text-size-base"></i></button></span>--}}
            {{--</div>--}}
            {{--<script>--}}
                {{--function cariPegawai() {--}}
                    {{--var val = $("input[name=pencarianPegawai]").val(),--}}
                        {{--tabnav = $("#left-icon-tab-dashboard-" + val);--}}
                    {{--$("input[name=pencarianPegawai]").val("");--}}
                    {{--if ($.isNumeric(val)) {--}}
                        {{--if (tabnav.length == 1)--}}
                            {{--$("#tab-dashboard-" + val).click();--}}
                        {{--else {--}}
                            {{--getPegawai("{{route('pegawai.data.detail')}}", {--}}
                                {{--pegawai: val,--}}
                                {{--nip:1--}}
                            {{--});--}}
                        {{--}--}}
                    {{--} else {--}}
                        {{--$.ajax({--}}
                            {{--url: "{{route('pegawai.data')}}",--}}
                            {{--data: {params: val},--}}
                            {{--type: "GET",--}}
                            {{--dataType: "json",--}}
                            {{--success: function (response) {--}}
                                {{--if (response.status == 200) {--}}
                                    {{--createDialog("list-Pegawai", response.subcontent, false);--}}
                                {{--}--}}
                            {{--},--}}
                            {{--beforeSend: function () {--}}
                                {{--generalSpinner($(".content"), true);--}}
                            {{--},--}}
                            {{--complete: function () {--}}
                                {{--generalSpinner($(".content"), false);--}}
                            {{--},--}}
                            {{--error: function (xhr, thrownError, err) {--}}
                                {{--if (xhr.responseJSON.status == 422) {--}}
                                    {{--generalNotify('', xhr.responseJSON.message, 'danger');--}}
                                {{--}--}}
                            {{--}--}}
                        {{--});--}}
                    {{--}--}}
                {{--}--}}

                {{--$("input[name=pencarianPegawai]").keypress(function (event) {--}}
                    {{--if (event.which == 13) {--}}
                        {{--event.preventDefault();--}}
                        {{--cariPegawai();--}}
                    {{--}--}}
                {{--});--}}
                {{--$("#main-pencarian").click(function () {--}}
                    {{--cariPegawai();--}}
                {{--});--}}
            {{--</script>--}}
        </div>
        <ul class="nav navbar-nav no-margin">
            {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">--}}
                    {{--<i class="icon-git-compare"></i>--}}
                    {{--<span class="visible-xs-inline-block position-right">Aktivitas</span>--}}
                    {{--<span class="badge bg-warning-400">0</span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-content">--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span>{{\Illuminate\Support\Facades\Auth::user()->username}}</span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i>
                            <span>Keluar</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <script id="{{time()."app"}}">
        initDefault("{{time()."app"}}");
    </script>
</div>
<!-- /main navbar -->
<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="{{route('images','Logo_Digital_Arsip.png')}}"
                                                                class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold"> </span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-qrcode text-size-small"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->
                <!-- Main navigation -->
            @include('layouts.sidebar')
            <!-- /main navigation -->
            </div>
        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area -->
            <div class="content no-padding">
                <!--nav tabs-->
            @include("layouts.navtabs")
            <!--nav tabs-->
                <!-- Footer -->
                <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
                    <ul class="nav navbar-nav no-border visible-xs-block">
                        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i
                                        class="icon-circle-up2"></i></a></li>
                    </ul>
                    <div class="navbar-collapse collapse" id="navbar-second">
                        <div class="navbar-text">
                            © 2018. <span class="text-success">{{ENV("APP_NAME")}}</span>
                        </div>
                    </div>
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
