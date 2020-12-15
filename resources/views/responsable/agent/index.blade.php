@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Mes agents 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Agents</li>
        </ul>
    </nav>
</div>
<div class="row">
    <div class="col-md stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h2 class="font-weight-normal mb-3">Total Agents <i class="mdi mdi-chart-line mdi-24px float-right"></i></h2>
                <h3 class="mb-3">{{ count($medecins) }}</h3>
                {{-- <p>{{ $service->partOfMedFor() }} % de vos agents</p> --}}
                {{-- <p>{{ $service->partOfMedFor() }} % de vos agents</p> --}}
            </div>
        </div>
    </div>
</div>

{{-- <div class="alert"> --}}
    {{-- <a href="{{ route('responsable.agents.create') }}" class="btn btn-info btn-block">Ajouter un agent</a> --}}
{{-- </div> --}}
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <span><h4 class="card-title float-left">Liste des agents</h4></span>
            <span><a href="{{ route('responsable.medecins.create') }}" class="btn btn-gradient-info float-right">Ajouter un agent</a></span>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Nombre de patients</th>
                        <th>% Part des patients</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medecins as $medecin)
                        <tr>
                            <td>{{ $medecin->first_name .' '. $medecin->last_name }}</td>
                            <td>{{ $medecin->email }}</td>
                            <td>{{ $medecin->service->libele }}</td>
                            <td>{{ $medecin->patients->count() }}</td>
                            <td>{{ $medecin->partOfPatient() }} %</td>
                            <td>
                                <a class="btn btn-sm btn-warning text-dark" href="{{ route('responsable.medecins.show', $medecin) }}"><i class="mdi mdi-eye"></i></a>
                                
                                <a class="btn btn-sm btn-gradient-danger text-dark" href="{{ route('responsable.medecins.destroy', $medecin) }}" onclick="event.preventDefault();if(confirm('Étes vous sûr de vouloir supprimer cet agent ?')){document.getElementById('form-delete-agent-{{$medecin->id}}').submit();}"><i class="mdi mdi-delete"></i></a>
                                <form action="{{ route('responsable.medecins.destroy', $medecin) }}" method="POST" id="form-delete-agent-{{$medecin->id}}" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection