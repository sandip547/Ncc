<?php
session_start();
$page = 'category';
include 'admin header.php';
require_once("../../Controllers/SaveDetails/SaveProductCategory.php");
$sc = new SaveProductCategory();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_POST['addcategory'])) {
    $sc->saveCategory(new Product($_POST['cname'], $_POST['description'], $_POST['learning'], $_POST['requirements'], $_POST['targetAudience'], 1, 2, $_POST[''], $_POST['tage'], $_POST['level'], $_POST['duration'], $_POST['price'], "re", date("Y-m-d h:i:s"), $_SESSION["admin"], $_POST['cenroll'], $_POST['activeStatus'], $_POST["imageupload"]));
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
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="active-courses-tab" data-toggle="tab"
                        href="#editCategory" role="tab" aria-controls="editCategory" aria-selected="false">Edit
                        Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-h-tab text-dark" id="completed-courses-tab" data-toggle="tab"
                        href="#deleteCategory" role="tab" aria-controls="deleteCategory" aria-selected="false">Delete
                        Category</a>
                </li>
            </ul>
            <div class="clearfix tab-content">
                <div class="tab-pane active" id="viewcategory" role="tabpanel" aria-labelledby="view-tab">
                    <div class="my-4">
                        <?php
                        include 'category/viewcategory.php'
                        ?>
                    </div>
                    <br class="bg-primary">
                </div>
                <div class="tab-pane" id="addCategory" role="tabpanel" aria-labelledby="all-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'category/addcategory.php'
                        ?>
                    </div>
                    <br class="bg-primary">
                </div>
                <div class="tab-pane" id="editCategory" role="tabpanel" aria-labelledby="active-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'category/editcategory.php'
                        ?>
                    </div>
                    <br class="bg-primary my-5">
                </div>
                <div class="tab-pane" id="deleteCategory" role="tabpanel" aria-labelledby="completed-courses-tab">
                    <div class="my-4">
                        <?php
                        include 'category/deletecategory.php'
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