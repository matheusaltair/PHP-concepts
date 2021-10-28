<?php
//indexado
$carros =  ["volvo","bmw", "vw", "fiat"];
 //echo $carros[3];
 //echo "<br>";

 //associativo
 $carros = ["a" => "volvo","b" => "bmw", "vw", "fiat"];
 //echo $carros["b"];
 
 //multidimensional - primeira forma
 $carros = array (
    array("Volvo",22,18), //0
    array("BMW",15,13), //1
    array("Saab",5,2), //2
    array("Land Rover",17,15) //3
  );

  //multidimensional - segunda forma
  $carros = [
    ["Volvo",150000,180000], //0 [0,1,2]
    ["BMW",159000,190000], //1 [0,1,2]
    ["VW",50000,70000], //2 [0,1,2]
    ["Land Rover",180000,190000] //3 [0,1,2]
  ];

  //exibir o Land Rover
echo $carros[1][0];
echo PHP_EOL;

echo $carros[3][0]; //Land Rover
echo $carros[3][2]; //190000
echo PHP_EOL;
//exibir o Volvo e o preco de venda

echo $carros[0][0]; // Nome Volvo
echo PHP_EOL;

echo $carros[0][2]; // Valor de venda Volvo
echo PHP_EOL;

//VW e o valor de compra
echo $carros[2][0];
echo PHP_EOL;
echo $carros[2][1];
