<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    // Função que exibe a tela de cadastro
    public function index(){

        //Carrega apenas os scripts necessários na pagina de cadastro
        $data = array(
            "scripts" => array(
            "util.js",
            "cadastro.js",
            ),
        );
        $this->template->show("cadastro.php", $data);        
    }
    

}
