@extends('layouts.auth.app')

@section('main-content')
<div class="my-auto page page-h">		
    <!-- main-reset-wrapper -->
    <div class="my-auto page page-h">
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
            <div class="sign-up-body wd-md-50p">
                <div class="main-signin-header">
                    <div class="">
                        <h2>Bon retour!</h2>
                        <h4 class="text-left">Réinitialisation de votre mot de passe</h4>
                        <form method="POST" action="{{ route('patient.password.update') }}">
                            @csrf
                            <div class="form-group text-left">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') ?? $email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre email" required disabled>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group text-left">
                                <label for="password">Nouveau Mot de Passe</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrer un nouveau mot de passe" required>
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group text-left">
                                <label for="password_confirmation">Confirmer mot de passe</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Enter your password" required>
                                @error('password_confirmation')
                                    <span class="invalid_feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn ripple btn-main-primary btn-block">Réinitialiser mon mot de passe</button>
                        </form>
                    </div>
                </div>
                <div class="main-signup-footer mg-t-10">
                    <p>Vous avez déjà un compte ? <a href="{{ route('patient.login') }}">Connectez vous</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-reset-wrapper -->
</div>
@endsection
