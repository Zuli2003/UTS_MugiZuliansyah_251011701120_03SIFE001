<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Kotak Mainan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #FFFBF0; }
        .navbar { background: #2F6FED; }
        .hero { background: #FFC93C; border-bottom: 6px solid #23262F; }
        .toy-card { border: 3px solid #23262F; border-radius: 1.25rem; overflow: hidden; background: #fff; }
        .toy-card img { aspect-ratio: 1/1; object-fit: cover; }
        .price { font-weight: 700; color: #FF5A4E; font-size: 1.15rem; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">Kotak Mainan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('toys.index') }}">Semua Mainan</a></li>
            </ul>
            <form class="d-flex" action="{{ route('toys.index') }}" method="GET">
                <input class="form-control me-2" type="search" name="q" placeholder="Cari mainan">
                <button class="btn btn-warning" type="submit">Cari</button>
            </form>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; {{ date('Y') }} Kotak Mainan
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>