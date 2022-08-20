<?php

class TokenGenerator 
{

  function __construct()
  {

  }
  function tokenGenerate(){
    return bin2hex(openssl_random_pseudo_bytes(16));
  }
}

?>
