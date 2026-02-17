<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            text-align: left;
            padding: 10px;
            width: 30%;
        }

        td {
            padding: 10px;
        }

        input, textarea, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Registro de Producto</h1>

    <form>
        <table>
            <tr>
                <th>Nombre</th>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="number" name="price" step="0.01" required></td>
            </tr>
            <tr>
                <th>Marca</th>
                <td><input type="text" name="marca" required></td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td><textarea name="descripcion" required></textarea></td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>
                    <select name="estado" required>
                        <option value="">Seleccione...</option>
                        <option value="nuevo">Nuevo</option>
                        <option value="usado">Usado</option>
                        <option value="reacondicionado">Reacondicionado</option>
                    </select>
                </td>
            </tr>
        </table>

        <button type="submit">Guardar Producto</button>
    </form>
</div>

</body>
</html>

