<?php
require_once("ControllerCadastro.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>Sistema de Agendamento</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="agendamento-consulta.php">Consultar</a>
                    </li>
                    <li>
                        <a class="nav-link" href="editar.php">Editar</a>
                    </li class="nav-item">
                </ul>
            </div>
        </nav>
            <div class="card-body">
        <h5>Editar - Contatos Agendados</h5>
        <p>Sistema utilizado para agendamento de serviços</p>
       
            <div class="form-group">
            <?php
							
							$controller = new CadastroController();
							$resultado = $controller->listar($_GET['id']);
							//print_r($resultado);
						?>
           <form method="post" action="ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtnome" required id="txtnome" value="<?php echo $resultado[0]['txtnome']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="telefone" id="telefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">opcao:</label>
								<select class="form-control" required name="opcao" id="opcao">
									<option <?php if($resultado[0]['opcao'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['opcao'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['opcao'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['opcao'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['opcao'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['opcao'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="data" id="data" value="<?php echo $resultado[0]['data']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" name="obs" id="obs" rows="3"><?php echo $resultado[0]['obs']; ?></textarea>
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
						</form>
        </div>
    </div>
    </body>

</html>