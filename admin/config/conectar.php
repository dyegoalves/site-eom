<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 11/11/2015
 * Time: 03:29
 */

class conectar {

    public static  $con;

    public static  function conectar_db(){
        $db_host = 'localhost';
        $db_name = 'eom_empregos';
        $db_user = 'root';
        $db_pass = '';

        try{
            self::$con = new PDO('mysql:host='.$db_host.';'.$db_name.'',$db_user,$db_pass);
        }
        catch (PDOException $erro){
            echo 'Erro ao se conectar a base de dados ' . $erro->getMessage();
        }
        return self::$con;
    }

    public static function  prepare($sql){
        return  $exc = self::conectar_db()->prepare($sql);
    }


}
