@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')
<!-- Premiere section -->
<section class=" container section-login">
	<h1 class="title">Se Connecter</h1>
	<div class="login-body">
		<div class="login-left">
			<div class="form-group">
				<form action="#" method="post" class="box">
					<p>
						<input class="form-control" type="email" name="" id="" placeholder="Votre Adresse E-mail">
					</p>

					<p>
						<input class="form-control" type="password" name="" id="" placeholder="Mot de passe">
					</p>

					<p>
						<input type="submit" class="submit" value="Se Connecter">
					</p>
				</form>
			</div>
		</div>
		<div class="login-right">
			<div class="logo">
				<img src="{{ asset('user/img/1.png') }}" alt="" srcset="">
			</div>
		</div>
	</div>
   </section>
<!-- fin de la premier section -->


@endsection