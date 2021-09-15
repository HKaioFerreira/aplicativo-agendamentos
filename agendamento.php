<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="bootstrap/js/bootstrap.js"></script>
        <title>Sistema de Agendamento</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="consultar.html">Consultar</a>
                    </li>
                    <li>
                        <a class="nav-link" href="editar.html">Editar</a>
                    </li class="nav-item">
                </ul>
            </div>
        </nav>
            <div class="card-body">
        <h5>Cadastrar - Contatos Agendados</h5>
        <p>Sistema utilizado para agendamento de serviços</p>
            <div class="form-group">
              <p>
                <form method="post" action="ControllerCadastro.php" id="form" name="form">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome:</label>
                        <input type="text" class="form-control" name="txtnome" required id="txtNome">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone:</label>
                        <input type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Origem:</label>
                        <select class="form-control" required name="opcao" id="txtOrigem">
                            <option>Celular</option>
                            <option>Fixo</option>
                            <option>Whatsapp</option>
                            <option>Facebook</option>
                            <option>Instagram</option>
                            <option>Google Meu Negocio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data do Contato:</label>
                        <input type="date" class="form-control" required name="data" id="txtDataContato">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observação</label>
                        <textarea class="form-control" name="obs" id="txtObservacao" rows="3"></textarea>
                    </div>
                    <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
                </form>
</p>
        </div>
    </div>
    </body>

</html>