<?php

class Users_model extends CI_Model{

    //Função construtora do banco
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //Função que verifica os dados do LOGIN
    public function get_user_data($user_login){

        $this->db
        ->select("user_id, password_hash, user_full_name, user_email")
        ->from("users")
        ->where("user_login", $user_login);

        $resultado = $this->db->get();

        if ($resultado->num_rows() > 0){
            return $resultado->row();
        }else{
            return NULL;
        }
    }

    //Função que traz informação do USUARIO
    public function get_data ($id){

        $this->db->from("users");
        $this->db->where("user_id", $id);
        return  $this->db->get();
    }

    //Função que insere o cadastro na tabela
    public function insert($data){

        $this->db->insert("users", $data);
    }

    //Função que atualiza os dados
    public function update($id, $data){
        $this->db->where("user_id", $id);
        $this->db->update("users", $data);
    }

    //Função que verifica se a informação está duplicada
    public function is_duplicated($field, $value, $id = NULL){

        if(!empty($id)){
            $this->db->where("user_id <>", $id);
        }

        $this->db->from("users");
        $this->db->where($field, $value);
        return $this->db->get()->num_rows() > 0; //Caso tenha retorno está duplicado

    }
}
