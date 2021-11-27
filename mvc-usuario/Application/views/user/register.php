<div class="container">
    <form action="/user/save" method="post">
        <h1>Registro de usuario</h1>
        <div class="form-group">
            <label for="examplenome1">Nome</label>
            <input type="text" class="form-control" id="examplenome1" 
            name="name" required aria-describedby="nomelHelp" placeholder="Enter nome" value="<?php echo $data['user']['name'];?>">
            <small id="nomeHelp" class="form-text text-muted">Digite seu nome</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" 
            required aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $data['user']['email'];?>">
            <small id="emailHelp" class="form-text text-muted">Digite seu Email</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required placeholder="Password">
        </div>
        <input type="hidden" name="id" value="<?php echo $data['user']['id'];?>">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a class="btn btn-danger" href="/user">Voltar</a>
    </form>
</div>

