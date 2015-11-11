<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 29/06/2015
 * Time: 07:57
 */
require_once "config/conectar.php";

class login extends conectar
{
    public $log_tab_login = "login";
    private $log_id;
    private $log_nome;
    private $log_email;
    private $log_usuario;
    private $log_senha;
    private $log_usuario_cad;
    private $log_data_cad;

    public function getLog_id(){
        return $this->log_id;
    }
    public function setLog_id($log_id){
        $this->log_id = $log_id;
    }
    public function getLog_nome(){
        return $this->log_nome;
    }
    public function setLog_nome($log_nome){
        $this->log_nome = $log_nome;
    }
    public function getLog_email(){
        return $this->log_email;
    }
    public function setLog_email($log_email){
        $this->log_email = $log_email;
    }
    public function getLog_usuario(){
        return $this->log_usuario;
    }
    public function setLog_usuario($log_usuario){
        $this->log_usuario = $log_usuario;
    }
    public function getLog_senha(){
        return $this->log_senha;
    }
    public function setLog_senha($log_senha){
        $this->log_senha = $log_senha;
    }
    public function getLog_usuario_cad(){
        return $this->log_usuario_cad;
    }
    public function setLog_usuario_cad($log_usuario_cad){
        $this->log_usuario_cad = $log_usuario_cad;
    }
    public function getLog_data_cad(){
        return $this->log_data_cad;
    }
    public function setLog_data_cad($log_data_cad){
        $this->log_data_cad = $log_data_cad;
    }

    public function todos_registro($sql){
        $exc = conectar::prepare($sql);
        $exc->execute();
        return $exc->fetchAll();
    }
}

?>