<?php
require "conexao.php";
//SELECT <- Consulta a base de dados bdclinica na tabela medico
$sql = "SELECT idmedico, nome, idespecialidade FROM medico";

//Executar o codigo (comando) da variavel $sql
$result = $conn->query($sql);

//var_dump($result);


echo "<h1>MEDICOS</h1>";

//result <- object 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idmedico"]. " - nome: " . $row["nome"] . " codigo da especialidade: " . $row["idespecialidade"] . "<br>";
  }
} else {
  echo "0 resultados!";
}

echo "<h1>ESPECIALIDADE</h1>";
###ESPECIALIDADES###

//SELECT <- Consulta a base de dados bdclinica na tabela especialidade
$sqlEsp = "SELECT idespecialidade, nome FROM especialidade";

//Executar o codigo (comando) da variavel $sql
$resultEsp = $conn->query($sqlEsp);

//var_dump($result);

//result <- object 
if ($resultEsp->num_rows > 0) {
  // output data of each row
  while($row = $resultEsp->fetch_assoc()) {
    echo "idespecialidade: " . $row["idespecialidade"]. " - nome: " . $row["nome"] . "<br>";
  }
} else {
  echo "0 resultados!";
}


