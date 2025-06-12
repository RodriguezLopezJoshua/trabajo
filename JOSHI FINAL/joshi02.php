<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag joshi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <body>
    <nav class="navbar navbar-light" style="background-color:rgb(255, 7, 48)">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="background-color: bisque;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white"
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
                            <a class="dropdown-item" href="/JOSHI FINALL/joshi06.html">Pokedex</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcial 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/vac/joshi07.html">Peliculas API</a><br>
                            <a class="dropdown-item" href="/vac/joshi08.html">Dragon Ball API</a><br>
                            <a class="dropdown-item" href="/vac/joshi09.html">Harry Potter y Rick and Morty API</a><br>
                            <a class="dropdown-item" href="/vac/justin10.html">Harry Potter API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h3  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 91, 224); font-family: 'Bungee Outline', sans-serif">Mostrar los datos</h3>

              

<h1 class="display-4 font" style="text-align: center;
        background-color:">F</h1>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "Agencia de Vehiculos";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `aviones`";
        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Id</th><th>Nombre</th><th>Modelo</th><th>Pais</th><th>Operadores</th><th>Numero de serie</th>
            </tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["marca"] . "</td><td>" . 
                 $row["año de salida"] . "</td><td>" . $row["modelo"] . "</td><td>" . $row["pais de origen"]."</td></tr>";
        }
        echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();

        
        ?>

    </div>

</body>
</html>