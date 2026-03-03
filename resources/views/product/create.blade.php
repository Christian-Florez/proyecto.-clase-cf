<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .wrapper {
            width: 100%;
            max-width: 650px;
        }

        .container {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: #ffffff;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        .form-container {
            padding: 40px 30px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s ease;
            background-color: var(--light-bg);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-row .form-group {
            margin-bottom: 0;
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .btn-submit {
            width: 100%;
            padding: 14px 24px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            margin-top: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .required {
            color: var(--danger);
            margin-left: 4px;
        }

        .form-info {
            background-color: #f0f9ff;
            border-left: 4px solid var(--primary);
            padding: 12px 16px;
            border-radius: 4px;
            margin-bottom: 24px;
            font-size: 0.9rem;
            color: #0369a1;
        }

        .file-input-wrapper {
            position: relative;
            overflow: hidden;
        }

        .file-input-wrapper input[type="file"] {
            position: absolute;
            left: -9999px;
            opacity: 0;
        }

        .file-input-label {
            display: block;
            padding: 12px 14px;
            background-color: var(--light-bg);
            border: 2px dashed var(--border);
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
            font-weight: 500;
            color: var(--muted);
        }

        .file-input-wrapper input[type="file"]:focus + .file-input-label,
        .file-input-wrapper:hover .file-input-label {
            border-color: var(--primary);
            background-color: rgba(37, 99, 235, 0.05);
            color: var(--primary);
        }

        .file-name {
            font-size: 0.85rem;
            color: var(--muted);
            margin-top: 6px;
        }

        @media (max-width: 480px) {
            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 1.5rem;
            }

            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>

<div class="wrapper">
    <div class="container">
        <div class="header">
            <h1>➕ Nuevo Producto</h1>
            <p>Registra un nuevo producto en tu tienda</p>
        </div>

        <div class="form-container">
            <div class="form-info">
                📋 Completa todos los campos marcados con <span class="required">*</span> para crear el producto
            </div>

            <form method="POST" action="{{ url('/prodcut/store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Nombre del Producto <span class="required">*</span></label>
                    <input type="text" name="nombre" placeholder="Ej: Laptop Gaming Pro" required>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Precio <span class="required">*</span></label>
                        <input type="number" name="price" step="0.01" placeholder="1299.99" required>
                    </div>

                    <div class="form-group">
                        <label>Stock <span class="required">*</span></label>
                        <input type="number" name="stock" min="0" placeholder="0" value="0" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Categoría <span class="required">*</span></label>
                    <select name="category_id" required>
                        <option value="">-- Selecciona una categoría --</option>
                        @forelse($categories ?? [] as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                            <option value="1" selected>Sin categorías disponibles</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label>Descripción <span class="required">*</span></label>
                    <textarea name="descripcion" placeholder="Describe los principales features y características del producto..." required></textarea>
                </div>

                <div class="form-group">
                    <label>Imagen del Producto <span class="required">*</span></label>
                    <div class="file-input-wrapper">
                        <input type="file" name="image" id="image" accept="image/*" required>
                        <label for="image" class="file-input-label">📷 Seleccionar imagen (JPG, PNG, GIF)</label>
                    </div>
                    <div class="file-name" id="fileName"></div>
                </div>

                <script>
                    document.getElementById('image').addEventListener('change', function(e) {
                        const fileName = e.target.files[0]?.name || '';
                        document.getElementById('fileName').textContent = fileName ? '✓ ' + fileName : '';
                    });
                </script>

                <button type="submit" class="btn-submit">💾 Guardar Producto</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
