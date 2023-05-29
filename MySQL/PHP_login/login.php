
<? include '_header.php'; ?>


<?php if(isset($_GET['m'])){ echo "<h1>Contraseña Incorrecta</h1>";} else{ echo '<h1>Inicio de Sesión</h1>';}?>

<form action="bienvenido.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario"><br>

    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass"><br>

    <input type="submit" value="acceder"><br>
    <input type="button" value="Ver Contraseña" onclick="myFunction()">
</form>

<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<? include '_footer.php'; ?>