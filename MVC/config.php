<?php

/*
    Tema 1: fourty
    Tema 2: augustheme

*/

$lang ="es-ES";
$miTheme ="fourty";
$miURL="http://desappweb.local/des_app_web/MVC";
$miTitulo="Mi Página Web";
$separador="|";
$miColor="tan";
$miFuente="Arial, sans-serif";

$miMenu = [
    ['Inicio','index.php','0','Página de Inicio','ini'],
    ['Servicios','servicios.php','0','Página de Inicio','ser'],
    ['Productos','productos.php','0','Página de Inicio','pro'],
    ['Contacto','contacto.php','0','Página de Inicio','cnt'],
    ['Facebook','https://facebook.com','1','Página de Facebook','fb']
];



/* * * * * * * * * * * * * * * * * * * * */

// esto en wp se llama get_header();
function obtener_cabecera(){
    global $miTheme;

    $elemento ='themes/'.$miTheme.'/header.php'; 
    include $elemento;
}

// esto en wp se llama get_footer();

function obtener_pie(){
    global $miURL;
    global $miTheme;

    $elemento ='themes/'.$miTheme.'/footer.php'; 
    include $elemento;
}


function el_titulo(){
    global $miTitulo;
    echo $miTitulo;
}


function ruta_a_theme(){
    global $miTheme;

    $elemento ='themes/'.$miTheme; 
    echo $elemento;
}



//Título del apartado + título de la página:
// Inicio - Mi Página Web

function apartadoyTitulo(){
    global $miTitulo;
    global $miTituloApartado;
    global $separador;

    $titulos= $miTituloApartado." ".$separador." ". $miTitulo;

    echo $titulos;
}

//Constructor de Menú
function menuBuilder(){
    global $miMenu;

    echo '<ul class="menu">';
    foreach($miMenu as $e){
        echo '<li>';
        echo '<a href="'.$e[1].'" class="'.$e[4].'">'.$e[0].'</a>';
        echo '</li>';

    }
    echo '</ul>';

}


//Cargar Color y Fuente principal
function mainColor(){
    global $miColor;
    global $miFuente;
    echo "<style>:root{--c:".$miColor."; --ff:".$miFuente.";}</style>";
}

function finHead(){
mainColor();
}


function finFooter(){
}

function lang(){
    global $lang;
    echo $lang;
}