<?php

class home extends Controllers{
    public function __construct() {
        parent::__construct();
    }
    public function home(){
        $data['tag_page'] = "Home";
        $data['page_title'] = "Pagina principal";
        $data['page_name'] = "home";
        $data['page_functions_js'] = "functions_home.js";
        $this->views->getView($this, "home", $data);
    }
}