<?php
require_once("TsUser.php");
class TeacherUser{
    private $tsuser;
    private $qualification;
    private $expertise;
    private $experience;
    private $cv_location;
    private $join_date;
    private $type;


    function __construct($firstname,$lastname,$dob,$email,$gender,$mobile,$address,$qualification,$expertise,$experience,$cv_location,$join_date,$username,$password){
      $this->tsuser = new TsUser();
      $this->tsuser->setFirstName($firstname);
      $this->tsuser->setLastName($lastname);
      $this->tsuser->setEmail($email);
      $this->tsuser->setDob($dob);
      $this->tsuser->setGender($gender);
      $this->tsuser->setMob($mobile);
      $this->qualification = $qualification;
      $this->expertise = $expertise;
      $this->experience = $experience;
      $this->cv_location = $cv_location;
      $this->tsuser->setAddresses($address);
      $this->join_date = $join_date;
      $this->tsuser->setUsername($username);
      $this->tsuser->setPassword($password);
      $this->type= 2;
    }
    function setTsUser($tsuser){
    $this->tsuser = $tsuser;

    }
    function getTsUser(){
    return $this->tsuser;
    }

    function setUsername($username) {
    $this->username = $username;
    }
    function getUsername() {
    return $this->username;
    }
    function setQualification($qualification) {
    $this->qualification = $qualification;
    }
    function getQualification() {
    return $this->qualification;
    }
    function setExpertise($expertise) {
    $this->expertise = $expertise;
    }
    function getExpertise() {
    return $this->expertise;
    }
    function setExperience($experience) {
    $this->experience = $experience;
    }
    function getExperience() {
    return $this->experience;
    }
    function setCvLocation($cv_location){
    $this->cv_location = $cv_location;
    }
    function getCvLocation() {
    return $this->cv_location;
    }
    function setJoinDate($join_date){
    $this->join_date = $join_date;
    }
    function getJoinDate() {
    return $this->join_date;
    }
    function setType($type){
    $this->type = $type;
    }
    function getType() {
    return $this->type;
    }

}


?>