<?php


include '../conexion/conexion.php';

$id_alumno=$_REQUEST['id_alumno'];

$sqlEliminar="delete from  alumno where id_alumno=$id_alumno";
$resultado=mysqli_query($conexion,$sqlEliminar);

if($resultado){
    echo "<h1> el registro ha sido eliminado</h1>";
}else{
    echo "<h1> el registro no ha sido eliminado </h1>";
}

echo "<a href='index.php'>Regresar</a>";