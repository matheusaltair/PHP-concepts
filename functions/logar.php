<?php   

require 'conecta.php';

function tratarCamposFormulario($campo)
{
    return htmlspecialchars(stripslashes(trim($campo)));
}

//verificar se veio pelo metodo POST e tratar os campos recebidos

function verificaPost(){
    if ($_SERVER["REQUEST_METHOD"] !== "POST"){
         throw new Exception('Só aceito requisição via post!');
    }
} 

function verificarEmailSenha($conn, $email, $senha){
    $statement = $conn->prepare('SELECT nome, email, senha FROM cadastro WHERE email = :email');
    $statement->bindparam(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $dadoUsuario = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$dadoUsuario || !password_verify($senha, $dadoUsuario['senha'])) {
        throw new Exception('E-mail ou Senha incorretos!');
    } else{
        return "<h1>{$dadoUsuario['nome']} Login efetuado com sucesso</h1>";
    }
}

function  logar($conn){
    try{
        verificaPost();
        $email = tratarCamposFormulario($_POST['email']); //EMAIL
        $senha = tratarCamposFormulario($_POST['senha']); //SENHA
        //Verificacao do Email cadastrado
        return verificarEmailSenha($conn, $email, $senha);
    }  catch (Exception $e) {
        return "<h1>Erro! {$e->getMessage()}</h1>";
    }
}
$resposta = logar($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h2><?php echo $resposta; ?></h2>
            <a class="btn btn-primary" href="cadastro.php">Cadastro</a>
        </div>
    </div>
</body>

</html>