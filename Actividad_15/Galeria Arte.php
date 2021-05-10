<?php
    if(isset($_FILES["Archivo"]))
    {
        $arch_loc = $_FILES['Archivo']['tmp_name'];
            $arch = $_FILES['Archivo']['name'];
            $ext = pathinfo($arch, PATHINFO_EXTENSION);
                if($ext=='jpg' || $ext=='jpeg' || $ext=='png'){
                    //echo 'Cumple con la extensión';
                    $Nom_obra = $_POST['NomObra'];
                    $NomAutor = $_POST['NomAutor'];
                    $Año = $_POST['Año'];
                    rename($arch_loc, './statics/'.$Nom_obra.'$'.$NomAutor.'$&'.$Año.'&.'.$ext);
                    $ruta_carpeta = "./statics";
                    $carpeta = opendir($ruta_carpeta);
                    $archivos = array();
                    $hay_archivos = true;
// WHILE INICIA
                    while($hay_archivos){
                        $archivo = readdir($carpeta);
                        if($archivo !== false){
                            if($archivo != '.' && $archivo != '..'){
                                $ext1 = pathinfo($archivo, PATHINFO_EXTENSION);
                                if($ext1=='jpg' || $ext1=='jpeg' || $ext1=='png'){
                                    array_push($archivos, $archivo);
                                }
                            }
                        }
                        else{
                            $hay_archivos = false;
                        }
                    }
                    $cont = 0;
                    echo '<table border=1>';
                        echo '<tbody>';
                            foreach ($archivos as $key => $value) {
                                $nombre2 = explode("$&", $value);
                                $Nombre_apell = explode("$", $nombre2[0]);
                                $Fecha_ext = explode("&", $nombre2[1]);
                                if($cont == 0){
                                    echo '<tr>';
                                }
                                echo '<td>';
                                    echo "<img src='./statics/".$value."' width=250>";
                                    echo '<ul>';
                                        echo '<li>Nombre de la pintura: '.$Nombre_apell[0].' </li>';
                                        echo '<li>Nombre del pintor:';
                                            if($Nombre_apell[1] == ""){
                                                echo 'Sin autor';
                                            }else{
                                                echo $Nombre_apell[1];
                                            }
                                        echo '</li>';
                                        echo '<li>Año en que se realizó:';
                                            if($Fecha_ext[0] == ""){
                                                echo 'Sin año';
                                            }else{
                                                echo $Fecha_ext[0];
                                            }
                                        echo '</li>';
                                    echo '</ul>';
                                echo '</td>';
                                $cont++;
                                if($cont == 2){
                                    $cont = 0;
                                    echo '</tr>';
                                }                                   
                            }
                        echo '</tbody>';
                    echo '</table>';                    
                    closedir($carpeta);
                    echo '<form action="./Galeria Arte.html" method="POST" enctype="multipart/form-data">
                    <button type="submit">Agregar obras a la galería</button>
                    </form>';
                }else{
                    echo "Este archivo no es de tipo imagen";
                    echo '<form action="./Galeria Arte.html" method="POST" enctype="multipart/form-data">
                    <button type="submit">Regresar</button>
                    </form>';
                }            
    }else{
        echo "<h1>TU GALERIA DE ARTE NO TIENE NINGUNA IMAGEN</h1>";
        echo '<br>';
        echo '<form action="./Galeria Arte.html" method="POST" enctype="multipart/form-data">
            <button type="submit">Agregar obra a la galería</button>
        </form>';
    }
?>