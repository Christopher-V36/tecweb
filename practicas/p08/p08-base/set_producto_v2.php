<?php
    /** SE CREA EL OBJETO DE CONEXION */
    @$link = new mysqli('localhost', 'root', 'id_php_buap', 'marketzone');	

    /** comprobar la conexión */
    if ($link->connect_errno) 
    {
        die('Falló la conexión: '.$link->connect_error.'<br/>');
        /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
    }
    
    $nombre   = $_POST['name'];
    $marca    = $_POST['brand'];
    $modelo   = $_POST['model'];
    $precio   = $_POST['price'];
    $detalles = $_POST['details'];
    $unidades = $_POST['units'];
    $imagen   = $_POST['img'];

    /** Crear una tabla que no devuelve un conjunto de resultados */
    $sql_verificar = "SELECT COUNT(*) AS total FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
    $resultado = mysqli_query($link, $sql_verificar);
    
    if ($resultado) {
        list($total) = mysqli_fetch_row($resultado);
        if($total>0){
            echo "El producto ya se encuentra en el sistema.";
        }else{
            $sql_insertar = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
            if(mysqli_query($link, $sql_insertar)) 
            {
                echo "Registro exitoso <br>";
                echo "Valores insertados <br>".$sql_insertar;
            }else{
                echo "Error al registrar el producto: " . mysqli_error($link);
            }
        }
    }else{
        echo "Error en la consulta: " . mysqli_error($link);
    }

    $link->close();
?>