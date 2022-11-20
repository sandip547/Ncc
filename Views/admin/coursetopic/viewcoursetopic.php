<?php

require_once("../../Controllers/GetDetails/GetCourseTopic.php");

$ct = new GetCourseTopic();
$details = $ct->getCourseTopic();


?>

<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Course Topics</p>
<div class="table-responsive my-5">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr class="text-center">
                <th></th>
                <th>Topic Id</th>
                <th>Course Name</th>
                <th>Sr No</th>
                <th>Topic Name</th>
                <th>Duration</th>
                <th>entered by</th>
                <th>Entered Date</th>
                <th>Updated Date</th>
                <th>Updated By</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $det) { ?>
            <tr>
                <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalLong">View</button></th>
                <th class="px-3"><?php echo $det->getTopicId(); ?></th>
                <th class="px-3"><?php echo $det->getCourseName(); ?></th>
                <th class="px-3"><?php echo $det->getSrNo(); ?></th>
                <th class="px-3"><?php echo $det->getTopicName(); ?></th>
                <th class="px-3"><?php echo $det->getDuration(); ?></th>
                <th class="px-3"><?php echo $det->getEnteredBy(); ?></th>
                <th class="px-3"><?php echo $det->getEnteredDate(); ?></th>
                <th class="px-3"><?php echo $det->getUpdatedDate(); ?></th>
                <th class="px-3"><?php echo $det->getUpdatedBy(); ?></th>


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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Course Topics</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1. this and that</p>
                <p>2. this and that</p>
                <p>3. this and that</p>
                <p>4. this and that</p>
                <p>5. this and that</p>
                <p>6. this and that</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>