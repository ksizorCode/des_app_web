<?php
// CONSULTANDO LA BASE DE DATOS DE VERDAD
function select_colores(){
  // Create connection
  $conn = new mysqli("localhost","root", "root", "concesionario");
  // Check connection
  if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}
  // almacenamos en una varable la consulta que vamos a hacer
  $sql = "SELECT * FROM coches WHERE disponible = 1";
  // hacemos la consulta
  $result = $conn->query($sql);

  //si hay mas de 0 resultados...
  if ($result->num_rows > 0) {

      // abrimos el texto HTML select
    echo '<select name="g" id="color">';
    //mientras haya datos me asocias cada "fila" de datos con una iteración
    while($row = $result->fetch_assoc()) {
      //metes el texto HTML pa crear un option con lso datos de esa "pasada" o interación
      echo '<option value="'.$row["grados"].'">'.$row["color"].'</option>';
    }
    // cerramos el texto HTML select
    echo '</select>';
  } 
  //si hay no hay más de 0 resultados...
  else {
    echo "Lo sentimos, solo pudes comprar un coche gris";
  }
  $conn->close();
}




if(isset($_GET['c']) & isset($_GET['m'])){
    $grados = $_GET['c'];
    $matricula = $_GET['m'];
}
else{
    $grados =0;
    $matricula = "Porfavor Inserte Matrícula";
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
    }

    body{
        font-family:system-ui, sans-serif;
    }
    img{
        width:100%;
        filter: hue-rotate(<?php echo $grados ?>deg);
    }
    </style>
</head>
<body>

<h1>De qué color quieres tu coche</h1>
<form action="" method="get">
    <label for="color">Seleccione color</label>
    <?php select_colores(); ?>

    <label for="matricula">Insrte Numero Matricula</label>
    <input type="text" id="matricula" name="matricula" onchange="actualizar()">

    <!-- <input type="submit" value="Dame mi coche"> -->
    <input type="button" onclick="actualizar()" value="Actualizar">
</form>
    
<p id="mimatricula">Porfavor inserte matrícula</p>
<a href="#" id="urlGET">Generar URL</a>
<img src="img/coche2.jpg" id="miCoche">


<script>
    let nummatricula=<?php echo $matricula ?>";
    let gradosColor=<?php echo $grados ?>>;

    function actualizar(){
    // cargar matrícula
    nummatricula = document.getElementById('matricula').value;
    document.getElementById('mimatricula').innerHTML=nummatricula;
    
    // cargar tono del coche
    gradosColor = document.getElementById('color').value;
    document.getElementById('miCoche').style.filter = "hue-rotate(" +gradosColor+ "deg)";
    console.log(gradosColor);

    // Generar URL con GET via JS
    let miURL='js_color.php?g='+gradosColor+'&m='+nummatricula;
    document.getElementById('urlGET').href=miURL;

    }

</script>
</body>
</html>