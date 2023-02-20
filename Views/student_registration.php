
<?php
include 'header.php';?>
<script>
    function getPasswordStrength(password)
    {
        var html = $.ajax({
            type: "POST",
            url: "passwordStrengthChecker.php",
            data: "password="+password ,
            async: false
        }).responseText;
        if(html){
            $("#passcheck").html(html);
        }
    }

</script>
<?php
require_once("../Controllers/Registration/RegController.php");
require_once("../Models/RegistrationModels/StudentUser.php");
require_once("../Models/RegistrationModels/CheckUsername.php");
require_once("../Models/RegistrationModels/CheckPasswordConfirm.php");
require_once ("../SendMail/SendMail.php");
require_once("Notification/Notification.php");
$rc = new RegController();

if(isset($_POST["register"])){

    if($rc->checkUserName($_POST["username"])){
        $rc->getChecker()->setCheck("True");
    }

    if($rc->checkPassword($_POST["password"],$_POST['cpassword'])){
        $notify = new Notification();

        if ($rc->insertUserDetails(new StudentUser($_POST["firstname"] . " " . $_POST["lastname"], $_POST["dob"], $_POST["email"], $_POST["gender"],
            $_POST["username"], $_POST["password"], $_POST["mobilenumber"], $_POST["address"],
            date("Y-m-d h:i:s")))) {
            $sm = new SendMail();
            $sm->sendEnrolledSuccessEmail("Registration Successfull", "", $_POST["email"]);
            $notify->redirectLoginPage();
            $notify->alertRegistrationSuccess();
        }
        else{
            $notify->alertNotSuccess("Registration not successful");
        }





    }

}
?>
<!-- Student Registration page -->
<form action method="post" enctype="multipart/form-data" action="login.php">
<section class="mb-5">
  <div class="container">
      <h1 class="text my-5 text-center text-primary"><u>Student Registration</u></h1>
    <div class="row">
      <div class="col-md-6 my-3">
          <label for="firstname" class="form-label text-blue-shade">First name</label>
          <input type="text" class="form-control inputcolor" placeholder="First name" name="firstname" aria-label="First name" required>
      </div>
      <div class="col-md-6 my-3">
          <label for="lastname" class="form-label text-blue-shade">Last name</label>
          <input type="text" class="form-control inputcolor" placeholder="Last name" name="lastname" aria-label="Last name" required>
      </div>

      <div class="col-md-6 my-3">
            <label for="Date of Birth" class="form-label text-blue-shade">Date of Birth</label>
            <input type="date" id="registrationDate" class="form-control inputcolor fs-6" name="dob" aria-label="Date of Birth" required>
     </div>
      <div class="col-md-6 my-3">
          <label for="email" class="form-label text-blue-shade">E-mail</label>
          <input type="text" class="form-control inputcolor" placeholder="E-mail" name="email" aria-label="E-mail" required>
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
            <label for="Username"class="form-label text-blue-shade">Username</label>
            <input type="text" class="form-control inputcolor" placeholder="Username" name="username" aria-label="Username" required>
            <?php
            if($rc->getChecker()->getCheck()){?> <p style="color:red">username already exist</p> <?php }
            ?>
        </div>
      <div class="col-md-6 my-3">
          <label for="password" class="form-label text-blue-shade">Password</label>
          <input type="password" onchange="getPasswordStrength(this.value)" class="form-control inputcolor" placeholder="Password" id="password" name="password" aria-label="Password" required>
          <div id="passcheck">

          </div>
      </div>
      <div class="col-md-6 my-3">
          <label for="confirmpassword" class="form-label text-blue-shade">Password Confirmation</label>
          <input type="password" class="form-control inputcolor" placeholder="Password Confirmation" id="cpassword" name="cpassword" aria-label="Password Confirmation" required>
          <?php
          if(isset($_POST["password"]) && isset($_POST["cpassword"])){
              if(!$rc->checkPassword($_POST["password"],$_POST['cpassword'])){
                  ?>
                  <p style="color:red;" id="checkPass">Password and Confirm password doesn't match</p>
          <?php
              }
          }
          ?>

      </div>
        <div class="col-md-6 my-3">
            <label for="Username"class="form-label text-blue-shade">Mobile Number</label>
            <input type="text" class="form-control inputcolor" placeholder="Mobile Number" name="mobilenumber" aria-label="Mobile Number" required>
     </div>

        <div class="col-md-6 my-3">
            <label for="Username"class="form-label text-blue-shade">Address</label>
            <input type="text" class="form-control inputcolor" placeholder="Address" name="address" aria-label="Address" required>
        </div>
    </div>
    <div class="text-left">
      <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" name="register"  type="submit" >Register</button>
    </div>
    
  </div><br>
</section>
</form>
<?php
  include 'footer.php'
?>
