<?php
session_start();
if(!isset($_SESSION['login'])){
	header('location: ../index.php');
}
if ($_SESSION['administrador'] != 1){
	header('location: venda.php');
}
?>

<!doctype html>
<html lang="pt-br">
<head>
	<title>Januário - Disk Cerveja</title>        
	<meta charset="utf-8">
	<meta name="viewport"       content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description"    content="WareHouse">
	<meta name="author"         content="ENGTEC - Engenharia e Computação">
	
	<link rel="icon" href="../imagens/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css" >
	<link rel="stylesheet" type="text/css" href="../css/cadCliente.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/cadastrarCliente.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>

<body>
	
	<div class = "jumbotron text-center removerMargem">
		<h1 class="text-titulo"><strong>JANUÁRIO</strong></h1>
		<h4><img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"><strong> DISK CERVEJA </strong><img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"></h4>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row rowForm">
					<div class="col-md-8"></div>
					<div class="col-md-1" align="center">
						<a id="btnCancelar" class="btn btn-danger" style="float: right;" href="principal.php" role="button">Cancelar</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3 mr-5 ml-3">
				<div class="row">
					<h2 class="subTitulo">Consultar cliente</h2>
				</div>
				<div class ="row">
					<form style="width: 100%;">
						<div class="form-row align-items-center">
							<div class="col-md-12 rowForm">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="gridConsulta1" value="option1" checked>
									<label class="form-check-label" for="gridConsulta1">Devedores</label>
								</div>
							</div>
						</div>
						<div class="form-row rowForm align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="gridConsulta2" value="option2">
									<label class="form-check-label" for="gridConsulta2">CPF:</label>
								</div>
							</div>
							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="cpf" id="gridConsulta2" placeholder="apenas números" required="" maxlength="11" pattern="[0-9]+$">
							</div>
						</div>
						<div class="form-row rowForm align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="gridConsulta3" value="option3">
									<label class="form-check-label" for="gridConsulta3">Aniversariante:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm" type="date" name="data">
							</div>
						</div>
						<br>

						<div class="form-row align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="gridConsulta4" value="option4">
									<label class="form-check-label" for="gridConsulta4">Nome do cliente:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="nome" placeholder="nome do cliente">
							</div>
						</div>
						<br>
						<div class="form-row justify-content-end">
							<button class="btn btn-success " type="button" class="btn btn-primary">Pesquisar cliente</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4 ml-3">
				<div class="row mb-5">
					<h2 class="subTitulo">Consultar produto</h2>
				</div>
				<div class ="row">
					<form style="width: 85%;">
						<div class="form-row rowForm align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="produto1" value="option2">
									<label class="form-check-label" for="produto1">Quantidade:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm " type="text" name="quantiadde" id="fornecedor1" placeholder="quantidade">
							</div>
						</div>
						<br>
						<div class="form-row align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="produto2" value="option4">
									<label class="form-check-label" for="produto2">Vasilhame:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="vasilhame" id="fornecedor2" placeholder="vasilhame">
							</div>
						</div><br>
						<div class="form-row align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="produto3" value="option2">
									<label class="form-check-label" for="produto3">Nome do vasilhame:</label>
								</div>
							</div><br>
							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="quantiadde" id="produto3" placeholder="nome do vasilhame">
							</div>
						</div>
						<div class="form-row justify-content-end mt-4">
							<button class="btn btn-success " type="button" class="btn btn-primary">Pesquisar produto</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row mb-5">
					<h2 class="subTitulo">Consultar fornecedor</h2>
				</div>
				<div class ="row">
					<form style="width: 90%;">
						<div class="form-row rowForm align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="fornecedor1" value="option2">
									<label class="form-check-label" for="fornecedor1">Contas:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="cpf" id="fornecedor1" placeholder="contas">
							</div>
						</div><br>
						<div class="form-row align-items-center">
							<div class="col-md-4">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gridConsulta" id="fornecedor2" value="option4">
									<label class="form-check-label" for="fornecedor2">Nome do fornecedor:</label>
								</div>
							</div>

							<div class="col-md-8">
								<input class="form-control form-control-sm" type="text" name="nome" placeholder="nome do fornecedor">
							</div>
						</div><br>
						<div class="form-row justify-content-end mt-5">
							<button class="btn btn-success " type="button" class="btn btn-primary">Pesquisar fornecedor</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="row ml-5">
			<h2 class="subTitulo" style="text-align: left;">Resultados:</h2>
		</div>
	</div>
</body>