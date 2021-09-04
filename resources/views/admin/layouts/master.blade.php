<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 12:42:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href=" {{asset('dash/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('dash/fonts/flaticon.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/animate.min.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/select2.min.css')}}">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="{{asset('dash/css/datepicker.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('dash/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('dash/js/modernizr-3.6.0.min.js')}}"></script>
    
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
       @include('admin.layouts.navbar')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
         @include('admin.layouts.sidebar')
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
              @yield('content')
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
              @include('admin.layouts.footer')
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src=" {{asset('dash/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src=" {{asset('dash/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src=" {{asset('dash/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src=" {{asset('dash/js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src=" {{asset('dash/js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <script src=" {{asset('dash/js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src=" {{asset('dash/js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src=" {{asset('dash/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <script src=" {{asset('dash/js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <script src=" {{asset('dash/js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src=" {{asset('dash/js/main.js')}}"></script>
   

  
    <!-- Select 2 Js -->
    <script src="  {{asset('dash/js/select2.min.js')}}"></script>
    <!-- Date Picker Js -->
    <script src="  {{asset('dash/js/datepicker.min.js')}}"></script>
    <!-- Smoothscroll Js -->
    <script src="  {{asset('dash/js/jquery.smoothscroll.min.html')}}"></script>
    

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 12:42:06 GMT -->
</html>