@extends('layouts.app', ['title' => 'Blog'])

@section('content')
    <div class="container">
        <h1 class="text-center">Blog Index</h1>
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-header"><a href="{{ route('posts.show', $post) }}"><h2>{{ $post->title }}</h2></a></div>
                    <div class="card-body">
                        <h5>{{ $post->subTitle }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection