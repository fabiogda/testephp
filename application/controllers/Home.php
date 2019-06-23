<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Função que cria SESSÃO ==============================
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }

    // Função que verifica se a SESSÃO foi criada ==========
    public function index() {
        
        //Se a SESSÃO foi criada exibe o conteudo abaixo
        //Carrega apenas os scripts necessários na pagina restrita
        if ($this->session->userdata("user_id")){
            $data = array(
                "scripts" => array(
                    "util.js",
                    "restrito.js",
                ),
                "user_id" => $this->session->userdata("user_id")
            );
            $this->template->show("restrito.php", $data);
        //Senão foi criada a SESSÃO, exibe este
        //Carrega apenas os scripts necessários na pagina home
        } else {
            $data = array (
                "scripts" => array(
                    "util.js",
                    "login.js",
                ),
            );
        $this->template->show("home.php", $data);
        }
    }
}
