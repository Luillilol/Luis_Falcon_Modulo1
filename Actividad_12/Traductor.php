<?php
    
    $Alfabeto = array(
        array("A", ".-"), 
        array("B", "-..."), 
        array("C", "-.-."),
        array("D", "-.."), 
        array("E", "."),
        array("F", "..-."),  
        array("G", "--."),
        array("H", "...."),
        array("I", ".."),
        array("J", ".---"),
        array("K", "-.-"),
        array("L", ".-.."),
        array("M", "--"),
        array("N", "-."),
        array("O", "---"),
        array("P", ".--."),
        array("Q", "--.-"),
        array("R", ".-."),
        array("S", "..."),
        array("T", "-"),
        array("U", "..-"),
        array("V", "...-"),
        array("W", ".--"),
        array("X", "-..-"),
        array("Y", "-.--"),
        array("Z", "--.."),
        array("1", ".----"),
        array("2", "..---"),
        array("3", "...--"),
        array("4", "....-"),
        array("5", "....."),
        array("6", "-...."),
        array("7", "--..."),
        array("8", "---.."),
        array("9", "----."),
        array("0", "-----")
    );

    //Primero se pone las 3 líneas antes de la traducción.
    echo "<h2>Su texto a traducir es: </h2>";
    echo $_POST["Palabra"];
    echo "<h2>Su traducción es: </h2>";
    //Para una opciónd de traducción se ocupa una parte, se separan las palabras y se checan uno por uno
    if ($_POST["Traduccion"] == "Esp-Mor")
    {
        echo "<br><br><br>";
        $Palabras_separadas = explode(" ", $_POST["Palabra"]);
        for ($a=0; $a < count($Palabras_separadas); $a++) { 
            $Palabras_separadas[$a] = strtoupper($Palabras_separadas[$a]);
        }
        
        foreach ($Palabras_separadas as $value) {     
                for ($i=0; $i < strlen($value); $i++) { 
                    foreach ($Alfabeto as $letras) {                
                        if ( $value[$i] == $letras[0]) {// La variable $letras guarda la traducción de morse y español, depende la opcion se intercalan
                            echo $letras[1];
                        }                                
                    }            
                    echo " ";
                }
                echo chr(255);  
                echo chr(255);  
                echo chr(255);         
        }        
    }else {//Se hace lo mismo que lo anterior, pero es elimina el for y se cambian los indices de $value
        $Palabras_separadas = explode(" ", $_POST["Palabra"]);
        foreach ($Palabras_separadas as $value) {                
            foreach ($Alfabeto as $letras) {                
                if($value == $letras[1]){
                    echo $letras[0];
                } 
            }            
            echo " / ";        
        }        
    }
?>



