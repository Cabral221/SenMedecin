@extends('layouts.admin.app')

@section('content')
@if ($errors->count() > 0)
    <div class="alert alert-danger">Veuillez entrer les données correctement !</div>
@endif
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Partenaires 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.parteners.index') }}">Partenaires</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ul>
    </nav>
</div>

    @include('admin.partials.partenerForm', [
        'formType'  => 'create',
        'partener'  => $partener,
        'route'     => route('admin.parteners.store'),
        'method'    => 'POST',
    ])
@endsection

@section('js')
<script src="{{ asset('backend/assets/js/file-upload.js') }}"></script>    
@endsection