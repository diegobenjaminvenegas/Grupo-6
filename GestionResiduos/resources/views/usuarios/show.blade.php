<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Usuario</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="my-4">Detalle de Usuario</h1>
    <div class="card">
        <div class="card-header">
            {{ $usuario->nombre }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Email: {{ $usuario->email }}</h5>
            <p class="card-text">Rol: {{ $usuario->rol }}</p>
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
<!-- Enlace a Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
