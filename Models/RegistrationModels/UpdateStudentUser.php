<?php
require_once("../../Models/RegistrationModels/TsUser.php");
class UpdateStudentUser{
      private $tsuser;
      private $student_id;

      function __construct($firstname,$lastname,$dob,$email,$gender,$username,$mobile,$address,$student_id)
      {
      $this->tsuser = new TsUser();
      $this->tsuser->setFirstName($firstname);
      $this->tsuser->setLastName($lastname);
      $this->tsuser->setDob($dob);
      $this->tsuser->setGender($gender);
      $this->tsuser->setUsername($username);

      $this->tsuser->setMob($mobile);
      $this->tsuser->setAddresses($address);
      $this->tsuser->setEmail($email);
      $this->student_id=$student_id;
      $this->tsuser->setActiveStatus(1);

      }

      function setTsUser($tsuser){
      $this->tsuser = $tsuser;
      }

      function getTsUser(){
      return $this->tsuser;
      }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }
}
?>