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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Nome do carro</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carros as $carro): ?>
                <tr>
                    <td scope="row"><?php echo $carro['marca'];?></td>
                    <td><?php echo $carro['nome'];?></td>
                    <td><?php echo $carro['preco'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>