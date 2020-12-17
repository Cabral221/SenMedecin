@extends('user.layouts.app')

@section('main-content')
<!-- Premiere section -->
<section class="container">

	<div class="login-body">
			<div class="login-header">
				<img src="{{ asset('user/img/admin2.jpg') }}" alt="">	
				<p>
					<span class="text-bold text-primary"> Connexion Des Administrateurs </span>
				</p>
			</div>
			<div class="form-group">
				<form action="{{ route('admin.login') }}" method="post" class="box">
					@csrf
					<p class="contour_input">
						<i class="fa fa-envelope icon"></i>
						<input class="form-control" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Votre Adresse E-mail">
					<div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
					</p>

					<p class="contour_input">
						<i class="fa fa-key icon"></i>
						<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" id="" placeholder="Mot de passe">
					<div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
					</p>

					<p>  
						<input name="remember" class="@error('remember') is-invalid @enderror" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} id="remember" type="checkbox"> 
						<label for="remember"> Se Souvenir de Moi </label>
					</p>
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