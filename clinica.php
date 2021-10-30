<?php
$especialidades = [
  ["codigo" => 1 , "especialidade" => "Cardiologia",], //0
  ["codigo" => 2 , "especialidade" => "Dermatologista"], //1
  ["codigo" => 3 , "especialidade" => "Ortopedista"], //2
  ["codigo" => 4 , "especialidade" => "Oftalmologista"], //3
  ["codigo" => 5 , "especialidade" => "Neurologista"], //4
  ["codigo" => 6 , "especialidade" => "Pediatra"] //5
 
];

$medicos = [
  ["codigo" => 1, "nome" => "Beatriz", "especialidade" => "Cardiologia",], //0
  ["codigo" => 2 , "nome" => "Arthur", "especialidade" => "Dermatologista"], //1
  ["codigo" => 3 , "nome" => "Gabriel", "especialidade" => "Ortopedista"], //2
  ["codigo" => 4 , "nome" => "Joao", "especialidade" => "Oftalmologista"], //3
  ["codigo" => 5 , "nome" => "Deborah", "especialidade" => "Neurologista"], //4
  ["codigo" => 6 , "nome" => "Silvana", "especialidade" => "Pediatra"] //5
];

$clientes = [
    ["codigo" => 1 , "nome" => "Pedro"], //0
    ["codigo" => 2 , "nome" => "Victoria"], //1
    ["codigo" => 3 , "nome" => "Crystyan"], //2
    ["codigo" => 4 , "nome" => "Lara"], //3
    ["codigo" => 5 , "nome" => "Benjamim"], //4
    ["codigo" => 6 , "nome" => "Benício"] //5
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
    <h1>Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome do Médico</th>
                <th>especialidade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($medicos as $medico): ?>
                <tr>
                    <td><?php echo $medico['codigo'];?></td>
                    <td><?php echo $medico['nome'];?></td>
                    <td><?php echo $medico['especialidade'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h1>Especialidades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da Especialidades</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($especialidades as $especialidade): ?>
                <tr>
                    <td><?php echo $especialidade['codigo'];?></td>
                    <td><?php echo $especialidade['especialidade'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h1>Clientes</h1>
    <table class="table">           
        <thead>
            <tr>
                <th>Código</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente['codigo'];?></td>
                    <td><?php echo $cliente['nome'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>