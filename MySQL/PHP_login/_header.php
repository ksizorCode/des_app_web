<?php




?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>TecnoHome</h3>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php
                // abrimos el sistema de sesiones
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') { ?>
                    <li><a href="privado.php">Privado</a></li>
                <?php } ?>
                <li><a href="contacto.php">Contacto</a></li>
                
                <?php
                if (isset($_SESSION['rol']) &&  $_SESSION['rol']== 'admin') { ?>
                    <li><a href="cerrarsesion.php">Cerrar Sesión</a></li>
                    <? } 
                else{?>
                    <li><a href="login.php">Iniciar Sesión</a></li>

                <?      } ?>
            </ul>
        </nav>
    </header>
    <main>