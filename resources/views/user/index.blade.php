@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')
<!-- Premiere section -->
<div class="box-shadow section-index container">
<section class="home_top">
	<div class="card-left">
		<h1 class=""><span class="section-title">AXXU</span>NJUREL</h1>
		<div class="card-body">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
			</div>
	   </div>
	   <div class="card-right">
		   <div class="logo">
			   <img src="{{ asset('user/img/1.png') }}" alt="" srcset="">
			</div>
	   </div>
   </section>
<!-- fin de la premier section -->

<!-- Deuxieme section -->
   <section class=" container top-section">
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
<section class=" container top-section">
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
<section class="container partener top-section">
	<div class="card-partener">
			<img src="{{ asset('user/img/2.png') }}" alt="" srcset="">
		<div class="card-footer-partener">
			<span class="title-partener">Partenaire</span>
		</div>
	</div>
</section>
<!-- fin de la Section des partenaire -->
</div>
@section('footersection')

@show

@endsection