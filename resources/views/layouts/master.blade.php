<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | My Portfolio</title>
</head>
<body>

    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 My Portfolio</p>
    </footer>

</body>
</html>
