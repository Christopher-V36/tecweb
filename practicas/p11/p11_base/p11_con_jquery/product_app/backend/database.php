<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'id_php_buap',
        'marketzone'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conectada!');
    }

    mysqli_set_charset($conexion, 'utf8mb4');
?>