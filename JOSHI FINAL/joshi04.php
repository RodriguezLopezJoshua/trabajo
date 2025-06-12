<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOSHI PAGG</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <body>
    <nav class="navbar navbar-light" style="background-color:rgb(7, 156, 255)">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="background-color: bisque;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi01.php">Pagina 1</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi02.php">Pagina 2</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi03.php">Pagina 3</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi04.php">Pagina 4</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi05.php">Pagina 5</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi06.html">Pokedex API</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi07.html">Peliculas API</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi08.html">Dragon Ball API</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi09.html">Harry Potter y Rick and Morty</a><br>
                            <a class="dropdown-item" href="/JOSHI FINAL/joshi10.html">Harry Potter API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>
   

    <div class="jumbotron">
        <h3  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 224, 104); font-family: 'Bungee Outline', sans-serif">MOSTRAR DATOS</h3>

              

<h1 class="display-4 font" style="text-align: center;
        background-color:"><h1>PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>
        <style>
        </style>
        <style>
        <table class="table table-bordered">
        <thead>
            <tr>
               <th>Numero de Control</th>
               <th>Nombre</th>
               <th>Apellido Paterno</th>
               <th>Apellido Materno</th>
               <th>Edad</th>
               <th>Colonia</th>
               <th>Especialidad</th>
               <th>Genero</th>
               <th>Correo</th>
               <th>Telefono</th>
               <th>Fecha de Ingreso</th>
               </tr>
            </thead>

        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "nombres";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT 
                 a.numero_control,
                 a.nombre,
                 a.apellido_paterno,
                 a.apellido_materno,
                 e.edad,
                 c.nombre_colonias,
                 es.nombre_especialidad,
                 g.nombre_genero,
                 a.correo,
                 a.telefono,
                 a.fecha_ingreso
                 FROM alumnos a
                 JOIN edades e ON a.id_edad=e.id
                 JOIN colonias c ON a.id_colonia=c.id
                 JOIN especialidades es ON a.id_especialidad=es.id
                 JOIN generos g ON a.id_genero=g.id";

        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0) {
           
            while($row = $resultado->fetch_assoc()){
                echo "<tr>
                <td> {$row['numero_control']}</td>
                <td> {$row['nombre']}</td>
                <td> {$row['apellido_paterno']}</td>
                <td> {$row['apellido_materno']}</td>
                <td> {$row['edad']}</td>
                <td> {$row['nombre_colonias']}</td>
                <td> {$row['nombre_especialidad']}</td>
                <td> {$row['nombre_genero']}</td>
                <td> {$row['correo']}</td>
                <td> {$row['telefono']}</td>
                <td> {$row['fecha_ingreso']}</td>
                </tr>";
        }
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();
      
        ?>

</table>

</body>
</html>