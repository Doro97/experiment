<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>RMS | Receivables Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">  -->
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">

        
    </head>
    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}' >   


    <div class="wrapper">       
        @include('layouts.sidebar')
        <div class="content-page">
            <div class="content">
                @include('layouts.navbar')
            </div>
            <div class="container-fluid">
            @yield('content')
            </div>
        </div>              
    </div>

  

<!-- bundle -->
<script src="{{ asset('assets/js/vendor.min.js')}}"></script>
<script src="{{ asset('assets/js/app.min.js')}}"></script>

<!-- third party js -->
<script src="{{ asset('assets/js/vendor/apexcharts.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('assets/js/pages/demo.dashboard.js')}}"></script>
<!-- end demo js-->    

</body>    
          

</html>
