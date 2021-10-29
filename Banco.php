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
        $stmt->bind_param("sssss",$nome,$telefone,$opcao,$data,$obs);
        if($stmt->execute()== TRUE){
            return true;
        }
        else{
            return false;
        }
    }

public function getAgendamentos($id){
    try{
        if(isset($id) && $id > 0){
            $stmt = $this->mysqli->query("SELECT * FROM agendamento WHERE id='".$id."';");
        }else{
            $stmt = $this->mysqli->query("SELECT * FROM agendamento;");
        }
        
        $lista = $stmt->fetch_all(MYSQLI_ASSOC);
        $f_lista = array();
        $i = 0;
        foreach($lista as $l){
            $f_lista[$i]['id'] = $l['id'];
            $f_lista[$i]['txtnome'] = $l['nome'];
            $f_lista[$i]['telefone'] = $l['telefone'];
            $f_lista[$i]['opcao'] = $l['origem'];
            $f_lista[$i]['data'] = $l['data_consulta'];
            $f_lista[$i]['obs'] = $l['observacao'];
            $i++;
        }
        return $f_lista;
    }catch(Exception $e){
        echo "Ocorreu um erro ao tentar Buscar Todos. " . $e;
    }
}

public function updateAgendamentos($id,$nome,$telefone,$opcao,$data,$obs){
   $stmt = $this->mysqli->query("UPDATE agendamento SET `nome` = '" . $nome . "', `telefone` =  '" . $telefone . "', `origem` =  '" . $opcao . "', `data_consulta` =  '" . $data . "', `observacao` =   '" . $obs . "' WHERE `id` =  '" . $id . "';");
    if( $stmt > 0){
        return true ;
    }else{
        return false;
    }
}
}    
?>