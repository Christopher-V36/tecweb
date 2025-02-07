<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require_once __DIR__.'/src/funciones.php';
        if(isset($_GET['numero'])){
            funcion1($_GET['numero']);
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>

    <?php
        if(isset($_POST["name"]) && isset($_POST["email"])){
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    <h2>Ejercicio 2</h2>
    <?php
        require_once __DIR__.'/src/funciones.php';
        funcion2();
    ?>

    <h2>Ejercicio 3</h2>
    <?php
        require_once __DIR__.'/src/funciones.php';
        if(isset($_GET['num']))
        {
            funcion3($_GET['num']) ;
        }
    ?>

    <h2>Ejercicio 4</h2>
    <?php
        require_once __DIR__.'/src/funciones.php';
        funcion4();
    ?>

    <h2>Ejercicio 5</h2>
    <form action="http://localhost/tecweb/practicas/p06/" method="post">
        Edad: <input type="text" name="edad"><br>
        Sexo: <input type="text" name="sexo"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["edad"]) && isset($_POST["sexo"]))
        {
            require_once __DIR__.'/src/funciones.php';
            funcion5($_POST["edad"],$_POST["sexo"]);
        }
    ?>

    <h2>Ejercicio 6</h2>
    <form action="http://localhost/tecweb/practicas/p06/" method="post">
        Buscar por matricula: <input type="text" name="matricula"><br>
        ¿Quiere mostrar todos?: si/no <input type="text" name="todos"><br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST["matricula"]) || isset($_POST["todos"])){
            require_once __DIR__.'/src/funciones.php';
            funcion6($_POST["matricula"],$_POST["todos"]);
        }
    ?>
    
</body>
</html>