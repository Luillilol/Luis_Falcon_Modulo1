<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        var_dump($_SESSION);
        if(isset($_SESSION['Nombre'])){
            header("location: ./index.php");
        }else{
            echo '<fieldset style="width: 600px;">
            <legend>Inicio de sesión</legend>
            <form action="./index.php" method="POST">
                <label for="nombre">Nombre: <input type="text" name="Nombre" id="nombre" required></label>
                <br><br>
                <label for="apellido">Apellido: <input type="text" name="Apellido" id="apellido" required></label>
                <br><br>
                <label for="grupo">Grupo: <input type="number" name="Grupo" id="grupo" required></label>
                <br><br>
                <label for="nacimiento">Fecha de nacimiento: <input type="date" name="Nacimiento" id="nacimiento" required>
                <br><br>
                <label for="correo">Correo electrónico: <input type="email" name="Correo" id="correo" required></label>
                <br><br>
                <label for="contraseña">Contraseña: <input type="password" name="Contraseña" id="contraseña" required></label>
                <br><br>
                <button type="submit" >Ingresar</button>        
            </form>
        </fieldset>';
        }
    ?>
</body>
</html>
