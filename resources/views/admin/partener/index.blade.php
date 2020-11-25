@extends('layouts.admin.app')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Partenaires 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Partenaires</li>
        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Partenaires <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($parteners) }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <span><h4 class="card-title float-left">Gestion des Partenaires</h4></span>
            <span><a href="{{ route('admin.parteners.create') }}" class="btn btn-gradient-success float-right">Ajouter un partenaire</a></span>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Responsable</th>
                        <th>Activités / mois</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parteners as $partener)
                        <tr>
                            <td>{{ $partener->name }}</td>
                            <td>{{ $partener->responsable->first_name }} {{ $partener->responsable->last_name }}</td>
                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td><a class="btn btn-sm btn-gradient-primary" href="{{ route('admin.parteners.show', $partener) }}">Détails</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection