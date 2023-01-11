<?php

$page = 'payment';
include 'admin header.php';
require_once ("../../Models/Enrollment/GetStudentIdName.php");
require_once ("../../Models/Enrollment/ChangeEnrollmentStatus.php");
require_once ("../../SendMail/SendMail.php");
require_once ("../../Models/Enrollment/GetFullEnrollmentDetails.php");
require_once ("../../Controllers/GetDetails/GetEnrollmentDetails.php");
require_once ("../../Controllers/GetDetails/GetTeacherUser.php");
require_once ("../../Controllers/SaveDetails/SaveEnrollmentDetails.php");
require_once ("../Notification/Notification.php");
$sed = new SaveEnrollmentDetails();
$ged = new GetEnrollmentDetails();
$edetails = $ged->getStudentDetailsForEnrollMent();
if(isset($_POST["updateEnrollment"])){
    $notification = new Notification();
    $sm = new SendMail();
    $gtu = new GetTeacherUser();

    if($sed->changeEnrollementStatus(new ChangeEnrollmentStatus($_POST['estatus'],$_POST["enrollmentid"],$gtu->getStaffId($_SESSION["admin"]),date("Y-m-d h:m:s")))){
        $notification->alertRegistrationSuccess("Status Changed Successfully");
        $sm->sendEnrolledSuccessEmail("You have been Enrolled successfully",$_POST["course_name"],
            $sed->getEmailOfEnrolledUser($sed->getStudentIdEnrollment($_POST["enrollmentid"])));

    }
}
?>

    <div class="text-justify p-0 m-0 ml-4 course-info">

        <div class="col-11 text-justify p-0 m-0">
            <div class="input-group my-5">
                <input type="search" id="form1" class="form-control fs-6"
                       placeholder="Search by enrollment id or name..." />
                <button type="button" class="bg-primary text-light px-3" style="border: none;">
                    <i class="bi bi-search"></i>
                </button>
            </div>

            <p class="h5 text-dark font-weight-bold">Payment data list</p>
            <?php
            foreach($edetails as $detail){

            $eds = $ged->getFullEnrollmentDetails($detail->getStudentId());
            ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm text-normal">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th></th>
                        <th>Student Id</th>
                        <th>Student Name</th>

                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th></th>
                            <th class="px-3"><?php echo $detail->getStudentId();    ?></th>
                            <th class="px-3"><?php echo $detail->getStudentName();    ?></th>


                    </tbody>
                </table>
    <table class="table table-bordered table-hover table-sm text-normal">
                <thead class="thead-light">
                <tr class="text-center">
                    <th></th>
                    <th>Enrollment Id</th>
                    <th>Course Id</th>
                    <th>Course Name</th>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>User Name</th>
                    <th>Enrollment Date</th>
                    <th>Expiry Date</th>
                    <th>Status</th>
                    <th>Updated By</th>
                    <th>Updated Date</th>
                </tr>
                </thead>
                    <?php
                    foreach ($eds as $ed){
                    ?>


                    <tbody>

                    <tr>
                        <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                                                 data-target="#enrollment<?php echo $ed->getEnrollmentId(); ?>">View</button></th>
                        <th class="px-3"><?php echo $ed->getEnrollmentId();?></th>
                        <th class="px-3"><?php echo $ed->getCourseId();?></th>
                        <th class="px-3"><?php echo $ed->getCourseName();?></th>
                        <th class="px-3"><?php echo $ed->getStudentId();?></th>
                        <th class="px-3"><?php echo $ed->getStudentName();?></th>
                        <th class="px-3"><?php echo $ed->getUserName();?></th>
                        <th class="px-3"><?php echo $ed->getEnrollmentDate();?></th>
                        <th class="px-3"><?php echo $ed->getExpiryDate();?></th>
                        <th class="px-3"><?php echo $ed->getStatus();?></th>
                        <th class="px-3"><?php echo $ed->getUpdatedBy();?></th>
                        <th class="px-3"><?php echo $ed->getUpdatedDate();?></th>


                    </tbody>
                        <?php
                    }
                        ?>
                </table>
            </div>

                <?php
            }
                ?>

            <?php
            foreach ($edetails as $det){
                $eds = $ged->getFullEnrollmentDetails($det->getStudentId());
                foreach ($eds as $ed){
            ?>
            <div class="modal fade" id="enrollment<?php echo $ed->getEnrollmentId(); ?>" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="enrollment">Student details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="enrollment.php" method="post"  enctype="multipart/form-data">
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="mobileNo" class="form-label">Enrollment Id</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="tel" name="enrollmentid" id="enrollmentid" class="form-control inputcolor fs-6" placeholder="EnrollmentId" aria-label="EnrollmentId" value="<?php echo $ed->getEnrollmentId(); ?>" readonly>
                                </div>
                            </div>
                            <div class="row align-items-center my-2">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="fullName" required id="fullName" class="form-control inputcolor fs-6" placeholder="Full Name" aria-label="fullName" value="<?php echo $ed->getStudentName(); ?>" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center my-2">

                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="courseName" class="form-label">Course name : </label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="course_name" class="form-control inputcolor fs-6" name="courseName" placeholder="Course name" aria-label="courseName" id="courseName" value="<?php echo $ed->getCourseName(); ?>" readonly>
                                </div>
                            </div>
                            <div class="row my-2 align-items-center">
                                <div class="col-md-5 text-orangered font-weight-bold fs-6">
                                    <label for="activeStatus" class="form-label">Status</label>
                                </div>
                                <div class="col-md-7">
                                    <select name="estatus" id="estatus" class="form-select form-select-lg inputcolor fs-6">
                                        <option selected value="na">
                                            <?php echo $ed->getStatus();?>
                                        </option>
                                        <option value="1">
                                            Enrolled
                                        </option>
                                        <option value="2">
                                            Processing
                                        </option>
                                        <option value="3">
                                            Cancelled
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updateEnrollment" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
                <?php
            }
            }
                ?>
        </div>
    </div>

    </main>
    </div>
    </div>

<?php
include 'footer.php'
?>