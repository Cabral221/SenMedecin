<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from laravel.spruko.com/dashfox/ltr/error404 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 14:36:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="AxxuNjurel - Désolé">
    <meta name="Author" content="Abdourahmane Diop">
    <meta name="Keywords" content="axxunjurel"/>
    
    <!-- Title -->
    <title> AxxuNjurel - @yield('title') </title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon-axxunjurel.svg') }}" type="image/x-icon"/>
    
    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
    
    <!-- Icons css -->
    <link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet">
    
    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    
    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">
    
    <!--- Dashboard-2 css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet"> 
    
    <!--- Color css-->
    <link id="theme" href="{{ asset('assets/css/colors/color.css') }}" rel="stylesheet">
    
    
    
    <!--- Internal Fontawesome css-->
    <link href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    <!---Ionicons css-->
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    
    <!---Internal Typicons css-->
    <link href="{{ asset('assets/plugins/typicons.font/typicons.css') }}" rel="stylesheet">
    
    <!---Internal Feather css-->
    <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">
    
    <!---Internal Falg-icons css-->
    <link href="{{ asset('assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    
    
    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    
    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    
</head>

<body class="main-body light-theme">
    
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
    
    <!-- main-signin-wrapper -->
    
    <div class="my-auto page page-h">
        
        
        <!-- Main-error-wrapper -->
        <div class="main-error-wrapper error-wrapper page page-h">
            <h1 class="">@yield('code')</h1>
            <h2> @yield('message')</h2>
            <h6>You may have mistyped the address or the page may have moved.</h6>
            <a class="btn btn-primary" href="{{ route('index') }}">Accueil</a>
        </div>
        <!-- /Main-error-wrapper -->
        
        
    </div>
    
    <!-- /main-signin-wrapper -->
    
    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    
    <!-- Bootstrap4 js-->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!-- Ionicons js -->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js')}}"></script>
    
    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    
    <!-- eva-icons js -->
    <script src="{{ asset('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>
    
    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>
    
    
    
    
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
</body>

<!-- Mirrored from laravel.spruko.com/dashfox/ltr/error404 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 14:36:48 GMT -->
</html>