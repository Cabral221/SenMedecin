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
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patients</a></li>
            <li class="breadcrumb-item">{{ $patient->fullName }}</li>
            <li class="breadcrumb-item active" aria-current="page">Détails</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <span class="card-title mb-2">{{ $patient->fullName }} 
                    @if (!$patient->is_active) 
                        <span class="badge badge-pill badge-danger">Ce compte n'est pas activé</span>                    
                    @else
                        @if ($patient->is_pregnancy)
                            <span class="badge badge-pill badge-warning">En état </span>
                            <span class="badge">depuis 
                                {{ \Carbon\Carbon::parse($patient->pregnancies->last()->date)->diff(\Carbon\Carbon::now())->format('%m mois et %d jours') }}
                            </span>
                        @endif
                    @endif
                </span>
                <br>
                <div class="border border-primary px-3 py-2 mt-2">
                    <h5 class="mt-1">Rendez-vous à venir</h5>
                    @if ($patient->is_active && $patient->come() != null)
                        <span>{{ $patient->come()->date->locale('fr_FR')->isoFormat('LL') }}</span>
                        <br>
                        <span>Type : {{ $patient->come()->type() }}</span>
                        <br>
                        <span>Description : {{ $patient->come()->description }}</span>
                    @endif
                </div>
            </div>
            <div>
                <span>Identifiant Unique</span>
                <span>
                    <h4 class="font-weight-bold bg-gradient-primary px-2 py-2 text-white d-inline">{{ $patient->referential }}</h4>
                </span>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-7">
        <div class="card card-outline-primary">
            <div class="card-body">
                <h4 class="card-title">Identification</h4>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Prénom </span>
                    <span class="text-primary">{{ $patient->first_name }}</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Nom </span>
                    <span class="text-primary">{{ $patient->last_name }}</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Age </span>
                    <span class="text-primary">{{ $patient->birthday->age }} ans</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Adresse </span>
                    <span class="text-primary">{{ $patient->address }}</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Phone </span>
                    <span class="text-primary">{{ $patient->phone }}</span>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="">Email </span>
                    <span class="text-primary">{{ $patient->email }}</span>
                </div>
                <hr>
                <div class="mb-1">
                    <span class="badge badge-pill badge-primary">{{ $patient->pregnancies->count() }} éme</span>
                    <span>grossesse (s) enregister</span>
                </div>
                <div class="mb-1">
                    <span class="badge badge-pill badge-primary">{{ $patient->childrens->count() }}</span>
                    <span>enfants (s) enregistrer</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-outline-primary">
            <div class="card-body">
                <h5 class="card-title">Opérations</h5>
                @if ($patient->is_active)
                    @if (!$patient->is_pregnancy)
                        <a href="{{ route('medecin.pregnacies.create', $patient) }}" class="btn btn-sm btn-block btn-primary mb-2">Ajouter une grossesse</a>
                    @endif
                    <a href="{{ route('medecin.patients.calendar', $patient) }}" class="btn btn-sm btn-block btn-primary mb-2">Voir Calendrier</a>
                    <a href="#" class="btn btn-sm btn-block btn-primary mb-2">Fixer un rendez-vous</a>    
                    <a href="#" class="btn btn-sm btn-block btn-primary mb-2">Consulter VAT</a>    
                    <a href="{{ route('medecin.patients.childs', $patient) }}" class="btn btn-sm btn-block btn-primary mb-2">Gestion des enfants - ({{ count($patient->childrens) }})</a>    
                @endif
                <a href="{{ route('medecin.patients.edit', $patient) }}" class="btn btn-sm btn-block btn-outline-warning mb-2"><i class="mdi mdi-content-save-edit"></i> Modifier les informations</a>
                <a href="#" class="btn btn-sm btn-block btn-outline-danger mb-2" onclick="event.preventDefault();if(confirm('Étes vous sûr de vouloir supprimer cette patiente ?')){document.getElementById('form-delete-patient').submit();}"><i class="mdi mdi-delete"></i> Supprimer la patiente</a>
                <form action="{{ route('medecin.patients.destroy', $patient) }}" method="post" class="d-none" id="form-delete-patient">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@if ($patient->is_active)
    <hr>
    <div class="card card-outline-primary">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div><h4 class="card-title">Antécedents médical</h4></div>
                <div>
                    @if ($patient->antecedent != null)
                        <a href="{{ route('medecin.patients.antecedent.edit', [ 'patient' => $patient, 'antecedent' => $patient->antecedent ]) }}" class="btn btn-warning btn-sm">Modifer</a>
                    @else
                        <a href="{{ route('medecin.patients.antecedent.create', $patient) }}" class="btn btn-warning btn-sm">Ajouter</a>
                    @endif
                </div>
            </div>
            @if ($antecedent != null)
                <h5 class="font-weight-bold">Pére</h5>
                <p>{{ $antecedent->father }}</p>
                <hr>
                <h5 class="font-weight-bold">Mére</h5>
                <p>{{ $antecedent->mother }}</p>
                <hr>
                <h5 class="font-weight-bold">Famille</h5>
                <p>{{ $antecedent->family }}</p>
                <hr>
                <h5 class="font-weight-bold">Autres examens</h5>
                <p>{{ $antecedent->other_exam }}</p>
                <hr>
                <h5 class="font-weight-bold">Traitement en cours</h5>
                <p>{{ $antecedent->treating }}</p>
            @else
                <p>Aucun antécedent noté</p>
            @endif
            
        </div>
    </div>
@endif

@endsection
