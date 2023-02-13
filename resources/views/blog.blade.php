@extends('layouts.main')

@include('partials.navbar')

@section('container')
    @foreach ($post as $p)
        <article class="mb-5">
            <a href="/blog/{{ $p['slug'] }}">
                <h2>{{ $p['title'] }}
            </a></h2>
            <h6>Author : {{ $p['author'] }}</h6>
            <p>{{ $p['body'] }}</p>
        </article>
    @endforeach
@endsection
