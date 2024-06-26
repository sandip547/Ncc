<?php
$page = 'setting';
include 'logged_in_header.php';
require_once("../Models/RegistrationModels/StudentProfileUpdate.php");
require_once("../Controllers/Registration/RegController.php");
require_once("../Models/RegistrationModels/GetStudentUser.php");
require_once("../Models/RegistrationModels/ResetPassword.php");
require_once("Notification/Notification.php");
if(isset($_POST['updateProfile'])){
    $reg = new RegController();
    $reg->updateProfileDetails(new StudentProfileUpdate($_POST["fullname"],$_POST["dob"],$_POST["email"],$_POST["gender"],$_POST["mnumber"],$_POST["address"],$_SESSION["username"]));
    $noti = new Notification();
    $noti->alertUpdateSuccess();
}

if(isset($_POST['resetPass'])){
    $rc =  new RegController();
    $noti = new Notification();
    if($rc->resetPassword($_SESSION["username"],new ResetPassword($_POST['current_password'],$_POST['new_password'],$_POST['confirm_password']))){
        $noti = new Notification();
        $noti->alertUpdateSuccess();
    }
    else{
        $noti->alertNotSuccess();
    }
}

?>
<!-- setting page of user -->
<div class="text-justify p-0 m-0 ml-4 course-info">
    <div class="col-12 col-sm-12 col-md-12 100vw w-100 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Settings</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="profileset-tab" data-toggle="tab" href="#profileset" role="tab" aria-controls="profileset" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="resetpass-tab" data-toggle="tab" href="#resetpass" role="tab" aria-controls="resetpass" aria-selected="false">Reset Passsword</a>
                </li>

            </ul>
            <div class="clearfix tab-content m-0 p-0 col-sm-12 100vw w-100">
                <div class="tab-pane active" id="profileset" role="tabpanel" aria-labelledby="profileset-tab">
                    <?php
                    include 'profileset.php'
                    ?>

                </div>
                <div class="tab-pane" id="resetpass" role="tabpanel" aria-labelledby="resetpass-tab">
                    <?php
                    include 'resetpass.php'
                    ?>

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