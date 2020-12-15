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
        <h4>Gestion des enfants</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Détails</th>
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
                    </tr>
                @endforeach
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection