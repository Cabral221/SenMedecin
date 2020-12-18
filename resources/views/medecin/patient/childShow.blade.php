@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-arrow-collapse-all"></i>
    </span> {{ $children->fullName }}
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patientes</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.childs', $patient) }}">Enfants</a></li>
            <li class="breadcrumb-item active" aria-current="page">PEV</li>
        </ul>
    </nav>
</div>
<div class="card card-outline-primary">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title">Calendrier PEV</h4>
            </div>
            <div>
                <h4>Age : <span class="btn btn-sm btn-primary">{{ \Carbon\Carbon::parse($children->birthday)->diff(\Carbon\Carbon::now())->format('%y ans %m mois et %d jours') }}</span></h4>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Vaccin</th>
                    <th>État</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($children->appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->date->locale('fr_FR')->isoFormat('LL') }}</td>
                        <td>{{ $appointment->description }}</td>
                        <td>
                            @if ($appointment->passed) <span class="badge badge-success">Passé</span>
                            @else <span class="badge badge-outline-success">A venir</span>
                            @endif    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
