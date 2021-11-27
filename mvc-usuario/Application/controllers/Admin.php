<?php

use Application\core\Controller;

class Admin extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->verificaUsuario();
    $this->view('admin/index', ['emailUsuario' => $_SESSION['email'], 'msg' => $this->getMessage()]);
  }

  public function verificaUsuario(){
    session_start(); 
    if(!isset($_SESSION['admin'])){
      $this->setMessage('Sua sessão expirou!');
      header('Location: '.$this->url('home'));
    }

    //expira a sessao em 1800 segundos (30 minutos)
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > (30*60))) {
        session_unset();
        session_destroy(); 
        header('Location: '.$this->url('home'));
    }
  }

  public function sair(){
     session_start(); 
     session_destroy();
     header('Location: '.$this->url('home'));
  }

}
