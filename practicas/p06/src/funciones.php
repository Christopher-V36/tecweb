<?php
    function funcion1($num){
        $num = $_GET['numero'];
        if($num%5==0 && $num%7==0){
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
        else{
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }

    function funcion2()
    {
        $matriz=[]; 
        $iteracion = 0; 
        $numeros = 0; 
        do{
            $iteracion++; 
            $fila = [rand(100,999), rand(100,999), rand(100,999)]; 
            $numeros +=3; 
            $matriz[]=$fila; 
        }while (!($fila[0]%2 !=0 && $fila[1]%2==0 && $fila[2]%2!=0)); 

        foreach($matriz as $fila){
            echo implode(", ", $fila).'<br>'; 
        }
        echo "<h4>$numeros números obtenidos en $iteracion iteraciones.</h4>";
    }

    function funcion3(){

    }

    function funcion4(){

    }

    function funcion5(){

    }

    function funcion6(){

    }
?>