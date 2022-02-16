<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Author" content="Abdourahmane Diop">
	<meta name="Keywords"
	content="axxu njurel, santé, sénégal" />
	{{-- Description dinamique de la page --}}
	<meta name="Description" content="AxxuNjurel - restez avertit à l'approche de vos rendez-vous">
	<!-- Dynamic Title Page -->
	<title>
		{{ isset($title) 
		? $title . ' - '. config('app.name') 
		: config('app.name') . ' - restez avertit à l\'approche de vos rendez-vous' }}
	</title>

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/img/brand/favicon-axxunjurel.svg') }}" type="image/x-icon" />

	@include('layouts.includes.base-css')
	@yield('own-css')
</head>

<body class="main-body light-theme app sidebar-mini active leftmenu-light">
    {{-- For Theme --}}
	{{-- @include('layouts.includes.switcher') --}}

    {{-- Loader --}}
    @include('layouts.includes.loader')

    {{-- Main Sidebar left --}}
    @include('layouts.sidebar')
	
   
	<!-- main-content -->
	<div class="main-content app-content">

		<!-- main-header -->
		@include('layouts.header')
		<!-- /main-header -->
		
		<!-- container -->
		<div class="container-fluid mg-t-20">

			@yield('breadcrumb')

			@include('layouts.includes.alerts')

			@yield('main-content')

		</div>
		<!-- Container closed -->

	</div>
	<!-- main-content closed -->

    {{-- Main Sidebar Right for profile --}}
    {{-- @include('layouts.includes.sidebar-right') --}}
	
    {{-- Footer --}}
    @include('layouts.footer')
    
	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    @include('layouts.includes.base-js')
	@yield('plugin-js')
	@yield('own-js')
</body>

</html>