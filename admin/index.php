<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false){
    header("location: ../index.php");
}
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 12/11/2015
 * Time: 15:52
 */
?>
<h1>Seja bem vindo ao Sistema</h1>
