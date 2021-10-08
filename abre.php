<?php

$conexion = new mysqli("localhost", "root", "", "Contactos"); /*SE VERIFICAN LOS DATOS */
    if($conexion){
        echo "la gestión fue exitosa !!";
        header ("location: index.php");
    }else{
        echo "Fallo la gestión";
    }
?>