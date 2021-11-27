<?php

namespace Application\models;

use Application\core\Database;
use Exception;
use PDO;
use PDOException;

class Users
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Este método busca um usuário armazenados na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único do usuário
  *
  * @return   array
  */
  public static function findById(int $id) : array
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetch(PDO::FETCH_ASSOC);
  }


  /**
   * 
   * @param string $email
   * @param string $senha
   */
  public static function findByEmailPassword(string $email)
  {
      $conn = new Database();    
      $result = $conn->executeQuery('SELECT email, senha 
                                        FROM users 
                                        WHERE email = :email  LIMIT 1',[':email' => $email]);
     return $result->fetch(PDO::FETCH_ASSOC);
  }

  /**
   * Este método insere um usuário na base de dados, através de um array
   */
  public function insert(array $data)
  {
    try{
      $conn = new Database();
      //INSERT INTO users (name, email, senha) VALUES (:name, :email, :senha)
      $conn->executeQuery("insert into users (name, email, senha) values (:name, :email, :senha)", [
        ':name' => $data['name'], 
        ':email' => $data['email'],
        ':senha' => $data['senha']
      ]);
      return true;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }

  }

  public function update(array $data)
  {
    try{
      $conn = new Database();
      //update users set name = :name, email = :email, senha =:senha where id = :id
      $conn->executeQuery('update users set name = :name, email = :email, senha =:senha where id = :id', [
        ':name' => $data['name'], 
        ':email' => $data['email'],
        ':senha' => $data['senha'],
        ':id' => $data['id']
      ]);
      return true;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }

  }

  //DELETE FROM users WHERE id = :id
  public function delete(int $id)
  {
    try{
      $conn = new Database();
  
      $conn->executeQuery('delete from users where id = :id', [
        ':id' => $id
      ]);
      return true;
    }catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }

  }
 

  
}
