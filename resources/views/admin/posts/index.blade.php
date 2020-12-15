@extends('layouts.app', ['title' => 'Blog | Admin'])

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Admin Blog Index</h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-primary">Créér un Article</a>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">
                            <h5>{{ $post->subTitle }}</h5>
                        </div>
                        <div class="card-footer justify-content-center">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-outline-warning">Edit</a>
                            <a href="{{ route('admin.posts.destroy', $post) }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('post-form-delete-{{$post->id}}').submit();">Del</a>
                            <form id="{{ 'post-form-delete-'.$post->id }}" action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display: none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection