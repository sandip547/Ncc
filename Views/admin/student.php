<?php
session_start();
$page = 'student';
include 'admin header.php';
require_once("../../Models/RegistrationModels/DeleteStudentUser.php");
require_once("../../Controllers/Registration/RegController.php");
require_once("../../Models/RegistrationModels/StudentUser.php");

require_once("../../Models/RegistrationModels/UpdateStudentUser.php");
require_once("../../Models/RegistrationModels/GetStudentUser.php");
require_once("../../Views/Notification/Notification.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Controllers/Authentication/Encryption.php");
require_once("../../Models/RegistrationModels/CheckUsername.php");
require_once("../../Controllers/GetDetails/GetStudentDetails.php");
$rc = new RegController();
$notify = new Notification();
if(isset($_POST["register"])){

    if($rc->checkUserName($_POST["username"])){
        // $rc->getChecker()->setCheck("True");
        
        $notify->alertRegistrationSuccess( "Username already exists.", "Registration Failed");
    }else{
        if($rc->checkPassword($_POST["password"],$_POST['cpassword'])){
            $rc->insertUserDetails(new StudentUser($_POST["fullName"], $_POST["dob"], $_POST["email"], $_POST["gender"],
                $_POST["username"], $_POST["password"], $_POST["mobileNumber"], $_POST["address"],
                date("Y-m-d h:i:s")));
                $notify->alertRegistrationSuccess("Student have been registered successfully.");
            }
    }
}
if(isset($_POST["updateStudent"])){
    $rc->updateUserDetails(new UpdateStudentUser($_POST["fullName"], $_POST["dob"], $_POST["email"], $_POST["gender"],
    $_POST["username"], $_POST["mobileNumber"], $_POST["address"],
    null, $_POST["id"]));
    $notify->alertRegistrationSuccess( "Student details updated successfully", "Success");
}
if(isset($_GET['delete'])){
    $nc = new Notification();
    if($rc->deleteUserDetails(new DeleteStudentUser($_GET['studentid']))){
        $nc->alertDeleteSuccess();
    }
    else{
        $nc->alertNotSuccess("This Video cannot be deleted due to dependency issues");
    }

}
?>

<!-- Student page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Student</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewStudent" role="tab" aria-controls="viewstudent" aria-selected="true">View Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab" href="#addStudent"
                        role="tab" aria-controls="addStudent" aria-selected="true">Add Student</a>
                </li>

            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewStudent" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'student/viewstudent.php';
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="addStudent" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'student/addstudent.php';
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