@extends('layouts.auth.app', ['title' => 'Se connecter'])

@section('main-content')
<div class="main-signin-wrapper error-wrapper">
	<div class="main-card-signin d-md-flex wd-100p">
		<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
			<div class="my-auto authentication-pages">
				<div>
					<img src="{{ asset('assets/img/brand/logo-axxunjurel-horizontal.svg') }}" class=" m-0 mb-4" alt="logo">
                    <h5 class="mb-4">Restez en alerte SMS à l'approche de vos rendez-vous</h5>
                    <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a href="{{ route('index') }}" class="btn btn-danger">Page d'accueil</a>
				</div>
			</div>
		</div>
		<div class="p-5 wd-md-50p">
			<div class="main-signin-header">
				<h2>Section de Patientes</h2>
				<h4>Veuillez vous connecter pour continuer</h4>
				<form action="{{ route('patient.login') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre email" value="{{ old('email') }}" autocomplete="email" autofocus required>
						@error('email')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrez votre mot de passe" required>
						@error('password')
							<span class="invalid-feedback">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group">
						<label class="ckbox">
							<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<span>Se Souvenir de Moi</span>
						</label>
					</div>
					<button class="btn btn-main-primary btn-block">Se connecter</button>
				</form>
			</div>
			<div class="main-signin-footer mt-3 mg-t-5">
				<p><a href="{{ route('patient.password.request') }}">J'ai oublié mon mot de passe?</a></p>
			</div>
		</div>
	</div>
</div>
@endsection