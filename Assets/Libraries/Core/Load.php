<?php
$controllerFile = "Controllers/".$controller.".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controllerInstance = new $controller();
    if ($metodo) {
        if (method_exists($controllerInstance, $metodo)) {
            $controllerInstance->{$metodo}($parametros);
           // echo "Metodo: $metodo";
            if ($submetodo) {
                if (method_exists($controllerInstance, $submetodo)) {
                    $controllerInstance->{$submetodo}($parametros);
                } else {
                    require_once("Controllers/Error.php");
                }
            }
        } else {
            require_once("Controllers/Error.php");
        }
    }
} else {
    require_once("Controllers/Error.php");
}
