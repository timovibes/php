<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mini Blog')</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 700px; margin: 2rem auto; padding: 0 1rem; color: #222; }
        nav { display: flex; gap: 1rem; align-items: center; }
        nav form { margin: 0; margin-left: auto; }
        article { border-bottom: 1px solid #ddd; padding: 1rem 0; }
        .meta { color: #666; font-size: 0.9rem; }
        .error { color: #b00020; font-size: 0.9rem; }
        input, textarea { width: 100%; padding: 0.5rem; margin: 0.25rem 0 1rem; box-sizing: border-box; }
        input[type="checkbox"] { width: auto; }
    </style>
</head>
<body>
    <nav>
        <a href="/posts">All posts</a>

        @auth
            <a href="/posts/create">New post</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <span class="meta">{{ auth()->user()->name }}</span>
                <button type="submit">Log out</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}">Log in</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </nav>
    <hr>

    @yield('content')
</body>
</html>