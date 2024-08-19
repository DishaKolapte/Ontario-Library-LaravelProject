
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Author & Book Management System')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Book Management System</h1>
    </header>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('authors.index') }}">Authors</a>
        <a href="{{ route('books.index') }}">Books</a>
        @auth
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a> |
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
