<?php
/**
 * Created by PhpStorm.
 * User: Dyego
 * Date: 12/11/2015
 * Time: 15:10
 */
include_once 'base_config.php';
class dbconect extends base_config
{
    private $dsn;
    private $usuario ;
    private $senha;
    public function getDsn(){return $this->dsn;}
    public function setDsn($dsn){$this->dsn = $dsn;}
    public function getUsuario(){return $this->usuario;}
    public function setUsuario($usuario){$this->usuario = $usuario;}
    public function getSenha(){return $this->senha;}
    public function setSenha($senha){$this->senha = $senha;}

    public function conexao()
    {
        if ($_SERVER['SERVER_NAME'] == 'localhost'):
            $dbhost = 'localhost';
            $dbname = 'banco_eom';
            $dbuser = 'root';
            $dbpass = '';
            $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
            self::setDsn($dsn); self::setUsuario($dbuser);self::setSenha($dbpass);
        else:
            $dbhost = 'mysql.hostinger.com.br';
            $dbname = 'u845660533_eombd';
            $dbuser = 'u845660533_eom';
            $dbpass = 'dyego142536';
            $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
            self::setDsn($dsn); self::setUsuario($dbuser); self::setSenha($dbpass);
        endif;
        try {
            $pdo = new PDO(self::getDsn(),self::getUsuario(),self::getSenha());
        } catch (PDOException $e) {
            echo "Erro no banco de dados" . $e->getMessage();
            exit(1);
        }
        return $pdo;
    }
    public function prepare($sql){
        return $this->conexao()->prepare($sql);
    }
}
?>




