<?php
session_start();
if(!isset($_SESSION['logado'])|| $_SESSION['logado'] != 'logado' || (!isset($_SESSION['adm']) || $_SESSION['adm'] != 'adm')):
    // recupera o nome do identificador de sessão
        $cookie_name = session_name();
    // elimina todas as informações relacionadas à sessão atual
        session_destroy();
    // encerra o manipulador de sessão
        session_write_close();
    // limpa o cookie identificador de sessão
        setcookie($cookie_name, '', time()-20);
    header("location: ../index.php");
endif;
?>
<h1>Oi bem vindo Administrador</h1>