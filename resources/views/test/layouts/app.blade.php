<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="AxxuNjurel - restez avertit à l'approche de vos rendez-vous">
	<meta name="Author" content="Abdourahmane Diop">
	<meta name="Keywords"
		content="#" />

	<!-- Title -->
	<title> Dashfox - Laravel Admin & Dashboard Template </title>

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon" />

	@include('test.layouts.includes.base-css')

</head>

<body class="main-body light-theme app sidebar-mini active leftmenu-color">
    {{-- For Theme --}}
	@include('test.layouts.includes.switcher')

    {{-- Loader --}}
    @include('test.layouts.includes.loader')

    {{-- Main Sidebar left --}}
    @include('test.layouts.sidebar')
	
    {{-- Main content --}}
    @include('test.layouts.content')
	{{-- End Main content --}}

    {{-- Main Sidebar Right for profile --}}
    @include('test.layouts.includes.sidebar-right')
	
    {{-- Footer --}}
    @include('test.layouts.footer')
    
	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    @include('test.layouts.includes.base-js')

</body>

</html>