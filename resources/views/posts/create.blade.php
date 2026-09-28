@extends('layouts.app')

@section('title', 'New post')

@section('content')
    <h1>New post</h1>

    <form method="POST" action="/posts">
        @csrf

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="body">Body</label>
        <textarea id="body" name="body" rows="6">{{ old('body') }}</textarea>
        @error('body')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Publish</button>
    </form>
@endsection