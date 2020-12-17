@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Patients 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patients</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">edition</li>
        </ul>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title"></h4>
        @include('medecin.partials.patientForm', [
            'route' => route('medecin.patients.update', $patient),
            'method' => 'PUT',
            'patient' => $patient,
            'formType' => 'update',
        ]);
    </div>
</div>
@endsection