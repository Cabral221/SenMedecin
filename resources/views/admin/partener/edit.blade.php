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
            <li class="breadcrumb-item" ><a href="{{ route('admin.parteners.index') }}">Partenaires</a></li>
            <li class="breadcrumb-item" ><a href="{{ route('admin.parteners.show', $partener) }}">Détails</a></li>
            <li class="breadcrumb-item active" aria-current="page">Modification</li>
        </ul>
    </nav>
</div>

@include('admin.partials.partenerForm', [
        'formType'  => 'edit',
        'partener'  => $partener,
        'route'     => route('admin.parteners.update', $partener),
        'method'    => 'PATCH',
    ])
@endsection

@section('js')
<script src="{{ asset('backend/assets/js/file-upload.js') }}"></script>    
@endsection