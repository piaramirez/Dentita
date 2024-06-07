<?php
require_once("Config/Config.php");
require_once("Helpers/Helpers.php");
    /**
     * Creamos la función para recibir los parámetros de la URL
    */
    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $metodo = isset($arrUrl[1]) ? $arrUrl[1] : $controller;
    $submetodo = isset($arrUrl[2]) ? $arrUrl[2] : "";
    $parametros = [];
    if (isset($arrUrl[3])) {
        $parametros = array_slice($arrUrl, 3);
    } elseif (isset($arrUrl[2]) && !$submetodo) {
        // Si no hay sub-método, consideramos parámetros a partir del tercer elemento
        $parametros = array_slice($arrUrl, 2);
    }
    $parametros = implode(',', $parametros);
    /*
       echo "Controlador: $controller<br>";
        echo "Método: $metodo<br>";
        echo "Sub-método: $submetodo<br>";
        echo "Parámetros: $parametros<br>";
    */
    

    require_once("Assets/Libraries/Core/Autoload.php");
    require_once("Assets/Libraries/Core/Load.php");



?>