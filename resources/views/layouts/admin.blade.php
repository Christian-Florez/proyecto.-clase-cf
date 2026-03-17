<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel de Administración')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6fa; }
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: #fff;
        }
        .sidebar a { color: #fff; text-decoration: none; display: block; padding: 1rem; }
        .sidebar a.active, .sidebar a:hover { background: #495057; }
        .admin-header { background: #fff; border-bottom: 1px solid #dee2e6; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <h2 class="mt-4 mb-4 text-center">Admin</h2>
                    <a href="/admin" class="active">Dashboard</a>
                    <a href="/product/index">Productos</a>
                    <a href="/categories">Categorías</a>
                    <a href="/users">Usuarios</a>
                </div>
            </nav>
            <main class="col-md-10 ms-sm-auto px-md-4">
                <div class="admin-header py-3 mb-4">
                    <h1 class="h3">@yield('admin-title', 'Panel de Administración')</h1>
                </div>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
