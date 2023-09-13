@extends('layouts.main')
@section('container')
    <div class="container my-3">
        <article>
            <h2>{{ $post->title }}</h2>
            {{ $post->content }}
        </article>
        <a href="/" class="btn btn-dark my-3">Back</a>
    </div>
@endsection
