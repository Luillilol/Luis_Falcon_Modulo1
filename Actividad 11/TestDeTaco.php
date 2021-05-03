<?php
    $A=0;
    $B=0;
    $C=0;
    $D=0;
    /*var_dump($_POST);
    echo "<br>";*/
    //Recorre cada incide del arreglo del formulario y checa que opción es para añadirlo a una variable.
    foreach($_POST as $value)
    {
        if($value == "A"){
            $A++;
        }elseif($value == "B"){
            $B++;
        }elseif($value == "C"){
            $C++;
        }elseif ($value == "D") {
            $D++;
        }
    }
    echo "<h2> ¡¡Felicidades!!</h2>";
    echo "<h4>Eres un:</h4>";
    //Se comparan las variables para saber que tipo de taco eres :D
    if($A>$B && $A>$C && $A>$D)
    {
        echo "TACO AL PASTOR";
    }elseif ($B>$A && $B>$C && $B>$D) {
        echo "TACO DE SUADERO";
    }elseif ($C>$A && $C>$B && $C>$A) {
        echo "TACO DE BARBACOA";
    }elseif ($D>$A && $D>$B && $D>$C) {
        echo "TACO LAGUNERO";
    }elseif ($A==$B && $A>$C && $A>$D) {
        echo "TACO CAMPECHANO";
    }elseif ($B==$C && $B>$A && $B>$D) {
        echo "TACO DE CARNITAS";
    }elseif ($C==$D && $C>$A && $C>$B) {
        echo "TACO BELL";
    }elseif ($A==$D && $A>$B && $A>$C) {
        echo "TACO LIGHT";
    }elseif ($A==$C && $A>$B && $A>$D) {
        echo "TACO PLACERO";
    }elseif ($B==$D && $B>$A && $B>$C) {
        echo "TACO MIXIOTE";
    }else {
        echo "TACO DE SAL";
    }

    
?>
