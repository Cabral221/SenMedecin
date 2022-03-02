@extends('layouts.auth.app', ['title' =>  __('Reset Password') ])

@section('main-content')
<div class="my-auto page page-h">
    <!-- Main-forget-wrapper -->
    <div class="my-auto page">
        <div class="main-signin-wrapper error-wrapper">
            <div class="main-card-signin forgot-password d-md-flex wd-100p">
                <div class="wd-md-50p  page-signin-style p-md-5 p-4 text-white d-none d-md-block ">
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
                        <h2>Mot de passe oublié!</h2>
                        <h4>SVP entrez votre email</h4>
                        <form method="POST" action="{{ route('patient.password.email') }}">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrez votre email" required>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-main-primary btn-block">Send</button>
                        </form>
                    </div>
                    <div class="main-signup-footer mg-t-10">
                        <p>Si vous vous en souvenez, <a href="{{ route('patient.login') }}"> Retourner</a> à la page de connexion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main-forget-wrapper -->
</div>
@endsection
