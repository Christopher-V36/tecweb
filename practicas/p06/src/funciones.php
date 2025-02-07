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
        $arr= [];
        for($i=97; $i<123; $i++)
        {
            $arr[$i]= chr($i);
        }
        echo "<table border='1'>";
        echo "<tr><th>Código ASCII</th><th>Carácter</th></tr>";
        foreach ($arr as $key => $value){
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }echo "</table>";
    }

    function funcion5($edad, $sexo){
        if($sexo == "femenino"){
            if($edad>=18 && $edad<=35){
                echo "Bienvenida, usted está en el rango de edad permitido."."<br>";
            }else{
                echo "Su edad no se encuentra dentro del rango aceptado"."<br>";
            }
        }else{
            echo "Necesita ser una persona del sexo femenino para ser aceptado"."<br>";
        }
    }

    function funcion6(){

    }
?>