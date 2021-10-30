<?php
require "conexao.php";
//SELECT <- Consulta a base de dados bdclinica na tabela medico
$sql = "SELECT idespecialidade, nome FROM especialidade";

//Executar o codigo (comando) da variavel $sql
$result = $conn->query($sql);

//var_dump($result);


//result <- object 
if ($result->num_rows > 0) {
  // output data of each row
  while($especialidade = $result->fetch_assoc()) {
    $resultEspecialidade = "<tr>
    <td>".$especialidade["idespecialidade"]."</td>
    <td>".$especialidade["nome"]."</td>
    </tr>";
  }
} else {
  $resultEspecialidade = "<tr><td colspan='2'>Nenhum resultado encontrado!</td></tr>";
}
?>
