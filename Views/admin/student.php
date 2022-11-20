<?php
session_start();
$page = 'student';
include 'admin header.php';

require_once("../../Controllers/Registration/RegController.php");


$rc = new RegController();

?>

<!-- Student page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Student</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewStudent" role="tab" aria-controls="viewstudent" aria-selected="true">View Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab" href="#addStudent"
                        role="tab" aria-controls="addStudent" aria-selected="true">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="active-courses-tab" data-toggle="tab"
                        href="#editStudent" role="tab" aria-controls="editStudent" aria-selected="false">Edit
                        Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="completed-courses-tab" data-toggle="tab"
                        href="#deleteStudent" role="tab" aria-controls="deleteStudent" aria-selected="false">Delete
                        Student</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewStudent" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'student/viewstudent.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="addStudent" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'student/addstudent.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="editStudent" role="tabpanel" aria-labelledby="active-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'student/editstudent.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="deleteStudent" role="tabpanel" aria-labelledby="completed-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'student/deletestudent.php'
                        ?>
                    </div>
                    <br class="my-5">
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