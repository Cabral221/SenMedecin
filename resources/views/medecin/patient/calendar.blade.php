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
            <li class="breadcrumb-item active" aria-current="page">Calendrier</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <h4 class="card-title">Calendrier des rendez-vous</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Avec</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->date->locale('fr_FR')->format('d M Y') }}</td>
                    <td>{{ $appointment->type() }}</td>
                    <td>{{ $appointment->description }}</td>
                    <td>
                        <span class="d-block">Avec : {{ $appointment->medecin->fullName }}</span>
                        <span class="d-block">À : {{ $appointment->medecin->responsable->partener->name }}</span>
                    </td>
                    <td>
                        @if ($appointment->passed) <span class="badge badge-success">Passé</span>
                        @else   <span class="badge badge-outline-success">A venir</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection