<?php
    session_start();
    require_once("bd.php");

    $nome = $codigo = $data = $quantidade = $valortotal = array();
    $i = 0;
    foreach ($_SESSION["dbgriddados"] as $key => $valor)
    {
        if($i % 5 == 0)
        {
            array_push($codigo,$valor); 
        }
        if($i % 5 == 1){
            array_push($nome,$valor);
        }
        if($i % 5 == 2)
        {
            array_push($data,$valor);
        }
        if($i % 5 == 3)
        {
            array_push($quantidade,$valor);
        }
        if($i % 5 == 4)
        {
            array_push($valortotal,$valor);
        }
        $i = $i +1;
    }
    $dataatual = date('y-m-d');
    $tam = count($nome);
    $v = $_SESSION["valortotal"];
    $id_funcionario = $_SESSION["id_funcionario"];
    $insert = "INSERT INTO venda(id_funcionario,data_horario,tipo,valor_total) VALUES ('$id_funcionario','$dataatual','avista','$v')";
    mysqli_query($conexao,$insert);
    $id_venda = $conexao->insert_id;
    for($j = 0; $j < $tam;$j++)
    {
        $insert = "INSERT INTO saida_produto(codigo_de_barras,id_venda,quantidade,valor_total) VALUES ('".$codigo[$j]."','".$id_venda."','".$quantidade[$j]."','".$valortotal[$j]."')";
        mysqli_query($conexao,$insert);
    }
    $_SESSION["valortotal"] = 0;
    $_SESSION["dbgriddados"] = array();
    $_SESSION["dbgrid"]= array();
    $_SESSION["iterador"] = 0;
    $_SESSION["vendaConcluida"] = 1;
    header("Location: ../paginas/venda.php");
?>