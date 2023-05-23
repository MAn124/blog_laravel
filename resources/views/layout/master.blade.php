<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>{{config('app.name')}} | Dashboard</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
    <!-- PLUGINS STYLES-->
    <link href="{{asset('css/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">
    <!-- THEME STYLES-->
    <link href="{{asset('css/main.min.css')}}" rel="stylesheet">
    <!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar has-animation">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('layout.navbar')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('layout.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            
            <!-- END PAGE CONTENT-->
        @include('layout.footer')
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
   
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop" style="display: none;">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>




<div class="jvectormap-tip" style="display: none; left: 336.859px; top: 920.5px;">Ethiopia</div>
</body>