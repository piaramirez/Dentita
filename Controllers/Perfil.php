<?php
class Perfil extends Controllers{
    public function __construct() {
        parent::__construct();
        //var_dump("Controlador : Perfil");
        
    }
    //Controlador
    public function Perfil(){
        //echo "Método perfil";
        $data['tag_page'] = "Usuarios";
        $data['tag_page'] = "Pruebas de perfil";
        $data['id_Privilegio'] = 1;
        $this->view->getView($this, "Perfil", $data);
       
    }
    //Metodo
    public function Usuarios(){
        //echo "Método Usuario";
        $data['tag_page'] = "Usuarios";
        $this->view->getView($this, "Usuarios", $data);
        

       
    }
    //Submetoto
    public function CrearUsuarios($parametros){
        //echo "sub-método CrearUsuarios";
        $data['tag_page'] = "Usuarios";
        require_once 'Views/CrearUsuarios.php';
    }

}