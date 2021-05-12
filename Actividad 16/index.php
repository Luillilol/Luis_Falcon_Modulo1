
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
        session_start();
        if(!isset($_POST['Nombre']) && !isset($_SESSION['Nombre'])){
            header("location: ./form.php");
        }
       if(isset($_POST['Nombre']) &&  !isset($_SESSION['Nombre'])){            
            
            $_SESSION['Nombre'] = $_POST['Nombre'];
            $_SESSION['Apellido'] = $_POST['Apellido'];
            $_SESSION['Grupo'] = $_POST['Grupo'];
            $_SESSION['Nacimiento'] = $_POST['Nacimiento'];
            $_SESSION['Correo'] = $_POST['Correo'];
            $_SESSION['Contraseña'] = $_POST['Contraseña'];
            echo '<br> sesion:';
            var_dump($_SESSION);
            header("location: ./index.php");

         }
         if(isset($_SESSION['Nombre'])){
            echo '<table border="1">
                <thead>
                <tr>
                    <th colspan="2"> Información de inicio de sesión</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="left">Nombre completo: </td>
                        <td>'.$_SESSION["Nombre"].'</td>
                    </tr>
                    <tr>
                        <td align="left">Grupo</td>
                        <td>'.$_SESSION["Grupo"].'</td>
                    </tr>
                    <tr>
                        <td align="left">Fecha de nacimiento: </td>
                        <td>'.$_SESSION["Nacimiento"].'</td>
                    </tr>
                    <tr>
                        <td align="left">Correo electronico: </td>
                        <td>'.$_SESSION["Correo"].'</td>
                    </tr>
                </tbody>
            </table>';
         }
        
        echo '<form action="./Cerrar.php" method="POST">
                <button type="submit">Cerrar sesión</button>  
                <input type="hidden" value="1" name="Cerrar">
                <br><br>
            </form>';
    ?>
</body>
</html>


        