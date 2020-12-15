@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Services 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ul>
    </nav>
</div>

<div class="row">
    @foreach ($services as $service)
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">{{ $service->libele }} <i class="mdi mdi-chart-line mdi-24px float-right"></i></h2>
                    <h4 class="mb-3">Utilisation</h4>
                    <p>{{ $service->partOfMedFor() }} % de vos agents</p>
                    <p></p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection