@extends('layouts.admin.app')

@section('content')
@error ('medecin_service')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Mes agents 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('responsable.medecins.index') }}">Agents</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ul>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ajouter un agents</h4>
        
        @include('responsable.partials.medecinForm', [
            'formType'  => 'create',
            'medecin'  => $medecin,
            'route'     => route('responsable.medecins.store'),
            'method'    => 'POST',
        ])
    </div>
</div>
@endsection