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
                <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patientes</a></li>
                <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('medecin.patients.childs', $patient) }}">Enfants</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $children->fullName }}</li>
            </ul>
        </nav>
    </div>
@endsection
