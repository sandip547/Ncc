<?php
session_start();
$page = 'coursetopic';
include 'admin header.php'
?>

<!-- coursetopic page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Course Topics</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewcoursetopic" role="tab" aria-controls="viewcoursetopic" aria-selected="true">View
                        course topic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addcoursetopic"
                        role="tab" aria-controls="addcoursetopic" aria-selected="true">Add course topic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="edit-tab" data-toggle="tab" href="#editcoursetopic"
                        role="tab" aria-controls="editcoursetopic" aria-selected="false">Edit course topic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="delete-tab" data-toggle="tab"
                        href="#deletecoursetopic" role="tab" aria-controls="deletecoursetopic"
                        aria-selected="false">Delete course topic</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewcoursetopic" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/viewcoursetopic.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addcoursetopic" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/addcoursetopic.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="editcoursetopic" role="tabpanel" aria-labelledby="edit-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/editcoursetopic.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="deletecoursetopic" role="tabpanel" aria-labelledby="delete-tab">
                    <div class="my-4">
                        <?php
                        include 'coursetopic/deletecoursetopic.php'
                        ?>
                    </div>
                    <hr class="bg-primary">
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