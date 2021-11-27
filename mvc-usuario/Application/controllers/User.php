<?php

use Application\core\Controller;

class User extends Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  {
    $Users = $this->model('Users'); // é retornado o model Users()
    $data = $Users::findAll();
    $this->view('user/index', ['users' => $data, 'msg' => $this->getMessage()]);
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      $data = $Users::findById($id);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }
  
  /**
   * Essa rota é a rota de register voce pode acessar user/register
   * Esse metodo mostra o formulario de registro e alteração
   * Quando a rota vem com um parametro exemplo user/register/10 ele vai no banco de dados verificar se existe o registro e preenche os campos
   */
  public function register($id = null)
  {
    $data = ['id' => '', 'name' => '', 'email' => ''];
    if($id){
      $Users = $this->model('Users');
      $data = $Users::findById($id);
      if(!$data){ //Verifica se nao tem usuario no banco mostra a tela de page not found
        $this->pageNotFound();
        exit;
      }
    }
    $this->view('user/register', ['user' => $data]);
  }


  /**
   * O metodo save nao é um formulario!
   * Ele é um metodo que recebe os dados do formulario via POST
   * Verifica se o dado é um dado NOVO (insert) ou se é um dado antigo e faz sua atualizacao (update)
   */
  public function save()
  {  
    $Users = $this->model('Users');
    
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['senha'] = password_hash($_POST['senha'], PASSWORD_BCRYPT); //a senha da tela estou criptografando nesse momento

    //Caso o id seja vazio/nulo
    if($_POST['id'] === ''){
      //Caso o insert foi valido ele redireciona para a tela de lista de usuario (CADASTRO DE NOVO USUARIO)
      if($Users::insert($data) === true){
          $this->setMessage("Cadastro efetuado com sucesso!");
          header('Location: '.$this->url('user'));
       }
    }else{//senao o id tem valor (ATUALIZACAO DE USUARIO - EXISTE NA BASE DE DADOS)
      $data['id'] = $_POST['id'];
       //Caso o update foi valido ele redireciona para a tela de lista de usuario
      if($Users::update($data) === true){
          $this->setMessage("Usuário atualizado com sucesso!");
          header('Location: '.$this->url('user'));
      }
    }
  }

   /**
   * O metodo delete nao é um formulario!
   * Ele é um metodo que recebe o id do registro a ser deletado
   */
  public function delete($id)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      if($Users::delete($id) === true){
        $this->setMessage("Usuário deletado com sucesso!");
        header('Location: '.$this->url('user'));
     }
    } else {
      $this->pageNotFound();
    }
  }

}
