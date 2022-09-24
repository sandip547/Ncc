<?php
$page = 'video';
include 'admin header.php'
?>

<!-- video page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Video According to Course Topics</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
            <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewvideo" role="tab" aria-controls="viewvideo" aria-selected="true">View video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addvideo" role="tab" aria-controls="addvideo" aria-selected="true">Add video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="edit-tab" data-toggle="tab" href="#editvideo" role="tab" aria-controls="editvideo" aria-selected="false">Edit video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="delete-tab" data-toggle="tab" href="#deletevideo" role="tab" aria-controls="deletevideo" aria-selected="false">Delete video</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
            <div class="tab-pane active" id="viewvideo" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'video/viewvideo.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addvideo" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'video/addvideo.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="editvideo" role="tabpanel" aria-labelledby="edit-tab">
                    <div class="my-4">
                    <?php
                        include 'video/editvideo.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="deletevideo" role="tabpanel" aria-labelledby="delete-tab">
                    <div class="my-4">
                    <?php
                        include 'video/deletevideo.php'
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