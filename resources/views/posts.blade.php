

@extends('layouts.main')


@section('container')
<h1>posts</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach

@endsection