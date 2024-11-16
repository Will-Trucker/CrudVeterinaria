<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')
</head>
<body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('mascotas.index') }}">Gestión de Mascotas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('duenos.index') }}">Dueños</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('veterinarios.index') }}">Veterinarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mascotas.index') }}">Mascotas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content  -->
    <div class="container mt-4">
        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>
