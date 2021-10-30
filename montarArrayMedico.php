<?php
require "conexao.php";
//SELECT <- Consulta a base de dados bdclinica na tabela medico
$sql = "SELECT idmedico, nome, idespecialidade FROM medico";

//Executar o codigo (comando) da variavel $sql
$result = $conn->query($sql);

//var_dump($result);


//result <- object 
if ($result->num_rows > 0) {
  // output data of each row
  while($medico = $result->fetch_assoc()) {
    $resultMedico = "<tr>
    <td>".$medico["idmedico"]."</td>
    <td>".$medico["nome"]."</td>
    <td>".$medico["idespecialidade"]."</td>
    </tr>";
  }
} else {
  $resultMedico = "<tr><td colspan='3'>Nenhum resultado encontrado!</td></tr>";
}
?>
