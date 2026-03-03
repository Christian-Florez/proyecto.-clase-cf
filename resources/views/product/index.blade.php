<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda - Productos</title>
    <style>
        :root{--bg:#f4f7fb;--card:#fff;--accent:#0f172a;--muted:#6b7280;--primary:#2563eb}
        body{margin:0;font-family:Inter,ui-sans-serif,system-ui,Arial,Helvetica,sans-serif;background:linear-gradient(180deg,var(--bg),#eef2ff);color:var(--accent)}
        .page{max-width:1200px;margin:40px auto;padding:24px}
        header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
        h1{margin:0;font-size:1.6rem}
        .search{display:flex;gap:8px}
        .search input{padding:10px 12px;border-radius:8px;border:1px solid #e6e9ef;min-width:280px}
        .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:20px}
        .card{background:var(--card);border-radius:12px;box-shadow:0 6px 18px rgba(16,24,40,0.06);overflow:hidden;display:flex;flex-direction:column}
        .card .media{height:170px;background:#f3f6fb;background-size:cover;background-position:center}
        .card .body{padding:16px;flex:1;display:flex;flex-direction:column}
        .title{font-weight:600;margin:0 0 6px;font-size:1.05rem}
        .desc{color:var(--muted);font-size:0.95rem;margin-bottom:12px;flex:1}
        .price-row{display:flex;align-items:center;justify-content:space-between}
        .price{font-weight:700;color:var(--primary);font-size:1.05rem}
        .meta{font-size:0.85rem;color:var(--muted)}
        .btn{display:inline-block;padding:8px 12px;background:var(--primary);color:#fff;border-radius:8px;text-decoration:none}
        footer{margin-top:28px;color:var(--muted);font-size:0.9rem;text-align:center}
        @media (max-width:600px){.page{padding:12px}.search input{min-width:0}}
    </style>
</head>
<body>
<div class="page">
    <header>
        <h1>Tienda de Computadoras</h1>
        <div class="search">
            <input placeholder="Buscar productos..." aria-label="Buscar productos">
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

        @foreach($items as $prod)
            <article class="card">
                <div class="media" style="background-image:url('{{ $prod->image ?? ($prod->image_url ?? 'https://via.placeholder.com/600x400?text=PC') }}')" role="img" aria-label="Imagen de {{ $prod->name }}"></div>
                <div class="body">
                    <h2 class="title">{{ $prod->name ?? $prod->nombre ?? 'Producto' }}</h2>
                    <div class="desc">{{ $prod->description ?? $prod->descripcion ?? 'Descripción breve del producto.' }}</div>
                    <div class="price-row">
                        <div>
                            <div class="price">€{{ number_format((float)($prod->price ?? 0), 2) }}</div>
                            <div class="meta">En stock • Envío en 24-48h</div>
                        </div>
                        <div>
                            <a class="btn" href="{{ url('/product/'.$prod->id) }}">Ver</a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

    </section>

    <footer>
        © {{ date('Y') }} Tienda de Computadoras — Diseño profesional y responsivo
    </footer>
</div>
</body>
</html>
