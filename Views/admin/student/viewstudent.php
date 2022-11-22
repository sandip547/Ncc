<?php

require_once("../../Controllers/GetDetails/GetStudentDetails.php");
$sd = new GetStudentDetails();
$details = $sd->getStudentDetails();

?>

<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Student data list</p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th></th>
                <th>ID</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Password</th>
                <th>Mobile number</th>
                <th>Address</th>
                <th>Regsitration Date</th>
                <th>Expiry Date</th>
                <th>Active Status</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $det) { ?>
            <tr>
                <th>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalLong<?php echo $det->getStudentId(); ?>">Edit</button>
                </th>
                <th class="px-3"><?php echo $det->getStudentId(); ?></th>
                <th class="px-3"><?php echo $det->getFullName(); ?></th>
                <th class="px-3"><?php echo $det->getDOB(); ?></th>
                <th class="px-3"><?php echo $det->getEmail(); ?></th>
                <th class="px-3"><?php echo $det->getGender(); ?></th>
                <th class="px-3"><?php echo $det->getUsername(); ?></th>
                <th class="px-3"><?php echo $det->getUsername() ?></th>
                <th class="px-3"><?php echo $det->getMobile(); ?></th>
                <th class="px-3"><?php echo $det->getAddress(); ?></th>
                <th class="px-3"><?php echo $det->getRegDateLabel(); ?></th>
                <th class="px-3"><?php echo $det->getRegDateLabel(); ?></th>
                <th class="px-3"><?php echo $det->getActiveStatusLabel(); ?></th>
                <th class="px-3"><?php echo $det->getLastLogin(); ?></th>
            <tr>

                <?php
            }
                ?>


        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example" class="">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link text-primary" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link text-primary" href="#">1</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">2</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">3</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">4</a></li>
        <li class="page-item"><a class="page-link text-primary" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link text-primary" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>

<?php foreach ($details as $det) { ?>

<div class="modal fade" id="exampleModalLong<?php echo $det->getStudentId(); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Student details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="fullName" class="form-label">Full Name</label>

                    </div>
                    <div class="col-md-7">
                        <input type="text" id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name"
                            aria-label="fullName" value="<?php echo $det->getFullName(); ?>">
                    </div>
                </div>
                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                    </div>
                    <div class="col-md-7">
                        <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                            <input type="date" id="dob" class="form-control inputcolor fs-6 border-0" aria-label="dob"
                                value="<?php echo $det->getDob(); ?>">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="email" class="form-label">E-mail</label>
                    </div>
                    <div class="col-md-7">
                        <input type="email" class="form-control inputcolor fs-6" placeholder="E-mail" aria-label="email"
                            value="<?php echo $det->getEmail(); ?>">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="gender" class="form-label">Gender</label>
                    </div>
                    <div class="col-md-7">
                        <select name="gender" id="gender" va class="form-select form-select-lg inputcolor ">
                            <sel></sel>
                            <option selected value="<?php echo $det->getGender(); ?>">
                                <?php echo $det->getGender(); ?>
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
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="userName" class="form-label">Username</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" id="userName" class="form-control inputcolor fs-6" placeholder="Username"
                            aria-label="userName" value="<?php echo $det->getUsername(); ?>">
                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="col-md-7">
                        <input type="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
                    </div>
                </div>
                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="mobileNo" class="form-label">Mobile Number</label>
                    </div>
                    <div class="col-md-7">
                        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Phone Number"
                            aria-label="Phone Number" value="<?php echo $det->getMobile(); ?>">
                    </div>
                </div>

                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="mobileNo" class="form-label">Address</label>
                    </div>
                    <div class="col-md-7">
                        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Address"
                            aria-label="Mobile Number" value="<?php echo $det->getAddress(); ?>">
                    </div>
                </div>

                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="registrationDate" class="form-label">Registration Date</label>
                    </div>
                    <div class="col-md-7">
                        <input type="date" id="registrationDate" class="form-control inputcolor fs-6"
                            aria-label="joinDate" value="<?php echo $det->getRegDate(); ?>">

                    </div>
                </div>
                <div class="row my-2 align-items-center">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="expiryDate" class="form-label">Expiry Date</label>
                    </div>
                    <div class="col-md-7">
                        <input type="date" id="expiryDate" class="form-control inputcolor fs-6" aria-label="retireDate"
                            value="<?php echo $det->getRegDate(); ?>">
                    </div>
                </div>

                <div class="row my-2 align-items-center">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="activeStatus" class="form-label">Active Status</label>
                    </div>
                    <div class="col-md-7">
                        <select name="activeStatus" id="activeStatus"
                            class="form-select form-select-lg inputcolor fs-6">
                            <option value="na">
                                Select Active Status
                            </option>
                            <option value="1">
                                Active
                            </option>
                            <option value="0">
                                Not Active
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row align-items-center my-2">
                    <div class="col-md-5 text-orangered font-weight-bold fs-6">
                        <label for="lastLogin" class="form-label">Last Login</label>
                    </div>
                    <div class="col-md-7">
                        <input type="date" id="lastLogin" class="form-control inputcolor fs-6" aria-label="joinDate"
                            <?php echo $det->getLastLogin(); ?>>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php
}
?>



<!-- 
<p class="h5 text-dark font-weight-bold">Staff details</p>

<div class="row align-items-center my-2">
    <div class="col-md-6 text-orangered font-weight-bold fs-6">
        <label for="fullName" class="form-label">Full Name</label>

    </div>
    <div class="col-md-6">
        <input type="text" id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name" aria-label="fullName">
    </div>
</div>
<div class="row align-items-center my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="dob" class="form-label">Date of Birth</label>
    </div>
    <div class="col-md-6">
        <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
            <input type="date" id="dob" class="form-control inputcolor fs-6 border-0" aria-label="dob">
        </div>
    </div>
</div>
<div class="row align-items-center my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="email" class="form-label">E-mail</label>
    </div>
    <div class="col-md-6">
        <input type="email" class="form-control inputcolor fs-6" placeholder="E-mail" aria-label="email">
    </div>
</div>
<div class="row align-items-center my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="phoneNo" class="form-label">Phone Number</label>
    </div>
    <div class="col-md-6">
        <input type="tel" id="phoneNo" class="form-control inputcolor fs-6" placeholder="Phone Number" aria-label="Phone Number">
    </div>
</div>

<div class="row align-items-center my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="mobileNo" class="form-label">Address</label>
    </div>
    <div class="col-md-6">
        <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Address" aria-label="Mobile Number">
    </div>
</div>

<div class="row align-items-center my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="joinDate" class="form-label">Join Date</label>
    </div>
    <div class="col-md-6">
        <input type="date" id="joinDate" class="form-control inputcolor fs-6" aria-label="joinDate">
    </div>
</div>


<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="Qualification" class="form-label">Qualification (Choose highest)</label>
    </div>
    <div class="col-md-6 my-2">
        <select name="Qualification" id="Qualification" class="form-select form-select-lg inputcolor fs-6">
            <option value="bsc">
                1) Bachelor in Civil Engineering
            </option>
            <option value="msc">
                2) Master in Civil Engineering
            </option>
        </select>
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="Expertise" class="form-label">Subject Expertise</label>
    </div>
    <div class="col-md-6 my-2">
        <select name="Expertise" id="Expertise" class="form-select form-select-lg inputcolor fs-6" required>
            <option value="bsc">
                1) Hydropower
            </option>
            <option value="" msc>
                2) Building design - RCC, steel and composite structure
            </option>
            <option value="">
                3) Estimation and Valuation
            </option>
            <option value="">
                4) Revit Architecture and Rendering using Lumion
            </option>
            <option value="">
                5) Interior design
            </option>
            <option value="">
                6) Project planning and scheduling
            </option>
            <option value="">
                7) Procurement
            </option>
            <option value="">
                8) GIS
            </option>
            <option value="">
                9) ANSYS - Workbench
            </option>
            <option value="">
                10) Geotech
            </option>
            <option value="">
                11) Water-supply
            </option>
            <option value="">
                12) Excel, VBA & Lisp-programming
            </option>
            <option value="">
                13) Civil-3D
            </option>
        </select>
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="noOfExperience" class="form-label">Experience (In years)</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="number" class="form-control inputcolor fs-6" placeholder="Experience (In years)" aria-label="noOfExperience">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="cvLocation" class="form-label">Resume/CV (Less than 10 Mb and pdf only)</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="file" id="cvLocation" class="form-control form-control-custom fs-6 inputcolor" placeholder="Upload Resume" aria-label="Upload Resume">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="activeStatus" class="form-label">Active Status</label>
    </div>
    <div class="col-md-6 my-2">
        <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
            <option value="na">
                Select Active Status
            </option>
            <option value="active">
                Active
            </option>
            <option value="not active">
                Not Active
            </option>
        </select>
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="type" class="form-label">Staff Type</label>
    </div>
    <div class="col-md-6 my-2">
        <select name="type" id="type" class="form-select form-select-lg inputcolor fs-6">
            <option value="1">
                1 - Staff
            </option>
            <option value="2">
                2 - Admin
            </option>
            <option value="3">
                3 - Instructor
            </option>
        </select>
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="userName" class="form-label">Username</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="text" id="userName" class="form-control inputcolor fs-6" placeholder="Username" aria-label="userName">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="retireDate" class="form-label">Retire Date</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="date" id="retireDate" class="form-control inputcolor fs-6" aria-label="retireDate">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="password" class="form-label">Password</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="cpassword" class="form-label">Confirm Password</label>
    </div>
    <div class="col-md-6 my-2">
        <input type="password" id="cpassword" class="form-control inputcolor fs-6" aria-label="cpassword">
    </div>
</div>


<div class="text-center my-2">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Update Staff</button>
</div> -->