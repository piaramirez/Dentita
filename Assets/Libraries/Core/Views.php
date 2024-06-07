<?php
class Views{
    public function getView($controller, $view, $data=""){
        $controller = get_class($controller);
        
        //echo "esta es la vista:".$controller." </br>";
        if($controller == "home"){
            $view = "Views/".$view.".php";
            echo "esta es la vista:".$view." </br>";
        }else if($controller == "Perfil"){
            $view = "Views/".$view.".php";
            //echo "esta es la vista:".$view." </br>";
        }else if($controller == "Usuarios"){
           // echo "esta es la vista:".$view." </br>";
            $view = "Views/".$view.".php";
            //echo "esta es la vista:".$view." </br>";
        }else if($controller == "CrearUsuarios"){
           
            $view = "Views/".$view.".php";
            //echo "esta es la vista:".$view." </br>";
        }else{
            $view = "Views/".$controller."/".$view.".php";
        }

        require_once($view); 
    }
  
}