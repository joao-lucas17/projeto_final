<?php


class Primeiro_controlador extends CI_Controller {
    
    public function index(){
        echo "Executei a função index";
    }

        public function ola(){
        echo "Seja bem vindo";
    }
    
    public function digaOla($nome){
        echo "Bem vindo $nome";
    }
    
}

?>