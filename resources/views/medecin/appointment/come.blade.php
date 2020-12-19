@extends('layouts.admin.app')

@section('css')

@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Rendez-vous à venir
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Rendez-vous</li>
            </ul>
        </nav>
    </div>


    <div class="card card-outline-primary mb-4">
        <div class="card-body">
            <h4 class="card-title">Rendez-vous prochain</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Patiente</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->date->locale('fr_FR')->calendar(   ) }}</td>
                        <td>{{ $appointment->patient->fullName }}</td>
                        <td>{{ $appointment->type() }}</td>
                        <td>{{ $appointment->description }}</td>
                        <td>
                            <a href="{{ route('medecin.appointments.show', $appointment) }}" class="btn btn-primary btn-xs">Détails</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
