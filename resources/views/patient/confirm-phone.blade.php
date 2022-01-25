@extends('layouts.auth.app', ['title' => 'Validation de votre numéro de téléphone'])

@section('main-content')
<div class="my-auto page page-h">
    <div class="main-signin-wrapper error-wrapper">
        <div class="main-card-signin d-md-flex wd-100p">
            <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
                <div class="my-auto authentication-pages">
                    <div>
                        <img src="{{ asset('assets/img/brand/logo-axxunjurel-horizontal.svg') }}" class=" m-0 mb-4" alt="logo">
                        <h5 class="mb-4">Restez en alerte SMS à l'approche de vos rendez-vous</h5>
                        <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a href="index.html" class="btn btn-danger">Page d'accueil</a>
                    </div>
                </div>
            </div>
            <div class="p-5 wd-md-50p">
                <div class="main-signin-header">
                    <h2>Validation du numéro de téléphone</h2>
                    <h4>Lors de la création de votre compte par votre specialiste, un code à 6 chiffre a été envoyé à votre numéro : <span class="text-primary">{{ auth('patient')->user()->phoneHidden() }}</span></h4>
                    <form action="{{ route('patient.confirm') }}" method="GET">
                        @csrf										
                        <div class="form-group">
                            <label class="form-label" for="code">Code <span class="tx-danger">*</span></label>
                            <input name="code" id="code"
                                type="text" 
                                class="form-control @error('code') is-invalid @enderror" 
                                placeholder="Enter le code de validation"
                                value="{{ old('code') }}"
                                required>
                            @error('code')
                                <div class="invalid-feedback"> {{$message}} </div>
                            @enderror
                        </div>
                        <button class="btn btn-main-primary btn-block">Valider</button>
                    </form>
                </div>
                <div class="main-signin-footer mt-3 mg-t-5">
                    <p><a href="{{ route('patient.confirm.resend') }}">Recevoir un nouveau code !</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection