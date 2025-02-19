<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>
        
    <h2>Ejercicio 2</h2>
    
    <?php
        echo '<h4>Respueta:</h4>';

        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;
        
        echo '<h4>Respuesta:</h4>';
        echo '<p>El valor de $a es: '.$a.'</p>';
        echo '<p>El valor de $b es: '.$b.'</p>';
        echo '<p>El valor de $c es: '.$c.'</p>';
        
        $a = "PHP server";
        $b = &$a;

        echo '<p>Después de cambiar el valor de $a y asignarle &$a a $b:</p>';
        
        echo '<p>El valor de $a es: '.$a.'</p>';
        echo '<p>El valor de $b es: '.$b.'</p>';
        echo '<p>El valor de $c es: '.$c.'</p>';
        echo '<br>';
    ?>

    <h2>Ejercicio 3</h2>

    <?php
        echo '<h4>Respuesta:</h4>';
        $a = "PHP5";
        echo '<p>El valor de $a es: '.$a.'</p>';

        $z[] = &$a;
        echo '<p>El valor de $z es: '.print_r($z).'</p>';

        $b = "5a version de PHP";
        echo '<p>El valor de $b es: '.$b.'</p>';

        $c = $b*10;
        echo '<p>El valor de $c es: '.$c.'</p>';

        $a .= $b;
        echo '<p>El valor de $a es: '.$a.'</p>';

        $b *= $c;
        echo '<p>El valor de $b es: '.$b.'</p>';

        $z[0] = "MySQL";
        echo '<p>El valor de $z[0] es: '.$z[0].'</p>';
    ?>

    <h2>Ejercicio 4</h2>

    <?php
        unset($a, $b, $c, $z);
        $a = "PHP5"; 
        $z[] = &$a;  
        $b = "5a version de PHP"; 
        @$c = $b*10; 
        $a .= $b; 
        @$b *= $c; 
        $z[0] = "MySQL";

        function mostrarValor(){
            echo 'Valor de $a: ' .$GLOBALS['a'];
            echo '<br>'; 
            echo 'Valor de $b: ' .$GLOBALS['b'];
            echo '<br>';
            echo 'Valor de $c: ' .$GLOBALS['c'];
            echo '<br>';
            print_r($GLOBALS['z']); 
            echo '<br>';
        }
        echo '<h4>Respuesta</h4>'; 
        mostrarValor();

    ?>

    <h2>Ejercicio 5</h2>
    
    <?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;

        echo '<h4>Respuesta:</h4>';
        echo '<p>El valor de $a es: '.$a.'</p>';
        echo '<p>El valor de $b es: '.$b.'</p>';
        echo '<p>El valor de $c es: '.$c.'</p>';

        /* PHP Tester
            Respuesta:
            El valor de $a es: 9E3

            El valor de $b es: 7

            El valor de $c es: 9000
        */
    ?>

    <h2>Ejercicio 6</h2>

    <?php
        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        echo '<h4>Respuesta</h4>';

        echo 'El valor de $a: '; 
        var_dump($a); 
        echo '<br>';
        echo 'El valor de $b: ';
        var_dump($b); 
        echo '<br>';
        echo 'El valor de $c: ';
        var_dump($c); 
        echo '<br>';
        echo 'El valor de $d: ';
        var_dump($d); 
        echo '<br>';
        echo 'El valor de $e: ';
        var_dump($e); 
        echo '<br>';
        echo 'El valor de $f: ';
        var_dump($f); 
        echo '<br>';

        echo '<h4> La función var_export() retorna una representación en cadena del valor para ser mostrado facilmente con un echo: </h4>'; 
        echo 'El valor de $c: ';
        echo var_export($c, true); 
        echo '<br>';
        echo 'El valor de $e: ';
        echo var_export($e, true); 
        echo '<br>';
    ?>
    
    <h2>Ejercicio 7</h2>
    
    <?php
        echo '<h4>Respuesta</h4>';
        echo 'Versión de Apache y PHP: ';  
        echo $_SERVER['SERVER_SOFTWARE']; 
        echo '<br>'; 
        echo 'Nombre del sistema operativo: '; 
        echo PHP_OS; 
        echo '<br>';
        echo 'Idioma del navegador (cliente): ';  
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    ?>
    
    <?php
        echo '<p>';
        echo '<a href="https://validator.w3.org/markup/check?uri=referer"><img
             src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>';
        echo '</p>';
    ?>
</body>
</html>
