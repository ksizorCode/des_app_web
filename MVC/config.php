<?php

/*
    Tema 1: fourty
    Tema 2: augustheme

*/

$miTheme ="augustheme";
$miURL="http://desappweb.local/des_app_web/MVC/";
$miTitulo="Otra cosa";


/* * * * * * * * * * * * * * * * * * * * */


function obtener_cabecera(){
    global $miURL;
    global $miTheme;

    $elemento ='themes/'.$miTheme.'/header.php'; 
    include $elemento;
}


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

