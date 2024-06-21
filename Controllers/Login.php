<?php
class Login extends Controllers{
    public function __construct() {
        parent::__construct();   
        //echo "Controlador Login";     
    }
    public function Login(){
  
        $data['tag_page'] = "Inicia Sesión";
        $this->view->getView($this, "Login", $data);
    
    }
}