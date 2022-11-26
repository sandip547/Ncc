<?php
class StaffGet{
    private $staffId,$fullName,$dob,$email,$gender,$phoneNo,$mobileNo,$address,$joinDate,$qualification,$subjectExpertise,$noOfExperience, $cvLocation,$activeStatus, $type, $userName, $password, $retireDate;

   

    function __construct($staffId=null,$fullName=null,$dob=null,$email=null,$gender=null,$phoneNo=null,$mobileNo=null,$address=null,$joinDate=null,$qualification=null,$subjectExpertise=null,$noOfExperience=null, $cvLocation=null,$activeStatus=null, $type=null, $userName=null, $password=null, $retireDate=null)
    {
        $this->staffId=$staffId;
        $this->fullName=$fullName;
        $this->dob=$dob;
        $this->email=$email;
        $this->gender=$gender;
        $this->phoneNo=$phoneNo;
        $this->mobileNo=$mobileNo;
        $this->address=$address;
        $this->joinDate=$joinDate;
        $this->qualification=$qualification;
        $this->subjectExpertise=$subjectExpertise;
        $this->noOfExperience=$noOfExperience;
        $this->cvLocation=$cvLocation;
        $this->activeStatus=$activeStatus;
        $this->type=$type;
        $this->userName=$userName;
        $this->password=$password;
        $this->retireDate=$retireDate;
    }
    function getStaffId()
    {
        return $this->staffId;
    }
    function setStaffId($staffId){
        $this->staffId=$staffId;
    }
    function getFullName(){
        return $this->fullName;
    }
    function setFullName($fullName){
        $this->fullName=$fullName;
    }
    function getDob(){
        return $this->dob;
    }
    function setDob($dob){
        $this->dob=$dob;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function getGender(){
        return $this->gender;
    }
    function setGender($gender){
        $this->gender= $gender;
    }
    function getPhoneNo(){
        return $this->phoneNo;
    }
    function setPhoneNo($phoneNo){
        $this->phoneNo=$phoneNo;
    }
    function getMobileNo(){
        return $this->mobileNo;
    }
    function setMobileNo($mobileNo){
        $this->mobileNo=$mobileNo;
    }
    function getAddress(){
        return $this->address;
    }
    function setAddress($address){
        $this->address=$address;
    }
    function getJoinDate(){
        return $this->joinDate;
    }
    function setJoinDate($joinDate){
        $this->joinDate=$joinDate;
    }
    function getQualification(){
        return $this->qualification;
    }
    function setQualification($qualification){
        $this->qualification=$qualification;
    }
    function getSubjectExpertise(){
        return $this->subjectExpertise;
    }
    function setSubjectExpertise($subjectExpertise){
        $this->subjectExpertise=$subjectExpertise;
    }
    function getNoOfExperience(){
        return $this->noOfExperience;
    }
    function getNoOfExperienceLabel(){
        return $this->noOfExperience. " Years";
    }
    function setNoOfExperience($noOfExperience){
        $this->noOfExperience=$noOfExperience;
    }
    function getCvLocation(){
        return $this->cvLocation;
    }
    function setCvLocation($cvLocation){
        $this->cvLocation=$cvLocation;
    }
    function getActiveStatus(){
        return $this->activeStatus;
    }
    function setActiveStatus($activeStatus){
        $this->activeStatus=$activeStatus;
    }
    function getType(){
        return $this->type;
    }
    function setType($type){
        $this->type=$type;
    }
    function getUserName(){
        return $this->userName;
    }
    function setUserName($userName){
        $this->userName=$userName;
    }
    function getPassword(){
        return $this->password;
    }
    function setPassword($password){
        $this->password=$password;
    }
    function getRetireDate(){
        return $this->retireDate;
    }
    function setRetireDate($retireDate){
        $this->retireDate=$retireDate;
    }
    
}
?>