<?php   
        var_dump($_POST);
        echo "<table> </table>";
        //echo "$_POST[Nombre]"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Universidad</title>
</head>
<body>
    <?php
        echo "<table border=1 cellpadding=5px color";
        echo "<thead>";
        echo "<tr>";
            echo "<th colspan=6><h2>Solicitud de ingreso a la universidad<h2></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            echo "<tr>";
                echo "<td colspan=2 align=center>$_POST[apellidopat]</td>";
                echo "<td colspan='2'align=center>$_POST[apellidomat]</td>";
                echo "<td colspan='2'align=center>$_POST[Nombre]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=2 align=center><b><u>Apellido paterno</u></b></td>";
                echo "<td colspan=2 align=center><b><u>Apellido materno</u></b></td>";
                echo "<td colspan=2 align=center><b><u>Nombre(s)</u></b></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=2 align=center><b><u>Sexo:</u></b></td>";
                echo "<td colspan=2 align=center>$_POST[Sexo]</td>";
                echo "<td align=center><b><u>Edad:</u></b></td>";
                echo "<td align=center>$_POST[Edad]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=4 align=center>$_POST[gmail]</td>";
                echo "<td colspan=1 align=center>$_POST[telefono]</td>";
                echo "<td colspan=1 align=center>$_POST[celular]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=4 align=center><b><u>Correo electrónico</u></b></td>";
                echo "<td colspan=1 align=center><b><u>Teléfono</u></b></td>";
                echo "<td colspan=1 align=center><b><u>Celular</u></b></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=2 align=center><b><u>Escuela de procedencia</u></b></td>";
                echo "<td colspan=2 align=center>$_POST[Procedencia]</td>";
                echo "<td colspan=1 align=center><b><u>Promedio:</u></b></td>";
                echo "<td colspan=1 align=center>$_POST[promedio]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=4 align=center><b><u>Primera opción</u></b></td>";
                echo "<td colspan=2 align=center>$_POST[PrimOpt]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=4 align=center><b><u>Segunda opción</u></b></td>";
                echo "<td colspan=2 align=center>$_POST[SecOpt]</td>";
            echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    ?>    
</body>
</html>