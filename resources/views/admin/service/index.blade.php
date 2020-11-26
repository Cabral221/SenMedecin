@extends('layouts.admin.app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
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
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{ asset('backend/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Services <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                <h2 class="mb-5">{{ count($services) }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gestion des services</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Dénommé</th>
                            <th>Part d'utilisation <br> (Partenaires)</th>
                            <th>Part d'utilisation <br> (Médecins)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->libele }}</td>
                                <td>{{ $service->partOfPartener() }} %</td>
                                <td>??%</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal-service-{{$service->id}}" data-service-id=""><i class="mdi mdi-circle-edit-outline"></i></button>
                                    <a href="#" class="btn btn-sm btn-outline-danger" onclick="event.preventDefault();if(confirm('Êtes vous sûr de vouloir supprimer ce services ?')){document.getElementById('form-delete-service-{{$service->id}}').submit();}"><i class="mdi mdi-delete"></i></a>
                                    {{-- Start modal edit --}}
                                    @include('admin.partials.serviceEditModal', [
                                        'service' => $service
                                    ])
                                    {{-- End modal edit --}}
                                    {{-- Start form delete --}}
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="post" id="form-delete-service-{{$service->id}}" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    {{-- End form delete --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Créer un service</h4>
                <form action="{{ route('admin.services.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="service_libele">Libellé du service</label>
                        <input type="text" name="service_libele" class="form-control @error('service_libele') is-invalid @enderror" id="service_libele" placeholder="Libelle du service">
                        @error('service_libele')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>      
                    <button type="submit" class="btn btn-gradient-success btn-block btn-sm">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection