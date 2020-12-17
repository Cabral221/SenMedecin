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
            <li class="breadcrumb-item active" aria-current="page">Patient</li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total patients <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($patients) }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <span><h4 class="card-title float-left">Gestion des patients</h4></span>
            <span><a href="{{ route('medecin.patients.create') }}" class="btn btn-gradient-success float-right">Ajouter une patiente</a></span>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>phone</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->first_name }}</td>
                        <td>{{ $patient->last_name }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>
                            @if ($patient->is_active)
                                <span class="badge badge-success badge-pill">Active</span>
                            @else
                                <span class="badge badge-danger badge-pill">pas activer</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('medecin.patients.show', $patient) }}" class="btn btn-sm btn-gradient-primary">Détails</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection