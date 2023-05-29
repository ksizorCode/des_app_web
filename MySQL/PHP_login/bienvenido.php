
<?php
// Login abiero
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['nombre'] = 'miguel';
$_SESSION['rol'] = 'admin';
// a partir de aquí la sesión está abierta.


 include '_header.php'; 


// Comprobamos si existe con isset()
if (isset($_SESSION['nombre'])) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'].' <br>';
    echo 'tu rol es: ' . $_SESSION['rol'].' <br>';
    echo '<p>Puedes acceder a la zona  <a href="privado.php">Privada</p>';
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}

?>

<? include '_footer.php'; ?>