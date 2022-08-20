<?php

class DatabaseCredentials{
  private $hostname="localhost";
  private $username="root";
  private $password="";
  private $dbname="testncc";

  function getHostName(){
    return $this->hostname;
  }
  function getUserName(){
    return $this->username;
  }
  function getPassword(){
    return $this->password;
  }
  function getDatabaseName(){
    return $this->dbname;
  }

}

 ?>
