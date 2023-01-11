<?php

$page = 'product';
include 'admin header.php';
require_once("../../Models/ProductModels/ProductDisplay.php");
require_once("../../Models/ProductModels/DisplayCategoryList.php");
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
require_once("../../Controllers/GetDetails/GetProductCategory.php");

require_once("../Notification/Notification.php");
$sp = new SaveProduct();
$nc = new Notification();
if (isset($_POST['updateProduct'])) {

    if($_FILES['productImage']['name'] != "") {
        if($sp->updateProductMinWithImage(new ProductUpdateView($_POST["course_name"], $_POST['description'], $_POST["learning"], $_POST["requirements"], $_POST["targetaudience"], $sp->getStaffId($_SESSION['admin']),
            $_POST["course_level"], $_POST["course_duration"], $_POST["course_price"], date("Y-m-d h:i:s"), $sp->getStaffId($_SESSION['admin']),
            $_POST['course_validity'],$_POST["active_status"],
            $_POST["cid"], $_FILES['productImage']))){
            $nc->alertRegistrationSuccess("Product Updated successfully");

        }else{
            $nc->alertRegistrationSuccess("Product update Failure");
        }

    }else{
        $sp->updateProductMin(new ProductUpdateView($_POST["course_name"], $_POST['description'], $_POST["learning"], $_POST["requirements"], $_POST["targetaudience"],
            $sp->getStaffId($_SESSION['admin']), $_POST["course_level"], $_POST["course_duration"], $_POST["course_price"], date("Y-m-d h:i:s"),
            $sp->getStaffId($_SESSION['admin']),$_POST['course_validity'], $_POST["active_status"], $_POST["cid"]));
            $nc->alertRegistrationSuccess("Product Updated successfully");


    }

}
if (isset($_POST['addproduct'])) {
    if($sp->saveProductDetails(new Product($_POST['cname'], $_POST['description'], $_POST['learning'], $_POST['requirements'], $_POST['targetAudience'], $sp->getStaffId($_SESSION['admin']),
        $_POST['category'],  1, $_POST['level'], $_POST['chour'], $_POST['cprice'], date("Y-m-d h:i:s"), date("Y-m-d h:i:s"),  $sp->getStaffId($_SESSION['admin']), $_POST['enrollvalidity'],
        $_POST['activeStatus'],$_FILES['productImage']))){
        $nc->alertRegistrationSuccess("Product added successfully");
    }
    else{
        $nc->alertRegistrationSuccess("Product add Failure");
    }
}

if(isset($_GET['delete'])){
    $nc = new Notification();
    if($sp->deleteProductDetails($_GET['productid'])){
        $nc->alertDeleteSuccess();
    }
    else{
        $nc->alertNotSuccess("This Video cannot be deleted due to dependency issues");
    }

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
                        href="#viewproduct" role="tab" aria-controls="viewproduct" aria-selected="true">View Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="add-tab" data-toggle="tab" href="#addproduct"
                        role="tab" aria-controls="addproduct" aria-selected="true">Add Course</a>
                </li>

            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewproduct" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'product/viewproduct.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
                </div>
                <div class="tab-pane" id="addproduct" role="tabpanel" aria-labelledby="add-tab">
                    <div class="my-4">
                        <?php
                        include 'product/addproduct.php';
                        ?>
                    </div>
                    <br class="bg-primary mb-5">
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