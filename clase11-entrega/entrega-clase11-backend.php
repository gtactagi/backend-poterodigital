<?php
// Conexión a la base de datos
$conection = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");

// Consulta para obtener los productos
$query_select = "SELECT * FROM productos_piscina";
$resultado_select = mysqli_query($conection, $query_select);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('bg.png');
            background-size: cover;
        }

        .container {
            width: 80%;
            margin: auto;
            background: #4e4d4d;
            margin-top: 50px;
            box-shadow: 7px 13px 37px #000;
            padding: 20px;
            border-top: 4px solid #017bab;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background: #252323;
            font-size: 14px;
            font-weight: bold;
        }

        td {
            font-size: 14px;
        }

        input[type="number"] {
            width: 50px;
            padding: 5px;
            text-align: center;
            background: #252323;
            border: 1px solid #017bab;
            color: white;
        }

        .buttons {
            width: 100%;
            height: 40px;
            background: #017bab;
            border: none;
            color: white;
            margin-bottom: 16px;
            cursor: pointer;
        }

        .buttons:hover {
            background: #015377;
        }
    </style>
</head>
<body>

    <div class="container">

        <table>
            <thead>
                <tr>
                    <th>ID Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio Unitario</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($resultado_select)) {
                    echo "<tr>
                            <td>{$row['id_producto']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['descripcion_producto']}</td>
                            <td>{$row['precio_unitario']}</td>
                            <td><a href='./eliminar_producto.php?id={$row['id_producto']}'>Borrar</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($conection);
?>

</body>
</html>
