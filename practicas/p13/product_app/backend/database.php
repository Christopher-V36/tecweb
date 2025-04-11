<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'id_sql_buap',
        'marketzone'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conextada!');
    }
?>