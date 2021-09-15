<?php
date_default_timezone_set('America/Sao_Paulo');

define('BD_SERVIDOR','127.0.0.1');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','projetoweb');

class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }
    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);   
    }

    public function setAgendamentos($nome,$telefone,$opcao,$data,$obs){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamento (`nome`,`telefone`,`origem`,`data_consulta`,`observacao`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$telefone,$opcao,$data,$obs);//pode dar erro aqui
        if($stmt->execute()== TRUE){
            return true;
        }
        else{
            return false;
        }
    }
}
?>