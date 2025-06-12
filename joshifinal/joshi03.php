<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joshuaaa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <body>
    <nav class="navbar navbar-light" style="background-color:rgb(114, 7, 255)">
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
                            <a class="dropdown-item" href="/vac/justin07.html">Peliculas API</a><br>
                            <a class="dropdown-item" href="/vac/justin08.html">Dragon Ball APi</a><br>
                            <a class="dropdown-item" href="/vac/justin09.html">Harry Potter y Rick and MOrty API</a><br>
                            <a class="dropdown-item" href="/vac/justin10.html">Harry Potter API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;">Mostrar Datos</h1>
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
                border-bottom: 1px solid rgb(3, 11, 122);
            }
            
            tr:nth-child(even) {
                background-color: rgb(51, 201, 176);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(11, 25, 216);
                color: white;
            }
 
        </style>
       <style>
            .container1{
                width:50%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-aling:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
            form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                boder: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff
            }
            input[type="submit"] {
            padding:10px;
            background-color:rgb(112, 218, 120);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: 0.3;
            }
            input[type="submit"]:hover {
                background-color:#282a36;
            }
        </style>

        <h1 class="display-4 font" style="text-align: center;">VAC</h1>
        </div>

<div class="container1">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">

<label for="nombre">Nombre: </label>
<input type="text" id="nombre" name="nombre" requiered><br>

<label for="marca">Marca:</label>
<input type="text" id="marca" name="marca" requiered><br>

<label for="año salida">Año de salida:</label>
<input type="text" id="añosalida" name="añosalida" requiered><br>

<label for="modelo">modelo:</label>
<input type="text" id="modelo" name="modelo" requiered><br>

<label for="pais_origen">pais de origen:</label>
<input type="text" id="pais_origen" name="pais_origen" requiered><br>

<input type="submit" value="Agregar registro">

</form>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "Agencia de Vehiculos";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        function insertarnombre($conexion){

       if($_SERVER["REQUEST_METHOD"]=="POST") {

        var_dump($_POST);
        
        $nombre = $conexion->real_escape_string($_POST ["nombre"]);
        $modelo = $conexion->real_escape_string($_POST ["marca"]);
        $pais = $conexion->real_escape_string($_POST ["año de salida"]);
        $operadores = $conexion->real_escape_string($_POST ["modelo"]);
        $numero_serie = $conexion->real_escape_string($_POST ["pais de origen"]);

        $sql = "INSERT INTO aviones (nombre, marca, año de salida, modelo, pais de origen) VALUES ('$nombre', '$marca', '$año',
        '$modelo', '$paisorigen' )";
        if($conexion->query($sql)==TRUE){
            echo "<p class='success'>Nuevo nombre agregado con exito. </p>";

header("location: " . $_SERVER['PHP_SELF']);
exit();

        }else{
            echo "<p class='error'>error al egregar nombre:" . $conexion->error . "</p>";
        }
    }
} insertarnombre($conexion);
        
$sql = "SELECT * FROM `Vehiculos`"; 
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<tr><th>id</th><th>Nombre</th><th>Modelo</th><th>Pais</th><th>Operadores</th><th>Pais de Origen</th>
    </tr>";
    while($row = $resultado->fetch_assoc()){
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["marca"] . "</td><td>" . 
         $row["año de salida"] . "</td><td>" . $row["modelo"] . "</td><td>" . $row["pais de origen"] . "</td></tr>";
}
echo "</table>";
}else{
    echo "<p>NO se encontro</p>";
}
$conexion->close();
        ?>

    </div>
        
</body>
</html>