<?php

class EncDec{
  private $ciphering;
  private $options;
      function __construct(){
        $this->ciphering = "AES-128-CTR";
        $this->options = 0;
      }
        function encrypt($password){
        $simple_string = $password;
        $iv_length = openssl_cipher_iv_length($this->ciphering);
        $encryption_iv = '1234567891011121';
        $encryption_key = "NccEngineering";
        $encryption = openssl_encrypt($simple_string, $this->ciphering,
                    $encryption_key, $this->options, $encryption_iv);
        return $encryption;
        }
        function decrypt($encryptpass){

        $decryption_iv = '1234567891011121';
        $decryption_key = "NccEngineering";
        $decryption=openssl_decrypt ($encryptpass, $this->ciphering,
                $decryption_key, $this->options, $decryption_iv);
        return $decryption;
        }

        }
?>
