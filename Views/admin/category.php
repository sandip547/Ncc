<?php
session_start();
$page = 'category';
include 'admin header.php';
require_once ("../../Models/ProductModels/CategoryGet.php");
require_once("../../Models/ProductModels/ProductCategoryI.php");
require_once("../../Models/ProductModels/ProductCategoryU.php");
require_once("../../Controllers/SaveDetails/SaveProductCategory.php");
require_once("../../Controllers/GetDetails/GetProductCategory.php");
require_once("../Notification/Notification.php");
$sc = new SaveProductCategory();
$notify = new Notification();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_POST['addcategory'])) {
    $sc->saveCategory(new ProductCategoryI($_POST['categoryName'], $_POST['activeStatus'], date("Y-m-d h:i:s"),1));
    $notify->AddSuccess();
}
if (isset($_POST['updateCategory'])) {
    $sc->updateCategory(new ProductCategoryU($_POST['id'],$_POST['categoryName'], $_POST['activeStatus'], date("Y-m-d h:i:s"),1));
    $notify->alertUpdateSuccess();
}
if(isset($_GET['delete'])) {
    $sc->deleteCategory(new ProductCategoryDelete($_GET['categoryid']));
    $notify->alertDeleteSuccess();
}

?>

<!-- Category page-->
<div class="text-justify p-0 m-0 ml-4 course-info">

    <div class="col-11 text-justify p-0 m-0">
        <p class="h5 text-dark font-weight-bold">Category</p>
        <div class="row d-flex">
            <ul class="nav nav-tabs justify-content-start" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active custom-h-tab text-dark" id="view-tab" data-toggle="tab"
                        href="#viewcategory" role="tab" aria-controls="viewcategory" aria-selected="true">View
                        Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="all-courses-tab" data-toggle="tab"
                        href="#addCategory" role="tab" aria-controls="addCategory" aria-selected="true">Add Category</a>
                </li>

            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewcategory" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'category/viewcategory.php';
                        ?>
                    </div>
                    <br class="bg-primary">
                </div>
                <div class="tab-pane" id="addCategory" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'category/addcategory.php';
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