<? include '_header.php'; ?>


<?php

// Creamos la variable en algún momento
session_start();

// Comprobamos si existe con isset()
if (isset($_SESSION['nombre']=="admin")) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'];
    echo '<p>Puedes acceder al área privada aquí: <a href="privado.php">Priadisimo</a></p>';
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: expulsado.php');
    die();
}

?>

<? include '_footer.php'; ?>