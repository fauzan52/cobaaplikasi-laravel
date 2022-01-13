@extends('layouts.main')
@section('container')
<h1 class="mb-3">Postingan</h1>

@foreach ($posts as $post)
    <article class="mb-5 border-button pb-2">
    <h2>
        {{-- <a href="/postingan/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a> --}}
        <a href="{{ route('posts.show',['post' => $post->slug]) }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <h5>By : <a href="/authors/{{ $post->user->id }}" class="text-decoration-none" > {{ $post->user->name }} </a></h5>
    {{-- <p>Kategori : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> --}}
    <p>Kategori : <a href="#" class="text-decoration-none">#</a></p>
    <p>{{ $post->excerpt }}</p>

    {{-- <a href="/postingan/{{ $post->slug }}" class="text-decoration-none">Read more ... </a> --}}
    <a href="#" class="text-decoration-none">Read more ... </a>
</article>
@endforeach
@endsection

