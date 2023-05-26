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
    echo '<select name="g" id="color" onchange="actualizar()">';
    echo '<option value="$grados">-</option>';

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

if(isset($_GET['g']) && isset($_GET['m'])){
    $grados = $_GET['g'];
    $matricula = $_GET['m'];
    $hayGet="en GET no había cosas:";
}
else{
    $grados = 0;
    $matricula = "0000-AAA";
    $hayGet="en GET no había nada, se han asignado automaticamente valores iniciales:";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    img{
        filter: hue-rotate(<?php echo $grados ?>deg);
    }
    </style>
</head>
<body>



<div class="chivato">
    <div>
    <h4>Traido del GET</h4>
    <p>GET?: <?php echo $hayGet;?></p>
    <p>Grados: <?php echo $grados;?></p>
    <p>Matrícula: <?php echo $matricula;?></p>
</div>
<div>
    <h3>Hora mismo</h3>
    <p>Valor actual de Grados:<span id="vgrados"></span></p>
    <p>Valor actual de Matrícula:<span id="vmatricula"></span></p>
    <p>Valor actual de la URL:<span id="vurl"></span></p>
    </div>
</div>

<h1>De qué color quieres tu coche</h1>

<form action="" method="get">
    <label for="color">Seleccione color</label>
    <?php select_colores(); ?>

    <label for="matricula">Matricula</label>
    <input type="text" id="matricula" name="m" onchange="actualizar()" value="<?php echo $matricula ?>">

    <!-- <input type="submit" value="Dame mi coche"> -->
    <input type="button" onclick="actualizar()" value="Actualizar">
</form>
    
<a href="#" id="urlGET">Generar URL</a>
<div class="coche">
<p id="mimatricula">Porfavor inserte matrícula</p>
<img src="img/coche2.jpg" id="miCoche">
</div>

<script>
    let nummatricula="<?php echo $matricula ?>";
    let gradosColor=<?php echo $grados ?>;

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
    document.getElementById('urlGET').innerText=miURL;

    // Enviar a Chivato
    document.getElementById('vmatricula').innerText=nummatricula;
    document.getElementById('vgrados').innerText=gradosColor;
    document.getElementById('vurl').innerText=miURL;


    }


actualizar();
    

</script>
</body>
</html>