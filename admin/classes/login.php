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


    public function todos_registro($sql){
        $exc = conectar::prepare($sql);
        $exc->execute();
        return $exc->fetchAll();
    }

}
?>