<?php
$page = 'quiz';
include 'admin header.php'
?>

<!-- quiz page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Quiz</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
            <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewquiz" role="tab" aria-controls="viewquiz" aria-selected="true">View quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addquiz" role="tab" aria-controls="addquiz" aria-selected="true">Add quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="edit-tab" data-toggle="tab" href="#editquiz" role="tab" aria-controls="editquiz" aria-selected="false">Edit quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="delete-tab" data-toggle="tab" href="#deletequiz" role="tab" aria-controls="deletequiz" aria-selected="false">Delete quiz</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
            <div class="tab-pane active" id="viewquiz" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'quiz/viewquiz.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addquiz" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'quiz/addquiz.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="editquiz" role="tabpanel" aria-labelledby="edit-tab">
                    <div class="my-4">
                    <?php
                        include 'quiz/editquiz.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="deletequiz" role="tabpanel" aria-labelledby="delete-tab">
                    <div class="my-4">
                    <?php
                        include 'quiz/deletequiz.php'
                        ?>
                    </div>
                    <br class="bg-primary">
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