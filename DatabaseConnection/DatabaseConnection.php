<?php
require "DatabaseCredentials.php";

class DatabaseConnection{

  private $connection;

  function __construct(){
    $dc = new DatabaseCredentials();
    $this->connection = new mysqli($dc->getHostName(),$dc->getUserName(),$dc->getPassword(),$dc->getDatabaseName());
   }

   function executeQuery($query){
     return mysqli_query($this->connection,$query);
   }

   function getConnection(){
     return $this->connection;
   }

   function executePrepare($query,$type,$pararray){

     $stm = $this->connection->prepare($query);
     echo $this->connection->error;
     $stm->bind_param($type,...$pararray);
     return $stm->execute();
    }

    function executePrepareReturn($query,$type,$pararray){

        $stm = $this->connection->prepare($query);
        echo $this->connection->error;
        $stm->bind_param($type,...$pararray);
        $stm->execute();
        return $result = $stm->get_result();
       }

}


 ?>
