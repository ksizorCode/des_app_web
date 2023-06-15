<?php require 'config.php'?>
<?php $miTituloApartado="Inicio"; ?>
<?php obtener_cabecera(); ?>

<h1>Bienvenidos al ejemplo de Modelo Vista Controlador.</h1>
<h2>Instalación</h2>
<p>Para que todo funcione correctamente accede al archivo <strong>config.php</strong> y cambia la ruta de la variable miURL de tal manera que coincida con la dirección a la ruta actual.</p>
<p>Es decir: básicamente copia la ruta URL de la barra de direcciones y pégala para que se vea de la siguiente manera</p>
<pre>
    <code>
$miTheme ="augustheme"; // Aquí el nombre del tema a utilizar
$miURL="http://desappweb.local/des_app_web/MVC/"; //Ruta URL
$miTitulo="Otra cosa"; // título de la web

</code>
</pre>
<p>A partir de aquí es un ejemplo de texto, imágen, etc.</p>
<img src="img/001.jpg" alt="">
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, repudiandae expedita? Nulla possimus quis pariatur! Inventore illum, adipisci provident nisi esse ipsa eos, tempore incidunt laborum officiis amet porro cupiditate.</p>
<? obtener_pie(); ?>