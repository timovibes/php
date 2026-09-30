@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p class="meta">
            By {{ $post->user->name }} on {{ $post->created_at->format('M j, Y') }}
        </p>

        <div>{!! nl2br(e($post->body)) !!}</div>
    </article>

    @can('update', $post)
        <p>
            <a href="/posts/{{ $post->id }}/edit">Edit</a>
        </p>
    @endcan

    @can('delete', $post)
        <form method="POST" action="/posts/{{ $post->id }}" onsubmit="return confirm('Delete this post?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endcan

    <p><a href="/posts">Back to all posts</a></p>
@endsection