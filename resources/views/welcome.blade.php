
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Livros - Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
                <i class="bi bi-book me-2 fs-4"></i>
                Painel de Livros
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Livros</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <div class="bg-primary text-white py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Bem-vindo à Sua Biblioteca de Livros</h1>
            <p class="lead mb-4">Organize e gerencie sua coleção de livros com facilidade</p>
            <a href="{{ route('books.index') }}" class="btn btn-light btn-lg px-5 fw-semibold">Navegar pela Coleção</a>
        </div>
    </div>

    <!-- Livros Recentes -->
    <div class="container py-5">
        <h2 class="mb-4">Livros Adicionados Recentemente</h2>
        <div class="row g-4">
            <!-- Card de Livro 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://placehold.co/400x300/6c757d/ffffff?text=Capa+do+Livro" alt="Capa do Livro" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">O Grande Gatsby</h5>
                        <p class="text-muted mb-2">F. Scott Fitzgerald</p>
                        <p class="small text-muted mb-3">Publicado: 1925</p>
                        <a href="book-view.html" class="card-link">Ver Detalhes →</a>
                    </div>
                </div>
            </div>

            <!-- Card de Livro 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://placehold.co/400x300/6c757d/ffffff?text=Capa+do+Livro" alt="Capa do Livro" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">O Apanhador no Campo de Centeio</h5>
                        <p class="text-muted mb-2">Harper Lee</p>
                        <p class="small text-muted mb-3">Publicado: 1960</p>
                        <a href="book-view.html" class="card-link">Ver Detalhes →</a>
                    </div>
                </div>
            </div>

            <!-- Card de Livro 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://placehold.co/400x300/6c757d/ffffff?text=Capa+do+Livro" alt="Capa do Livro" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">1984</h5>
                        <p class="text-muted mb-2">George Orwell</p>
                        <p class="small text-muted mb-3">Publicado: 1949</p>
                        <a href="book-view.html" class="card-link">Ver Detalhes →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
