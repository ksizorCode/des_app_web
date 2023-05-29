<? include '_header.php'; ?>

<?php
// Creamos la variable en algún momento

session_start();
$_SESSION['nombre'] = 'admin';
$_SESSION['rol'] = 'admin';

// Comprobamos si existe con isset()
if (isset($_SESSION['nombre'])) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'];
    echo '<p>Puedes acceder a la zona  <a href="privado.php">Privada</p>';
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}

?>

<? include '_footer.php'; ?>