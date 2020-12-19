@extends('layouts.admin.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Aujourd'hui
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Aujourd'hui</li>
            </ul>
        </nav>
    </div>

    <div class="card card-outline-primary mb-4">
        <div class="card-body">
            <h4 class="card-title">Rendez-vous du jours</h4>
            @if(count($appointments) > 0)
                <div class="row">
                    @foreach($appointments as $appointDay)
                        <div class="col-md-6 p-2 card card-outline-primary rounded-md">
                            <span>{{ $appointDay->date->locale('fr_FR')->calendar() }}</span><br>
                            <span>Type : {{ $appointDay->type() }}</span><br>
                            <span>{{ $appointDay->description }}</span>
                            <hr>
                            <span class="d-flex justify-content-between">
                            <span>
                            Avec : <a href="{{ route('medecin.patients.show',$appointDay->patient) }}">{{ $appointDay->patient->fullName }}</a>
                            </span>
                            <span>
                                <a href="#" class="btn btn-primary btn-xs">Détails</a>
                            </span>
                        </span>

                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
