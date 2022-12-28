<?php
session_start();

$page = 'staff';
include 'admin header.php';
require_once("../../Models/Staff/StaffGet.php");
require_once("../../Models/RegistrationModels/DeleteTeacherUser.php");
require_once ("../../Controllers/Authentication/Encryption.php");

require_once("../../Controllers/SaveDetails/SaveStaff.php");
require_once("../Notification/Notification.php");
$notify = new Notification();

if (isset($_POST['addStaff'])) {
    $ss = new SaveStaff();
    if($_POST['password'] != $_POST['confirmPassword']){
        echo "<script>alert('Password and Confirm Password does not match')</script>";
    }else{
        $staff = new StaffGet();
        $staff->setFullName($_POST['fullName']);
        $staff->setDob($_POST['dob']);
        $staff->setEmail($_POST['email']);
        $staff->setPhoneNo($_POST['phoneNo']);
        $staff->setMobileNo($_POST['mobileNo']);
        $staff->setGender($_POST['gender']);
        $staff->setJoinDate($_POST['joinDate']);
        $staff->setAddress($_POST['address']);
        $staff->setQualification($_POST['qualification']);
        $staff->setSubjectExpertise($_POST['expertise']);
        $staff->setNoOfExperience($_POST['noOfExperience']);
        $staff->setActiveStatus($_POST['activeStatus']);
        $staff->setType($_POST['type']);
        $staff->setUserName($_POST['userName']);
        $staff->setRetireDate($_POST['retireDate']);
        $staff->setPassword($_POST['password']);

        $ss->saveStaffDetails($staff, $_FILES['cv']);
        $notify->AddSuccess();
    }
}

if (isset($_POST['updateStaff'])) {
    $ss = new SaveStaff();

        $staff = new StaffGet();
        $staff->setStaffId($_POST["id"]);
        $staff->setFullName($_POST['fullName']);
        $staff->setDob($_POST['dob']);
        $staff->setEmail($_POST['email']);
        $staff->setPhoneNo($_POST['phoneNo']);
        $staff->setMobileNo($_POST['mobileNo']);
        $staff->setGender($_POST['gender']);
        $staff->setJoinDate($_POST['joinDate']);
        $staff->setAddress($_POST['address']);
        $staff->setQualification($_POST['qualification']);
        $staff->setSubjectExpertise($_POST['expertise']);
        $staff->setNoOfExperience($_POST['noOfExperience']);
        $staff->setActiveStatus($_POST['activeStatus']);
        $staff->setType($_POST['type']);
        $staff->setUserName($_POST['userName']);
        $staff->setRetireDate($_POST['retireDate']);
        $ss->updateStaffDetails($staff,$_FILES['cv']);
        $notify->alertUpdateSuccess();

}
if(isset($_GET['deletestaff'])){
    $ss = new SaveStaff();
    $ss->deleteStaffDetails(new DeleteTeacherUser($_GET['staffid']));
    $notify->alertDeleteSuccess();
}
?>

<!-- Staff page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Staff</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewstaff"
                        role="tab" aria-controls="viewstaff" aria-selected="true">View Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab" href="#addStaff"
                        role="tab" aria-controls="addStaff" aria-selected="true">Add Staff</a>
                </li>

            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewstaff" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/viewstaff.php';
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="addStaff" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/addstaff.php';
                        ?>
                    </div>
                    <br class="my-5">
                </div>

            </div>
        </div>
    </div>
</div>
</div>

</main>
</div>
</div>

<?php
include 'footer.php'
?>