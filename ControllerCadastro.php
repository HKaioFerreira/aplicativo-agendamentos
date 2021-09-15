<?php 
    require_once("cadastro.php");
    class cadastroController{
        private $cadastro;

        public function __construct(){
            $this->cadastro = new Cadastro();
            $this->incluir();
        }
        private function incluir(){
            $this->cadastro->setNome($_POST['txtnome']);
            $this->cadastro->setTelefone($_POST['telefone']);
            $this->cadastro->setOpcao(date('Y-m-d',strtotime($_POST['opcao'])));
            $this->cadastro->setData($_POST['data']);
            $this->cadastro->setObs($_POST['obs']);
            $result = $this->cadastro->incluir();
            if($result>=1){
                echo "<script>alert('Registro incluído com sucesso!');document.location='agendamento.php'</script>";
            }
            else{
                echo "<script>alert('Erro ao gravar registro');</script>";
            }
        }
    }
new cadastroController();
?>