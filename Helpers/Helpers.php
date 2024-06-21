<?php
function css(){
    return "http://localhost/Dentista/Assets/Recursos/CSS/Style.css";
}
function home(){
    return $BASE_URL;
}
function recursos(){
    return "http://localhost/Dentista/Assets/Recursos/";
}
function media(){
    return "http://localhost/Dentista/Assets/Recursos/Img/";
}
//String $nombreModal
function getModal(String $nombres){
    
    $view_modal = "Views/Modales/{$nombres}.php";
    //echo $view_modal;
    include $view_modal;
}
function generarMatricula($nombre, $apellidoPaterno) {
    // Obtener el año actual
    $año = date("Y");

    // Obtener las iniciales
    $inicialNombre = strtoupper(substr($nombre, 0, 1));
    $inicialApellidoPaterno = strtoupper(substr($apellidoPaterno, 0, 1));

    // Generar un número aleatorio de 5 dígitos
    $numeroAleatorio = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);

    // Crear la matrícula
    $matricula = $año . $inicialNombre . $inicialApellidoPaterno . $numeroAleatorio;

    return $matricula;
}

