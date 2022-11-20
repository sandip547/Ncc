<?php
session_start();
$page = 'staff';
include 'admin header.php'
?>

<!-- Staff page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Staff</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewstaff"
                        role="tab" aria-controls="viewstaff" aria-selected="true">View Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab" href="#addStaff"
                        role="tab" aria-controls="addStaff" aria-selected="true">Add Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="active-courses-tab" data-toggle="tab"
                        href="#editStaff" role="tab" aria-controls="editStaff" aria-selected="false">Edit Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="completed-courses-tab" data-toggle="tab"
                        href="#deleteStaff" role="tab" aria-controls="deleteStaff" aria-selected="false">Delete
                        Staff</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewstaff" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/viewstaff.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="addStaff" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/addstaff.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="editStaff" role="tabpanel" aria-labelledby="active-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/editstaff.php'
                        ?>
                    </div>
                    <br class="my-5">
                </div>
                <div class="tab-pane" id="deleteStaff" role="tabpanel" aria-labelledby="completed-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'staff/deletestaff.php'
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