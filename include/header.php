<?php

include '../conexion/conexion.php';
if (!empty($_REQUEST['buscar'])) {
    $buscar = $_REQUEST['buscar'];
    $query = "select * from alumno where nombre_completo like'%$buscar%'";
    $registros = mysqli_query($conexion, $query);

} else {
    $query = "select * from alumno";
    $registros = mysqli_query($conexion, $query);
}

?>
<html>
<head>
    <title>

    </title>

    <link href="../librerias/css/bootstrap.min.css">
    <link href="../librerias/css/bootstrap.css">

</head>
<body>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
             <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Features</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Pricing</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
             </li>
         </ul>
     </div>
 </nav>

