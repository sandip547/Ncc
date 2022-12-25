<?php
session_start();
$page = 'product';
include 'admin header.php';
require_once("../../Models/ProductModels/ProductDisplay.php");
require_once("../../Models/ProductModels/ProductGet.php");
require_once("../../Controllers/GetDetails/GetProductDetails.php");
require_once("../../DatabaseConnection/DatabaseConnection.php");
require_once("../../Models/ProductModels/ProductDisplay.php");
require_once("../../Models/RegistrationModels/GetStudentUsername.php");
require_once("../../Models/ProductModels/GetActiveProductDetails.php");
require_once("../../Models/ProductModels/ProductGet.php");
require_once("../../Models/ProductModels/ProductUpdateView.php");
require_once("../../Models/ProductModels/Product.php");

require_once("../../Controllers/SaveDetails/SaveProduct.php");
require_once("../Notification/Notification.php");
$sp = new SaveProduct();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_POST['updateProduct'])) {
    $nc = new Notification();
    if ($_FILES['productImage']['name'] != "") {
        $sp->updateProductMinWithImage(new ProductUpdateView($_POST["course_name"], $_POST['description'], $_POST["learning"], $_POST["requirements"], $_POST["targetaudience"], 1, $_POST["course_level"], $_POST["course_duration"], $_POST["course_price"], date("Y-m-d h:i:s"), 1, $_POST["active_status"], $_POST["cid"], $_FILES['productImage']));
    }else{
        $sp->updateProductMin(new ProductUpdateView($_POST["course_name"], $_POST['description'], $_POST["learning"], $_POST["requirements"], $_POST["targetaudience"], 1, $_POST["course_level"], $_POST["course_duration"], $_POST["course_price"], date("Y-m-d h:i:s"), 1, $_POST["active_status"], $_POST["cid"]));
    }
    $nc->alertUpdateSuccess();
}
if (isset($_POST['addproduct'])) {
    $sp->saveProductDetails(new Product($_POST['cname'], $_POST['description'], $_POST['learning'], $_POST['requirements'], $_POST['targetAudience'], 1, 64,  1, $_POST['level'], $_POST['chour'], $_POST['cprice'], date("Y-m-d h:i:s"), date("Y-m-d h:i:s"), 1, 'test', 1, $_POST['cenroll'], $_POST['activeStatus'], $_FILES['productImage']));
}
?>

<!-- Product page-->
<div class="text-justify p-0 m-0 ml-4">
    <div class="col-11 col-md-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Products</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewproduct" role="tab" aria-controls="viewproduct" aria-selected="true">View Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addproduct"
                        role="tab" aria-controls="addproduct" aria-selected="true">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="delete-tab" data-toggle="tab" href="#deleteproduct"
                        role="tab" aria-controls="deleteproduct" aria-selected="false">Delete Product</a>
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