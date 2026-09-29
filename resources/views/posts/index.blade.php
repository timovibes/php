@extends('layouts.app')

@section('title', 'All posts')

@section('content')
    <h1>All posts</h1>

    @forelse ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="meta">
                By {{ $post->user->name }} on {{ $post->created_at->format('M j, Y') }}
            </p>
        </article>
    @empty
        <p>No posts yet. <a href="/posts/create">Write the first one.</a></p>
    @endforelse
@endsection