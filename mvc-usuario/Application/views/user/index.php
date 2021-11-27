<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Usuários</h2>
        <a class="btn btn-success" href="/user/register">Cadastrar</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Acao</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['users'] as $user) { ?>
            <tr>
              <td><?php echo $user['id'] ?></td>
              <td><?= $user['name'] ?></td>
              <td><?= $user['email'] ?></td>
              <td><a class="btn btn-primary" href="/user/register/<?php echo $user['id'] ?>">Editar</a> <a class="btn btn-danger" onclick="excluir(<?php echo $user['id'] ?>)" href="#">Excluir</a></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

<?php if($data['msg'] !== "") {?>
<script>
  bootbox.alert(`<?=$data['msg']; ?>`);
</script>
<?php } ?>

<script>
  const excluir = (id) => bootbox.confirm("Deseja realmente excluir esse registro?", (resp) => {
    if(resp === true){
      window.location.href = "/user/delete/"+id
    }else{
      bootbox.alert('voce nao excluiu!')
    }
  })
</script>

