<?php
include "../include/header.php";
?>
<button><a href="../estudiantes/form_ingresar.php">Ingresar</a></button>
<br>
<br>
<br>
<div align="center">
    <form action="index.php" method="get">
        <div class="form-group"></div>
      <label>Buscar:</label>
      <input type="text" name="buscar">
        <button class="btn btn-success"  type="submit">Buscar</button>
        </div>
    </form>
</div>
<div class="container">
<table align="center" border="1" class="table-hover">
    <thead>
    <tr>
        <td rowspan="2">Codigo Alumno</td>
        <td rowspan="2">Nombre Completo</td>
        <td rowspan="2">Correo</td>
        <td rowspan="2">Clase</td>
        <td colspan="2" style="text-align: center">Acciones</td>
    </tr>
    <tr>
        <td >Modificar</td>
        <td>Eliminar</td>
    </tr>

    </thead>
    <tbody>
    <?php
    while($row=mysqli_fetch_array($registros))
    {
        ?>
        <tr>
            <td><?php echo $row['id_alumno'];?></td>
            <td><?php echo $row['nombre_completo'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php
                switch ($row['codigo_curso'])
                {
                    case 1:echo"PHP";
                        break;
                    case 2:echo"ASP";
                        break;
                    case 3:echo"Java Script";
                        break;
                }
                ?>
            </td>
            <td>
                <a title="Modificar" href="form_modificar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                    <img src="../img/modificar.png" width="30" height="30">
                </a>
            </td>
            <td>
                <a title="Eliminar" href="eliminar.php?id_alumno=<?php echo $row['id_alumno'];?>">
                    <img src="../img/eliminar.png" width="30" height="30">
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</div>
<?php
include "../include/footer.php";
?>