@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title  }}</h2>
    <h5>By : <a href="#" class="text-decoration-none" > {{ $post->user->name }} </a></h5>
<h4>Kategori : <a href="#" class="text-decoration-none">{{ $post->category->name }}</a></h4>
{!! $post->body !!}
</article>

<a href="{{ route('posts.index') }}"> Back </a>
@endsection
