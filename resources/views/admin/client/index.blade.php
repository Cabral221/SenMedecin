@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Clients 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Clients</li>
        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Clients <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($patients) }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Clients Actifs <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($patientsActive) }}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-primary card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Clients inactifs <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($patientsNotActive) }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="card card-outline-primary">
    <div class="card-body">
        <h4 class="card-title">Gestion des clients</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->referential }}</td>
                        <td>{{ $patient->fullName }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                            @if ($patient->is_active) <span class="badge badge-success">Active</span>
                            @else <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            @if ($patient->is_active) 
                                <a href="{{ route('admin.clients.deactive', $patient) }}" class="btn btn-outline-danger btn-xs" onclick="event.preventDefault();document.getElementById('form-patient-deactive-{{$patient->id}}').submit();">Désactiver</a>
                                <form action="{{ route('admin.clients.deactive', $patient) }}" method="post" class="d-none" id="form-patient-deactive-{{$patient->id}}">
                                    @csrf
                                    @method('POST')
                                </form>
                            @else 
                                <a href="{{ route('admin.clients.active', $patient) }}" class="btn btn-outline-success btn-xs" onclick="event.preventDefault();document.getElementById('form-patient-active-{{$patient->id}}').submit();">Activer</a>
                                <form action="{{ route('admin.clients.active', $patient) }}" method="post" class="d-none" id="form-patient-active-{{$patient->id}}">
                                    @csrf
                                    @method('POST')
                                </form>
                            @endif

                            <a href="#" class="btn btn-xs btn-outline-danger" onclick="event.preventDefault();if(confirm('Êtes vous sûr de vouloir supprimer ce client ?')){document.getElementById('form-delete-client-{{$patient->id}}').submit();}"><i class="mdi mdi-delete"></i></a>
                            <form action="{{ route('admin.clients.destroy', $patient) }}" method="post" class="d-none" id="form-delete-client-{{$patient->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection