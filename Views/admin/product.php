<?php
$page = 'product';
include 'admin header.php'
?>

<!-- Product page-->
<div class="text-justify p-0 m-0 ml-4">

    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Products</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
            <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab" href="#viewproduct" role="tab" aria-controls="viewproduct" aria-selected="true">View Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addproduct" role="tab" aria-controls="addproduct" aria-selected="true">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="edit-tab" data-toggle="tab" href="#editproduct" role="tab" aria-controls="editproduct" aria-selected="false">Edit Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="delete-tab" data-toggle="tab" href="#deleteproduct" role="tab" aria-controls="deleteproduct" aria-selected="false">Delete Product</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
            <div class="tab-pane active" id="viewproduct" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'product/viewproduct.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addproduct" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'product/addproduct.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="editproduct" role="tabpanel" aria-labelledby="edit-tab">
                    <div class="my-4">
                    <?php
                        include 'product/editproduct.php'
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="deleteproduct" role="tabpanel" aria-labelledby="delete-tab">
                    <div class="my-4">
                    <?php
                        include 'product/deleteproduct.php'
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