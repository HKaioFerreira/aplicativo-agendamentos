<?php 
    require_once("cadastro.php");
    class cadastroController{
        private $cadastro;

        public function __construct(){
            $this->cadastro = new Cadastro();
            if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
                $this->incluir();
            }
        else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
        }
        private function incluir(){
            $this->cadastro->setNome($_POST['txtnome']);
            $this->cadastro->setTelefone($_POST['telefone']);
            $this->cadastro->setOpcao($_POST['opcao']);
            $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
            $this->cadastro->setObs($_POST['obs']);
            $result = $this->cadastro->incluir();
            if($result>=1){
                echo "<script>alert('Registro incluído com sucesso!');document.location='agendamento.php'</script>";
            }
            else{
                echo "<script>alert('Erro ao gravar registro');</script>";
            }
        }
        public function listar($id){
            return $result = $this->cadastro->listar($id);
        }
        private function editar($id){
            $this->cadastro->setId($id);
            $this->cadastro->setNome($_POST['txtnome']);
            $this->cadastro->setTelefone($_POST['telefone']);
            $this->cadastro->setOpcao($_POST['opcao']);
            $this->cadastro->setData(date('Y-m-d',strtotime($_POST['Data'])));
            $this->cadastro->setObs($_POST['Obs']);
            $result = $this->cadastro->editar();
            if($result >= 1){
                echo "<script>alert('Registro alterado com sucesso!');document.location='../agendamento-consulta.php'</script>";
            }else{
                echo "<script>alert('Erro ao alterar o registro!');</script>";
            }
        }
    }
new cadastroController();
?>