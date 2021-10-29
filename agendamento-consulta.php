<?php
require_once("ControllerCadastro.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>Sistema de Agendamento - consulta</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="agendamento.php">Cadastrar</a>
                    </li>
                    <li>
                        <a class="nav-link" href="editar.php">Editar</a>
                    </li class="nav-item">
                </ul>
            </div>
        </nav>
            <div class="row">
                <div class="mb-3 col-12">
                    <div class="card-body">
                <h5>Consultar - Contatos Agendados</h5>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th socpe="col">Nome</th>
                            <th socpe="col">Telefone</th>
                            <th socpe="col">Origem</th>
                            <th socpe="col">contato</th>
                            <th socpe="col">observação</th>
                            <th socpe="col">Ação</th> 
                        </tr>
                    </thead>
                    <tbody id="TableData">
						<?php
							$controller = new CadastroController();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0; $i<count($resultado);$i++){
						?>

							<tr>
								<td scope="col"><?php echo $resultado[$i]['txtnome']; ?></td>
								<td scope="col"><?php echo $resultado[$i]['telefone'];?></td>
								<td scope="col"><?php echo $resultado[$i]['opcao'];?></td>
								<td scope="col"><?php echo $resultado[$i]['data']; ?></td>
								<td scope="col"><?php echo $resultado[$i]['obs']; ?></td>
								<td scope="col">
									<button type="button" class="btn btn-outline-primary" onclick="location.href='editar.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
									<button type="button" class="btn btn-outline-primary" style="width: 72px">Excluir</button>
								</td>
							</tr>
						<?php
							}
						?>
						</tbody>
                </table>
                <button type="button" id="btnListar"  class="btn btn-outline-dark">Buscar Agendamento</button>
            </div>
            </div>
            </div>
    </body>
    </html>