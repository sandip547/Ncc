<?php
header("Cache-Control: no cache");
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Controllers/Registration/SessionManagement.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
$sm = new SessionManagement();
$sm->checkLoginAgainSession(isset($_SESSION["username"]),isset($_SESSION["user"]));
include 'headerlogin.php';
require_once("../../Controllers/Authentication/Authentication.php");
require_once("../../Models/RegistrationModels/Login.php");
$auth = new Authentication();
if(isset($_POST['submit'])){
    $auth->authAdmin(new Login($_POST['username'],$_POST['password']));
}
?>

<!-- login form -->
<section class="ftco-section my-5">
    <div class="container">
        <div class="col-lg-8 col-md-8 mx-auto">
            <form action method="post"  action="login.php" enctype="multipart/form-data">
                <div class="mb-3 col-md-8 mx-auto my-3">
                    <input type="text" class="form-control inputcolor" id="emailorusername" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3 col-md-8 mx-auto my-3">
                    <input type="password" class="form-control inputcolor" id="password" name="password" placeholder="Password" required>
                    <?php
                    if(isset($_POST['username'])){
                    if($auth->getCount()==0){
                        ?>
                        <p style="color:red;">username and password doesn't match</p>
                        <?php
                    }
                    }
                    ?>
                </div>
                <div class="mx-5 px-5 my-3">
                    <div class="mb-3 form-check float-left mx-5" id="remember">

                    </div>
                    <div class="mx-auto text-right" id="forgotpass">
                        <a href="#" class="mx-5" id="pass"> Forgot Password?</a>
                    </div>
                </div>
                <br>
                <div class="clearfix mx-auto d-grid gap-2 col-8">
                    <button type="submit" name="submit" class="btn btn-primary clearfix rounded-2 hover-orangered">LOG IN</button>
                </div>
                <div class="m-2 text-center">
                    <a href="student_registration.php">Create new account</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
include 'footer.php'
?>