<?php
require_once("TsUser.php");

class StudentUser
{
  private $tsuser;
  private $regdate;

  function __construct($fullName,$dob,$email,$gender,$username,$password,$mobile,$address,$regdate, $id=null)
  {
  $this->tsuser = new TsUser();
  $this->tsuser->setFullName($fullName);
  $this->tsuser->setDob($dob);
  $this->tsuser->setGender($gender);
  $this->tsuser->setUsername($username);
  $this->tsuser->setPassword($password);
  $this->tsuser->setMob($mobile);
  $this->tsuser->setAddresses($address);
  $this->tsuser->setEmail($email);
  $this->regdate = $regdate;
  $this->tsuser->setActiveStatus(1);
  $this->tsuser->setStudentId($id);

  }


  function setTsUser($tsuser){
  $this->tsuser = $tsuser;
  }

  function getTsUser(){
  return $this->tsuser;
  }

  function setRegistrationDate($regdate){
  $this->regdate = $regdate;
  }
  function getRegistrationDate(){
  return $this->regdate;
  }

  }

//$tuser = new TsUser();

//$su = new StudentUser($tuser,"sanip","adhikari","2025-12-02","Male","sandip547","sa#12753","9866343866","dhikalethar","sanidprock28@gmail.com","2025");

//echo $su->getTsUser()->getFirstName(). " " .$su->getTsUser()->getLastName();




 ?>
