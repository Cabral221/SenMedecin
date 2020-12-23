@extends('layouts.admin.app', ['title' => $titlePage])

@section('content')
    <div class="container">
        {{-- <div class="row"> --}}
            <div class="card">
                <form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="form">
                    <div class="card-header"><h1>{{$titlePage }}</h1></div>
                    <div class="card-body">
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <div class="form-check-inline">
                                <input type="checkbox" name="publish" id="publish" class="form-check-input " {{ $post->publish === 1 ? 'checked' : '' }}>
                                <label for="publish" class="form-check-label">Publier</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $post->title }}" />
                            @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subTitle">Sous titre</label>
                            <input type="text" name="subTitle" class="form-control @error('subTitle') is-invalid @enderror" value="{{ old('subTitle') ?? $post->subTitle }}" />
                            @error('subTitle')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Contenu</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10">
                                {{ old('content') ?? $post->content }}
                            </textarea>
                            @error('content')
                                <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        {{-- </div> --}}
    </div>
@endsection