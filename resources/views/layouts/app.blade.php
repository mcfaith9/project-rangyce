<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/rlogo.png')}}">
    <title>rangyCE</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/plugins/bootstrap/css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/plugins/bootstrap-select/css/bootstrap-select.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/node-waves/waves.cs')}}s" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/sweetalert/sweetalert.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/animate-css/animate.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/morrisjs/morris.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('global/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/plugins/light-gallery/css/lightgallery.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/css/form-lable-float.css')}}" type="text/css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('global/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('global/css/materialize.css')}}" type="text/css" rel="stylesheet" type="text/css" >
    <link href="{{asset('global/css/themes/all-themes.css')}}" type="text/css" rel="stylesheet">
    <style type="text/css">
    .bg-img {
        background-image: url("{{asset('images/widescreen_desktop_wallpaper_art_dsc00754.jpg')}}");
        height: 100%; 
        width: 100%;
        position: fixed;
    }
    /*Scroll*/
    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #c5c5c5;
    }
    ::-webkit-scrollbar
    {
        width: 3px;
        background-color: #c5c5c5;
    }
    ::-webkit-scrollbar-thumb
    {   
        border-radius: 10px;
        background-color: #f1ca2e;
    }    
    .d-inline-grid { display: inline-grid!important; }
    .border-none { border: 0; }
    .border-rad-none { border-radius: 0!important; }
    .lh-7{line-height: 7px;}
    .pull-left{float: left;}
    .pull-right{float: right;}
    .p-absolute{position: absolute;}
    .p-relative{position: relative;}
    .w-100{width: 100%!important}
    .cursor-pointer{cursor: pointer;}
    .p-5px{padding: 5px!important;}
    </style>
</head>
<body class="theme-light-blue">
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JS -->    
    {{-- <script src="{{asset('global/plugins/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{asset('global/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('global/plugins/bootstrap/js/bootstrap.js')}}"></script>    
    <script src="{{asset('global/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('global/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('global/plugins/node-waves/waves.js')}}"></script>
    <script src="{{asset('global/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <script src="{{asset('global/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('global/plugins/morrisjs/morris.js')}}"></script>
    <script src="{{asset('global/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
    <script src="{{asset('global/plugins/chartjs/Chart.bundle.js')}}"></script>
    <script src="{{asset('global/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('global/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>     
    <!-- Custom Js -->
    <script src="{{asset('global/js/admin.js')}}"></script>
    <script src="{{asset('global/js/pages/ui/modals.js')}}"></script>
    <script src="{{asset('global/js/demo.js')}}"></script>
    <script src="{{asset('global/js/helpers.js')}}"></script>
    <script src="{{asset('global/js/pages/widgets/infobox/infobox-5.js')}}"></script>   
</body>
</html>
