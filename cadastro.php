<?php
require_once("Banco.php");

class Cadastro extends Banco{

    Private $nome;
    Private $telefone;
    Private $opcao;
    Private $data;
    Private $obs;

    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setOpcao($string){
        $this->opcao = $string;
    }
    public function setData($string){
        $this->data = $string;
    }
    public function setObs($string){
        $this->obs = $string;
    }


    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getOpcao(){
        return $this->opcao;
    }
    public function getData(){
        return $this->data;
    }
    public function getObs(){
        return $this->obs;
    }

    public function incluir(){
        return $this->setAgendamentos($this->getNome(),$this->getTelefone(),$this->getOpcao(),$this->getData(),$this->getObs());
    }
}


?>