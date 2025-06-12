<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina joshi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/me-and-your-mother" rel="stylesheet">
                                
<body>
    <nav class="navbar navbar-light" style="background-color:rgb(255, 7, 61)">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="background-color: bisque;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi01.php">Pagina 1</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi02.php">Pagina 2</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi03.php">Pagina 3</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi04.php">Pagina 4</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi05.php">Pagina 5</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi06.php">Pagina 6</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi7.html">Pokedex</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi08.html">Peliculas API</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi09.html">Dragon Ball API</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi10.html">Harry Potter API</a><br>
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi11.html">Rick and Morty API</a><br>
                        </div>
                    </li>

                </ul>
            </div>
            
        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 183, 224); font-family: 'Me and your mother', sans-serif;">4-A PROGRAMACION</h1>
        <p class="lead"  style="text-align: center;">SubModulo - Implementa Base de Datos Realacionales En Un Sistema De Información</p>
        <hr class="my-4">
        <p style="text-align: center;">Joshua Rodriguez
        </p>
        <p class="lead">
        </p>

</div>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color:rgb(64, 28, 196);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">Mostrar Datos</h1>

        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(18, 92, 253);
            }
            
            tr:nth-child(even) {
                background-color: rgb(92, 159, 247);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(0, 159, 187);
                color: white;
            }


        </style>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "Agencia de Vehiculos";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `Vehiculos`"; 
        $resultado = $conexion->query($sql);
        ?>

        <div class = "container">
            <h1 class="display-4 font" style="text-align: center;">Base de datos VAC</h1>

            <?php if($resultado->num_rows >0):?>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Año de Salida</th>
                        <th>modelo</th>
                        <th>Pais de Origen</th>
                    </tr>

                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['marca']; ?></td>
                        <td><?php echo $fila['año de salida']; ?></td>
                        <td><?php echo $fila['modelo']; ?></td>
                        <td><?php echo $fila['pais de origen']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
                <?php else: ?>
                    <p>No se encontraron los estudiantes</p>
                <?php endif; ?>
        </div> </div>
</body>
</html>