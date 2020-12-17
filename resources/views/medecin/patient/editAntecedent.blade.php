@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Patientes 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patients</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modifier un antécedent</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title">Antécedents</h4>
                <h5>Modifer les antécedents pour cette patiente</h5>
            </div>
            <div>
                <span class="d-block mb-2"> Patiente: {{ $patient->fullName }}</span>
                <span class="d-block "> ID: <span class="text-primary">{{ $patient->referential }}</span></span>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card card-outline-primary">
    <div class="card-body">
        @include('medecin.partials.antecedentForm',[
            'action' => route('medecin.patients.antecedent.update', [ 'patient' => $patient, 'antecedent' => $antecedent]),
            'method' => 'PUT',
            'formType' => 'update',
            'patient' => $patient,
            'antecedent' => $antecedent,
        ])
    </div>
</div>

@endsection