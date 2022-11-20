<?php
require_once("../Models/RegistrationModels/StudentProfileUpdate.php");
require_once("../Controllers/GetDetails/GetStudentDetails.php");

require_once("../Models/RegistrationModels/GetStudentUser.php");
require_once("../Models/RegistrationModels/GetStudentUserId.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");

$sd = new GetStudentDetails();
$stdprofile = $sd->getStudentProfileUpdate($sd->getStudentIdOn(new GetStudentUsername($_SESSION["username"])));

?>
<!-- Profile tab inside Setting -->
<form action method="post" enctype="multipart/form-data" action="profile.php">
<div class="col-md-11 my-3 mx-0 ml-2" id="profile">
    <div class="profile-header-cover"></div>
    <div class="d-flex justify-content-end text-right">
        <div class="thislogo1 bg-light rounded-pill d-flex align-items-center justify-content-center text-center mr-5" style="width: 30px; height:30px;--bs-text-opacity: .5;">
            <a href="#"><i class="bi bi-trash3-fill text-orangered"></i></a>
        </div>
    </div>
    <div class="profile-header-content d-flex flex-wrap justify-content-between">
        <img src="images/profile.jpg" width="150px" height="150px" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-5 mb-1 rounded-pill" style="z-index: 1;bottom: 100%;transform: translate(10%, 40%)" id="profileimage">
        <div class="d-flex align-items-end mt-4 mx-1">
            <a href="#" class="btn mt-5 btn-orangered" style="bottom: 100%; transform: translate(-10%, -20%);">Edit Profile</a>
        </div>
    </div>
</div>

<div class="d-flex flex-wrap mt-5 p-0 mx-0">

    <div class="col-md-5 col-sm-12 my-4">
        <label for="lastname" class="form-label text-blue-shade">Full Name</label>
        <input type="text" class="form-control fs-6 inputcolor" value="<?php echo $stdprofile[0];  ?>" name="fullname" aria-label="fullname" required>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="Date of Birth" class="form-label text-blue-shade">Date of Birth</label>
        <input type="date" id="registrationDate" value="<?php echo $stdprofile[1];  ?>" class="form-control inputcolor fs-6" name="dob" aria-label="Date of Birth" required>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="lastname" class="form-label text-blue-shade">Email</label>
        <input type="email" class="form-control fs-6 inputcolor" value="<?php echo $stdprofile[2];  ?>" name="email" aria-label="email" required>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="displayname" class="form-label text-blue-shade">Gender</label>
        <select name="gender" id="gender" class="form-select form-select-lg inputcolor fs-6" required>
            <option value="1">
                <?php echo $stdprofile[3];?>
            </option>
            <option value="1">
                Male
            </option>
            <option value="2">
                Female
            </option>
            <option value="3">
                Other
            </option>
        </select>
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="phone" class="form-label text-blue-shade">Mobile Number</label>
        <input type="tel" class="form-control fs-6 inputcolor" value="<?php echo $stdprofile[4];  ?>" name="mnumber" aria-label="Mobile Number">
    </div>
    <div class="col-md-5 col-sm-12 my-4">
        <label for="phone" class="form-label text-blue-shade">Address</label>
        <input type="tel" class="form-control fs-6 inputcolor" value="<?php echo $stdprofile[5];  ?>" name="address" aria-label="Address">
    </div>
    <div class="col-md-10">
        <button type="submit" name="updateProfile" class="btn btn-primary clearfix rounded-2">UPDATE PROFILE</button>
    </div>
    <br><br>
</div>
</form>
<br><br><br><br>