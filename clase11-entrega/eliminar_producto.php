<?php
$conection = mysqli_connect("localhost:3306", "root", "", "proyecto-backend");

// Verificar si se proporciona un parámetro "id" en la URL
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtener el valor del parámetro "id"
    $id_producto = $_GET['id'];

    // Consulta para eliminar el producto con el ID proporcionado
    $query_delete = "DELETE FROM productos_piscina WHERE id_producto = $id_producto";
    $resultado_delete = mysqli_query($conection, $query_delete);

    if ($resultado_delete) {
        echo "Se eliminó correctamente";
    } else {
        echo "No se pudo eliminar: " . mysqli_error($conection);
    }
} else {
    echo "No se proporcionó un ID válido";
}

// Cerrar la conexión a la base de datos
mysqli_close($conection);
?>
