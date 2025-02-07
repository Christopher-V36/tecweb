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

    function funcion2(){
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
        echo "<br>$numeros números obtenidos en $iteracion iteraciones.";
    }

    function funcion3($num){
        $random=-1;
        //while(($random%$num !=0)){
        //    $random=mt_rand(1,100);
        //}
        do{
            $random=mt_rand(1,100);
        }while(($random%$num !=0));
        echo "El número encontrado es ".$random." y es múltiplo de ".$num;
    }

    function funcion4(){

    }

    function funcion5(){

    }

    function funcion6(){

    }
?>