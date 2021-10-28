<?php
$carros = [
  ["nome" => "Gol", "marca" => "VW", "preco" => 59000], //0
  ["nome" => "Virtus", "marca" => "VW", "preco" => 90000], //1
  ["nome" => "Mobi", "marca" => "Fiat", "preco" => 49000], //2
  ["nome" => "Palio", "marca" => "Fiat", "preco" => 40000], //3
  ["nome" => "X1", "marca" => "BMW", "preco" => 215000], //4
  ["nome" => "XC60", "marca" => "Volvo", "preco" => 200000], //5
  ["nome" => "Fit", "marca" => "Honda", "preco" => 69000], //6
  ["nome" => "Civic", "marca" => "Honda", "preco" => 109000], //7
  ["nome" => "onix", "marca" => "Chevrolet", "preco" => 60000], //8
  ["nome" => "Cobalt", "marca" => "Chevrolet", "preco" => 75000], //9
  ["nome" => "i30", "marca" => "Hyundai", "preco" => 50000] //10
];

//echo $carros[4]["nome"] . "\n" . $carros[4]["marca"];

/*
for (inicio; ate onde ele vai; incremento ou decremento) {
  interacao do codigo
}
*/

$qtCarros = count($carros); //10
echo "QTD DE CARROS: ". $qtCarros. PHP_EOL;

echo "USANDO O FOR". PHP_EOL;
for($linha = 0; $linha < $qtCarros; $linha++){
  echo "Nome do carro: ".$carros[$linha]["nome"] . " - Marca: " . $carros[$linha]["marca"]. PHP_EOL;
}

/*
while (condition is true) {
  code to be executed;
}
*/
$linhaWhile = 0;
echo "USANDO O WHILE". PHP_EOL;
while($linhaWhile < $qtCarros) {
  echo "Nome do carro: ".$carros[$linhaWhile]["nome"] . " - Marca: " . $carros[$linhaWhile]["marca"]. PHP_EOL;
  $linhaWhile++;
}

/*
foreach ($array as $value) {
  code to be executed;
}
*/
echo "USANDO O FOREACH". PHP_EOL;
foreach($carros as $carro){
  echo "Nome do carro: ".$carro["nome"] . " - Marca: " . $carro["marca"]. PHP_EOL;
}

