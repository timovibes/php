@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1>Register</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Confirm password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <button type="submit">Create account</button>
    </form>
@endsection