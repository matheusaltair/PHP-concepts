<?php
require "montarArrayMedico.php";
require "montarArrayEspecialidade.php";

/**
 * DEPENDE 
 * montarArrayMedico.php
 * montarArrayEspecialidade.php
 * conexao.php
 */
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
              <?php echo $resultMedico; ?>
        </tbody>
    </table>

    <h1>Especialidade</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da especialidade</th>
            </tr>
        </thead>
        <tbody>
              <?php echo $resultEspecialidade; ?>
        </tbody>
    </table>
   
</body>
</html>