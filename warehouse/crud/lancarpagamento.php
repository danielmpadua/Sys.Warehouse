<?php
require_once ('bd.php');

$pesquisar = $_POST['pesquisar'];

$query = mysqli_query($conexao, "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisar%' Order By nome ASC");
$num = mysqli_num_rows($query);

if($num>0){
    echo "<table class='table table-bordered table-striped text-center'>";
    echo "<thead><tr>";
    echo "<th class='text-center' style='width:60%;'>Nome</th>";
    echo "<th class='text-center' style='width:20%;'>CPF</th>";
    echo "<th class='text-center' style='width:20%;'>Editar</th>";
    echo "</tr></thead>";
    echo "<tbody";
    while ($row = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td>" .$row['nome']. "</td>";
        echo "<td>" .$row['cpf']. "</td>";
        echo "<td class='text-center align-middle'><a href='lancarpagamento2.php?id=".$row['id_pessoa']."'title='Editar' data-toggle='tooltip''><img src='../svg/editar.svg' width='25' height='25'></a>";
    }
    
    echo "</tbody>";
    echo "</table>";
}else{
   echo "<div align='center' class='text-error'>";
   echo "Cliente não encontrada!";
   echo "</div>";
}
?>