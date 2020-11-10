@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as ADMIN!') }}
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Blog</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
