<?php

require_once("../../Controllers/GetDetails/GetTeacherUser.php");
$td = new GetTeacherUser();
$details = $td->getTeacherDetails();

?>


<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Staff data list</p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th></th>
                <th>ID</th>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Mobile number</th>
                <th>Address</th>
                <th>Join Date</th>
                <th>Qualification</th>
                <th>Subject Expertise</th>
                <th>no. of Experience (in years)</th>
                <th>CV</th>
                <th>Active Status</th>
                <th>Type</th>
                <th>Username</th>
                <th>Password</th>
                <th>Retire Date</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($details as $det) { ?>
                <tr>
                    <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $det->getStaffId(); ?>">Edit</button></th>
                    <th class="px-3"><?php echo $det->getStaffId(); ?></th>
                    <th class="px-3"><?php echo $det->getFullName(); ?></th>
                    <th class="px-3"><?php echo $det->getDob(); ?></th>
                    <th class="px-3"><?php echo $det->getEmail(); ?></th>
                    <th class="px-3"><?php echo $det->getMobileNo(); ?></th>
                    <th class="px-3"><?php echo $det->getPhoneNo(); ?></th>
                    <th class="px-3"><?php echo $det->getAddress(); ?></th>
                    <th class="px-3"><?php echo $det->getJoinDate(); ?></th>
                    <th class="px-3"><?php echo $det->getQualification(); ?></th>
                    <th class="px-3"><?php echo $det->getSubjectExpertise(); ?></th>
                    <th class="px-3"><?php echo $det->getNoOfExperienceLabel(); ?></th>
                    <th class="px-3"><a target="__blank" href="<?php echo $det->getCvLocation(); ?>"><?php echo  !empty($det->getCvLocation()) ? "download" : ""; ?></a></th>
                    <th class="px-3"><?php echo $det->getActiveStatus(); ?></th>
                    <th class="px-3"><?php echo $det->getType(); ?></th>
                    <th class="px-3"><?php echo $det->getUserName(); ?></th>
                    <th class="px-3"><?php echo $det->getPassword(); ?></th>
                    <th class="px-3"><?php echo $det->getRetireDate(); ?></th>
                </tr>
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
    <div class="modal fade" id="exampleModalLong<?php echo $det->getStaffId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Staff details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="staff.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="text" name="id"  id="id" value="<?php echo $det->getStaffId(); ?>" hidden>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="fullName" class="form-label">Full Name</label>

                            </div>
                            <div class="col-md-7">
                                <input type="text" name="fullName" id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name" aria-label="fullName" value="<?php echo $det->getFullName(); ?>">
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                            </div>
                            <div class="col-md-7">
                                <div id="time-span" class="form-control inputcolor fs-6 align-items-center d-flex">
                                    <input type="date" name="dob" id="dob" class="form-control inputcolor fs-6 border-0" aria-label="dob" value="<?php echo $det->getDob(); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="email" class="form-label">E-mail</label>
                            </div>
                            <div class="col-md-7">
                                <input type="email" value="<?php echo $det->getEmail(); ?>" class="form-control inputcolor fs-6" placeholder="E-mail" name="email" aria-label="email" value="xsa@cdsd.cdc">
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="Gender" class="form-label">Gender</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <select name="gender" id="gender" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getGender(); ?>">
                                        <?php echo $td->getGenderName($det->getGender()); ?>
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

                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="phoneNo" class="form-label">Mobile Number</label>
                            </div>
                            <div class="col-md-7">
                                <input type="tel" name="mobileNo" value="<?php echo $det->getMobileNo(); ?>" id="phoneNo" class="form-control inputcolor fs-6" placeholder="Phone Number" aria-label="Phone Number">
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="phoneNo" class="form-label">Phone Number</label>
                            </div>
                            <div class="col-md-7">
                                <input type="tel" name="phoneNo" value="<?php echo $det->getPhoneNo(); ?>" id="phoneNo" class="form-control inputcolor fs-6" placeholder="Phone Number" aria-label="Phone Number">
                            </div>
                        </div>

                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="mobileNo" class="form-label">Address</label>
                            </div>
                            <div class="col-md-7">
                                <input type="tel" id="mobileNo" class="form-control inputcolor fs-6" placeholder="Address" aria-label="Mobile Number" name="address" value="<?php echo $det->getAddress(); ?>">
                            </div>
                        </div>

                        <div class="row align-items-center my-2">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="joinDate" class="form-label">Join Date</label>
                            </div>
                            <div class="col-md-7">
                                <input type="date" name="joinDate" value="<?php echo $det->getJoinDate(); ?>" id="joinDate" class="form-control inputcolor fs-6" aria-label="joinDate">
                            </div>
                        </div>


                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="Qualification" class="form-label">Qualification (Choose highest)</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <select name="qualification" id="Qualification" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getQualification(); ?>">
                                        <?php echo $det->getQualification(); ?>
                                    </option>
                                    <option value="Bachelor in Civil Engineering">
                                        1) Bachelor in Civil Engineering
                                    </option>
                                    <option value="Master in Civil Engineering">
                                        2) Master in Civil Engineering
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="Expertise" class="form-label">Subject Expertise</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <select name="expertise" required id="Expertise" class="form-select form-select-lg inputcolor fs-6" required>
                                    <option value="<?php echo $det->getSubjectExpertise(); ?>">
                                        <?php echo $det->getSubjectExpertise(); ?>
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
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="noOfExperience" class="form-label">Experience (In years)</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <input type="number" name="noOfExperience" class="form-control inputcolor fs-6" placeholder="Experience (In years)" aria-label="noOfExperience" value="<?php echo $det->getNoOfExperience(); ?>">
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="cvLocation" class="form-label">Resume/CV (Less than 10 Mb and pdf only)</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <input type="file" name="cv" id="cvLocation" class="form-control form-control-custom fs-6 inputcolor" placeholder="Upload Resume" aria-label="Upload Resume">
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="activeStatus" class="form-label">Active Status</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <select name="activeStatus" id="activeStatus" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getActiveStatus(); ?>">
                                        <?php echo $td->getStatusName($det->getActiveStatus()); ?>
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
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="type" class="form-label">Staff Type</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <select name="type" id="type" class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getType(); ?>">
                                        <?php echo $td->getTypeUser($det->getType()); ?>
                                    </option>
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
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="userName" class="form-label">Username</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <input type="text" id="userName" name="userName" class="form-control inputcolor fs-6" placeholder="Username" value="<?php echo $det->getUserName(); ?>" aria-label="userName">
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                <label for="retireDate" class="form-label">Retire Date</label>
                            </div>
                            <div class="col-md-7 my-3">
                                <input type="date" id="retireDate" value="<?php echo $det->getRetireDate(); ?>" name="retireDate" class="form-control inputcolor fs-6" aria-label="retireDate">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updateStaff" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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
    <div class="col-md-6 my-3">
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
    <div class="col-md-6 my-3">
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
    <div class="col-md-6 my-3">
        <input type="number" class="form-control inputcolor fs-6" placeholder="Experience (In years)" aria-label="noOfExperience">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="cvLocation" class="form-label">Resume/CV (Less than 10 Mb and pdf only)</label>
    </div>
    <div class="col-md-6 my-3">
        <input type="file" id="cvLocation" class="form-control form-control-custom fs-6 inputcolor" placeholder="Upload Resume" aria-label="Upload Resume">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="activeStatus" class="form-label">Active Status</label>
    </div>
    <div class="col-md-6 my-3">
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
    <div class="col-md-6 my-3">
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
    <div class="col-md-6 my-3">
        <input type="text" id="userName" class="form-control inputcolor fs-6" placeholder="Username" aria-label="userName">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="retireDate" class="form-label">Retire Date</label>
    </div>
    <div class="col-md-6 my-3">
        <input type="date" id="retireDate" class="form-control inputcolor fs-6" aria-label="retireDate">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="password" class="form-label">Password</label>
    </div>
    <div class="col-md-6 my-3">
        <input type="password" id="password" class="form-control inputcolor fs-6" aria-label="password">
    </div>
</div>
<div class="row my-2 align-items-center">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="cpassword" class="form-label">Confirm Password</label>
    </div>
    <div class="col-md-6 my-3">
        <input type="password" id="cpassword" class="form-control inputcolor fs-6" aria-label="cpassword">
    </div>
</div>


<div class="text-center my-3">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Update Staff</button>
</div> -->