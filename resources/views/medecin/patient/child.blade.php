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
            <li class="breadcrumb-item active" aria-current="page">enfants</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="card-title">Gestion des enfants</h4>
            </div>
            <div>
                <a href="{{ route('medecin.patients.childs.create', $patient) }}" class="btn btn-success">Ajouter un enfant</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Détails</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patient->childrens as $child)
                    <tr>
                        <td>{{ $child->fullName }}</td>
                        <td>{{ $child->birthday->locale('fr_FR')->isoFormat('LL') }}</td>
                        <td>
                            <a href="{{ route('medecin.patients.childs.show', [$patient, $child]) }}" class="btn btn-xs btn-primary">Voir le calendrier PEV</a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-child-{{$child->id}}"><i class="mdi mdi-circle-edit-outline"></i></button>

                            @include('medecin.partials.childModal',[
                                'patient' => $patient,
                                'children' => $child
                            ])

                            <a href="{{ route('medecin.patients.childs.destroy', [$patient, $child]) }}" class="btn btn-xs btn-danger" onclick="event.preventDefault();if(confirm('Étes-vous sûr de vouloir supprimer cet enregistrement ?')){document.getElementById('child-delete-{{$child->id}}').submit();}"><i class="mdi mdi-delete"></i></a>
                            <form action="{{ route('medecin.patients.childs.destroy', ['patient' => $patient,'children' => $child]) }}" method="post" id="child-delete-{{$child->id}}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                    </tr>
                @endforeach
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection