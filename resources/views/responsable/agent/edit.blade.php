@extends('layouts.admin.app')

@section('content')
@error ('medecin_service')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> {{ $medecin->first_name. ' ' . $medecin->last_name }} 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('responsable.medecins.index') }}">Agents</a></li>
            <li class="breadcrumb-item"><a href="{{ route('responsable.medecins.show', $medecin) }}">{{ $medecin->first_name. ' ' . $medecin->last_name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Édition</li>
        </ul>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Modifier les informations</h4>
        
        @include('responsable.partials.medecinForm', [
            'formType'  => 'update',
            'medecin'  => $medecin,
            'route'     => route('responsable.medecins.update', $medecin),
            'method'    => 'PUT',
        ])
    </div>
</div>
@endsection