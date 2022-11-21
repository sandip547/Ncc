<?php
$page = 'review';
header("Cache-Control: no cache");
include 'logged_in_header.php';
require_once("../Models/Comment/CommentsUser.php");
require_once("../Models/RegistrationModels/GetStudentUsername.php");
require_once("../Controllers/GetDetails/GetComments.php");
$gc = new GetComments();
$comments = $gc->getUserComments(new GetStudentUsername($_SESSION["username"]));
?>
<!-- Review page of user -->
<div class="text-justify p-0 m-0 ml-4 course-info">
  <div class="text-justify p-0 m-0">
    <p class="h5 text-dark font-weight-bold">Reviews</p>
    <hr class="bg-primary">
    <!-- <div class="row d-flex">

    </div> -->
    <div class="my-4">
    <!-- Sorry, but you are looking for something that isn't here. -->
    <div class="row d-flex">
        <?php foreach ($comments as $comment){
            ?>

            <div class="card-body text-light m-3 rounded-3 col-md-4 col-lg-3 col-sm-auto" style="background-color:#9d789b;">
                <span></span><span class="p-0 m-0 ">CourseName:<?php echo $comment->getCourseName();?></span>
                <p><?php echo $comment->getDate();?></p>
                Commet:<p><?php echo $comment->getComment();?></i></p>
            </div>
            <?php
        }

        ?>
        </div>
    </div>
    <hr class="bg-primary mb-5"/>
  </div>
</div>
</div>

</main>
</div>
</div>

<?php
include 'footer.php'
?>