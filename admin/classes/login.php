<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 29/06/2015
 * Time: 07:57
 */
require_once "config/db.php";

class login extends dbconect {
    /*Tabela Login*/
    private $log_id;
    private $log_nome;
    private $log_email;
    private $log_usuario;
    private $log_senha;
    private $log_nivel;
    private $log_data_cad;
    private $admin_adm_id;
    /*Tabela admin*/
    private $adm_user_cad;

   /*Tabelas*/
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
    public function getLog_nivel(){
        return $this->log_nivel;
    }
    public function setLog_nivel($log_nivel){
        $this->log_nivel = $log_nivel;
    }
    public function getLog_data_cad(){
        return $this->log_data_cad;
    }
    public function setLog_data_cad($log_data_cad){
        $this->log_data_cad = $log_data_cad;
    }
    public function getAdmin_adm_id(){
        return $this->admin_adm_id;
    }
    public function setAdmin_adm_id($admin_adm_id){
        $this->admin_adm_id = $admin_adm_id;
    }
    //Nome do admin cadastrando.
    public function getAdm_user_cad(){
        return $this->adm_user_cad;
    }
    public function setAdm_user_cad($adm_user_cad){
    $this->adm_user_cad = $adm_user_cad;
    }
    // Fim do block */
    private $sql_listar_todos  = 'SELECT * FROM login';
    private $sql_logar_usuario = 'SELECT * FROM login WHERE log_usuario = ? AND  log_senha = ?';

    public function log_listar_all(){
        $exct = dbconect::prepare($this->sql_listar_todos);
        $exct->execute();
        return $exct->fetchAll();
    }

    public function log_usuario(){
        $exc =dbconect::prepare($this->sql_logar_usuario);
        $exc->bindParam(1,$this->log_usuario);
        $exc->bindParam(2,$this->log_senha);
        $exc->execute();
        return $exc->rowCount();
    }


}
?>