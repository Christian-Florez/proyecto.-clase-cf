<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda - Productos</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --primary-light: #3b82f6;
            --success: #10b981;
            --danger: #ef4444;
            --muted: #6b7280;
            --light-bg: #f9fafb;
            --border: #e5e7eb;
            --card-bg: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: #1f2937;
        }

        .page {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
        }

        header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: #ffffff;
            padding: 40px 30px;
            border-radius: 16px;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.2);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            flex: 1;
            min-width: 250px;
        }

        .header-controls {
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            flex: 1;
            min-width: 250px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-box input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.6);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
        }

        .btn-create {
            padding: 12px 24px;
            background: #ffffff;
            color: var(--primary);
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            white-space: nowrap;
        }

        .btn-create:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 28px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(37, 99, 235, 0.15);
            border-color: var(--primary-light);
        }

        .card .media {
            height: 200px;
            background: linear-gradient(135deg, #f3f6fb, #e0e7ff);
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        .card .media::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card:hover .media::after {
            opacity: 1;
        }

        .card .body {
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .title {
            font-weight: 700;
            margin: 0 0 10px;
            font-size: 1.1rem;
            color: #1f2937;
            line-height: 1.3;
        }

        .desc {
            color: var(--muted);
            font-size: 0.9rem;
            margin-bottom: 16px;
            flex: 1;
            line-height: 1.5;
        }

        .price-row {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 10px;
            margin-top: auto;
            padding-top: 12px;
            border-top: 1px solid var(--border);
        }

        .price-info {
            flex: 1;
        }

        .price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 4px;
        }

        .meta {
            font-size: 0.8rem;
            color: var(--muted);
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: var(--primary);
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            white-space: nowrap;
            border: 2px solid var(--primary);
        }

        .btn:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: scale(1.05);
        }

        footer {
            margin-top: 60px;
            padding-top: 30px;
            border-top: 2px solid var(--border);
            color: var(--muted);
            font-size: 0.9rem;
            text-align: center;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--muted);
        }

        .empty-state h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #374151;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            header h1 {
                width: 100%;
            }

            .header-controls {
                width: 100%;
                flex-direction: column;
            }

            .search-box {
                min-width: 100%;
            }

            .grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .page {
                padding: 15px;
            }

            header {
                padding: 25px 20px;
            }

            header h1 {
                font-size: 1.5rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<div class="page">
    <header>
        <h1>🖥️ Tienda de Computadoras</h1>
        <div class="header-controls">
            <div class="search-box">
                <input placeholder="Buscar productos..." aria-label="Buscar productos">
            </div>
            <a href="{{ url('/prodcut/create') }}" class="btn-create">➕ Nuevo Producto</a>
        </div>
    </header>

    <section class="grid">
        @php
            // Use productos desde la base si existen, sino mostrar ejemplos
            $items = $productList ?? [];
            if (count($items) == 0) {
                $items = [
                    (object)[ 'id'=>1, 'name'=>'Laptop Pro 15"', 'price'=>'1299.00', 'description'=>'Procesador i7, 16GB RAM, SSD 512GB', 'image'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=1200&q=80' ],
                    (object)[ 'id'=>2, 'name'=>'Gaming Desktop X', 'price'=>'1899.00', 'description'=>'RTX 4070, 32GB RAM, 1TB NVMe', 'image'=>'https://images.unsplash.com/photo-1606112219348-204d7d8b94ee?w=1200&q=80' ],
                    (object)[ 'id'=>3, 'name'=>'Ultrabook Slim', 'price'=>'999.00', 'description'=>'Intel i5, 8GB RAM, SSD 256GB', 'image'=>'https://images.unsplash.com/photo-1518779578993-ec3579fee39f?w=1200&q=80' ],
                    (object)[ 'id'=>4, 'name'=>'Workstation Z', 'price'=>'2399.00', 'description'=>'Threadripper, 64GB RAM, 2TB NVMe', 'image'=>'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200&q=80' ],
                ];
            }
        @endphp

        @forelse($items as $prod)
            <article class="card">
                <div class="media" style="background-image:url('{{ $prod->image ?? ($prod->image_url ?? 'https://via.placeholder.com/600x400?text=PC') }}')" role="img" aria-label="Imagen de {{ $prod->name }}"></div>
                <div class="body">
                    <h2 class="title">{{ $prod->name ?? $prod->nombre ?? 'Producto' }}</h2>
                    <div class="desc">{{ $prod->description ?? $prod->descripcion ?? 'Descripción breve del producto.' }}</div>
                    <div class="price-row">
                        <div class="price-info">
                            <div class="price">€{{ number_format((float)($prod->price ?? 0), 2) }}</div>
                            <div class="meta">✓ En stock • Envío 24-48h</div>
                        </div>
                        <a class="btn" href="{{ url('/product/'.$prod->id) }}">Ver</a>
                    </div>
                </div>
            </article>
        @empty
            <div class="empty-state" style="grid-column: 1 / -1;">
                <h2>📦 No hay productos</h2>
                <p>Crea el primer producto para empezar</p>
            </div>
        @endforelse

    </section>

    <footer>
        © {{ date('Y') }} Tienda de Computadoras — Plataforma profesional de venta online
    </footer>
</div>
</body>
</html>
