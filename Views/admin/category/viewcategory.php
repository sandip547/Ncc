<?php

require_once("../../Controllers/GetDetails/GetProductCategory.php");
$cd = new GetProductCategory();
$details = $cd->getCategoryDetails();

?>



<div class="input-group my-5">
    <input type="search" id="form1" class="form-control fs-6" placeholder="Search by id or name..." />
    <button type="button" class="bg-primary text-light px-3" style="border: none;">
        <i class="bi bi-search"></i>
    </button>
</div>

<p class="h5 text-dark font-weight-bold">Category details</p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm text-normal">
        <thead class="thead-light">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Category name</th>
                <th>Active Status</th>
                <th>Entered Date</th>
                <th>Entered By</th>
                <th>Update date</th>
                <th>Updated by</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($details as $det) { ?>
                <tr>
                    <th class="px-3"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $det->getCategoryId(); ?>">View</button></th>
                    <th><?php echo $det->getCategoryId(); ?></th>
                    <th><?php echo $det->getCategoryName(); ?></th>
                    <th><?php echo $det->getActiveStatusLabel(); ?></th>
                    <th><?php echo $det->getEnteredDate(); ?></th>
                    <th><?php echo $det->getEnteredByLabel(); ?></th>
                    <th><?php echo $det->getUpdatedDate(); ?></th>
                    <th><?php echo $det->getUpdatedBy()!=null?$det->getEnteredByLabel($det->getUpdatedBy()):''; ?></th>

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
    <div class="modal fade" id="exampleModalLong<?php echo $det->getCategoryId(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                    <div class="modal-header">
                        <h5 class="modal-title" id="#exampleModalLongTitle">Category details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="category.php" method="post">
                        <div class="row my-2 align-items-center">
                        <input type="text" name="id" hidden minlength="3" value="<?php echo $det->getCategoryId(); ?>" placeholder="Category name" aria-label="categoryName" id="categoryName">
                            <div class="col-md-4 text-orangered font-weight-bold fs-6">
                                <label for="categoryName" class="form-label">Category name</label>
                            </div>
                            <div class="col-md-6 my-3">
                                <input type="text" name="categoryName" required minlength="3" class="form-control inputcolor fs-6" value="<?php echo $det->getCategoryName(); ?>" placeholder="Category name" aria-label="categoryName" id="categoryName">
                            </div>
                        </div>
                        <div class="row my-2 align-items-center">
                            <div class="col-md-4 text-orangered font-weight-bold fs-6">
                                <label for="activeStatus" class="form-label">activeStatus</label>
                            </div>
                            <div class="col-md-6 my-3">
                                <select name="activeStatus" id="activeStatus" required class="form-select form-select-lg inputcolor fs-6">
                                    <option value="<?php echo $det->getActiveStatus(); ?>" selected>
                                        <?php echo ($det->getActiveStatus()=="1"?"Active":"Not Active") ?>
                                    </option>
                                    <option value="1">
                                        Active
                                    </option>
                                    <option value="0">
                                        Not Active
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button name="updateCategory" type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>
<!-- 
<p class="h5 text-dark font-weight-bold">Edit chosen category details</p>
<div class="row my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="categoryName" class="form-label">Category name</label>
    </div>
    <div class="col-md-6 my-3">
        <input type="text" class="form-control inputcolor fs-6" placeholder="Category name" aria-label="categoryName" id="categoryName">
    </div>
</div>
<div class="row my-2">
    <div class="col-md-4 text-orangered font-weight-bold fs-6">
        <label for="activeStatus" class="form-label">activeStatus</label>
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
<div class="text-center mb-5">
    <button class="btn bg-primary text-light font-weight-bold px-5" style="border-radius:4px;" type="submit">Update Category</button>
</div> -->