@extends('layouts.main')
@section('container')
<h1 class-"mb-5">Post Category: {{ $category }}</h1>
@foreach ($posts as $post)
    <article class="mb-5">
    <h2>
        <a href="/postingan/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <h5>By : {{ $post->author }}</h5>
        <h4>Kategori : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h4>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection

