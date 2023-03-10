@extends('layouts.main')

@include('partials.navbar')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        <p>
            {{ $post->body }}
        </p>

    </article>

    <a href="/blog">back</a>
@endsection
