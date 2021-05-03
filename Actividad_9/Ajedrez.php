<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajedrez</title>
</head>
<body>
    <?php
        $proporciones=10;
        $img=1;
        echo "<table border=1 cellpadding=5px >";
            echo "<tbody>";
                for ($i=0; $i<$proporciones; $i++){
                    echo "<tr>";
                        for ($j=0; $j<$proporciones; $j++){
                            echo "<td>";
                                if ($img%2 == 1){
                                    echo "<img src=./blanco.jpg width=100>";
                                    $img++;
                                }else {
                                    echo "<img src=./negro.jpg width=100>";
                                    $img++;
                                }
                            echo "</td>";
                        }
                        if ($proporciones%2==0) {
                            $img++;    
                        }
                        
                    echo "</tr>";
                }
            echo"</tbody>";
        echo "</table>";
    ?>    
</body>
</html>