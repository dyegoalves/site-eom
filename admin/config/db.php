<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 12/11/2015
 * Time: 15:10
 */
class dbconect{
    public function __construct(){}
    public static $intancia;
    public static  function conectdb(){
        if (!isset(self::$intancia)):
            if ($_SERVER['SERVER_NAME'] == 'localhost'):
                $dbhost = 'localhost';
                $dbname = 'banco_site_eom';
                $dbuser = 'root';
                $dbpass = '';
                $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
            else:
                $dbhost = 'mysql.hostinger.com.br';
                $dbname = 'u845660533_eombd';
                $dbuser = 'u845660533_eom';
                $dbpass = 'dyego142536';
                $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
            endif;
                try {
                    self::$intancia = new PDO($dsn, $dbuser, $dbpass);
                    self::$intancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $erro) {
                    echo "ERRO NO BANCO " . $erro->getMessage();
                }
            return self::$intancia;
        endif;
    }
    public  static  function prepare($sql){
        return self::conectdb()->prepare($sql);
    }
}
?>