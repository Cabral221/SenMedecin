@extends('layouts.app', ['title' => $post->title])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header"><h1>{{ $post->title }}</h1></div>
                <div class="card-body">
                    <h3>{{ $post->subTitle }}</h3>
                    <div>{!! $post->content !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection