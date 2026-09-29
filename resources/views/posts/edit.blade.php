@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
    <h1>Edit post</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="body">Body</label>
        <textarea id="body" name="body" rows="6">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Save changes</button>
    </form>
@endsection