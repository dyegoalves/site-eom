<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 12/11/2015
 * Time: 09:48
 */
    require_once "classes/login.php";
    $exc_log = new login();
    $log_usuario = $_POST['log_usuario'];
    $log_senha = $_POST['log_senha'];
    $operecao = $_POST['Entrar'];

    if (isset($operecao) && ($operecao == 'Entrar')):
        $exc_log->setLog_usuario($log_usuario);
        $exc_log->setLog_senha($log_senha);
        $exc_log->setLog_nivel($exc_log->listar_a_m());
        if($exc_log->listar_u()==1):
            if($exc_log->getLog_nivel() == 'admin'):
                header("location:../admin/index.php");
                $_SESSION['logado'] = "logado";
                $_SESSION['adm']    = 'adm';
                $_SESSION['mod']    = 'mod';
            else:
                header("location:area_mod/index.php");
                $_SESSION['logado'] = "logado";
                $_SESSION['Entrar'] = $_POST['Entrar'];
                $_SESSION['mod']    = 'mod';
                unset($_SESSION['adm']);
            endif;
        else:
            include "../template/modal2.php";
        endif;
    endif;
?>

