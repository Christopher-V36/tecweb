<?php
/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'id_php_buap', 'marketzone');    

/** Comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
}

/** Obtener valores del formulario */
$id        = $_POST['id'];  // Siempre existirá un ID
$nombre    = $_POST['name'];
$marca     = $_POST['brand'];
$modelo    = $_POST['model'];
$precio    = $_POST['price'];
$detalles  = $_POST['details'];
$unidades  = $_POST['units'];
$imagen    = $_POST['img'];

/** Consulta para actualizar el producto */
$sql = "UPDATE productos 
        SET nombre='$nombre', marca='$marca', modelo='$modelo', precio=$precio, 
            detalles='$detalles', unidades=$unidades, imagen='$imagen' 
        WHERE id=$id";

if (mysqli_query($link, $sql)) {
    echo "<p>Producto actualizado correctamente.</p>";
} else {
    echo "<p style='color: red;'>ERROR al actualizar el producto: " . mysqli_error($link) . "</p>";
}

/** Agregar los hipervínculos */
echo "<p><a href='get_productos_xhtml_v2.php'>Ver todos los productos (XHTML)</a></p>";
echo "<p><a href='get_productos_vigentes_v2.php'>Ver productos vigentes</a></p>";

/** Cerrar la conexión */
mysqli_close($link);
?>
