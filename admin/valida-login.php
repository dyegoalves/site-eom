<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 12/11/2015
 * Time: 09:48
 */
    require_once "classes/login.php";
    $exc_login = new login();
    $log_usuario = $_POST['log_usuario'];
    $log_senha = $_POST['log_senha'];
    $operecao = $_POST['Entrar'];
    if(isset($operecao) && ($operecao == 'Entrar')):
        $exc_login->setLog_usuario($log_usuario);
        $exc_login->setLog_senha($log_senha);
        if($exc_login->logar_usuario() == 1):
            header("location:index.php");
            $_SESSION['logado'] = true;
         else:
             include "../template/modal2.php";
         endif;

    endif;

?>

