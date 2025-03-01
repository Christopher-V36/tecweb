<?php
    // Enviar encabezado correcto para XHTML
    header("Content-Type: application/xhtml+xml; charset=UTF-8");

    // Conectar a la base de datos
    @$link = new mysqli('localhost', 'root', 'id_php_buap', 'marketzone');

    // Comprobar conexión
    if ($link->connect_errno) {
        die('<p style="color: red; text-align: center;">Error en la conexión: ' . htmlspecialchars($link->connect_error) . '</p>');
    }

    // Inicializar variables vacías
    $id = $nombre = $marca = $modelo = $precio = $detalles = $unidades = $imagen = "";

    // Verificar si hay un ID en la URL para edición
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        if ($result = $link->query("SELECT * FROM productos WHERE id = $id")) {
            if ($result->num_rows > 0) {
                $producto = $result->fetch_assoc();
                $nombre = $producto['nombre'];
                $marca = $producto['marca'];
                $modelo = $producto['modelo'];
                $precio = $producto['precio'];
                $detalles = $producto['detalles'];
                $unidades = $producto['unidades'];
                $imagen = $producto['imagen'];
            }else {
                echo "No se encontró el producto.";
            }
            $result->free();
        }
    }
    $link->close();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <title><?= isset($_GET['id']) ? 'Editar Producto' : 'Registro de Producto' ?></title>
</head>
<body>
    <h1><?= isset($_GET['id']) ? 'Editar Producto' : 'Registro de Producto' ?></h1>
    <form id="formularioTabla" action="update_producto.php" method="post">
      
      <fieldset>
        <h2><?= isset($_GET['id']) ? 'Modifica el producto' : 'Carga el producto que desees' ?></h2>
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>"/>
        <ul>
            <li><label for="form-name">   Nombre:      </label> <input type="text" name="name" id="form-name" value="<?= htmlspecialchars($nombre) ?>" /></li>
            <li><label for="form-brand">  Marca:       </label> <input type="text" name="brand" id="form-brand" value="<?= htmlspecialchars($marca) ?>" /></li>
            <li><label for="form-model">  Modelo:      </label> <input type="text" name="model" id="form-model" value="<?= htmlspecialchars($modelo) ?>" /></li>
            <li><label for="form-price">  Precio:      </label> <input type="number" step="0.01" name="price" id="form-price" value="<?= htmlspecialchars($precio) ?>" /></li>
            <li><label for="form-details">Detalles:    </label> <input type="text" name="details" id="form-details" value="<?= htmlspecialchars($detalles) ?>" /></li>
            <li><label for="form-units">  Unidades:    </label> <input type="number" name="units" id="form-units" value="<?= htmlspecialchars($unidades) ?>" /></li>
            <li><label for="form-img">    Imagen (Url):</label> <input type="text" name="img" id="form-img" value="<?= htmlspecialchars($imagen) ?>" /></li>
        </ul>
      </fieldset>
      
      <p>
        <input type="submit" value="<?= isset($_GET['id']) ? 'Modificar Producto' : 'Cargar Producto' ?>"/>
        <input type="reset"/>
      </p>
    
      
    </form>
</body>

</html>
