<?php
class TsUser{
    private $fullName;
    private $dob;
    private $email;
    private $mobile;
    private $addresses;
    private $gender;
    private $username;
    private $password;
    private $active_status;

    function __construct(){
    $this->active_status = 1;
    }

    function setFullName($fullName){
    $this->fullName = $fullName;
     }

     function getFullName(){
     return $this->fullName;
     }
     function setDob($dob){
     $this->dob = $dob;
     }

     function getDob(){
     return $this->dob;
     }

     function setEmail($email){
     $this->email = $email;
     }

     function getEmail(){
     return $this->email;
     }

     function setMob($mobile){
     $this->mobile = $mobile;
     }

     function getMob(){
     return $this->mobile;
     }

     function setPhone($phone){
     $this->phone = $phone;
     }

     function getPhone(){
     return $this->phone;
     }

     function setAddresses($addresses){
     $this->addresses = $addresses;
     }

     function getAddresses(){
     return $this->addresses;
     }

     function setGender($gender){
     $this->gender = $gender;
     }

     function getGender(){
     return $this->gender;
     }

     function setUsername($username) {
     $this->username = $username;
     }

     function getUsername() {
     return $this->username;
     }

     function setPassword($password){
     $this->password = $password;
     }

     function getPassword() {
     return $this->password;

     }

     function setActiveStatus($active_status){
        $this->active_status = $active_status;
     }

     function getActiveStatus() {
     return $this->active_status;
     }


}
