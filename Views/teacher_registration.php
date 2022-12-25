<?php
// if($logged){
//     include 'logged_in_header.php';
// }
include 'header.php';
require_once("../Models/RegistrationModels/TeacherUser.php");
require_once("../Models/RegistrationModels/CheckUsername.php");
require_once("../Models/RegistrationModels/CheckPasswordConfirm.php");
require_once("../Controllers/Registration/RegController.php");
require_once("Notification/Notification.php");
$rc = new RegController();
$notify = new Notification();
if(isset($_POST['saveTeacher'])){
    if($rc->checkStaffName($_POST["userName"])){
        $rc->getChecker()->setCheck("True");
    }
    if($rc->checkPassword($_POST["password"],$_POST['confirmPassword']) && !$rc->getChecker()->getCheck()) {
        $rc->insertTeacherDetails(new TeacherUser($_POST['fullName'], $_POST['dateOfBirth'], $_POST['email'], $_POST['gender'], $_POST['mobileNumber']
            , $_POST['address'], $_POST['qualification'], $_POST['expertise'], $_POST['experience'], $_FILES['cvLocation'],date("Y-m-d h:i:s")
            , $_POST['userName'], $_POST['password']));

        $notify->alertRegistrationSuccess();
    }
    else{
        $notify->alertFillAgain();
    }
}
?>


<!-- Teachers Registration page -->
<section class="mb-5">
    <div class="container">
        <p class="h1 text my-5 text-center text-primary">"Teacher Registration"</p>

        <br><br><br>

        <p class="h2 text text-center">Got Civil Engineering Skills?</p>
        <p class="fs-6 text-center">Share, grow, get recognized and get handsomely paid!!</p>

        <p class="h3 text-orangered font-weight-bold">Courses and expert field required:</p>
        <ol class="text-blue-shade">
            <li>Hydropower</li>
            <li>Building design - RCC, steel and composite structure</li>
            <li>Estimation and Valuation</li>
            <li>Revit Architecture and Rendering using Lumion</li>
            <li>Interior design</li>
            <li>Project planning and scheduling</li>
            <li>Procurement</li>
            <li>GIS</li>
            <li>ANSYS - Workbench</li>
            <li>Geotech</li>
            <li>Water-supply</li>
            <li>Excel, VBA & Lisp-programming</li>
            <li>Civil-3D</li>
        </ol>
        <form action method="post" enctype="multipart/form-data" action="teacher_registration.php">
        <p class="h2 text my-5 text-center">Fill up the contact form below: </p>

        <div class="d-flex flex-wrap">
            <div class="col-md-6 my-3">
                <label for="name" class="form-label text-blue-shade">Full Name</label>
                <input type="text" name="fullName" class="form-control inputcolor fs-6" placeholder="Full Name" aria-label="Full Name" required>
            </div>

            <div class="col-md-6 my-3">
                <label for="name" class="form-label text-blue-shade">Date Of Birth</label>
                <input type="date" name="dateOfBirth" class="form-control inputcolor fs-6" placeholder="Date Of Birth" aria-label="Date Of Birth" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="email" class="form-label text-blue-shade">Your email</label>
                <input type="email" name="email" class="form-control inputcolor fs-6" placeholder="Your email" aria-label="Your email" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="gender" class="form-label text-blue-shade">Gender</label>
                <select name="gender" id="gender" class="form-select form-select-lg inputcolor fs-6" required>
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
            <div class="col-md-6 my-3">
                <label for="phone" class="form-label text-blue-shade">Your Mobile number</label>
                <input type="tel" name="mobileNumber" class="form-control inputcolor fs-6" placeholder="Mobile number" aria-label="Mobile Number" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="phone" class="form-label text-blue-shade">Your Address</label>
                <input type="text" name="address" class="form-control inputcolor fs-6" placeholder="Your Address" aria-label="Your Address" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="Qualification" class="form-label text-blue-shade">Qualification</label>
                <select name="qualification" id="Qualification" class="form-select form-select-lg inputcolor fs-6" required>
                    <option value="Bachelor in Civil Engineering">
                        1) Bachelor in Civil Engineering
                    </option>
                    <option value="Master in Civil Engineering">
                        2) Master in Civil Engineering
                    </option>
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="Expertise" class="form-label text-blue-shade">Subject Expertise</label>
                <select name="expertise" id="Expertise" class="form-select form-select-lg inputcolor fs-6" required>
                    <option value="Hydropower">
                        1) Hydropower
                    </option>
                    <option value="Building design - RCC, steel and composite structure">
                        2) Building design - RCC, steel and composite structure
                    </option>
                    <option value="Estimation and Valuation">
                        3) Estimation and Valuation
                    </option>
                    <option value="Revit Architecture and Rendering using Lumion">
                        4) Revit Architecture and Rendering using Lumion
                    </option>
                    <option value="Interior design">
                        5) Interior design
                    </option>
                    <option value="Project planning and scheduling">
                        6) Project planning and scheduling
                    </option>
                    <option value="Procurement">
                        7) Procurement
                    </option>
                    <option value="GIS">
                        8) GIS
                    </option>
                    <option value="ANSYS - Workbench">
                        9) ANSYS - Workbench
                    </option>
                    <option value="Geotech">
                        10) Geotech
                    </option>
                    <option value="Water-supply">
                        11) Water-supply
                    </option>
                    <option value="Excel, VBA & Lisp-programming">
                        12) Excel, VBA & Lisp-programming
                    </option>
                    <option value="Civil-3D">
                        13) Civil-3D
                    </option>
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="experience" class="form-label text-blue-shade">Experience (In years)</label>
                <input type="text" name="experience" class="form-control inputcolor fs-6" placeholder="Experience" aria-label="experience" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="Resume" class="form-label text-blue-shade">Resume/CV (Less than 10 Mb and pdf only)</label>
                <input type="file" name="cvLocation" class="form-control form-control-custom fs-6 inputcolor" placeholder="CV Location" aria-label="CV Location" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="User Name" class="form-label text-blue-shade">User Name</label>
                <input type="text" name="userName" class="form-control inputcolor fs-6" placeholder="User name" aria-label="User Name" required>
                <?php
                if($rc->getChecker()->getCheck()){?> <p style="color:red">username already exist</p> <?php }
                ?>
            </div>
            <div class="col-md-6 my-3">
                <label for="Password" class="form-label text-blue-shade">Password</label>
                <input type="password" name="password" class="form-control inputcolor fs-6" placeholder="Password" aria-label="Password" required>
            </div>
            <div class="col-md-6 my-3">
                <label for="Confirm Password" class="form-label text-blue-shade">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control inputcolor fs-6" placeholder="Confirm Password" aria-label="Confirm Password" required>
                 <?php
          if(isset($_POST["password"]) && isset($_POST["confirmPassword"])){
              if(!$rc->checkPassword($_POST["password"],$_POST['confirmPassword'])){
                  ?>
                  <p style="color:red;" id="checkPass">Password and Confirm password doesn't match</p>
          <?php
              }
          }
          ?>
            </div>
        </div>
        <div class="text-left m-3">
            <button class="btn btn-primary clearfix rounded-2 hover-orangered fw-bold px-4" style="border-radius:4px;" type="submit" name="saveTeacher">Submit</button>
        </div>
    </div>
    <br>
</section>

    </form>

<?php
include 'footer.php'
?>