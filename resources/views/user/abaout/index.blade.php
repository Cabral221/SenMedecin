@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')
<!-- Premiere section -->
<div class="box-shadow section-index container">
   <section class="about">
	   <div class="about_left">
		   <div class="logo">
			   <img src="{{ asset('user/img/axxu_ombre.png') }}" alt="" srcset="">
			</div>
	   </div>
	   <div class="about_right">
			<h2 class="">Titre De La Page</h2>
			<div class="about_right_body">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nemo nam commodi aliquid minima ratione nihil, praesentium delectus rem, dolorum cupiditate pariatur debitis temporibus iusto eveniet reiciendis repellat ea laborum.</p>
			<p class="contact">
				<a href="{{ route('contact.index') }}" class=" btn-primary">Contactez Nous</a>
			</p>
			</div>
	   </div>
   </section>
<!-- fin de la premier section -->

<!-- Deuxieme section -->
   <section class=" container about_card">
   		<div class="about_card_logo">
		   <div class="logo">
			   <img src="{{ asset('user/img/g1.jpg') }}" alt="" srcset="">
			</div>
	   </div>
	   <div class="about_card_body">
		   <h4 class="title">Rendez-Vous Prenatale</h4>
		   	<p class="p1">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odit dolor ad hic praesentium ipsa tenetur excepturi perferendis molestiae. Cum, facere? Similique sint optio eum, rerum molestias corporis inventore ipsum?
			</p>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non earum deleniti, voluptate neque eveniet quas voluptatum inventore dolores sapiente necessitatibus et quod tempora a, cupiditate corrupti reprehenderit aliquam ut?
			</p>
	   </div>
   </section>
<!-- fin de la deuxieme section -->


<!-- Deuxieme section -->
<section class=" container about_card">
   		<div class="about_card_logo">
		   <div class="logo">
			   <img src="{{ asset('user/img/vac1.jpeg') }}" alt="" srcset="">
			</div>
	   </div>
	   <div class="about_card_body">
		   <h4 class="title">Vaccination </h4>
		   	<p class="p1">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odit dolor ad hic praesentium ipsa tenetur excepturi perferendis molestiae. Cum, facere? Similique sint optio eum, rerum molestias corporis inventore ipsum?
			</p>
			<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non earum deleniti, voluptate neque eveniet quas voluptatum inventore dolores sapiente necessitatibus et quod tempora a, cupiditate corrupti reprehenderit aliquam ut?
			</p>
	   </div>
   </section>
</div>
<!-- fin de la deuxieme section -->







@endsection