@extends('user.layouts.app')

@section('main-content')
<!-- Premiere section -->
<section class="container">

	<div class="login-body">
			<div class="login-header">
				<img src="{{ asset('user/img/responsable.jpeg') }}" alt="">	
				<p>
					<span class="text-bold text-primary"> Connexion Des Partenaires </span>
				</p>
			</div>
			<div class="form-group">
				<form action="{{ route('responsable.login') }}" method="post" class="box">
					@csrf
					<p class="contour_input">
						<i class="fa fa-envelope icon"></i>
						<input class="form-control" type="email"  name="email" id="" placeholder="Votre Adresse E-mail">
					</p>

					<p class="contour_input">
						<i class="fa fa-key icon"></i>
						<input class="form-control" type="password" name="password" id="" placeholder="Mot de passe">
					</p>

					<p>  
						<input name="checkbox" id="checkbox" type="checkbox"> 
						<label for="checkbox"> Se Souvenir de Moi </label></p>
					<p>
						<input type="submit" class="submit" value="Se Connecter">
					</p>
					<p class="forgot_password">	<span> <a href="#"> J'ai oublie mon mot de passe </a> </span></p>
				</form>
			</div>
	
	</div>
</section>
<!-- fin de la premier section -->


@endsection