<?php

session_start();

require_once('bd.php');

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = "SELECT * FROM funcionario WHERE login = '$login' AND senha = '$senha'";

$resultado = $conexao->query($sql);

if($resultado){
	$dados = mysqli_fetch_array($resultado);

	if (isset($dados['login'])) {
		$_SESSION['login'] = $dados['login'];
		echo "success";
	}else{
		echo "errologin";
	}

}else{
	echo 'Erro na execução da consulta';
}

?>