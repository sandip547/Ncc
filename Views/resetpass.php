<!-- Reset password tab inside setting -->
<?php
require_once("../Models/RegistrationModels/StudentProfileUpdate.php");

?>
<form action method="post" enctype="multipart/form-data" action="resetpass.php">
<div class="col-md-10 my-3">
    <label for="name" class="form-label text-blue-shade">Current Password</label>
    <input type="password" class="form-control inputcolor" name="current_password" placeholder="Current password" required>
</div>    
<div class="d-flex flex-wrap">

    <div class="col-md-5 my-3">
        <label for="email" class="form-label text-blue-shade">New Password</label>
        <input type="password" class="form-control inputcolor" name="new_password" placeholder="New password" required>
    </div>
    <div class="col-md-5 my-3">
        <label for="phone"class="form-label text-blue-shade">Confirm Password</label>
        <input type="password" class="form-control inputcolor" name="confirm_password" placeholder="Confirm password" required>
    </div>

</div>
<div class="clearfix col-md-10">
    <button type="submit" name="resetPass" class="btn btn-primary clearfix rounded-2">RESET PASSWORD</button>
</div>
</form>