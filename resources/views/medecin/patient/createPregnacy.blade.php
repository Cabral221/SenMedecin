@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Patients 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patients</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter un état de grossesse</li>
        </ul>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Ajouter un état de grossesse</h4>
        <form action="{{ route('medecin.pregnacies.store', $patient) }}" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="pregancy_date">Date de grossesse</label>
                <input type="date" name="pregnacy_date" id="pregnacy_date" class="form-control">
            </div>
            <h4>Programmer les rendez-vous CPN</h4>
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label for="pregnacy_cpn1">CPN1 + Eco</label>
                        <input type="date" name="pregnacy_cpn1" id="pregnacy_cpn1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pregnacy_cpn2">CPN2 + Eco</label>
                        <input type="date" name="pregnacy_cpn2" id="pregnacy_cpn2" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pregnacy_cpn3">CPN3 + Eco</label>
                        <input type="date" name="pregnacy_cpn3" id="pregnacy_cpn3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pregnacy_cpn4">CPN4 + Eco</label>
                        <input type="date" name="pregnacy_cpn4" id="pregnacy_cpn4" class="form-control">
                    </div>
                </div>
            </div>
            <h4 class="card-title">Date prévisionnelle d'accouchement</h4>
            <div class="form-group">
                <label for="pregnacy_accouchement">Date d'accouchement</label>
                <input type="date" name="pregnacy_accouchement" id="pregnacy_accouchement" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
            </div>    
        </form>
    </div>
</div>

@endsection