<?php
require_once("TsUser.php");
class UpdateTeacherUser{
    private $tsuser;
    private $qualification;
    private $expertise;
    private $experience;
    private $cv_location;
    private $type;
    private $staff_id;


    function __construct($firstname,$lastname,$dob,$email,$gender,$mobile,$address,$qualification,$expertise,$experience,$cv_location,$active_status,$username,$staff_id){
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
        $this->tsuser->setUsername($username);
        $this->tsuser->setActiveStatus($active_status);
        $this->staff_id = $staff_id;
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

    /**
     * @return mixed
     */
    public function getStaffId()
    {
        return $this->staff_id;
    }

    /**
     * @param mixed $staff_id
     */
    public function setStaffId($staff_id)
    {
        $this->staff_id = $staff_id;
    }
}
?>