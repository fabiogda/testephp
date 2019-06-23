<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {
    
    // Função que cria SESSÃO ==============================
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }

    //Função que destroy a sessão, encerrando acesso =======
    public function logoff(){
        $this->session->sess_destroy();
        header("Location: " . base_url() . "/Home"); //Redireciona para o controller Home após deslogar e como não havera sessão volta a tela de login
    }

    //Função para LOGAR ====================================
    public function ajax_login(){
        
        //Impede que a requisição seja acessada diretamente
        if (!$this->input->is_ajax_request()){
            exit ("Você foi impedido de acessar esta requisição diretamente");
        }
        
        //Metodo AJAX
        $json = array() ;
        $json["status"] = 1 ;
        $json["error_list"] = array();
        
        //Atributos passados via POST do formulário login_form 
        $user_login = $this->input->post("user_login"); //usuario [*****]
        $password = $this->input->post("password"); //senha       [*****]
        
        //Verifica se o Login está vazio
        if(empty($user_login)){
            $json["status"] = 0;
            $json["error_list"]["#user_login"] = "Usuário não pode ser vazio!";
            //se estiver com algum valor, consultamos no banco
        } else {
            $this->load->model("users_model");
            $result = $this->users_model->get_user_data($user_login);

            //Caso o Login exista, extraimos o ID e a SENHA
            if($result){
                $user_id = $result->user_id;
                $password_hash = $result->password_hash;
                
                //Verifica se a senha confere com o login, estando certo é criado a sessão
                if (password_verify($password, $password_hash)){
                    $this->session->set_userdata("user_id", $user_id);
                } else {
                    //se a senha estiver errada
                    $json["status"] = 0;  
                }
                //se as informações não coincidirem
            }else{
                $json["status"] = 0;
            }

            //quais quer infomações não estando de acordo é considerado errado
            if($json["status"] == 0){
                $json["error_list"]["#btn_login"] = "Usuário/senha incorretos";
            }
        } 
        //transforma a requisição em string
        echo json_encode($json);
    }

    //Função que exibe os dados de quem está logado ========
    //Retorna a informação no modal na pagina restrito =====
    public function ajax_get_user_data(){

        //Impede que a requisição seja acessada diretamente
        if (!$this->input->is_ajax_request()){
            exit ("Você foi impedido de acessar esta requisição diretamente");
        }

        //Metodo Ajax
        $json = array();
        $json["status"] = 1;
        $json["input"] = array();

        //Carrega a model Users
        $this->load->model("users_model");

        //recebe o ID de quem está logado
        $user_id = $this->input->post("user_id");

        //Guarda os dados na variavel data
        $data = $this->users_model->get_data($user_id)->result_array()[0];

        //$Json significa os campos do form
        //$data preenche os campos com a informação do banco
        $json["input"]["user_id"] = $data["user_id"];                   // ID 
        $json["input"]["user_login"] = $data["user_login"];             // user_login
        $json["input"]["user_full_name"] = $data["user_full_name"];     // user_full_name
        $json["input"]["user_email"] = $data["user_email"];             // user_email
        $json["input"]["user_email_confirm"] = $data["user_email"];     // user_email
        $json["input"]["password"] = "";                                // password_hash
        $json["input"]["password_confirm"] = "";                        // password_hash

        //converte a requisição para string
        echo json_encode($json);
    }

    //Função que realiza o cadastro ========================
    public function ajax_save_user(){
        //Verifica se este controller está sendo acessado diretamente
        //Se for passado por JSON é permitido o acesso.
        if (!$this->input->is_ajax_request()){
            exit("Você foi impedido de acessar a requisição diretamente!");
        }
        //Inserção do metodo AJAX para verificar via JSON
        $json = array();
        $json["status"] = 1;
        $json["error_list"] = array();
        //carrega a model USERS
        $this->load->model("users_model");
        //recebe todos os campos do FORMULÁRIO ****
        $data = $this->input->post();
        //Verifica se o campo NOME do USUARIO está vazio / duplicado
        if (empty($data["user_login"])){
            $json["error_list"]["#user_login"] = "Login é obrigatório!";
        } else {
            if ($this->users_model->is_duplicated("user_login", $data["user_login"], $data["user_id"])) {
                $json["error_list"]["#user_login"] = "Este login já existe!";
            }
        }
        //Verifica se o campo NOME está vazio 
        if (empty($data["user_full_name"])){
            $json["error_list"]["#user_full_name"] = "Nome do usuário é obrigatório!";
        }
        //Verifica se o campo E-MAIL está vazio / duplicado / repetido corretamente
        if (empty($data["user_email"])){
            $json["error_list"]["#user_email"] = "E-mail é obrigatório!";
        } else {
            if ($this->users_model->is_duplicated("user_email", $data["user_email"], $data["user_id"])) {
                $json["error_list"]["#user_email"] = "E-mail já existe!";
            } else {
                if ($data["user_email"] != $data["user_email_confirm"]) {
                    $json["error_list"]["#user_email"] = "";
                    $json["error_list"]["#user_email_confirm"] = "E-mails não conferem";
                }
            }
        }
        //Verifica se o campo SENHA está vazio / repetido corretamente
        if (empty($data["password"])){
            $json["error_list"]["#password"] = "Senha é obrigatório!";
        } else {
            if ($data["password"] != $data["password_confirm"]) {
                $json["error_list"]["#password"] = "";
                $json["error_list"]["#password_confirm"] = "Senhas não conferem";
            }
        }
        //Verifica se houve algum erro durante o processo
        if (!empty($json["error_list"])){ //se nao estiver vazio, tendo conteudo dentro do ERROR_LIST tem que ser 0
            $json["status"] = 0;
        } else{
            //"cria" um campo no formulário com nome password_hash e transforma a senha em uma HASH
            $data["password_hash"] = password_hash($data["password"], PASSWORD_DEFAULT);
            //Remove esses campos que irão para o banco de dados
            unset($data["password"]);
            unset($data["password_confirm"]);
            unset($data["user_email_confirm"]);
            //Verifica se será INSERIDO ou ATUALIZADO no banco
            //se estiver vazio INSERE
            if (empty($data["user_id"])){
                $this->users_model->insert($data);
            } else {
                //senão ATUALIZA no banco (para atualizar é necessário o ID, este ID é gerado para cada formulário salvo no INPUT HIDDEN abaixo da tag FORM)
                $user_id = $data["user_id"];
                unset($data["user_id"]); //remove o hash do ID gerado para o novo formulário e mantem armazenado temporariamente na variavel $trampo_id
                $this->users_model->update($user_id, $data); //$data significa todos os campos do formulário, não pode conter o ID junto, por isso é separado acima
            }
        }
        echo json_encode($json);
    }
}