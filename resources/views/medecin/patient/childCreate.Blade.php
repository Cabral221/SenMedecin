@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-arrow-collapse-all"></i>
    </span> Enfants
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.index') }}">Patientes</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.show', $patient) }}">{{ $patient->fullName }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('medecin.patients.childs', $patient) }}">Enfants</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <h4 class="card-title">Ajouter un enfant</h4>
        <form action="{{ route('medecin.patients.childs.store', $patient) }}" method="post" class="form">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="children_first_name">Prénom</label>
                        <input type="text" name="children_first_name" id="children_first_name" class="form-control @error('children_first_name') is-invalid @enderror" value="{{ old('children_first_name') }}">
                        @error('children_first_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                        <label for="children_last_name">Nom</label>
                        <input type="text" name="children_last_name" id="children_last_name" class="form-control @error('children_last_name') is-invalid @enderror" value="{{ old('children_last_name') }}">
                        @error('children_last_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="children_birthday">Date de naissance</label>
                        <input type="date" name="children_birthday" id="children_birthday" class="form-control @error('children_birthday') is_invalid @enderror" value="{{ old('children_birthday') }}">
                        @error('children_birthday')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sexe</label>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="children_genre" id="children_masc1" value="Masculin"> Masculin </label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="children_genre" id="children_fem2" value="Féminin"> feminin </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection