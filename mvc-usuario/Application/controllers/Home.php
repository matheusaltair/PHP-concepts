<?php

use Application\core\Controller;

class Home extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('home/index', ['msg' => $this->getMessage()]);
  }

  public function logar(){
    $Users = $this->model('Users');
    $data = $Users::findByEmailPassword($_POST['email']); //consulta no banco o email e a senha

    //verifico se o data (dados do banco) retornou algo && verifico a senha da tela é igual a senha do banco  (password_verify é uma funcao do PHP)
    if($data && password_verify($_POST['senha'], $data['senha'])){
      session_start();
      $_SESSION['admin'] = true;
      $_SESSION['email'] = $data['email'];
      $_SESSION['LAST_ACTIVITY'] = time(); 

      header('Location: '.$this->url('admin'));
    }else{
      $this->setMessage("Usuario ou senha invalidos!");
       header('Location: '.$this->url('home'));
    }
   
  }
}
