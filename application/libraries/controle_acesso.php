<?php


class controle_acesso {
    public function controlar(){
        $CI = &get_instance();
        $user = $CI->session->userdata("usuario");
        if(empty($user)){
            redirect("login");
        }
    }
}
