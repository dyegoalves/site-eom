<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 14/11/2015
 * Time: 00:52
 */

session_start();
if(!isset($_SESSION['logado'])
    || $_SESSION['logado'] != 'logado'
    || $_SESSION['mod'] != 'mod'):
   header("location: ../../index.php");
endif;

?>
<h1>Bem vindo Moderador</h1>