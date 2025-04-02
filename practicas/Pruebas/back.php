<?php
    $conecction = new mysqli
    ("localhost","root","id_php_buap","pruebas");
    if ($conecction->connect_error) {
        die("Connection failed: " . $conecction->connect_error);
    }
?>