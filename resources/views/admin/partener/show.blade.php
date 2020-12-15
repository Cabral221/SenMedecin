@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> {{ $partener->name }}
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.parteners.index') }}">Partenaires</a></li>
            <li class="breadcrumb-item active" aria-current="page">Détails</li>
        </ul>
    </nav>
</div>
<div>
    <a href="{{ route('admin.parteners.edit', $partener) }}" class="btn btn-gradient-warning"><i class="mdi mdi-tooltip-edit"></i> Modifier les informations</a>
    
    <a href="{{ route('admin.parteners.destroy', $partener) }}" class="btn btn-gradient-danger" onclick="event.preventDefault();if(confirm('êtes-vous sûr de vouloir supprimer ce partenaire ? ')){document.getElementById('form-delete-partener').submit();}"><i class="mdi mdi-delete"></i> Supprimer</a>
    <form action="{{ route('admin.parteners.destroy', $partener) }}" method="post" id="form-delete-partener" class="d-none">
        @csrf
        @method('DELETE')
    </form>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Informations générales</h4>
                <img src="/uploads/parteners/{{ $partener->image }}" alt="image" class="mw-100 w-100 rounded">
                <p>Dénommé: <span class="text-primary">{{ $partener->name }} </span></p>
                <p>Email: <span class="text-primary">{{ $partener->email }} </span></p>
                <p>Phone: <span class="text-primary">{{ $partener->phone }}</span></p>
                <p>Address: <span class="text-primary">{{ $partener->address }}</span></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Responsable</h4>
                <p>Nom: <span class="text-primary">{{ $responsable->first_name . ' ' . $responsable->last_name }}</span></p>
                <p>Email: <span class="text-primary">{{ $responsable->email }}</span></p>
                <p>Téléphone: <span class="text-primary">{{ $responsable->phone }}</span></p>
                <hr>
                <h4 class="card-title">Services</h4>
                @foreach ($partener->services as $service)
                    <span class="btn btn-outline-info btn-sm">{{ $service->libele }}</span>
                @endforeach
                <hr>
                <h4 class="card-title">Statistiques</h4>
                <p>Nombres de médecins : <span class="badge badge-gradient-primary"><b>{{ $medecins->count() }}</b></span></p>
                <p>Nombres de patients : <span class="badge badge-gradient-success"><b>{{ $nbPatients }}</b></span></p>
            </div>
        </div>
    </div>
</div>
@endsection