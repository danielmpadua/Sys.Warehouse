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
	<link rel="stylesheet" type="text/css" href="../css/vendas.css">

	<script src="../js/jquery.min.js"></script>
	<script src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="../js/vendas.js"></script>

</head>

<body>
	<div class = "jumbotron text-center removerMargem">
		<h1 class="text-titulo"><strong>JANUÁRIO</strong></h1>
		<h4><img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"><strong> DISK CERVEJA </strong><img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"> <img class="rounded-circle" src="../svg/star.svg" alt="Generic placeholder image" width="20" height="20"></h4>
	</div>
	<div class="container">
		<h2 class="subTitulo">Vendas</h2>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 mt-3">
				<div class="row">
					<div class="col-md-12">
						<form action="#" method="POST" id="formCli"> 
							<div class="row rowForm">
								<div class="col-md-6" align="right"></div>
								<div class="col-md-3">
									<a id="btnAdicionar" class="btn btn-outline-primary" href="principal.php" role="button">Cadastrar Cliente</a>
								</div>
								<div class="col-md-3" align="center">
									<a id="btnCancelar" class="btn btn-danger" href="principal.php" role="button">Cancelar</a>
								</div>
							</div> 
							<div class="row rowForm">
								<div class="col-md-3 lblAl">
									<label>CPF: </label>
								</div>
								<div class="col-md-3">
									<input type="text" id="txtCPF" placeholder=" Somente Números">
								</div>
								<div class="col-md-3 lblAl">
									<label style="float: left; margin-left: 110px;">RG: </label>
								</div>
								<div class="col-md-3">
									<input type="text" id="txtRG" placeholder=" Somente Números">
								</div>
							</div>
							<div class="row rowForm">
								<div class="col-md-3 lblAl">
									<label>Nome: </label>
								</div>
								<div class="col-md-9">
									<input type="text" class="confTxtBox" id="txtNome">
								</div>
							</div>
							<div class="row rowForm">
								<div class="col-md-3 lblAl">
									<label>Quantidade: </label>
								</div>
								<div class="col-md-3">
									<input type="number" id="numQuant">
								</div>
								<div class="col-md-3 lblAl">
									<label style="float: left; margin-left: 25px;">Limite Restante: </label>
								</div>
								<div class="col-md-3">
									<input type="number" step="any" id="numLim">
								</div>
							</div>
							<div class="row rowForm">
								<div class="col-md-3 lblAl">
									<label>Forma de Pagamento: </label>
								</div>
								<div class="col-md-3">
									<select id="selPag">
										<option selected>...</option>
										<option>Á vista</option>
										<option></option>
										<option></option>
									</select>
								</div>
								<div class="col-md-3 lblAl">
									<a href="emprestimo.php"></a>
								</div>
							</div>
							<div class="row rowForm rowTable">
								<div class="col-md-3 lblAl">
									<label style="font-weight: bold;">Produtos da Compra:</label>
								</div>
								<div class="col-md-5"></div>
								<div class="col-md-2">
									<a id="btnRemover" class="btn btn-primary" href="principal.php" role="button">Adicionar</a>
								</div>
								<div class="col-md-2">
									<a id="btnRemover" class="btn btn-dark" href="principal.php" role="button">Remover</a>
								</div>
							</div>
							<div style="height: 10px;"></div>
							<div class="row divTable">
								<table class="table table-sm table-bordered">
									<thead class="thead-light">
										<tr style="text-align: center;">
											<th style="width: 5%;">#</th>
											<th style="width: 60%;">Nome Produto</th>
											<th style="width: 15%;">Preço</th>
											<th style="width: 5%;">Quant.</th>
											<th style="width: 15%;">Preço Total</th>	
										</tr>
									</thead>
								</table>
							</div>
							<div class="row rowForm" style="vertical-align: center;">
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<h2>Valor da Compra:</h2>
								</div>
								<div class="col-md-6">
									<input type="number" step="any" id="numTotal" value="0000.00">
								</div>
							</div>
							<div class="row rowForm">
								<div class="col-md-6">
									<a id="btnEmpre" class="btn btn-outline-info ">Empréstimo</a>
								</div>
								<div class="col-md-6">
									<a id="btnFinalizar" class="btn btn-success">Finalizar Compra</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>   
		</div>
	</div>
	<br>
	<br>
	<br>
</body>
</html>