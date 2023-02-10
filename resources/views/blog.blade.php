@extends('layouts.main')

@include('partials.navbar')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/blogs/{{ $post['slug'] }}">
                <h2>{{ $post['title'] }}
            </a></h2>
            <h6>Author : {{ $post['author'] }}</h6>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
