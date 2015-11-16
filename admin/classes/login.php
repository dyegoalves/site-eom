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
    private $slt  = 'SELECT * FROM login';
    private $slul = 'SELECT log_nivel FROM login WHERE log_usuario = ?';
    private $slu  = 'SELECT * FROM login WHERE log_usuario = ? AND  log_senha = ?';
    private $sl1  = 'SELECT * FROM login WHERE  log_usuario = ?';
    private $scu  = 'INSERT INTO login (log_nome, log_email, log_usuario, log_senha, log_nivel, log_data_cad, admin_adm_id )
                     VALUES(?,?,?,?,?,?,?)';

    public function listar_t(){
        $exc = dbconect::prepare($this->slt);
        $exc->execute();
        return $exc->fetchAll();
    }
    public function listar_1(){
        $exc = dbconect::prepare($this->sl1);
        $exc->bindValue(1,$this->log_usuario);
        $exc->execute();
        return $exc->fetch();
    }
    public function listar_a_m(){
        $exct = dbconect::prepare($this->slul);
        $exct->bindValue(1,$this->log_usuario);
        $exct->execute();
        return $exct->fetchColumn();
    }
    public function listar_u(){
        $exc = dbconect::prepare($this->slu);
        $exc->bindValue(1,$this->log_usuario);
        $exc->bindValue(2,$this->log_senha);
        $exc->execute();
        return $exc->rowCount();
    }

    public  function cadastrar_u(){
        $exct = dbconect::prepare($this->scu);
        $exct->bindValue(1,$this->log_nome);
        $exct->bindValue(2,$this->log_email);
        $exct->bindValue(3,$this->log_usuario);
        $exct->bindValue(4,$this->log_senha);
        $exct->bindValue(5,$this->log_nivel);
        $exct->bindValue(6,$this->log_data_cad);
        $exct->bindValue(7,$this->adm_user_cad);// so pode cadastrar se esse cara estiver cadastro na tabela admin
        return $exct->execute();
    }



}
?>