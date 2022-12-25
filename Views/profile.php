<?php
header("Cache-Control: no cache");
$page = 'profile';
include 'logged_in_header.php';
require_once("../Models/RegistrationModels/GetStudentUser.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Controllers/GetDetails/GetStudentDetails.php");
$sd = new GetStudentDetails();
$getDetails = $sd->getStudentId(new GetStudentUsername($_SESSION["username"]));
?>

<!-- User profile -->
<div class="text-justify p-0 m-0 ml-4 course-info">
<p class="h5 text-dark font-weight-bold">My Profile</p>
<hr class="bg-primary"/>
    <div class="card mb-2">

    <div class="col-9 col-sm-7 col-md-9">
        <div class="row d-flex">
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Full Name :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getFullName();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Date of Birth :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getDob();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Email :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getEmail();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Gender :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getGender();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Username :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getUsername();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Mobile :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getMobile();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Address :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getAddress();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Registration Date :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getRegDate();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Active Status :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getActiveStatus();?>
            </div>
            <div class="col-md-4 my-2 text-orangered font-weight-bold">
                Last Login :
            </div>
            <div class="col-md-5 my-2 text-blue-shade">
                <?php echo $getDetails[0]->getFullName();?>
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