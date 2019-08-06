<?php


include'../conexion/conexion.php';

$id_alumno=$_REQUEST['id_alumno'];

$sql="select * from alumno where id_alumno='$id_alumno'";
$registro=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($registro);
?>
<html>
<head>
    <title>Modificar Alumno</title>
</head>
<body>
<form action="modificar.php" method="post">
    <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno'] ?>">
    <label>Nombre Completo</label>
    <p></p>
    <input type="text" name="nombre_completo" value="<?php echo $row['nombre_completo'] ?>">
    <p></p>
    <label>Correo</label>
    <p></p>
    <input type="email" name="correo" value="<?php echo $row['correo'] ?>">
    <p></p>
    <label>Clase</label>
    <p></p>
    <select name="codigo_curso">
    <?php
        $sql="select * from cursos";
        $registro=mysqli_query($conexion,$sql);
        while($reg=mysqli_fetch_array($registro))
        {
            if($row['codigo_curso']==$reg['codigo_curso'])
            {
                echo "<option selected value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
            }
            else
            {
                echo "<option value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
            }
        }
    ?>
    </select>
    <p></p>
    <button type="submit" name="guardar">Modificar</button>
    <p></p>
    <button><a href="index.php">Regresar</a></button>
</form>
</body>
</html>
