@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> {{ $medecin->first_name .' '. $medecin->last_name }} 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('responsable.medecins.index') }}">Agents</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ul>
    </nav>
</div>
<div class="card card-outline-primary mb-4">
    <div class="card-body">
        <a href="{{ route('responsable.medecins.edit', $medecin) }}" class="btn btn-gradient-warning"><i class="mdi mdi-tooltip-edit"></i> Modifier les informations</a>

        <a href="{{ route('responsable.medecins.destroy', $medecin) }}" class="btn btn-gradient-danger" onclick="event.preventDefault();if(confirm('êtes-vous sûr de vouloir supprimer cet agent ? ')){document.getElementById('form-delete-medecin').submit();}"><i class="mdi mdi-delete"></i> Supprimer</a>
        <form action="{{ route('responsable.medecins.destroy', $medecin) }}" method="post" id="form-delete-medecin" class="d-none">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>
<div class="card card-outline-primary mb-4">
    <div class="card-body">
        
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Profil</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Prénom </th>
                            <td>{{ $medecin->first_name }}</td>
                        </tr>
                        <tr>
                            <th>Nom </th>
                            <td>{{ $medecin->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Adresse Email </th>
                            <td>{{ $medecin->email }}</td>
                        </tr>
                        <tr>
                            <th>Téléphone </th>
                            <td><span class="text-primary">(+221) </span>{{ $medecin->phone }}</td>
                        </tr>
                        <tr>
                            <th>Service </th>
                            <td><span class="badge badge-primary">{{ $medecin->service->libele }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h4 class="card-title">Statistiques</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nombre de patients </th>
                            <td><span class="badge badge-primary">{{ $medecin->patients->count() }}</span></td>
                        </tr>
                        <tr>
                            <th>Rendez-vous </th>
                            <td><span class="badge badge-primary">{{ $medecin->appointments->count() }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <div class="card card-outline-primary">
        <div class="card-body">
            <h4 class="card-title">Calendrier des Rendez-vous</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->date->calendar() }}</td>
                            <td>{{ $appointment->type() }}</td>
                            <td>{{ $appointment->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
