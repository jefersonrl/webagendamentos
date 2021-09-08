<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="format-detection" content="telephone=no"> <meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> <meta name="color-scheme" content="light dark"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<script src="js/funcoes.js"></script>-->
	<title>SISTEMA DE AGENDAMENTO - CLIENTES</title>
</head> 
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<a class="navbar-brand" href="#">SISTEMA WEB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Cadastrar<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consultarClientes.php">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>  
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body" style="margin: auto;">
					<h5 class="card-title">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive table-hover" style="width: 100%;">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar();
							//print_r($resultado);
							for($i=0;$i<=count($resultado)-1;$i++){ 
						?>
								<tr>
									<td scope="row"><?php echo $resultado[$i]['nome']; ?></td>
									<td><?php echo $resultado[$i]['telefone']; ?></td>
									<td><?php echo $resultado[$i]['origem']; ?></td>
									<td><?php echo $resultado[$i]['data_contato']; ?></td>
									<td><?php echo $resultado[$i]['observacao']; ?></td>
									<td>
										<button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</button>
									</td>
								</tr>
						<?php
							}
						?>
						<!--<tr>
							<td scope="row">Jeferson Roberto de Lima</td>
							<td>(11)97665-0099</td>
							<td>Google Meu Negócio</td>
							<td>25/05/2021</td>
							<td>Serviço agendado para 01/07/2021</td>
							<td>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</button>
							</td>
						</tr>-->
					</table>
					<button type="button" id="btnListar" class="btn btn-primary">Buscar Agendamento</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
