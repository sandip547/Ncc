<?php
$page = 'review';
header("Cache-Control: no cache");
include 'logged_in_header.php'
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
            <div class="card-body text-light m-3 rounded-3 col-md-4 col-lg-3 col-sm-auto" style="background-color:#9d789b;">
                <span><img src="images/profile.jpg" alt="course image" width="30px"></span><span class="p-0 m-0 fs-5"> Excel VBA</span>
                <p>06-07-2021, Sunday</p>
                <p><i class="bi bi-quote">This course has taught me a lot of techniques in searching information for my  academic researches. Thank you to all people behind this, especially to the professors in this course!</i></p>
            </div>
            <div class="card-body text-light m-3 rounded-3 col-md-4 col-lg-3 col-sm-auto" style="min-height:100%; background-color:#7a81a8;">
            <span><img src="images/profile.jpg" alt="course image" width="30px"></span><span class="p-0 m-0 fs-5"> Excel VBA</span>
                <p>06-07-2021, Sunday</p>
                <p><i class="bi bi-quote">This course has taught me a lot of techniques in searching information for my  academic researches. Thank you to all people behind this, especially to the professors in this course!</i></p>
            </div>
            <div class="card-body text-light m-3 rounded-3 col-md-9 col-lg-3 col-sm-auto" style="min-height:100%; background-color: #6d5b98;">
            <span><img src="images/profile.jpg" alt="course image" width="30px"></span><span class="p-0 m-0 fs-5"> Excel VBA</span>
                <p>06-07-2021, Sunday</p>
                <p><i class="bi bi-quote">This course has taught me a lot of techniques in searching information for my  academic researches. Thank you to all people behind this, especially to the professors in this course!</i></p>
            </div>
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