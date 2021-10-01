@extends('user.layouts.app')

@section('head')
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

	{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.css') }}" /> --}}
	<style>
		.slider{
			max-width: 100%;
			display: flex;
			/* flex-direction:space-between; */
		}
		.slider .card{
			width:70%;
			flex: 1;
			background-color:#fff;
		}
		.slider .card .img img{ 
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.slider .card .content{
			padding: 10px 20px;
			text-align:center;
		}
		.card .content .title{
			font-size: 25;
			font-weight: 600;
		}
		.card .content .subtitle{
			font-size: 20;
			font-weight: 600;
			color: #e74c3c;
			line-height: 20px;
		}
		.card .content .btn{
			display: block;
			text-align: left;
			margin: 10px 0;
		}
		.card .content .btn button{
			width:100%;
			border:1px solid rgba(255, 102, 171, 0.867);
			background-color:rgba(255, 102, 171, 0.867);
			color:#fff;
			outline: none;
			font-size: 17px;
			padding: 5px 8px;
			border-radius: 5px;
			cursor: pointer;
			transition: .2s;
		}
		.card .content .btn button:hover{
			transform: scale(.9);
			background-color:transparent;
			color:rgba(255, 102, 171, 0.867);
		}
	</style>
@endsection

@section('main-content')
	<!-- Premiere section -->
	<div class="box-shadow section-index container">
		<section class="home_top">
			<div class="card-left">
				<h1 class="">AXXU NJUREL</h1>
				<div class="card-body">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
				</div>
			</div>
			<div class="card-right">
				<div class="logo">
					<img src="{{ asset('user/img/axxu_ombre.png') }}" alt="" srcset="">
				</div>
			</div>
		</section>
		<!-- fin de la premier section -->
		
		<!-- Deuxieme section -->
		<section class=" container home_section  top-section">
			<div class="card-left-section2">
				<div class="logo">
					<img src="{{ asset('user/img/pre1.jpeg') }}" alt="" srcset="">
				</div>
			</div>
			<div class="card-right-section2">
				<h5>Rendez-Vous Prenatale </h5>
				<div class="card-body">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odit dolor ad hic praesentium ipsa tenetur excepturi perferendis molestiae. Cum, facere? Similique sint optio eum, rerum molestias corporis inventore ipsum?
					</p>
					<p class="">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non earum deleniti, voluptate neque eveniet quas voluptatum inventore dolores sapiente necessitatibus et quod tempora a, cupiditate corrupti reprehenderit aliquam ut?
					</p>
				</div>
			</div>
		</section>
		<!-- fin de la deuxieme section -->
		
		
		<!-- Troisieme section -->
		<section class=" container home_section top-section">
			<div class="card-left-section3">
				<h5>Vaccination  </h5>
				<div class="card-body">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odit dolor ad hic praesentium ipsa tenetur excepturi perferendis molestiae. Cum, facere? Similique sint optio eum, rerum molestias corporis inventore ipsum?
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odit dolor ad hic praesentium ipsa tenetur excepturi perferendis molestiae. Cum, facere? Similique sint optio eum, rerum molestias corporis inventore ipsum?
					</p>
				</div>
			</div>
			<div class="card-right-section3">
				<div class="logo">
					<img src="{{ asset('user/img/vacc1.jpg') }}" alt="" srcset="">
				</div>
			</div>
		</section>
		<!-- fin de la troisieme section -->
		
		<!-- Section des partenaire -->
		<section class="container partener_slider top-section">
			<div class="slider owl-carousel">
				
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card">
					<div class="img">
						<img src="{{asset('user/img/img.jpg')}}" alt="">
						<div class="content">
							<div class="title">Fann</div>
							<div class="subtitle">Hopital Regional</div>
							<div class="btn">
								<button class="">Visitez</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- fin de la Section des partenaire -->
	</div>
@endsection

@section('js')
	{{-- <script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/owl.js') }}"></script>
	<script src="{{ asset('user/js/script.js') }}"></script> --}}
	<script src="{{ asset('user/js/script.js') }}"></script>
	{{-- <script>
		$('.slider').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,//200ms = 2s;
			autoplayHoverPause:true
		});
	</script> --}}
@endsection